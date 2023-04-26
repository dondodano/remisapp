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
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];

        $this->publicationModel = Publication::with('attachments')
            ->where('quarter', $this->quarter)
            ->where('year', $this->year);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $this->publicationModel = $this->publicationModel->where('owner', sessionGet('id'));
        }
        $this->publicationModel = $this->publicationModel->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.publication.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
