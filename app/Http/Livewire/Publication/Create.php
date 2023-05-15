<?php

namespace App\Http\Livewire\Publication;

use Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Repository\Publication;
use Illuminate\Support\Facades\Validator;
use App\Models\Attachment\PublicationFile;

use App\Models\Feed\FeedableItem;

class Create extends Component
{
    use WithFileUploads;

    public $date_published, $title, $author, $publisher;
    public $volume, $issue, $page;
    public $fileInputId;
    public $attachments = [];


    public function mount()
    {
        $this->fileInputId = rand();
        $this->date_published = setToday();
    }

    public function store()
    {
        if($this->date_published  == null || strlen($this->title) == 0  || strlen($this->author) == 0
        || strlen($this->publisher) == 0  || strlen($this->volume) == 0  || strlen($this->issue) == 0
        || strlen($this->page) == 0 )
        {
            toastr("Please fill all required fields!", "error");
            return ;
        }

        $store = Publication::firstOrCreate([
            'date_published' => $this->date_published,
            'title' => $this->title,
            'author' => $this->author,
            'publisher' => $this->publisher,
            'volume' => $this->volume,
            'issue' => $this->issue,
            'page' => $this->page,
            'owner' => sessionGet('id'),
            'responsibility_center_id' => sessionGet('responsibility_center_id'),

            'quarter' => sessionGet('current-quarter-'.auth()->user()->id)['value'],
            'year' => sessionGet('current-year-'.auth()->user()->id)['value'],
        ]);
        $store->save();


        if(isset($this->attachments))
        {
            $path = 'attachment/'. token() .'/';
            foreach($this->attachments as $attachment)
            {
                $fileName = $attachment->getClientOriginalName();
                $storeFile = PublicationFile::firstOrCreate([
                    'publication_id' => $store->id,
                    'user_id' => sessionGet('id'),
                    'file' => $path . $fileName
                ]);
                $attachment->storeAs($path, $fileName, 'public');
            }
            $this->attachments = null;
        }

        $this->reset();
        $this->fileInputId = rand();
        $this->date_published = setToday();

        if($store)
            FeedableItem::firstOrCreate([
                'feedable_id' => $store->id,
                'feedable_type' => Publication::class
            ])->save();
            toastr("Publication document successfully saved!", "success");
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
        return view('livewire.publication.create')
        ->extends('layouts.master', [
            'title' => 'Publication - Create'
        ])
        ->section('site-content');
    }
}
