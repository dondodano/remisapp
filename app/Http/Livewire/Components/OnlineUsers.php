<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class OnlineUsers extends Component
{
    public $onlineusers = [];

    public function render()
    {
        return view('livewire.components.online-users');
    }
}
