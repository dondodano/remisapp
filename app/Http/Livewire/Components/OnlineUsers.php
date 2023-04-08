<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

use Cache;
use App\Models\User\User;
use App\Events\PusherNotificationEvent;

class OnlineUsers extends Component
{

    protected $listeners = ['newUserOnline' => '$refresh'];

    public function getOnlineUsersProperty()
    {

        $onlineUsers = [];
        $onlineUsersCount = [];

        $users = User::with('temp_avatar')->where('active',1);
        foreach($users->get() as $user)
        {
            if(Cache::has('user-' . $user->id))
            {
                array_push($onlineUsers, $user );

                if(isOnline($user->id))
                {
                    array_push($onlineUsersCount, $user->id);
                }
            }
        }
        return [
            'record' => $onlineUsers,
            'count' => $onlineUsersCount
        ];
    }


    public function render()
    {
        return view('livewire.components.online-users', [
            'onlineUsers' => $this->onlineUsers
        ]);
    }
}
