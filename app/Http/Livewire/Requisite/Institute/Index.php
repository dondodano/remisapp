<?php

namespace App\Http\Livewire\Requisite\Institute;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Requisite\Institute as RequisiteInstitute;

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
        return RequisiteInstitute::query();
    }

    public function delete($id)
    {
        $newId = decipher($id);
        $institute = RequisiteInstitute::findOrFail($newId);
        $institute->delete();

        if($institute)
            toastr("Institute [<strong>".$institute->term."</strong>] successfully removed!", "info");

    }

    public function deactive($id)
    {
        $newId = decipher($id);
        $institute = RequisiteInstitute::findOrFail($newId);
        if($institute->status == 1)
        {
            $institute->status = 0;
            $institute->date_modified = setTimestamp();
            $institute->update();

            if($institute)
                toastr("Institute [<strong>".$institute->term."</strong>] successfully deactivated!", "info");
        }
    }

    public function active($id)
    {
        $newId = decipher($id);
        $institute = RequisiteInstitute::findOrFail($newId);

        if($institute->status == 0)
        {
            $institute->status = 1;
            $institute->date_modified = setTimestamp();
            $institute->update();

            if($institute)
                toastr("Institute [<strong>".$institute->term."</strong>] successfully activated!", "info");
        }
    }

    public function render()
    {
        return view('livewire.requisite.institute.index',[
            'institutes' =>  $this->all->orderBy('id', 'desc')->paginate($this->paginate)
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
