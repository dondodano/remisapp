<?php

namespace App\Http\Livewire\Publication;

use App\Models\Repository\Publication;
use App\Models\Attachment\PublicationFile;
use App\Http\Livewire\Traits\RepositoryEdit;

class Edit extends RepositoryEdit
{
    public $date_published, $title, $author, $publisher;
    public $volume, $issue, $page;

    public $publicationModel;
    public $publicationId;

    public function mount($id)
    {
        $this->publicationModel = Publication::repositoryOwner()->findOrFail($id);
        $this->authorize('view', $this->publicationModel);

        $this->fileInputId = rand();
        $this->publicationId = $id;

        $this->date_published = setDate($this->publicationModel->date_published);
        $this->title = $this->publicationModel->title;
        $this->author = $this->publicationModel->author;
        $this->publisher = $this->publicationModel->publisher;
        $this->volume = $this->publicationModel->volume;
        $this->issue = $this->publicationModel->issue;
        $this->page = $this->publicationModel->page;
    }

    public function remove($id)
    {
        $dataId = decipher($id);
        $remove = PublicationFile::findOrFail($dataId);
        $remove->delete();
    }

    public function update()
    {
        if($this->date_published  == null || strlen($this->title) == 0  || strlen($this->author) == 0
        || strlen($this->publisher) == 0  || strlen($this->volume) == 0  || strlen($this->issue) == 0
        || strlen($this->page) == 0 )
        {
            toastr("Please fill all required fields!", "error");
            return ;
        }


        $update = $this->publicationModel->update([
            'date_published' => $this->date_published,
            'title' => $this->title,
            'author' => $this->author,
            'publisher' => $this->publisher,
            'volume' => $this->volume,
            'issue' => $this->issue,
            'page' => $this->page,

            'quarter' => sessionGet('current-quarter-'.auth()->user()->id)['value'],
            'year' => sessionGet('current-year-'.auth()->user()->id)['value'],

            'date_modified' => setTimestamp()
        ]);

        if(isset($this->attachments))
        {
            $path = 'attachment/'. token() .'/';
            foreach($this->attachments as $attachment)
            {
                $fileName = $attachment->getClientOriginalName();
                $storeFile = PublicationFile::firstOrCreate([
                    'publication_id' => $this->publicationModel->id,
                    'user_id' => sessionGet('id'),
                    'file' => $path . $fileName
                ]);
                $attachment->storeAs($path, $fileName, 'public');
            }
            $this->attachments = null;
        }

        $this->fileInputId = rand();

        if($update)
            toastr("Publication data successfully updated!", "success");
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
        return view('livewire.publication.edit',[
            'publicationFiles' => PublicationFile::where('publication_id', $this->publicationId)->get()
        ])
        ->extends('layouts.master', [
            'title' => 'Research - Edit'
        ])
        ->section('site-content');
    }
}
