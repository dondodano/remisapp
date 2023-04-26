<?php

namespace App\Http\Livewire\Training;

use Livewire\Component;
use App\Models\Repository\Training;
use App\Models\Attachment\TrainingFile;

class Preview extends Component
{
    public $training;

    public $quarter;
    public $year;

    public function mount($id)
    {
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];

        $this->training = Training::with('attachments')
            ->where('quarter', $this->quarter)
            ->where('year', $this->year)
            ->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.training.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
