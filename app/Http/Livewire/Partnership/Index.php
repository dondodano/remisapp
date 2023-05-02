<?php

namespace App\Http\Livewire\Partnership;

use App\Models\Repository\Partnership;
use App\Models\Attachment\PartnershipFile;
use App\Http\Livewire\Traits\RepositoryIndex;

class Index extends RepositoryIndex
{

    public $partnershipId;

    public function updatedSearch()
    {
        $searchValue = "%".$this->search."%";
        $this->all->where('partner', 'like', $searchValue)
            ->orWhere('activity', 'like', $searchValue)
            ->orWhere('date_from', 'like', $searchValue)
            ->orWhere('date_to', 'like', $searchValue);
    }

    public function getAllProperty()
    {
        $all = Partnership::with(['attachments','evaluations' => function($query){
            $query->where('is_read',0);
        }]);

        return $all->repositoryOwner();
    }

    public function download($id)
    {

        $zip_file = '';
        $files = PartnershipFile::where('partnership_id', decipher($id))->get();
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
        $this->partnershipId = $newId;

        sweetalert()
            ->confirmButtonText('Confirm')
            ->showDenyButton(true, 'Cancel')
            ->addInfo('Are you sure do you want to remove ' . Partnership::findOrFail($newId)->title .'?');
    }

    public function sweetalertConfirmed(array $payload)
    {
        $delete = Partnership::findOrFail($this->partnershipId);
        if($delete->owner !== sessionGet('id'))
        {
            return abort('404');
        }
        $delete->delete();

        $this->partnershipId = null;
        $this->all;
    }

    public function sweetalertDenied(array $payload)
    {
        $this->all;
    }

    public function render()
    {
        return view('livewire.partnership.index',[
            'partnerships' => $this->all->orderBy('id', 'desc')->paginate($this->paginate)
        ])
        ->extends('layouts.master', [
            'title' => 'Research - Partnership'
        ])
        ->section('site-content');
    }
}
