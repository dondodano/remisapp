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

    public $quarter;
    public $year;

    protected $listeners = [
        'sweetalertConfirmed',
        'sweetalertDenied',
    ];

    public function mount()
    {
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];
    }


    public function updatingSearch()
    {
        $this->resetPage();
    }
}
