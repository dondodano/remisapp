<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Cache;
use App\Models\Setting\General;

class WebiconController extends Controller
{
    public function index(){
        return view('content.setting.webicon.index');
    }

    public function update(Request $request)
    {
        // Path
        $path = 'webicon/';
        $location = 'public/' . $path;

        // File
        $attachment_file = null;
        $attachment_file_original_name = null;
        $attachment_file_name = null;

        // NewFileName
        $newName = null;

        // Check if has file
        $file_has_attachment = $request->hasFile('image');

        // Validation
        if($file_has_attachment == true)
        {
            $attachment_file = $request->file('image');
            //$attachment_file_name = $attachment_file->getClientOriginalName();
            $attachment_file_name = $attachment_file->hashName();

            $attachment_file->storeAs($path, $attachment_file_name, 'public');


            $webPath = $path . $attachment_file_name;

            if(General::count() == 0)
            {
               $web_icon_store = General::firstOrCreate([
                   'web_icon' => $webPath
               ]);
               $web_icon_store->save();

               if($web_icon_store){
                   session(['webicon' => $webPath]);

                    Cache::forget('webicon');
                    Cache::rememberForever('webicon', function() use ($webPath){
                        return ['path' => $webPath];
                    });

                   toastr("File successfully uploaded!", "success");
                   return back();
               }else{
                   toastr("Unable to upload web icon!", "warning");
                   return back();
               }
           }else{
               $web_icon_update = General::findOrFail(1);
               $web_icon_update->update([
                   'web_icon' => $webPath
               ]);

               if($web_icon_update){
                   session(['webicon' => $webPath]);

                    Cache::forget('webicon');
                    Cache::rememberForever('webicon', function() use ($webPath){
                        return ['path' => $webPath];
                    });

                   toastr("Fav icon successfully updated!", "info");
                   return back();
               }else{
                   toastr("Unable to update web icon!", "warning");
                   return back();
               }

               toastr("Data => " . $web_icon_update, "warning");
               return back();
           }

        }
    }


}
