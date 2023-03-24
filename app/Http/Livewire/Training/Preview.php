<?php

namespace App\Http\Livewire\Training;

use Livewire\Component;
use App\Models\Repository\Training;
use App\Models\Attachment\TrainingFile;

class Preview extends Component
{
    public $training;

    public function mount($id)
    {
        $this->training = Training::with('attachments')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.training.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
