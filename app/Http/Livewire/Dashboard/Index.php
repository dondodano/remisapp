<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use App\Models\Misc\Miscellaneous as Fund;
use App\Models\Misc\Miscellaneous as Status;
use App\Models\Misc\Miscellaneous as Category;

use App\Models\Repository\Research;
use App\Models\Repository\Publication;
use App\Models\Repository\Presentation;
use App\Models\Repository\Training;
use App\Models\Repository\Extension;
use App\Models\Repository\Partnership;

class Index extends Component
{
    // public $research;
    // public $publication;
    // public $presentation;
    // public $training;
    // public $extension;
    // public $partnership;

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


    public function render()
    {
        return view('livewire.dashboard.index',[
            'researches' => $this->researches,
            'publications' => $this->publications,
            'presentations' => $this->presentations,
            'trainings' => $this->trainings,
            'extensions' => $this->extensions,
            'partnerships' => $this->partnerships,
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
