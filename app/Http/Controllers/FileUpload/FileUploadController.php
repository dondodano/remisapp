<?php

namespace App\Http\Controllers\FileUpload;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Storage;
use App\Models\FileUpload\TemporaryFile;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        // Refer to this syntax to copy the file
        // Storage::copy(
        //     'temp/'. $tempFile->folder .'/' . $tempFile->file,
        //     'attachment/'. token() .'/' . $tempFile->file
        // );


        // Refer to this syntax to delete temp folder after copying
        // Storage::deleteDirectory('temp/'. $tempFile->folder);

        if($request->hasFile('attachment'))
        {
            $file = $request->file('attachment');
            $fileName = $file->getClientOriginalName();
            $folder = uniqid('temp', true);
            $file->storeAs('temp/' . $folder, $fileName , 'public');

            TemporaryFile::create([
                'token' => sessionGet('user_upload_token_' . Auth::user()->id),
                'folder' => $folder,
                'file' => $fileName
            ]);

            return $folder;
        }
        return '';
    }

    public function undo()
    {
        $tempFile = TemporaryFile::where('folder', request()->getContent())->first();
        if($tempFile)
        {
            Storage::disk('public')->deleteDirectory('temp/'. $tempFile->folder);
            $tempFile->delete();
            return response('');
        }
    }
}
