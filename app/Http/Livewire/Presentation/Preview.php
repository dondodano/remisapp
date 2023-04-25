<?php

namespace App\Http\Livewire\Presentation;

use Livewire\Component;
use App\Models\Repository\Presentation;
use App\Models\Attachment\PresentationFile;

class Preview extends Component
{
    public $presentation;

    public function mount($id)
    {
        $this->presentation = Presentation::with('attachments')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.presentation.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
