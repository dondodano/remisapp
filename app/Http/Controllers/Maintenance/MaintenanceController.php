<?php

namespace App\Http\Controllers\Maintenance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Artisan;

class MaintenanceController extends Controller
{
    public function index()
    {
        return view('content.maintenance.index');
    }

    public function update(Request $request)
    {

        $state = $request->input('switch');

        if($state == 'to-maintenance-mode')
        {
            Artisan::call('down --secret="system:up"');
            setMaintenance();

            toastr("System is in Maintenance Mode!", "info");
            return back();
        }else if($state == 'to-online-mode'){
            Artisan::call('up');
            liftMaintenance();

            toastr("System is restored online!", "success");
            return back();
        }else{
            toastr("Unknown error!", "error");
            return back();
        }
    }
}
