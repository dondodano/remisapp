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
        'NewNotification' => 'getAllData',
        'refreshDashboard' =>  'getAllData',
    ];

    public $quarter;
    public $year;

    public $researchCount, $publicationCount, $presentationCount, $trainingCount, $extensionCount, $partnershipCount;

    public function mount()
    {
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];

        $this->researchCount = $this->researches->latest()->count();
        $this->publicationCount = $this->publications->latest()->count();
        $this->presentationCount = $this->presentations->latest()->count();
        $this->trainingCount = $this->trainings->latest()->count();
        $this->extensionCount = $this->extensions->latest()->count();
        $this->partnershipCount = $this->partnerships->latest()->count();
    }

    public function getAllData()
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
        $data = Research::with(['category', 'fund', 'research_status', 'evaluations','attachments'])
            ->where('quarter', $this->quarter)
            ->where('year', $this->year);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $data = $data->where('owner', sessionGet('id'));
        }
        return $data;
    }

    public function getPublicationsProperty()
    {
        $data = Publication::with([ 'evaluations','attachments'])
            ->where('quarter', $this->quarter)
            ->where('year', $this->year);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $data = $data->where('owner', sessionGet('id'));
        }
        return $data;
    }

    public function getPresentationsProperty()
    {
        $data = Presentation::with([ 'type','attachments','evaluations'])
            ->where('quarter', $this->quarter)
            ->where('year', $this->year);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $data = $data->where('owner', sessionGet('id'));
        }
        return $data;
    }

    public function getTrainingsProperty()
    {
        $data = Training::with([ 'quality','attachments','evaluations'])
            ->where('quarter', $this->quarter)
            ->where('year', $this->year);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $data = $data->where('owner', sessionGet('id'));
        }
        return $data;
    }

    public function getExtensionsProperty()
    {
        $data = Extension::with([ 'attachments','evaluations'])
            ->where('quarter', $this->quarter)
            ->where('year', $this->year);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $data = $data->where('owner', sessionGet('id'));
        }
        return $data;
    }

    public function getPartnershipsProperty()
    {
        $data = Partnership::with([ 'attachments','evaluations'])
            ->where('quarter', $this->quarter)
            ->where('year', $this->year);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $data = $data->where('owner', sessionGet('id'));
        }
        return $data;
    }

    public function render()
    {
        // 'researches' => $this->researches->latest(),
        // 'publications' => $this->publications->latest(),
        // 'presentations' => $this->presentations->latest(),
        // 'trainings' => $this->trainings->latest(),
        // 'extensions' => $this->extensions->latest(),
        // 'partnerships' => $this->partnerships->latest(),

        return view('livewire.dashboard.index',[
            'researches' => $this->researchCount,
            'publications' => $this->publicationCount,
            'presentations' => $this->presentationCount,
            'trainings' => $this->trainingCount,
            'extensions' => $this->extensionCount,
            'partnerships' => $this->partnershipCount,
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
