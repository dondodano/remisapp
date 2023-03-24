<?php

namespace App\Http\Livewire\Research;

use Livewire\Component;
use Livewire\WithFileUploads;

use Storage;
use App\Models\Repository\Research;
use App\Models\Attachment\ResearchFile;
use Illuminate\Support\Facades\Validator;
use App\Models\Misc\Miscellaneous as Fund;
use App\Models\Misc\Miscellaneous as Status;
use App\Models\Misc\Miscellaneous as Category;

class Create extends Component
{


    use WithFileUploads;

    public $projectTitle, $researcher, $budget, $yearStart, $yearEnd, $status;
    public $fundType, $category, $commodity, $programTitle, $studySite;
    public $fundingAgency, $collaborativeAgency;
    public $fileInputId;
    public $attachments = [];

    public function mount()
    {
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
            logUserActivity(request(), 'User ['.sessionGet('id').'] created new Research document with ID => ['.$store->id.']');
            toastr("Research data successfully saved!", "success");
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
