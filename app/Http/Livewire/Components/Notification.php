<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Notification extends Component
{
    protected $listeners = ['newNotificationEvent' => '$refresh'];

    public function markallasread()
    {
        auth()->user()->unreadNotifications->markasread();
        //->update(['read_at' => now()]);
        $this->emitSelf('newNotificationEvent');
    }

    public function markasread($id)
    {
        auth()->user()->unreadNotifications()->where('id', $id)->update(['read_at' => now()]);
        $this->emitSelf('newNotificationEvent');
    }

    public function render()
    {
        return view('livewire.components.notification');
    }
}
