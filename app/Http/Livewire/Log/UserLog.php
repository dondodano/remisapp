<?php

namespace App\Http\Livewire\Log;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Log\LogUser;

class UserLog extends Component
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
        $this->all->where('ip_address', 'like', $searchValue)
            ->orWhere('agent', 'like', $searchValue)
            ->orWhere('log_date', 'like', $searchValue);
    }

    public function getAllProperty()
    {
        return LogUser::with(['user']);
    }

    public function render()
    {
        return view('livewire.log.user-log',[
            'logs' => $this->all->orderBy('id', 'desc')->paginate($this->paginate)
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
