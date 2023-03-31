<?php

namespace App\Http\Livewire\Training;

use Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Repository\Training;
use Illuminate\Support\Facades\Validator;
use App\Models\Misc\Miscellaneous as Quality;
use App\Models\Attachment\TrainingFile;

use App\Models\Feed\FeedableItem;

class Create extends Component
{
    use WithFileUploads;

    public $title, $date_from, $date_to, $duration, $trainees, $weight, $surveyed;
    public $quality, $relevance;
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
        if($this->date_from == null || $this->date_to == null || strlen($this->title) == 0 || strlen($this->duration) == 0 || strlen($this->trainees) == 0
        || strlen($this->weight) == 0 || strlen($this->surveyed) == 0 || strlen($this->quality) == 0 || strlen($this->relevance) == 0)
        {
            toastr("Please fill all required fields!", "error");
            return ;
        }


        $store = Training::firstOrCreate([
            'title' => $this->title,
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,
            'duration' => $this->duration,
            'no_of_trainees' => $this->trainees,
            'weight' => $this->weight,
            'no_of_trainees_surveyed' => $this->surveyed,
            'quality_id' => $this->quality,
            'relevance' => $this->relevance,
            'owner' => sessionGet('id')
        ]);
        $store->save();

        if(isset($this->attachments))
        {
            $path = 'attachment/'. token() .'/';
            foreach($this->attachments as $attachment)
            {
                $fileName = $attachment->getClientOriginalName();
                $storeFile = TrainingFile::firstOrCreate([
                    'training_id' => $store->id,
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
            FeedableItem::firstOrCreate([
                'feedable_id' => $store->id,
                'feedable_type' => Training::class
            ])->save();
            logUserActivity(request(), 'User ['.sessionGet('id').'] created new Training document with ID => ['.$store->id.']');
            toastr("Training document successfully saved!", "success");
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
        return view('livewire.training.create',[
            'qualities' => Quality::where('group', 'relevance')->get(),
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
