<?php

namespace App\Http\Livewire\Extension;

use Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Repository\Extension;
use App\Models\Attachment\ExtensionFile;
use Illuminate\Support\Facades\Validator;

class Create extends Component
{
    use WithFileUploads;

    public $extension, $date_from, $date_to, $quantity, $beneficiaries;
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
        if(strlen($this->extension) == 0 || strlen($this->date_from) == 0 || strlen($this->date_to) == 0
        || strlen($this->quantity) == 0 || strlen($this->beneficiaries) == 0)
        {
            toastr("Please fill all required fields!", "error");
            return ;
        }


        $store = Extension::firstOrCreate([
            'extension' => $this->extension,
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,
            'quantity' => $this->quantity,
            'beneficiaries' => $this->beneficiaries,
            'owner' => sessionGet('id')
        ]);
        $store->save();

        if(isset($this->attachments))
        {
            $path = 'attachment/'. token() .'/';
            foreach($this->attachments as $attachment)
            {
                $fileName = $attachment->getClientOriginalName();
                $storeFile = ExtensionFile::firstOrCreate([
                    'extension_id' => $store->id,
                    'user_id' => sessionGet('id'),
                    'file' => $path . $fileName
                ]);
                $attachment->storeAs($path, $fileName, 'public');
            }
            $this->attachments = [];
        }


        $this->reset();
        $this->fileInputId = rand();
        $this->date_presented = setToday();

        if($store)
            logUserActivity(request(), 'User ['.sessionGet('id').'] created new Extension document with ID => ['.$store->id.']');
            toastr("Extension document successfully saved!", "success");
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
        return view('livewire.extension.create')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
