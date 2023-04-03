<?php

namespace App\Http\Livewire\Research;

use Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Repository\Research;
use App\Models\Attachment\ResearchFile;
use Illuminate\Support\Facades\Validator;
use App\Models\Misc\Miscellaneous as Fund;
use App\Models\Misc\Miscellaneous as Status;
use App\Models\Misc\Miscellaneous as Category;


class Edit extends Component
{

    use WithFileUploads;

    public $projectTitle, $researcher, $budget, $yearStart, $yearEnd, $status;
    public $fundType, $category, $commodity, $programTitle, $studySite;
    public $fundingAgency, $collaborativeAgency;
    public $fileInputId;
    public $attachments = [];

    public $research;
    public $researchId;


    public function mount($id)
    {
        $this->fileInputId = rand();
        $this->research = Research::findOrFail($id);
        $this->researchId = $id;

        $this->projectTitle = $this->research->project;
        $this->researcher = $this->research->researcher;
        $this->budget = $this->research->budget;
        $this->yearStart = $this->research->year_start;
        $this->yearEnd = $this->research->year_end;
        $this->status = $this->research->status_id;

        $this->fundType = $this->research->fund_id;
        $this->category = $this->research->category_id;
        $this->commodity = $this->research->commodity;
        $this->programTitle = $this->research->program;
        $this->studySite = $this->research->sites;
        $this->fundingAgency = $this->research->agency;
        $this->collaborativeAgency = $this->research->collaborative;

    }

    public function remove($id)
    {
        $dataId = decipher($id);
        $remove = ResearchFile::findOrFail($dataId);
        $remove->delete();
    }

    public function update()
    {
        if(strlen($this->programTitle) == 0 || strlen($this->researcher) == 0 ||strlen($this->budget) == 0
        || strlen($this->yearStart) == 0 || strlen($this->yearEnd) == 0 || strlen($this->status) == 0
        || strlen($this->fundType) == 0 || strlen($this->studySite) == 0 || strlen($this->fundingAgency) == 0 )
        {
            toastr("Please fill all required fields!", "error");
            return ;
        }

        $update = $this->research->update([
            'commodity' => $this->commodity,
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
            'date_modified' => setTimestamp()
        ]);

        if($this->attachments != null)
        {
            $path = 'attachment/'. token() .'/';
            foreach($this->attachments as $attachment)
            {
                $fileName = $attachment->getClientOriginalName();
                $storeFile = ResearchFile::firstOrCreate([
                    'research_id' => $this->research->id,
                    'user_id' => sessionGet('id'),
                    'file' => $path . $fileName
                ]);
                $attachment->storeAs($path, $fileName, 'public');
            }
            $this->attachments = [];
        }

        $this->fileInputId = rand();

        if($update)
            toastr("Research data successfully updated!", "success");
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
        if($this->research->owner !== sessionGet('id'))
        {
            return abort('404');
        }

        return view('livewire.research.edit', [
            'researchFiles' => ResearchFile::where('research_id',$this->researchId)->get(),
            'statuses' => Status::where('group', 'projectstatus')->get(),
            'fundtypes' => Fund::where('group', 'fundclass')->get(),
            'categories' => Category::where('group', 'projectcategory')->get()
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
