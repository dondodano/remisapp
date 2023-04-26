<?php

namespace App\Http\Livewire\Traits;

use Livewire\Component;

class RepositoryEvaluation extends Component
{
    public $quarter;
    public $year;

    public $evaluation; // get data from Textarea
    public $isEditting; // if current evaluation is in editting state
    public $evaluationEditId; // get selected id of evaluation
    public $evaluationDeleteId;

    protected $listeners = [
        'sweetalertConfirmed',
        'sweetalertDenied',
    ];

    public function sweetalertDenied(array $payload)
    {
        $this->all;
    }

}
