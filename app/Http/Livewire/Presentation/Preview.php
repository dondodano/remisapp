<?php

namespace App\Http\Livewire\Presentation;

use App\Models\Repository\Presentation;
use App\Models\Attachment\PresentationFile;
use App\Http\Livewire\Traits\RepositoryPreview;

class Preview extends RepositoryPreview
{
    public $presentationModel;

    public function mount($id)
    {
        $this->presentationModel = Presentation::with('attachments')->repositoryOwner()->findOrFail($id);
        $this->authorize('view', $this->presentationModel);
    }

    public function render()
    {
        return view('livewire.presentation.preview')
        ->extends('layouts.master', [
            'title' => 'Presentation - Preview'
        ])
        ->section('site-content');
    }
}
