<?php

namespace App\Http\Livewire\Training;

use Livewire\Component;
use App\Models\Repository\Training;
use App\Models\Evaluation\TrainingEvaluation;

class Evaluation extends Component
{
    public $trainingId; // get training id
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
        $this->trainingId = $id;
        $this->all;

        $this->evaluationItems();
    }

    public function getAllProperty()
    {
        return Training::with(['quality','attachments', 'evaluations' => function($query){
            $query->with('evaluators')->where('active',1)->orderBy('date_modified', 'DESC');
        }])->findOrFail($this->trainingId);
    }

    public function save()
    {
        if(strlen($this->evaluation) == 0) return;

        if($this->isEditting == false)
        {
            $evaluate = TrainingEvaluation::create([
                'training_id' => $this->trainingId,
                'evaluator_id' => sessionGet('id'),
                'evaluation' => $this->evaluation,
            ]);
            $evaluate->save();

            $this->evaluation = null;

            if($evaluate)
                logUserActivity(request(), 'User ['.sessionGet('id').'] made Evaluation on Training with ID => ['.$this->trainingId.']');

        }else{
            $evaluate = TrainingEvaluation::findOrFail($this->evaluationEditId);
            $evaluate->update([
                'evaluation' => $this->evaluation,
                'date_modified' => setTimestamp()
            ]);

            if($evaluate)
                $this->isEditting = false;
                $this->evaluation = null;
                $this->evaluationEditId = null;
                logUserActivity(request(), 'User ['.sessionGet('id').'] updated Evaluation on Training with ID => ['.$this->trainingId.']');
        }

        $this->all;
    }

    public function edit($id)
    {
        $newId = decipher($id);
        $this->evaluation = TrainingEvaluation::findOrFail($newId)->evaluation;
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
            ->addInfo('Are you sure do you want to remove ' . TrainingEvaluation::findOrFail($newId)->evaluation .'?');

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
        $delete = TrainingEvaluation::findOrFail($this->evaluationDeleteId);
        $delete->active = 0;
        $delete->update();

        logUserActivity(request(), 'User ['.sessionGet('id').'] deleted Training document evaluation with ID => ['.$this->evaluationDeleteId.']');

        $this->evaluationDeleteId = null;
        $this->all;
    }

    public function sweetalertDenied(array $payload)
    {
        $this->all;
    }

    public function remark($isEvaluated)
    {
        $evaluationRemark = Training::findOrFail($this->trainingId);
        $evaluationRemark->update([
            'is_evaluated' => $isEvaluated
        ]);

        $this->evaluationItems();


        $this->all;
        logUserActivity(request(), 'User ['.sessionGet('id').'] changed Evaluation remark to ['.$isEvaluated.'] on Training with ID => ['.$this->trainingId.']');

        toastr('Evaluation remark updated!', 'info');
    }

    public function evaluationItems()
    {
        TrainingEvaluation::where('training_id','=', $this->trainingId)
            ->update(['is_read' => 1]);
    }

    public function render()
    {
        return view('livewire.training.evaluation',[
            'trainingModel' => $this->all
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
