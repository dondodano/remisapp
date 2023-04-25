<?php

namespace App\Http\Livewire\Training;

use ZipArchive;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Repository\Training;
use App\Models\Attachment\TrainingFile;


class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 10;
    public $search = "";
    public $trainingId;

    protected $listeners = [
        'sweetalertConfirmed',
        'sweetalertDenied',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedSearch()
    {
        $searchValue = "%".$this->search."%";
        $this->all->where('title', 'like', $searchValue)
            ->orWhere('date_from', 'like', $searchValue)
            ->orWhere('date_to', 'like', $searchValue)
            ->orWhere('duration', 'like', $searchValue)
            ->orWhere('no_fo_trainees', 'like', $searchValue)
            ->orWhere('no_fo_trainees_surveyed', 'like', $searchValue);
    }

    public function getAllProperty()
    {
        $all = Training::with(['quality','attachments','evaluations' => function($query){
            $query->where('is_read',0);
        }]);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $all = $all->where('owner', sessionGet('id'));
        }

        return $all;
    }

    public function download($id)
    {

        $zip_file = '';
        $files = TrainingFile::where('training_id', decipher($id))->get();
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
            ->addInfo('Are you sure do you want to remove ' . Training::findOrFail($newId)->title .'?');
    }

    public function sweetalertConfirmed(array $payload)
    {
        $delete = Training::findOrFail($this->trainingId);
        if($delete->owner !== sessionGet('id'))
        {
            return abort('404');
        }
        $delete->delete();

        $this->trainingId = null;
        $this->all;
    }

    public function sweetalertDenied(array $payload)
    {
        $this->all;
    }

    public function render()
    {
        return view('livewire.training.index',[
            'trainings' => $this->all->orderBy('id', 'desc')->paginate($this->paginate)
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
