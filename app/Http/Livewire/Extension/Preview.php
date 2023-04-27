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
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];

        $this->extensionModel = Extension::with('attachments')
            ->where('quarter', $this->quarter)
            ->where('year', $this->year);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $this->extensionModel = $this->extensionModel->where('owner', sessionGet('id'));
        }
        $this->extensionModel = $this->extensionModel->findOrFail($id);

        $this->authorize('view', $this->extensionModel);
    }

    public function render()
    {
        return view('livewire.extension.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
