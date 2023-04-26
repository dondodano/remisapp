<?php

namespace App\Http\Livewire\Partnership;

use App\Models\Repository\Partnership;
use App\Models\Attachment\PartnershipFile;
use App\Http\Livewire\Traits\RepositoryPreview;

class Preview extends RepositoryPreview
{
    public $partnership;

    public function mount($id)
    {
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];

        $this->partnership = Partnership::with('attachments')
            ->where('quarter', $this->quarter)
            ->where('year', $this->year)
            ->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.partnership.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
