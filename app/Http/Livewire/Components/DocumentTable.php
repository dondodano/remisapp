<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Livewire\WithPagination;

class DocumentTable extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 10;

    public $documentRecords;

    public function mount($documentRecords)
    {
        $this->documentRecords = $documentRecords->get();
    }

    public function render()
    {
        return view('livewire.components.document-table',[
            'documentRecords' => $this->documentRecords
        ]);
    }
}
