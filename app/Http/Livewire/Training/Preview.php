<?php

namespace App\Http\Livewire\Training;

use App\Models\Repository\Training;
use App\Models\Attachment\TrainingFile;
use App\Http\Livewire\Traits\RepositoryPreview;

class Preview extends RepositoryPreview
{
    public $training;

    public function mount($id)
    {
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];

        $this->training = Training::with('attachments')
            ->where('quarter', $this->quarter)
            ->where('year', $this->year)
            ->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.training.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
