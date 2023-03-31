<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use App\Models\Misc\Miscellaneous as Fund;
use App\Models\Misc\Miscellaneous as Status;
use App\Models\Misc\Miscellaneous as Category;


use Cache;
use App\Models\User\User;
use App\Models\Repository\Research;
use App\Models\Repository\Publication;
use App\Models\Repository\Presentation;
use App\Models\Repository\Training;
use App\Models\Repository\Extension;
use App\Models\Repository\Partnership;

class Index extends Component
{
    public function getResearchesProperty()
    {
        $data = Research::with(['category', 'fund', 'research_status', 'evaluations','attachments'])->where('active',1);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $data = $data->where('owner', sessionGet('id'));
        }
        return $data;
    }

    public function getPublicationsProperty()
    {
        $data = Publication::with([ 'evaluations','attachments'])->where('active',1);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $data = $data->where('owner', sessionGet('id'));
        }
        return $data;
    }

    public function getPresentationsProperty()
    {
        $data = Presentation::with([ 'type','attachments','evaluations'])->where('active',1);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $data = $data->where('owner', sessionGet('id'));
        }
        return $data;
    }

    public function getTrainingsProperty()
    {
        $data = Training::with([ 'quality','attachments','evaluations'])->where('active',1);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $data = $data->where('owner', sessionGet('id'));
        }
        return $data;
    }

    public function getExtensionsProperty()
    {
        $data = Extension::with([ 'attachments','evaluations'])->where('active',1);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $data = $data->where('owner', sessionGet('id'));
        }
        return $data;
    }

    public function getPartnershipsProperty()
    {
        $data = Partnership::with([ 'attachments','evaluations'])->where('active',1);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $data = $data->where('owner', sessionGet('id'));
        }
        return $data;
    }

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
        return view('livewire.dashboard.index',[
            'researches' => $this->researches->orderBy('id', 'desc'),
            'publications' => $this->publications->orderBy('id', 'desc'),
            'presentations' => $this->presentations->orderBy('id', 'desc'),
            'trainings' => $this->trainings->orderBy('id', 'desc'),
            'extensions' => $this->extensions->orderBy('id', 'desc'),
            'partnerships' => $this->partnerships->orderBy('id', 'desc'),
            'onlineUsers' => $this->onlineUsers,
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
