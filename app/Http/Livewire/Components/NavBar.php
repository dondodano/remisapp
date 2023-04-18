<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class NavBar extends Component
{

    public $quarter;
    public $year;

    public function mount()
    {
        $this->quarter = ceil(date('m', time()) / 3);
        $this->year = setToday('Y');
    }

    public function selectYear()
    {
        toastr($this->year, 'info');
    }

    public function selectQuarter()
    {
        toastr($this->quarter, 'info');
    }

    public function render()
    {
        return view('livewire.components.nav-bar');
    }
}
