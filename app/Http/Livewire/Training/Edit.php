<?php

namespace App\Http\Livewire\Training;

use App\Models\Repository\Training;
use App\Models\Attachment\TrainingFile;
use App\Http\Livewire\Traits\RepositoryEdit;
use App\Models\Misc\Miscellaneous as Quality;

class Edit extends RepositoryEdit
{

    public $title, $date_from, $date_to, $duration, $trainees, $weight, $surveyed;
    public $quality, $relevance;

    public $trainingModel;
    public $trainingId;


    public function mount($id)
    {
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];
        $this->trainingModel = Training::where('quarter', $this->quarter)->where('year', $this->year);
        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $this->trainingModel = $this->trainingModel->where('owner', sessionGet('id'));
        }
        $this->trainingModel = $this->trainingModel->findOrFail($id);

        $this->fileInputId = rand();
        $this->trainingId = $id;

        $this->title = $this->trainingModel->title;
        $this->date_from = setDate($this->trainingModel->date_from);
        $this->date_to = setDate($this->trainingModel->date_to);

        $this->duration = $this->trainingModel->duration;
        $this->trainees = $this->trainingModel->no_of_trainees;
        $this->weight = $this->trainingModel->weight;
        $this->surveyed = $this->trainingModel->no_of_trainees_surveyed;

        $this->quality = $this->trainingModel->quality_id;
        $this->relevance = $this->trainingModel->relevance;
    }

    public function remove($id)
    {
        $dataId = decipher($id);
        $remove = TrainingFile::findOrFail($dataId);
        $remove->delete();
    }

    public function update()
    {
        if($this->date_from == null || $this->date_to == null || strlen($this->title) == 0 || strlen($this->duration) == 0 || strlen($this->trainees) == 0
        || strlen($this->weight) == 0 || strlen($this->surveyed) == 0 || strlen($this->quality) == 0 || strlen($this->relevance) == 0)
        {
            toastr("Please fill all required fields!", "error");
            return ;
        }


        $update = $this->trainingModel->update([
            'title' => $this->title,
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,
            'duration' => $this->duration,
            'no_of_trainees' => $this->trainees,
            'weight' => $this->weight,
            'no_of_trainees_surveyed' => $this->surveyed,
            'quality_id' => $this->quality,
            'relevance' => $this->relevance,

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
                $storeFile = TrainingFile::firstOrCreate([
                    'training_id' => $this->trainingModel->id,
                    'user_id' => sessionGet('id'),
                    'file' => $path . $fileName
                ]);
                $attachment->storeAs($path, $fileName, 'public');
            }
            $this->attachments = [];
        }

        $this->fileInputId = rand();

        if($update)
            toastr("Training data successfully updated!", "success");
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
        return view('livewire.training.edit',[
            'trainingFiles' => TrainingFile::where('training_id', $this->trainingId)->get(),
            'qualities' => Quality::where('group', 'relevance')->get(),
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
