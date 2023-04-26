<?php

namespace App\Http\Livewire\Training;

use Livewire\Component;
use App\Models\Repository\Training;
use App\Models\Evaluation\TrainingEvaluation;
use App\Http\Livewire\Traits\RepositoryEvaluation;

class Evaluation extends RepositoryEvaluation
{
    public $trainingId; // get training id

    public function mount($id)
    {
        $this->quarter = getCurrentQuarter()['value'];
        $this->year = getCurrentYear()['value'];

        $this->isEditting = false;
        $this->trainingId = $id;
        $this->all;

        $this->evaluationItems();
    }

    public function getAllProperty()
    {
        return Training::with(['quality','attachments', 'evaluations' => function($query){
            $query->with('evaluators')->where('active',1)->orderBy('date_modified', 'DESC');
        }])->where('quarter', $this->quarter)->where('year', $this->year)->findOrFail($this->trainingId);
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

        $this->evaluationDeleteId = null;
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
