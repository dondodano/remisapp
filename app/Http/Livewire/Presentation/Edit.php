<?php

namespace App\Http\Livewire\Presentation;

use App\Models\Repository\Presentation;
use App\Models\Misc\Miscellaneous as Type;
use App\Models\Attachment\PresentationFile;
use App\Http\Livewire\Traits\RepositoryEdit;


class Edit extends RepositoryEdit
{
    public $date_presented, $type, $title, $author, $forum, $venue;

    public $presentationModel;
    public $presentationId;

    public function mount($id)
    {
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];
        $this->presentationModel = Presentation::where('quarter', $this->quarter)->where('year', $this->year);
        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $this->presentationModel = $this->presentationModel->where('owner', sessionGet('id'));
        }
        $this->presentationModel = $this->presentationModel->findOrFail($id);

        $this->fileInputId = rand();
        $this->presentationId = $id;

        $this->date_presented = setDate($this->presentationModel->date_presented);
        $this->title = $this->presentationModel->title;
        $this->author = $this->presentationModel->author;
        $this->forum = $this->presentationModel->forum;
        $this->venue = $this->presentationModel->venue;
        $this->type = $this->presentationModel->type_id;
    }

    public function remove($id)
    {
        $dataId = decipher($id);
        $remove = PresentationFile::findOrFail($dataId);
        $remove->delete();
    }

    public function update()
    {
        if($this->date_presented == null || strlen($this->type) == 0 || strlen($this->title) == 0 || strlen($this->author) == 0
        || strlen($this->forum) == 0 || strlen($this->venue) == 0)
        {
            toastr("Please fill all required fields!", "error");
            return ;
        }


        $update = $this->presentationModel->update([
            'title' => $this->title,
            'author' => $this->author,
            'forum' => $this->forum,
            'venue' => $this->venue,
            'date_presented' => $this->date_presented,
            'type_id' => $this->type,

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
                $storeFile = PresentationFile::firstOrCreate([
                    'presentation_id' => $this->presentationModel->id,
                    'user_id' => sessionGet('id'),
                    'file' => $path . $fileName
                ]);
                $attachment->storeAs($path, $fileName, 'public');
            }
            $this->attachments = [];
        }

        $this->fileInputId = rand();

        if($update)
            toastr("Presentation data successfully updated!", "success");
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
        return view('livewire.presentation.edit',[
            'presentationFiles' => PresentationFile::where('presentation_id', $this->presentationId)->get(),
            'types' => Type::where('group', 'presentationtype')->get(),
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
