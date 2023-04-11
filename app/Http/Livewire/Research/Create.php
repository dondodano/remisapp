<?php

namespace App\Http\Livewire\Research;

use Livewire\Component;
use Livewire\WithFileUploads;

use Auth;
use Storage;
use App\Models\FileUpload\TemporaryFile;
use App\Models\Repository\Research;
use App\Models\Attachment\ResearchFile;
use Illuminate\Support\Facades\Validator;
use App\Models\Misc\Miscellaneous as Fund;
use App\Models\Misc\Miscellaneous as Status;
use App\Models\Misc\Miscellaneous as Category;

use App\Models\Feed\FeedableItem;

class Create extends Component
{
    use WithFileUploads;

    public $projectTitle, $researcher, $budget, $yearStart, $yearEnd, $status;
    public $fundType, $category, $commodity, $programTitle, $studySite;
    public $fundingAgency, $collaborativeAgency;
    public $fileInputId;
    public $attachments = [];

    public $userUploadToken;

    protected $listeners = ['onRefreshEvent' => '$refresh'];

    public function mount()
    {
        $this->userUploadToken = token();
        sessionSet('user_upload_token_' . Auth::user()->id, $this->userUploadToken);

        $this->fileInputId = rand();
    }

    public function store()
    {

        if(strlen($this->programTitle) == 0 || strlen($this->researcher) == 0 ||strlen($this->budget) == 0
        || strlen($this->yearStart) == 0 || strlen($this->yearEnd) == 0 || strlen($this->status) == 0
        || strlen($this->fundType) == 0 || strlen($this->studySite) == 0 || strlen($this->fundingAgency) == 0 )
        {
            toastr("Please fill all required fields!", "error");
            return ;
        }

        $store = Research::firstOrCreate([
            'commodity' => $this->programTitle,
            'category_id' => $this->category,
            'program' => $this->programTitle,
            'project' => $this->projectTitle,
            'researcher' => $this->researcher,
            'sites' => $this->studySite,
            'year_start' => $this->yearStart,
            'year_end' => $this->yearEnd,
            'agency' => $this->fundingAgency,
            'budget' => $this->budget,
            'collaborative' => $this->collaborativeAgency,
            'fund_id' => $this->fundType,
            'status_id' => $this->status,
            'owner' => sessionGet('id')
        ]);
        $store->save();

        /**
         * Load Temporary Files
         */
        // $tempFiles = TemporaryFile::where('token', $this->userUploadToken);
        // foreach($tempFiles->get() as $tempFile)
        // {
        //     // Copy File
        //     Storage::disk('public')->copy(
        //         'temp/'. $tempFile->folder .'/' . $tempFile->file,
        //         'attachment/'. $tempFile->token .'/' . $tempFile->file
        //     );

        //     // Store in Research File
        //     $storeFile = ResearchFile::firstOrCreate([
        //         'research_id' => $store->id,
        //         'user_id' => sessionGet('id'),
        //         'file' => 'attachment/'. $tempFile->token .'/' . $tempFile->file
        //     ]);

        //     // Delete File
        //     Storage::disk('public')->deleteDirectory('temp/'. $tempFile->folder);
        // }
        // $tempFiles->delete();

        if($this->attachments != null)
        {
            $path = 'attachment/'. token() .'/';
            foreach($this->attachments as $attachment)
            {
                $fileName = $attachment->getClientOriginalName();
                $storeFile = ResearchFile::firstOrCreate([
                    'research_id' => $store->id,
                    'user_id' => sessionGet('id'),
                    'file' => $path . $fileName
                ]);
                $attachment->storeAs($path, $fileName, 'public');
            }
            $this->attachments = [];
        }

        $this->reset();
        $this->fileInputId = rand();

        if($store)
            FeedableItem::firstOrCreate([
                'feedable_id' => $store->id,
                'feedable_type' => Research::class
            ])->save();
            toastr("Research data successfully saved!", "success");
            $this->emitSelf('onRefreshEvent');
    }

    public function updatedAttachments()
    {
        $validatedData = Validator::make(
            ['attachments' => $this->attachments],
            ['attachments.*' => 'file|mimes:pdf,doc,docx,xls,xlxs,png, jpeg, jpg|max:2048'],
        );

        if ($validatedData->fails()) {
            $this->attachments = [];
        }
        $validatedData->validate();
    }

    public function render()
    {
        return view('livewire.research.create',[
            'fileInputId' => $this->fileInputId,
            'statuses' => Status::where('group', 'projectstatus')->get(),
            'fundtypes' => Fund::where('group', 'fundclass')->get(),
            'categories' => Category::where('group', 'projectcategory')->get()
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
