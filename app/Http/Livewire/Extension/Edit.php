<?php

namespace App\Http\Livewire\Extension;


use App\Models\Repository\Extension;
use App\Models\Attachment\ExtensionFile;
use App\Http\Livewire\Traits\RepositoryEdit;

class Edit extends RepositoryEdit
{
    public $extension, $date_from, $date_to, $quantity, $beneficiaries;

    public $extensionModel;
    public $extensionId;

    public function mount($id)
    {
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];
        $this->extensionModel = Extension::where('quarter', $this->quarter)->where('year', $this->year)->findOrFail($id);

        $this->fileInputId = rand();
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
            toastr("Extension data successfully updated!", "success");
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
        return view('livewire.extension.edit',[
            'extensionFiles' => ExtensionFile::where('extension_id', $this->extensionId)->get(),
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
