<?php

namespace App\Http\Livewire\Publication;

use App\Models\Repository\Publication;
use App\Models\Attachment\PublicationFile;
use App\Http\Livewire\Traits\RepositoryPreview;

class Preview extends RepositoryPreview
{
    public $publication;

    public function mount($id)
    {
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];

        $this->publication = Publication::with('attachments')
            ->where('quarter', $this->quarter)
            ->where('year', $this->year)
            ->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.publication.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
