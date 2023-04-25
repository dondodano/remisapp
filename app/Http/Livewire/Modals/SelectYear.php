<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;
use App\Http\Livewire\Modals\Modal;

class SelectYear extends Modal
{
    public function render()
    {
        return view('livewire.modals.select-year');
    }
}
