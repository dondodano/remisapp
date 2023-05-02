<?php

namespace App\Http\Livewire\Publication;

use Livewire\Component;
use App\Models\Repository\Publication;
use App\Models\Evaluation\PublicationEvaluation;
use App\Http\Livewire\Traits\RepositoryEvaluation;


class Evaluation extends RepositoryEvaluation
{
    public $publicationId; // get publication id

    public function mount($id)
    {
        $this->isEditting = false;
        $this->publicationId = $id;
        $this->evaluationItems();

        $this->all;
    }

    public function getAllProperty()
    {
        return Publication::with(['attachments', 'evaluations' => function($query){
            $query->with('evaluators')->where('active',1)->orderBy('date_modified', 'DESC');
        }])->repositoryOwner()->findOrFail($this->publicationId);
    }

    public function save()
    {
        if(strlen($this->evaluation) == 0) return;

        if($this->isEditting == false)
        {
            $evaluate = PublicationEvaluation::create([
                'publication_id' => $this->publicationId,
                'evaluator_id' => sessionGet('id'),
                'evaluation' => $this->evaluation,
            ]);
            $evaluate->save();

            $this->evaluation = null;

        }else{
            $evaluate = PublicationEvaluation::findOrFail($this->evaluationEditId);
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
        $this->evaluation = PublicationEvaluation::findOrFail($newId)->evaluation;
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
            ->addInfo('Are you sure do you want to remove ' . PublicationEvaluation::findOrFail($newId)->evaluation .'?');

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
        $delete = PublicationEvaluation::findOrFail($this->evaluationDeleteId);
        $delete->active = 0;
        $delete->update();

        $this->evaluationDeleteId = null;
        $this->all;
    }

    public function remark($isEvaluated)
    {
        $evaluationRemark = Publication::findOrFail($this->publicationId);
        $evaluationRemark->update([
            'is_evaluated' => $isEvaluated
        ]);

        $this->evaluationItems();

        $this->all;

        toastr('Evaluation remark updated!', 'info');
    }

    public function evaluationItems()
    {
        PublicationEvaluation::where('publication_id','=', $this->publicationId)
            ->update(['is_read' => 1]);
    }

    public function render()
    {
        return view('livewire.publication.evaluation',[
            'publication' => $this->all
        ])
        ->extends('layouts.master', [
            'title' => 'Research - Evaluation'
        ])
        ->section('site-content');
    }
}
