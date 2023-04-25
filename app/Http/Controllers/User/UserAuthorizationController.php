<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\User\User;
use App\Models\User\UserToken;


class UserAuthorizationController extends Controller
{
    public function index($token)
    {
        if(Auth::check())
        {
            return abort(404);
        }

        $auth = UserToken::where('token', $token)->where('active',1);
        if($auth->exists())
        {
            return redirect('/change-password'.'/'.$token);
        }else{
            return view('content.invalid_token.index');
        }
    }
}
