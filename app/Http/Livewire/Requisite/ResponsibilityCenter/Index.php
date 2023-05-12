<?php

namespace App\Http\Livewire\Requisite\ResponsibilityCenter;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Requisite\ResponsibilityCenter;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 10;
    public $search = "";

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedSearch()
    {
        $searchValue = "%".$this->search."%";
        $this->all->where('term', 'like', $searchValue)
            ->orWhere('definition', 'like', $searchValue);
    }

    public function getAllProperty()
    {
        return ResponsibilityCenter::query();
    }

    public function delete($id)
    {
        $newId = decipher($id);
        $responsibilitycenter = ResponsibilityCenter::findOrFail($newId);
        $responsibilitycenter->delete();

        if($responsibilitycenter)
            toastr("Responsibility Center [<strong>".$responsibilitycenter->term."</strong>] successfully removed!", "info");

    }

    public function deactive($id)
    {
        $newId = decipher($id);
        $responsibilitycenter = ResponsibilityCenter::findOrFail($newId);
        if($responsibilitycenter->status == 1)
        {
            $responsibilitycenter->status = 0;
            $responsibilitycenter->date_modified = setTimestamp();
            $responsibilitycenter->update();

            if($responsibilitycenter)
                toastr("Responsibility Center [<strong>".$responsibilitycenter->term."</strong>] successfully deactivated!", "info");
        }
    }

    public function active($id)
    {
        $newId = decipher($id);
        $responsibilitycenter = ResponsibilityCenter::findOrFail($newId);

        if($responsibilitycenter->status == 0)
        {
            $responsibilitycenter->status = 1;
            $responsibilitycenter->date_modified = setTimestamp();
            $responsibilitycenter->update();

            if($responsibilitycenter)
                toastr("Responsibility Center [<strong>".$responsibilitycenter->term."</strong>] successfully activated!", "info");
        }
    }

    public function render()
    {
        return view('livewire.requisite.responsibilitycenter.index',[
            'responsibilitycenters' =>  $this->all->orderBy('id', 'desc')->paginate($this->paginate)
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
