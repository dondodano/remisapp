<?php

namespace App\Http\Livewire\Partnership;

use Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Repository\Partnership;
use Illuminate\Support\Facades\Validator;
use App\Models\Attachment\PartnershipFile;

use App\Models\Feed\FeedableItem;

class Create extends Component
{
    use WithFileUploads;

    public $partner, $activity, $date_from, $date_to;
    public $fileInputId;
    public $attachments = [];

    public function mount()
    {
        $this->fileInputId = rand();
        $this->date_from = setToday();
        $this->date_to = setToday();
    }

    public function store()
    {
        if($this->date_from == null || $this->date_to == null || strlen($this->partner) == 0 || strlen($this->activity) == 0 )
        {
            toastr("Please fill all required fields!", "error");
            return ;
        }

        $store = Partnership::firstOrCreate([
            'partner' => $this->partner,
            'activity' => $this->activity,
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,
            'owner' => sessionGet('id')
        ]);
        $store->save();


        $path = 'attachment/'. token() .'/';
        foreach($this->attachments as $attachment)
        {
            $fileName = $attachment->getClientOriginalName();
            $storeFile = PartnershipFile::firstOrCreate([
                'partnership_id' => 1,
                'user_id' => sessionGet('id'),
                'file' => $path . $fileName
            ]);
            $attachment->storeAs($path, $fileName, 'public');
        }
        $this->attachments = [];

        $this->reset();
        $this->fileInputId = rand();
        $this->date_presented = setToday();

        if($store)
            FeedableItem::firstOrCreate([
                'feedable_id' => $store->id,
                'feedable_type' => Partnership::class
            ])->save();
            toastr("Partnership document successfully saved!", "success");
            $this->dispatchBrowserEvent('pondFileClear');
    }

    public function updatedAttachments()
    {
        $validatedData = Validator::make(
            ['attachments' => $this->attachments],
            ['attachments.*' => 'file|mimes:pdf,doc,docx,xls,xlxs,png,jpeg,jpg|max:2048'],
        );

        if ($validatedData->fails()) {
            $this->attachments = [];
        }
        $validatedData->validate();
    }

    public function render()
    {
        return view('livewire.partnership.create')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
