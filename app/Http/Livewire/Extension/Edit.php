<?php

namespace App\Http\Livewire\Extension;

use Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Repository\Extension;
use App\Models\Attachment\ExtensionFile;
use Illuminate\Support\Facades\Validator;

class Edit extends Component
{
    use WithFileUploads;

    public $extension, $date_from, $date_to, $quantity, $beneficiaries;
    public $fileInputId;
    public $attachments = [];

    public $extensionModel;
    public $extensionId;

    public function mount($id)
    {
        $this->fileInputId = rand();
        $this->extensionModel = Extension::findOrFail($id);
        $this->extensionId = $id;

        $this->date_from = setDate($this->extensionModel->date_from);
        $this->date_to = setDate($this->extensionModel->date_to);

        $this->extension = $this->extensionModel->extension;
        $this->quantity = $this->extensionModel->quantity;
        $this->beneficiaries = $this->extensionModel->beneficiaries;

    }

    public function remove($id)
    {
        $dataId = decipher($id);
        $remove = ExtensionFile::findOrFail($dataId);
        $remove->delete();
    }

    public function update()
    {
        if(strlen($this->extension) == 0 || strlen($this->date_from) == 0 || strlen($this->date_to) == 0
        || strlen($this->quantity) == 0 || strlen($this->beneficiaries) == 0)
        {
            toastr("Please fill all required fields!", "error");
            return ;
        }


        $update = $this->extensionModel->update([
            'extension' => $this->extension,
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,
            'quantity' => $this->quantity,
            'beneficiaries' => $this->beneficiaries,
            'date_modified' => setTimestamp()
        ]);

        if($this->attachments != null)
        {
            $path = 'attachment/'. token() .'/';
            foreach($this->attachments as $attachment)
            {
                $fileName = $attachment->getClientOriginalName();
                $storeFile = ExtensionFile::firstOrCreate([
                    'extension_id' => $this->extensionModel->id,
                    'user_id' => sessionGet('id'),
                    'file' => $path . $fileName
                ]);
                $attachment->storeAs($path, $fileName, 'public');
            }
            $this->attachments = [];
        }

        $this->fileInputId = rand();

        if($update)
            logUserActivity(request(), 'User ['.sessionGet('id').'] updated Extension document with ID => ['.$this->extensionId.']');
            toastr("Extension data successfully updated!", "success");
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
        return view('livewire.extension.edit',[
            'extensionFiles' => ExtensionFile::where('extension_id', $this->extensionId)->get(),
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
