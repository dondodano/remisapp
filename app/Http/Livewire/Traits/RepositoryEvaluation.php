<?php

namespace App\Http\Livewire\Traits;

use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class RepositoryEvaluation extends Component
{
    use AuthorizesRequests;

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
