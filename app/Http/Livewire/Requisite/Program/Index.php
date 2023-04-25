<?php

namespace App\Http\Livewire\Requisite\Program;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Requisite\Program as RequisiteProgram;

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
        return RequisiteProgram::query();
    }

    public function delete($id)
    {
        $newId = decipher($id);
        $program = RequisiteProgram::findOrFail($newId);
        $program->delete();

        if($program)
            toastr("Program [<strong>".$program->term."</strong>] successfully removed!", "info");

    }

    public function deactive($id)
    {
        $newId = decipher($id);
        $program = RequisiteProgram::findOrFail($newId);
        if($program->status == 1)
        {
            $program->status = 0;
            $program->date_modified = setTimestamp();
            $program->update();

            if($program)
                toastr("Program [<strong>".$program->term."</strong>] successfully deactivated!", "info");
        }
    }

    public function active($id)
    {
        $newId = decipher($id);
        $program = RequisiteProgram::findOrFail($newId);

        if($program->status == 0)
        {
            $program->status = 1;
            $program->date_modified = setTimestamp();
            $program->update();

            if($program)
                toastr("Program [<strong>".$program->term."</strong>] successfully activated!", "info");
        }
    }

    public function render()
    {
        return view('livewire.requisite.program.index',[
            'programs' =>  $this->all->orderBy('id', 'desc')->paginate($this->paginate),
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
