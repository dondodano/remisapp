<?php

namespace App\Http\Livewire\Training;

use App\Models\Repository\Training;
use App\Models\Attachment\TrainingFile;
use App\Http\Livewire\Traits\RepositoryPreview;

class Preview extends RepositoryPreview
{
    public $trainingModel;

    public function mount($id)
    {
        $this->trainingModel = Training::with('attachments')->repositoryOwner()->findOrFail($id);
        $this->authorize('view', $this->trainingModel);
    }

    public function render()
    {
        return view('livewire.training.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
