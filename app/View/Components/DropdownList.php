<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DropdownList extends Component
{
    public $id;
    public $text;

    public function __construct($id = 'dropdown', $text = 'Dropdown')
    {
        $this->id = $id;
        $this->text = $text;
    }


    public function render()
    {
        return view('components.dropdown-list');
    }
}
