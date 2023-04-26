<?php

namespace App\Http\Livewire\Partnership;

use Livewire\Component;
use App\Models\Repository\Partnership;
use App\Models\Attachment\PartnershipFile;

class Preview extends Component
{
    public $partnership;

    public $quarter;
    public $year;

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
