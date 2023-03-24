<?php

namespace App\Http\Livewire\Presentation;

use Livewire\Component;
use App\Models\Repository\Presentation;
use App\Models\Evaluation\PresentationEvaluation;

class Evaluation extends Component
{
    public $presentationId; // get presentation id
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
        $this->presentationId = $id;
        $this->evaluationItems();
        $this->all;
    }

    public function getAllProperty()
    {
        return Presentation::with(['attachments', 'evaluations' => function($query){
            $query->with('evaluators')->where('active',1)->orderBy('date_modified', 'DESC');
        }])->findOrFail($this->presentationId);
    }

    public function save()
    {
        if(strlen($this->evaluation) == 0) return;

        if($this->isEditting == false)
        {
            $evaluate = PresentationEvaluation::create([
                'presentation_id' => $this->presentationId,
                'evaluator_id' => sessionGet('id'),
                'evaluation' => $this->evaluation,
            ]);
            $evaluate->save();

            $this->evaluation = null;

            if($evaluate)
                logUserActivity(request(), 'User ['.sessionGet('id').'] made Evaluation on Presentation with ID => ['.$this->presentationId.']');

        }else{
            $evaluate = PresentationEvaluation::findOrFail($this->evaluationEditId);
            $evaluate->update([
                'evaluation' => $this->evaluation,
                'date_modified' => setTimestamp()
            ]);

            if($evaluate)
                $this->isEditting = false;
                $this->evaluation = null;
                $this->evaluationEditId = null;
                logUserActivity(request(), 'User ['.sessionGet('id').'] updated Evaluation on Presentation with ID => ['.$this->presentationId.']');
        }

        $this->all;
    }

    public function edit($id)
    {
        $newId = decipher($id);
        $this->evaluation = PresentationEvaluation::findOrFail($newId)->evaluation;
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
            ->addInfo('Are you sure do you want to remove ' . PresentationEvaluation::findOrFail($newId)->evaluation .'?');

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
        $delete = PresentationEvaluation::findOrFail($this->evaluationDeleteId);
        $delete->active = 0;
        $delete->update();

        logUserActivity(request(), 'User ['.sessionGet('id').'] deleted Presentation document evaluation with ID => ['.$this->evaluationDeleteId.']');

        $this->evaluationDeleteId = null;
        $this->all;
    }

    public function sweetalertDenied(array $payload)
    {
        $this->all;
    }

    public function remark($isEvaluated)
    {
        $evaluationRemark = Presentation::findOrFail($this->presentationId);
        $evaluationRemark->update([
            'is_evaluated' => $isEvaluated
        ]);

        $this->evaluationItems();


        $this->all;
        logUserActivity(request(), 'User ['.sessionGet('id').'] changed Evaluation remark to ['.$isEvaluated.'] on Presentation with ID => ['.$this->presentationId.']');

        toastr('Evaluation remark updated!', 'info');
    }


    public function evaluationItems()
    {
        PresentationEvaluation::where('presentation_id','=', $this->presentationId)
            ->update(['is_read' => 1]);
    }

    public function render()
    {
        return view('livewire.presentation.evaluation',[
            'presentation' => $this->all
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
