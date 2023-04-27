<?php

namespace App\Http\Livewire\Traits;

use ZipArchive;
use Livewire\Component;
use Livewire\WithPagination;

class RepositoryIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 10;
    public $search = "";

    protected $listeners = [
        'sweetalertConfirmed',
        'sweetalertDenied',
    ];

    public function mount()
    {

    }


    public function updatingSearch()
    {
        $this->resetPage();
    }
}
