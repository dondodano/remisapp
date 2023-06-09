<?php

namespace App\Http\Livewire\Research;

use App\Models\Repository\Research;
use App\Models\Attachment\ResearchFile;
use App\Models\Misc\Miscellaneous as Fund;
use App\Models\Misc\Miscellaneous as Status;
use App\Http\Livewire\Traits\RepositoryIndex;
use App\Models\Evaluation\ResearchEvaluation;
use App\Models\Misc\Miscellaneous as Category;


class Index extends RepositoryIndex
{
    public $researchId;
    public $filterCategory = null, $filterFund = null, $filterStatus = null;


    public function updatedSearch()
    {
        $searchValue = "%".$this->search."%";
        $this->all->where('project', 'like', $searchValue)->where('active',1);
    }

    public function getAllProperty()
    {
        $data = Research::with(['category', 'fund', 'research_status', 'evaluations'=>function($query){
            $query->where('is_read',0);
        }])->repositoryOwner()
            ->when($this->filterCategory, function($query){
                if(strlen($this->filterCategory) > 0)
                    return $query->where('category_id', $this->filterCategory)->where('active',1);
            })
            ->when($this->filterFund, function($query){
                if(strlen($this->filterFund) > 0)
                    return $query->where('fund_id', $this->filterFund)->where('active',1);
            })
            ->when($this->filterStatus, function($query){
                if(strlen($this->filterStatus) > 0)
                    return $query->where('status_id', $this->filterStatus)->where('active',1);
            });

        return $data;
    }

    public function resetFilter()
    {
        $this->filterCategory = "";
        $this->filterFund =  "";
        $this->filterStatus =  "";
    }

    public function updatedFilterCategory()
    {
        $this->all;
    }

    public function updatedFilterFund()
    {
        $this->all;
    }

    public function updatedFilterStatus()
    {
        $this->all;
    }

    public function download($id)
    {

        $zip_file = '';
        $files = ResearchFile::where('research_id', decipher($id))->get();
        try{
            $zip_file = 'download-'. time().'.zip';
            $zip = new ZipArchive();
            if($zip->open($zip_file, ZipArchive::CREATE  | ZipArchive::OVERWRITE) == TRUE)
            {
                foreach($files as $file)
                {

                    $filePath = realpath(public_path() . '/storage'. '/'.  $file->file);
                    $zip->addFile($filePath, basename($file->file));
                }

                $zip->close();
            }



        }catch(Exception $e)
        {
            report($e);
        }

        logUserActivity(request(),
            'User ['.sessionGet('id').'] downloaded Research document with ID => ['.decipher($id).']');

        return response()->download($zip_file, $zip_file, [
            'Content-Type' => 'application/zip',
            'Content-Disposition' => 'attachment; filename="'.$zip_file.'"',
        ])->deleteFileAfterSend(true);
    }

    public function delete($id)
    {
        $newId = decipher($id);
        $this->trainingId = $newId;

        sweetalert()
            ->confirmButtonText('Confirm')
            ->showDenyButton(true, 'Cancel')
            ->addInfo('Are you sure do you want to remove ' . Research::findOrFail($newId)->title .'?');
    }

    public function sweetalertConfirmed(array $payload)
    {
        $delete = Research::findOrFail($this->trainingId);
        if($delete->owner !== sessionGet('id'))
        {
            return abort('404');
        }
        $delete->delete();

        $this->researchId = null;
        $this->all;
    }

    public function sweetalertDenied(array $payload)
    {
        $this->all;
    }

    public function render()
    {
        return view('livewire.research.index',[
            'researches' => $this->all->latest()->paginate($this->paginate),
            'categories' => Category::where('group', 'projectcategory')->get(),
            'funds' => Category::where('group', 'fundclass')->get(),
            'research_statuses' => Category::where('group', 'projectstatus')->get(),
        ])
        ->extends('layouts.master', [
            'title' => 'REMIS - Research'
        ])
        ->section('site-content');

    }


}
