<?php

namespace App\Http\Livewire\Research;

use Livewire\Component;

use App\Models\Repository\Research;
use App\Models\Attachment\ResearchFile;
use App\Models\Misc\Miscellaneous as Fund;
use App\Models\Misc\Miscellaneous as Status;
use App\Models\Misc\Miscellaneous as Category;

class Preview extends Component
{

    public $research;

    public function mount($id)
    {
        $this->research = Research::with('attachments')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.research.preview',[
            'statuses' => Status::where('group', 'projectstatus')->get(),
            'fundtypes' => Fund::where('group', 'fundclass')->get(),
            'categories' => Category::where('group', 'projectcategory')->get(),
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
