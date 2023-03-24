<?php

namespace App\Http\Livewire\Presentation;

use Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Repository\Presentation;
use App\Models\Misc\Miscellaneous as Type;
use App\Models\Attachment\PresentationFile;
use Illuminate\Support\Facades\Validator;


class Edit extends Component
{
    use WithFileUploads;
    public $date_presented, $type, $title, $author, $forum, $venue;
    public $fileInputId;
    public $attachments = [];
    public $presentation;
    public $presentationId;

    public function mount($id)
    {
        $this->fileInputId = rand();
        $this->presentation = Presentation::findOrFail($id);
        $this->presentationId = $id;

        $this->date_presented = setDate($this->presentation->date_presented);
        $this->title = $this->presentation->title;
        $this->author = $this->presentation->author;
        $this->forum = $this->presentation->forum;
        $this->venue = $this->presentation->venue;
        $this->type = $this->presentation->type_id;
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


        $update = $this->presentation->update([
            'title' => $this->title,
            'author' => $this->author,
            'forum' => $this->forum,
            'venue' => $this->venue,
            'date_presented' => $this->date_presented,
            'type_id' => $this->type,
            'date_modified' => setTimestamp()
        ]);

        if($this->attachments != null)
        {
            $path = 'attachment/'. token() .'/';
            foreach($this->attachments as $attachment)
            {
                $fileName = $attachment->getClientOriginalName();
                $storeFile = PresentationFile::firstOrCreate([
                    'presentation_id' => $this->presentation->id,
                    'user_id' => sessionGet('id'),
                    'file' => $path . $fileName
                ]);
                $attachment->storeAs($path, $fileName, 'public');
            }
            $this->attachments = [];
        }

        $this->fileInputId = rand();

        if($update)
            logUserActivity(request(), 'User ['.sessionGet('id').'] updated Presentation document with ID => ['.$this->presentationId.']');
            toastr("Presentation data successfully updated!", "success");
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
