<?php

namespace App\Http\Controllers\Backup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;

class SystemController extends Controller
{
    public function index()
    {
        if(!Storage::exists('/public/backups/'))
        {
            Storage::makeDirectory( '/public/backups/');
        }

        $files = []; $fileExtension = 'zip';
        $scan_files = scandir(public_path() . '/storage/backups/');

        foreach($scan_files as $file)
        {
            if(!is_dir($file))
            {
                $get = pathinfo($file);
                if($get["extension"] == $fileExtension)
                {
                    array_push($files, [
                        'filename' => $file,
                        'location' => public_path() . '/storage/backups/' . $file
                    ]);
                }
            }
        }


        return view('content.backup.system.index', [ 'files' => $files ]);
    }

    public function download($file)
    {
        return Storage::download('public/backups/' . $file);
    }

    public function delete($file)
    {
        $file_path = 'public/backups/' . $file;

        if(Storage::disk('local')->exists($file_path))
        {

            if(Storage::disk('local')->exists($file_path))
            {
                if(Storage::delete($file_path) == 1)
                {
                    toastr("File <strong>[".$file."]</strong> successfully deleted!", "success");
                    return back();
                }
            }else{
                toastr("File does not exist!", "error");
                return back();
            }
        }else{
            toastr("File does not exist!", "error");
            return back();
        }

    }
}
