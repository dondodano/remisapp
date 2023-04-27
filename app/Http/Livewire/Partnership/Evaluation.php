<?php

namespace App\Http\Livewire\Partnership;

use Livewire\Component;
use App\Models\Repository\Partnership;
use App\Models\Evaluation\PartnershipEvaluation;
use App\Http\Livewire\Traits\RepositoryEvaluation;

class Evaluation extends RepositoryEvaluation
{
    public $partnershipId; // get partnership id

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
        }])->repositoryOwner()->findOrFail($this->partnershipId);
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
