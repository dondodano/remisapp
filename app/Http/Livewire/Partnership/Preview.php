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
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];

        $this->partnershipModel = Partnership::with('attachments')
            ->where('quarter', $this->quarter)
            ->where('year', $this->year);
        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $this->partnershipModel = $this->partnershipModel->where('owner', sessionGet('id'));
        }
        $this->partnershipModel = $this->partnershipModel->findOrFail($id);
        $this->authorize('view', $this->partnershipModel);

    }

    public function render()
    {
        return view('livewire.partnership.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
