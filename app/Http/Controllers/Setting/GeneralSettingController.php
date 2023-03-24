<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Setting\General;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $general_setting = General::count() > 0 ? General::first() : json_decode(json_encode([
            'site_title' => null,
            'site_definition' => null,
            'entity_name' => null,
            'entity_definition' => null,
            'app_url' => null
        ]));
        return view('content.setting.general.index', ['general_setting' => $general_setting]);
    }

    public function update(Request $request)
    {
        $title = $request->input('title');
        $sitedefinition = $request->input('sitedefinition');
        $entity = $request->input('entity');
        $entitydefinition = $request->input('entitydefinition');
        $appurl = $request->input('appurl');

        if(strlen($title) == 0 || strlen($sitedefinition) == 0 || strlen($entity) == 0 ||
        strlen($entitydefinition) == 0 || strlen($appurl) == 0)
        {
            toastr("Please fill all fields required!", "error");
            return back();
        }else{

            if(General::count() == 0)
            {
                $general_store = General::firstOrCreate([
                    'site_title' => $title,
                    'site_definition' => $sitedefinition,
                    'entity_name' => $entity,
                    'entity_definition' => $entitydefinition,
                    'app_url' => $appurl
                ]);
                $general_store->save();

                if($general_store){
                    logUserActivity($request, 'User ['.sessionGet('id').'] created new setting');
                    toastr("General setting successfully saved!", "success");
                    return back();
                }else{
                    toastr("Unable to save settings!", "warning");
                    return back();
                }

            }else{
                $general = General::findOrFail(1);
                $general->update([
                    'site_title' => $title,
                    'site_definition' => $sitedefinition,
                    'entity_name' => $entity,
                    'entity_definition' => $entitydefinition,
                    'app_url' => $appurl
                ]);

                if($general){
                    logUserActivity($request, 'User ['.sessionGet('id').'] updated setting');
                    toastr("General setting updated!", "info");
                    return back();
                }else{
                    toastr("Unable to update settings!", "warning");
                    return back();
                }
            }
        }
    }
}
