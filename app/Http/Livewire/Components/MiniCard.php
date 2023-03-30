<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class MiniCard extends Component
{

    public $title= null;
    public $text= null;
    public $icon = 'bx-search-alt';

    public function render()
    {
        return view('livewire.components.mini-card');
    }
}
