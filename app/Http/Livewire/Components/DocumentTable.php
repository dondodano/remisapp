<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class DocumentTable extends Component
{

    public $documentRecords;

    public function mount($documentRecords)
    {
        $this->documentRecords = $documentRecords;
    }

    public function render()
    {
        return view('livewire.components.document-table',[
            'documentRecords' => $this->documentRecords
        ]);
    }
}
