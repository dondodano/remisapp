<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Cache;
use App\Models\Setting\General;

class WebiconController extends Controller
{
    public function index(){
        return view('content.setting.favicon.index');
    }

    public function update(Request $request)
    {
        // Path
        $path = 'favicon/';
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


            $favPath = $path . $attachment_file_name;

            if(General::count() == 0)
            {
               $fav_icon_store = General::firstOrCreate([
                   'fav_icon' => $favPath
               ]);
               $fav_icon_store->save();

               if($fav_icon_store){
                   session(['favicon' => $favPath]);

                    Cache::forget('favicon');
                    Cache::rememberForever('favicon', function() use ($favPath){
                        return ['path' => $favPath];
                    });

                   toastr("File successfully uploaded!", "success");
                   return back();
               }else{
                   toastr("Unable to upload fav icon!", "warning");
                   return back();
               }
           }else{
               $fav_icon_update = General::findOrFail(1);
               $fav_icon_update->update([
                   'fav_icon' => $favPath
               ]);

               if($fav_icon_update){
                   session(['favicon' => $favPath]);

                    Cache::forget('favicon');
                    Cache::rememberForever('favicon', function() use ($favPath){
                        return ['path' => $favPath];
                    });

                   toastr("Fav icon successfully updated!", "info");
                   return back();
               }else{
                   toastr("Unable to update fav icon!", "warning");
                   return back();
               }

               toastr("Data => " . $fav_icon_update, "warning");
               return back();
           }

        }
    }


}
