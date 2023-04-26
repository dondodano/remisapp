<?php

namespace App\Http\Livewire\Extension;

use Livewire\Component;
use App\Models\Repository\Extension;
use App\Models\Attachment\ExtensionFile;

class Preview extends Component
{
    public $extensionModel;

    public $quarter;
    public $year;

    public function mount($id)
    {
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];

        $this->extensionModel = Extension::with('attachments')
            ->where('quarter', $this->quarter)
            ->where('year', $this->year)
            ->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.extension.preview')
        ->extends('layouts.master')
        ->section('site-content');
    }
}
