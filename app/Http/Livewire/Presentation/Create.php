<?php

namespace App\Http\Livewire\Presentation;

use Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Repository\Presentation;
use Illuminate\Support\Facades\Validator;
use App\Models\Misc\Miscellaneous as Type;
use App\Models\Attachment\PresentationFile;


class Create extends Component
{
    use WithFileUploads;

    public $date_presented, $type, $title, $author, $forum, $venue;
    public $fileInputId;
    public $attachments = [];

    public function mount()
    {
        $this->fileInputId = rand();
        $this->date_presented = setToday();
    }

    public function store()
    {
        if($this->date_presented == null || strlen($this->type) == 0 || strlen($this->title) == 0 || strlen($this->author) == 0
        || strlen($this->forum) == 0 || strlen($this->venue) == 0)
        {
            toastr("Please fill all required fields!", "error");
            return ;
        }


        $store = Presentation::firstOrCreate([
            'title' => $this->title,
            'author' => $this->author,
            'forum' => $this->forum,
            'venue' => $this->venue,
            'date_presented' => $this->date_presented,
            'type_id' => $this->type,
            'owner' => sessionGet('id')
        ]);
        $store->save();

        if(isset($this->attachments))
        {
            $path = 'attachment/'. token() .'/';
            foreach($this->attachments as $attachment)
            {
                $fileName = $attachment->getClientOriginalName();
                $storeFile = PresentationFile::firstOrCreate([
                    'presentation_id' => $store->id,
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
            logUserActivity(request(), 'User ['.sessionGet('id').'] created new Presentation document with ID => ['.$store->id.']');
            toastr("Presentation document successfully saved!", "success");
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
        return view('livewire.presentation.create',[
            'types' => Type::where('group', 'presentationtype')->get(),
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
