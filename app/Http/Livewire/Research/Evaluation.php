<?php

namespace App\Http\Livewire\Research;

use Livewire\Component;


use App\Models\Repository\Research;
use Illuminate\Support\Facades\Gate;
use App\Models\Misc\Miscellaneous as Fund;
use App\Models\Misc\Miscellaneous as Status;
use App\Models\Evaluation\ResearchEvaluation;
use App\Models\Misc\Miscellaneous as Category;
use App\Http\Livewire\Traits\RepositoryEvaluation;

class Evaluation extends RepositoryEvaluation
{
    public $researchId;

    public function mount($id)
    {
        $this->isEditting = false;
        $this->researchId = $id;
        $this->all;

        $this->evaluationItems();
    }

    public function getAllProperty()
    {
        return Research::with(['attachments', 'evaluations' => function($query){
            $query->with('evaluators')->where('active',1)->orderBy('date_modified', 'DESC');
        }, 'file_owner'])->repositoryOwner()->findOrFail($this->researchId);
    }

    public function save()
    {
        if(strlen($this->evaluation) == 0) return;

        if($this->isEditting == false)
        {
            $evaluate = ResearchEvaluation::create([
                'research_id' => $this->researchId,
                'evaluator_id' => sessionGet('id'),
                'evaluation' => $this->evaluation,
            ]);
            $evaluate->save();

            $this->evaluation = null;

            if($evaluate)
                logUserActivity(request(), 'User ['.sessionGet('id').'] made Evaluation on Research with ID => ['.$this->researchId.']');

        }else{
            $evaluate = ResearchEvaluation::findOrFail($this->evaluationEditId);
            $evaluate->update([
                'evaluation' => $this->evaluation,
                'date_modified' => setTimestamp()
            ]);

            if($evaluate)
                $this->isEditting = false;
                $this->evaluation = null;
                $this->evaluationEditId = null;
                logUserActivity(request(), 'User ['.sessionGet('id').'] updated Evaluation on Research with ID => ['.$this->researchId.']');
        }

        $this->all;
    }

    public function edit($id)
    {
        $newId = decipher($id);
        $this->evaluation = ResearchEvaluation::findOrFail($newId)->evaluation;
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
            ->addInfo('Are you sure do you want to remove ' . ResearchEvaluation::findOrFail($newId)->evaluation .'?');

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
        $delete = ResearchEvaluation::findOrFail($this->evaluationDeleteId);
        $delete->active = 0;
        $delete->update();

        logUserActivity(request(), 'User ['.sessionGet('id').'] deleted Research document evaluation with ID => ['.$this->evaluationDeleteId.']');

        $this->evaluationDeleteId = null;
        $this->all;
    }


    public function remark($isEvaluated)
    {
        $evaluationRemark = Research::findOrFail($this->researchId);
        $evaluationRemark->update([
            'is_evaluated' => $isEvaluated
        ]);

        $this->evaluationItems();


        $this->all;
        logUserActivity(request(), 'User ['.sessionGet('id').'] changed Evaluation remark to ['.$isEvaluated.'] on Research with ID => ['.$this->researchId.']');

        toastr('Evaluation remark updated!', 'info');
    }

    public function evaluationItems()
    {
        ResearchEvaluation::where('research_id','=', $this->researchId)
            ->update(['is_read' => 1]);
    }

    public function render()
    {
        return view('livewire.research.evaluation',[
            'researchModel' => $this->all,
            'statuses' => Status::where('group', 'projectstatus')->get(),
            'fundtypes' => Fund::where('group', 'fundclass')->get(),
            'categories' => Category::where('group', 'projectcategory')->get(),
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
