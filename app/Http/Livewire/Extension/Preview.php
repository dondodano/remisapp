<?php

namespace App\Http\Livewire\Extension;

use Livewire\Component;
use App\Models\Repository\Extension;
use App\Models\Attachment\ExtensionFile;

class Preview extends Component
{
    public $extensionModel;

    public function mount($id)
    {
        $this->extensionModel = Extension::with('attachments')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.extension.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
