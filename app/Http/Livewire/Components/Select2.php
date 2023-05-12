<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Select2 extends Component
{
    public $selected;
    public $title;
    public $model;
    public $collection;

    public function render()
    {
        return view('livewire.components.select2');
    }
}
