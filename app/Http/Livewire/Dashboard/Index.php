<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;


use Cache;
use Carbon\Carbon;
use App\Models\User\User;

use App\Models\Repository\Research;
use App\Models\Repository\Publication;
use App\Models\Repository\Presentation;
use App\Models\Repository\Training;
use App\Models\Repository\Extension;
use App\Models\Repository\Partnership;


use App\Models\Feed\FeedableItem;

class Index extends Component
{
    protected $listeners = [
        'NewNotification' => 'mount',
        'refreshDashboard' =>  'mount',
    ];


    public $researchCount, $publicationCount, $presentationCount, $trainingCount, $extensionCount, $partnershipCount;

    public function mount()
    {
        $this->researchCount = $this->researches->latest()->count();
        $this->publicationCount = $this->publications->latest()->count();
        $this->presentationCount = $this->presentations->latest()->count();
        $this->trainingCount = $this->trainings->latest()->count();
        $this->extensionCount = $this->extensions->latest()->count();
        $this->partnershipCount = $this->partnerships->latest()->count();
    }

    public function getResearchesProperty()
    {
        $data = Research::with(['category', 'fund', 'research_status', 'evaluations','attachments'])->repositoryOwner();
        return $data;
    }

    public function getPublicationsProperty()
    {
        $data = Publication::with([ 'evaluations','attachments'])->repositoryOwner();
        return $data;
    }

    public function getPresentationsProperty()
    {
        $data = Presentation::with([ 'type','attachments','evaluations'])->repositoryOwner();
        return $data;
    }

    public function getTrainingsProperty()
    {
        $data = Training::with([ 'quality','attachments','evaluations'])->repositoryOwner();
        return $data;
    }

    public function getExtensionsProperty()
    {
        $data = Extension::with([ 'attachments','evaluations'])->repositoryOwner();
        return $data;
    }

    public function getPartnershipsProperty()
    {
        $data = Partnership::with([ 'attachments','evaluations'])->repositoryOwner();
        return $data;
    }

    public function render()
    {
        return view('livewire.dashboard.index',[
            'researches' => $this->researchCount,
            'publications' => $this->publicationCount,
            'presentations' => $this->presentationCount,
            'trainings' => $this->trainingCount,
            'extensions' => $this->extensionCount,
            'partnerships' => $this->partnershipCount,
        ])
        ->extends('layouts.master',[
            'title' => 'REMIS - Dashboard'
        ])
        ->section('site-content');
    }
}
