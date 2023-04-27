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
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];

        $this->trainingModel = Training::with('attachments')
            ->where('quarter', $this->quarter)
            ->where('year', $this->year);
        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $this->trainingModel = $this->trainingModel->where('owner', sessionGet('id'));
        }
        $this->trainingModel = $this->trainingModel->findOrFail($id);
        $this->authorize('view', $this->trainingModel);
    }

    public function render()
    {
        return view('livewire.training.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
