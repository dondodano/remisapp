<?php

namespace App\Http\Controllers\Log;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Log\LogUser;

class LogUserController extends Controller
{
    public function index()
    {
        $logs = LogUser::with(['user'])->orderBy('id', 'desc');
        return view('content.log.user.index', ['logs' =>  $logs]);
    }
}
