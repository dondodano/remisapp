<?php

namespace App\Http\Livewire\Extension;

use Livewire\Component;
use App\Models\Repository\Extension;
use App\Models\Evaluation\ExtensionEvaluation;

class Evaluation extends Component
{
    public $extensionId; // get extension id
    public $evaluation; // get data from Textarea
    public $isEditting; // if current evaluation is in editting state
    public $evaluationEditId; // get selected id of evaluation
    public $evaluationDeleteId;

    protected $listeners = [
        'sweetalertConfirmed',
        'sweetalertDenied',
    ];

    public function mount($id)
    {
        $this->isEditting = false;
        $this->extensionId = $id;
        $this->all;

        $this->evaluationItems();
    }


    public function getAllProperty()
    {
        return Extension::with(['attachments', 'evaluations' => function($query){
            $query->with('evaluators')->where('active',1)->orderBy('date_modified', 'DESC');
        }])->findOrFail($this->extensionId);
    }

    public function save()
    {
        if(strlen($this->evaluation) == 0) return;

        if($this->isEditting == false)
        {
            $evaluate = ExtensionEvaluation::create([
                'extension_id' => $this->extensionId,
                'evaluator_id' => sessionGet('id'),
                'evaluation' => $this->evaluation,
            ]);
            $evaluate->save();

            $this->evaluation = null;

            if($evaluate)
                logUserActivity(request(), 'User ['.sessionGet('id').'] made Evaluation on Extension with ID => ['.$this->extensionId.']');

        }else{
            $evaluate = ExtensionEvaluation::findOrFail($this->evaluationEditId);
            $evaluate->update([
                'evaluation' => $this->evaluation,
                'date_modified' => setTimestamp()
            ]);

            if($evaluate)
                $this->isEditting = false;
                $this->evaluation = null;
                $this->evaluationEditId = null;
                logUserActivity(request(), 'User ['.sessionGet('id').'] updated Evaluation on Extension with ID => ['.$this->extensionId.']');
        }

        $this->all;
    }

    public function edit($id)
    {
        $newId = decipher($id);
        $this->evaluation = ExtensionEvaluation::findOrFail($newId)->evaluation;
        $this->isEditting = true;
        $this->evaluationEditId = $newId;
    }

    public function delete($id)
    {
        $newId = decipher($id);
        $this->evaluationDeleteId = $newId;

        sweetalert()
            ->confirmButtonText('Confirm')
            ->showDenyButton(true, 'Cancel')
            ->addInfo('Are you sure do you want to remove ' . ExtensionEvaluation::findOrFail($newId)->evaluation .'?');

    }

    public function cancel()
    {
        $this->isEditting = false;
        $this->evaluation = null;
        $this->evaluationEditId = null;
        $this->evaluationDeleteId = null;
    }

    public function sweetalertConfirmed(array $payload)
    {
        $delete = ExtensionEvaluation::findOrFail($this->evaluationDeleteId);
        $delete->active = 0;
        $delete->update();

        logUserActivity(request(), 'User ['.sessionGet('id').'] deleted Extension document evaluation with ID => ['.$this->evaluationDeleteId.']');

        $this->evaluationDeleteId = null;
        $this->all;
    }

    public function sweetalertDenied(array $payload)
    {
        $this->all;
    }

    public function remark($isEvaluated)
    {
        $evaluationRemark = Extension::findOrFail($this->extensionId);
        $evaluationRemark->update([
            'is_evaluated' => $isEvaluated
        ]);

        $this->evaluationItems();


        $this->all;
        logUserActivity(request(), 'User ['.sessionGet('id').'] changed Evaluation remark to ['.$isEvaluated.'] on Extension with ID => ['.$this->extensionId.']');

        toastr('Evaluation remark updated!', 'info');
    }


    public function evaluationItems()
    {
        ExtensionEvaluation::where('extension_id','=', $this->extensionId)
            ->update(['is_read' => 1]);
    }

    public function render()
    {
        return view('livewire.extension.evaluation',[
            'extensionModel' => $this->all
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
