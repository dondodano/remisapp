<?php

namespace App\Http\Livewire\Presentation;


use App\Models\Repository\Presentation;
use App\Models\Attachment\PresentationFile;
use App\Http\Livewire\Traits\RepositoryIndex;

class Index extends RepositoryIndex
{
    public $presentationId;

    public function updatedSearch()
    {
        $searchValue = "%".$this->search."%";
        $this->all->where('date_presented', 'like', $searchValue)
            ->orWhere('title', 'like', $searchValue)
            ->orWhere('author', 'like', $searchValue)
            ->orWhere('forum', 'like', $searchValue)
            ->orWhere('venue', 'like', $searchValue);
    }

    public function getAllProperty()
    {
        $all = Presentation::with(['type','attachments','evaluations' => function($query){
            $query->where('is_read',0);
        }]);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $all = $all->where('owner', sessionGet('id'));
        }

        return $all->where('quarter', $this->quarter)->where('year', $this->year);
    }

    public function download($id)
    {

        $zip_file = '';
        $files = PresentationFile::where('presentation_id', decipher($id))->get();
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
        $this->presentationId = $newId;

        sweetalert()
            ->confirmButtonText('Confirm')
            ->showDenyButton(true, 'Cancel')
            ->addInfo('Are you sure do you want to remove ' . Presentation::findOrFail($newId)->title .'?');
    }

    public function sweetalertConfirmed(array $payload)
    {
        $delete = Presentation::findOrFail($this->presentationId);
        if($delete->owner !== sessionGet('id'))
        {
            return abort('404');
        }
        $delete->delete();

        $this->presentationId = null;
        $this->all;
    }

    public function sweetalertDenied(array $payload)
    {
        $this->all;
    }

    public function render()
    {
        return view('livewire.presentation.index',[
            'presentations' => $this->all->orderBy('id', 'desc')->paginate($this->paginate)
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
