<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class DocumentTable extends Component
{

    public $documentRecords = [];

    public function render()
    {
        return view('livewire.components.document-table');
    }
}
