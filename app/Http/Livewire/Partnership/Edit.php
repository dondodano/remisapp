<?php

namespace App\Http\Livewire\Partnership;

use App\Models\Repository\Partnership;
use App\Models\Attachment\PartnershipFile;
use App\Http\Livewire\Traits\RepositoryEdit;

class Edit extends RepositoryEdit
{
    public $partner, $activity, $date_from, $date_to;

    public $partnership;
    public $partnershipId;


    public function mount($id)
    {
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];
        $this->partnership = Partnership::where('quarter', $this->quarter)->where('year', $this->year)->findOrFail($id);

        $this->fileInputId = rand();
        $this->partnershipId = $id;

        $this->partner = $this->partnership->partner;
        $this->activity = $this->partnership->activity;
        $this->date_from = setDate($this->partnership->date_from);
        $this->date_to = setDate($this->partnership->date_to);
    }

    public function remove($id)
    {
        $dataId = decipher($id);
        $remove = PartnershipFile::findOrFail($dataId);
        $remove->delete();
    }

    public function update()
    {
        if($this->date_from == null || $this->date_to == null || strlen($this->partner) == 0 || strlen($this->activity) == 0 )
        {
            toastr("Please fill all required fields!", "error");
            return ;
        }


        $update = $this->partnership->update([
            'partner' => $this->partner,
            'activity' => $this->activity,
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,

            'quarter' => sessionGet('current-quarter-'.auth()->user()->id)['value'],
            'year' => sessionGet('current-year-'.auth()->user()->id)['value'],

            'date_modified' => setTimestamp()
        ]);

        if($this->attachments != null)
        {
            $path = 'attachment/'. token() .'/';
            foreach($this->attachments as $attachment)
            {
                $fileName = $attachment->getClientOriginalName();
                $storeFile = PartnershipFile::firstOrCreate([
                    'partnership_id' => $this->partnership->id,
                    'user_id' => sessionGet('id'),
                    'file' => $path . $fileName
                ]);
                $attachment->storeAs($path, $fileName, 'public');
            }
            $this->attachments = [];
        }

        $this->fileInputId = rand();

        if($update)
            toastr("Partnership data successfully updated!", "success");
            $this->dispatchBrowserEvent('pondFileClear');
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
        return view('livewire.partnership.edit',[
            'partnershipFiles' => PartnershipFile::where('partnership_id', $this->partnershipId)->get(),
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
