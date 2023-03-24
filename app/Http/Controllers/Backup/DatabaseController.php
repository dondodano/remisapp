<?php

namespace App\Http\Controllers\Backup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Storage;
use Illuminate\Support\Facades\Artisan;

class DatabaseController extends Controller
{
    public function index()
    {
        $files = []; $fileExtension = 'sql';
        $scan_files = scandir(public_path() . '/storage/database/');

        foreach($scan_files as $file)
        {
            if(!is_dir($file))
            {
                $get = pathinfo($file);
                if($get["extension"] == $fileExtension)
                {
                    array_push($files, [
                        'filename' => $file,
                        'location' => public_path() . '/storage/database/' . $file
                    ]);
                }
            }
        }


        return view('content.backup.database.index', [ 'files' => $files ]);
    }

    public function create()
    {
        Artisan::call('backup:db');

        toastr("Database backup successfully created!", "success");
        return back();
    }

    public function download($file)
    {
        return Storage::download('public/database/' . $file);
    }

    public function delete($file)
    {
        $file_path = 'public/database/' . $file;

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
