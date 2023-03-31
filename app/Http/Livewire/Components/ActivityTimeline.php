<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ActivityTimeline extends Component
{

    public $activityTimelines = [];

    public function render()
    {
        return view('livewire.components.activity-timeline');
    }
}
