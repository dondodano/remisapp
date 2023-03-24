<?php

namespace App\Http\Livewire\Publication;

use Livewire\Component;
use App\Models\Repository\Publication;
use App\Models\Attachment\PublicationFile;

class Preview extends Component
{

    public $publication;

    public function mount($id)
    {
        $this->publication = Publication::with('attachments')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.publication.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
