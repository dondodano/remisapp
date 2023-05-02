<?php

namespace App\Http\Livewire\Publication;

use App\Models\Repository\Publication;
use App\Models\Attachment\PublicationFile;
use App\Http\Livewire\Traits\RepositoryPreview;

class Preview extends RepositoryPreview
{
    public $publicationModel;

    public function mount($id)
    {
        $this->publicationModel = Publication::with('attachments')->repositoryOwner()->findOrFail($id);
        $this->authorize('view', $this->publicationModel);
    }

    public function render()
    {
        return view('livewire.publication.preview')
        ->extends('layouts.master', [
            'title' => 'Publication - Preview'
        ])
        ->section('site-content');
    }
}
