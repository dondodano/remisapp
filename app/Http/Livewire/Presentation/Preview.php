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
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];

        $this->presentationModel = Presentation::with('attachments')
            ->where('quarter', $this->quarter)
            ->where('year', $this->year);
        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $this->presentationModel = $this->presentationModel->where('owner', sessionGet('id'));
        }
        $this->presentationModel = $this->presentationModel->findOrFail($id);
        $this->authorize('view', $this->presentationModel);
    }

    public function render()
    {
        return view('livewire.presentation.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
