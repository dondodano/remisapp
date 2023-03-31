<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use Cache;
use Carbon\Carbon;
use App\Models\User\User;
use Livewire\WithPagination;
use App\Models\Repository\Research;
use App\Models\Repository\Publication;
use App\Models\Repository\Presentation;
use App\Models\Repository\Training;
use App\Models\Repository\Extension;
use App\Models\Repository\Partnership;


use App\Models\Feed\FeedableItem;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 10;

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

    public function getActivityTimelinesProperty()
    {
        $lastSevenDays = Carbon::today()->subDays(7);
        return FeedableItem::where('date_created', '>=', $lastSevenDays);
    }

    public function render()
    {

        $documentRecord =  $this->activityTimelines->orderBy('id', 'desc')->get(); //->paginate($this->paginate);

        return view('livewire.dashboard.index',[
            'researches' => $this->researches->orderBy('id', 'desc'),
            'publications' => $this->publications->orderBy('id', 'desc'),
            'presentations' => $this->presentations->orderBy('id', 'desc'),
            'trainings' => $this->trainings->orderBy('id', 'desc'),
            'extensions' => $this->extensions->orderBy('id', 'desc'),
            'partnerships' => $this->partnerships->orderBy('id', 'desc'),
            'onlineUsers' => $this->onlineUsers,
            'activityTimelines' => $this->activityTimelines->get(),
            'documentRecords' => $documentRecord
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
