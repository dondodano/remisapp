<?php

namespace App\Http\Controllers\Log;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Log\LogUserActivity;

class LogUserActivityController extends Controller
{
    public function index()
    {

        $logUserActivities = LogUserActivity::with('user')->orderBy('id', 'desc')->get();

        return view('content.log.user_activity.index', ['logUserActivities' =>  $logUserActivities]);
    }
}
