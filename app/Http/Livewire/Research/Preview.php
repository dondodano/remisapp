<?php

namespace App\Http\Livewire\Research;

use App\Models\Repository\Research;
use App\Models\Attachment\ResearchFile;
use App\Models\Misc\Miscellaneous as Fund;
use App\Models\Misc\Miscellaneous as Status;
use App\Models\Misc\Miscellaneous as Category;
use App\Http\Livewire\Traits\RepositoryPreview;

class Preview extends RepositoryPreview
{
    public $researchModel;

    public function mount($id)
    {
        $this->researchModel = Research::with('attachments')->repositoryOwner()->findOrFail($id);
        $this->authorize('view', $this->researchModel);
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
