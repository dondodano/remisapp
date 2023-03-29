<?php

namespace App\Events;

use App\Models\User\User;
use App\Models\User\UserRole;
use App\Models\User\UserToken;
use App\Mail\UserCredentialMailer;
use Illuminate\Support\Facades\Mail;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendMailToUserCredentialEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $newId;

    public function __construct($id)
    {
        $this->newId = decipher($id);
        $this->user = User::findOrFail($this->newId);
    }


    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
