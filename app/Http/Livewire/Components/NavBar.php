<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class NavBar extends Component
{

    public function select()
    {
        toastr('test', 'info');
    }

    public function render()
    {
        return view('livewire.components.nav-bar');
    }
}
