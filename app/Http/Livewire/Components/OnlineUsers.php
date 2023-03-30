<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class OnlineUsers extends Component
{
    public $users = [];

    public function render()
    {
        return view('livewire.components.online-users');
    }
}
