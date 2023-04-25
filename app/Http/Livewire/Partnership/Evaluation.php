<?php

namespace App\Http\Livewire\Partnership;

use Livewire\Component;
use App\Models\Repository\Partnership;
use App\Models\Evaluation\PartnershipEvaluation;

class Evaluation extends Component
{
    public $partnershipId; // get partnership id
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
        $this->partnershipId = $id;
        $this->all;

        $this->evaluationItems();
    }

    public function getAllProperty()
    {
        return Partnership::with(['attachments', 'evaluations' => function($query){
            $query->with('evaluators')->where('active',1)->orderBy('date_modified', 'DESC');
        }])->findOrFail($this->partnershipId);
    }

    public function save()
    {
        if(strlen($this->evaluation) == 0) return;

        if($this->isEditting == false)
        {

            $evaluate = PartnershipEvaluation::create([
                'partnership_id' => $this->partnershipId,
                'evaluator_id' => sessionGet('id'),
                'evaluation' => $this->evaluation,
            ]);
            $evaluate->save();

            $this->evaluation = null;


        }else{
            $evaluate = PartnershipEvaluation::findOrFail($this->evaluationEditId);
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
        $this->evaluation = PartnershipEvaluation::findOrFail($newId)->evaluation;
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
            ->addInfo('Are you sure do you want to remove ' . PartnershipEvaluation::findOrFail($newId)->evaluation .'?');

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
        $delete = PartnershipEvaluation::findOrFail($this->evaluationDeleteId);
        $delete->active = 0;
        $delete->update();

        $this->evaluationDeleteId = null;
        $this->all;
    }

    public function sweetalertDenied(array $payload)
    {
        $this->all;
    }

    public function remark($isEvaluated)
    {
        $evaluationRemark = Partnership::findOrFail($this->partnershipId);
        $evaluationRemark->update([
            'is_evaluated' => $isEvaluated
        ]);

        $this->evaluationItems();


        $this->all;

        toastr('Evaluation remark updated!', 'info');
    }

    public function evaluationItems()
    {
        PartnershipEvaluation::where('partnership_id','=', $this->partnershipId)
            ->update(['is_read' => 1]);
    }

    public function render()
    {
        return view('livewire.partnership.evaluation',[
            'partnershipModel' => $this->all
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
