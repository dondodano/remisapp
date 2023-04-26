<?php

namespace App\Http\Livewire\Components;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Feed\FeedableItem;

class ActivityTimeline extends Component
{
    protected $listeners = [
        'NewNotification' => '$refresh',
        //'QuarterAndYearSelected' => '$refresh',
    ];


    public function render()
    {
        $lastSevenDays = Carbon::today()->subDays(7);

        return view('livewire.components.activity-timeline',[
            'activityTimelines' => FeedableItem::where('date_created', '>=', $lastSevenDays)->latest()->get()
        ]);
    }
}
