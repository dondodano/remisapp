<?php

namespace App\Http\Livewire\Partnership;

use App\Models\Repository\Partnership;
use App\Models\Attachment\PartnershipFile;
use App\Http\Livewire\Traits\RepositoryPreview;

class Preview extends RepositoryPreview
{
    public $partnershipModel;

    public function mount($id)
    {
        $this->partnershipModel = Partnership::with('attachments')->repositoryOwner()->findOrFail($id);
        $this->authorize('view', $this->partnershipModel);
    }

    public function render()
    {
        return view('livewire.partnership.preview')
        ->extends('layouts.master', [
            'title' => 'Partnership - Preview'
        ])
        ->section('site-content');
    }
}
