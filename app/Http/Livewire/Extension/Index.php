<?php

namespace App\Http\Livewire\Extension;

use ZipArchive;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Repository\Extension;
use App\Models\Attachment\ExtensionFile;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 10;
    public $search = "";
    public $extensionId;

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
        $this->all->where('extension', 'like', $searchValue)
            ->orWhere('date_from', 'like', $searchValue)
            ->orWhere('date_to', 'like', $searchValue)
            ->orWhere('quantity', 'like', $searchValue)
            ->orWhere('beneficiaries', 'like', $searchValue);
    }

    public function getAllProperty()
    {
        $all = Extension::with(['attachments','evaluations' => function($query){
            $query->where('is_read',0);
        }])->where('active',1);

        if(!in_array(strtolower(sessionGet('role')), ['super', 'admin']))
        {
            $all = $all->where('owner', sessionGet('id'));
        }

        return $all;
    }

    public function download($id)
    {

        $zip_file = '';
        $files = ExtensionFile::where('extension_id', decipher($id))->get();
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
        $this->extensionId = $newId;

        sweetalert()
            ->confirmButtonText('Confirm')
            ->showDenyButton(true, 'Cancel')
            ->addInfo('Are you sure do you want to remove ' . Extension::findOrFail($newId)->title .'?');
    }

    public function sweetalertConfirmed(array $payload)
    {
        $delete = Extension::findOrFail($this->extensionId);
        if($delete->owner !== sessionGet('id'))
        {
            return abort('404');
        }
        $delete->active = 0;
        $delete->update();

        $this->extensionId = null;
        $this->all;
    }

    public function sweetalertDenied(array $payload)
    {
        $this->all;
    }

    public function render()
    {
        return view('livewire.extension.index',[
            'extensions' => $this->all->orderBy('id', 'desc')->paginate($this->paginate)
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
