<?php

namespace App\Http\Livewire\Publication;

use App\Models\Repository\Publication;
use App\Models\Attachment\PublicationFile;
use App\Http\Livewire\Traits\RepositoryIndex;

class Index extends RepositoryIndex
{
    public $publicationId;


    public function updatedSearch()
    {
        $searchValue = "%".$this->search."%";
        $this->all->where('date_published', 'like', $searchValue)
            ->orWhere('title', 'like', $searchValue)
            ->orWhere('author', 'like', $searchValue)
            ->orWhere('publisher', 'like', $searchValue)
            ->orWhere('volume', 'like', $searchValue)
            ->orWhere('issue', 'like', $searchValue)
            ->orWhere('page', 'like', $searchValue);
    }

    public function getAllProperty()
    {
        $all = Publication::with(['evaluations' => function($query){
            $query->where('is_read',0);
        }]);

        return $all->repositoryOwner();
    }


    public function download($id)
    {

        $zip_file = '';
        $files = PublicationFile::where('publication_id', decipher($id))->get();
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
        $this->publicationId = $newId;

        sweetalert()
            ->confirmButtonText('Confirm')
            ->showDenyButton(true, 'Cancel')
            ->addInfo('Are you sure do you want to remove ' . Publication::findOrFail($newId)->title .'?');
    }

    public function sweetalertConfirmed(array $payload)
    {
        $delete = Publication::findOrFail($this->publicationId);
        if($delete->owner !== sessionGet('id'))
        {
            return abort('404');
        }
        $delete->delete();

        $this->publicationId = null;
        $this->all;
    }

    public function sweetalertDenied(array $payload)
    {
        $this->all;
    }

    public function render()
    {
        return view('livewire.publication.index',[
            'publications' => $this->all->orderBy('id', 'desc')->paginate($this->paginate)
        ])
        ->extends('layouts.master', [
            'title' => 'REMIS - Publication'
        ])
        ->section('site-content');
    }
}
