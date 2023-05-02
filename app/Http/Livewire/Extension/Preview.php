<?php

namespace App\Http\Livewire\Extension;

use App\Models\Repository\Extension;
use App\Models\Attachment\ExtensionFile;
use App\Http\Livewire\Traits\RepositoryPreview;

class Preview extends RepositoryPreview
{
    public $extensionModel;

    public function mount($id)
    {
        $this->extensionModel = Extension::with('attachments')->repositoryOwner()->findOrFail($id);
        $this->authorize('view', $this->extensionModel);
    }

    public function render()
    {
        return view('livewire.extension.preview')
        ->extends('layouts.master', [
            'title' => 'Extension - Preview'
        ])
        ->section('site-content');
    }
}
