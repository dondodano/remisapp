<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\User\User;

class Notification extends Component
{
    protected $listeners = ['NewNotification' => '$refresh'];

    public function markallasread()
    {
        auth()->user()->unreadNotifications->markasread();
        //->update(['read_at' => now()]);
        $this->emitSelf('NewNotification');
    }

    public function markasread($id)
    {
        auth()->user()->unreadNotifications()->where('id', $id)->update(['read_at' => now()]);
        $this->emitSelf('NewNotification');
    }

    public function render()
    {
        return view('livewire.components.notification');
    }
}
