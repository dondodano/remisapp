<?php

namespace App\Http\Livewire\Partnership;

use Livewire\Component;
use App\Models\Repository\Partnership;
use App\Models\Attachment\PartnershipFile;

class Preview extends Component
{
    public $partnership;

    public function mount($id)
    {
        $this->partnership = Partnership::with('attachments')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.partnership.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
