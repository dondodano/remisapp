<?php

namespace App\Http\Livewire\Presentation;

use Livewire\Component;
use App\Models\Repository\Presentation;
use App\Models\Attachment\PresentationFile;

class Preview extends Component
{
    public $presentation;

    public $quarter;
    public $year;

    public function mount($id)
    {
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];

        $this->presentation = Presentation::with('attachments')
            ->where('quarter', $this->quarter)
            ->where('year', $this->year)
            ->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.presentation.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
