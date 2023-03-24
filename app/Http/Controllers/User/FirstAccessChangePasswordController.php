<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\User\User;
use App\Models\User\UserToken;
use Illuminate\Support\Facades\Hash;

class FirstAccessChangePasswordController extends Controller
{
    public function index($token)
    {
        if(Auth::check())
        {
            return abort(404);
        }


        $auth = UserToken::with('user')->where('token', decipher($token))->where('active',1);

        if(!$auth->exists()){
            return abort(404);
        }

        return view('content.change_password.index',[
            'user' => $auth->first()
        ]);
    }


    public function update(Request $request, $token)
    {

        $password = $request->input('password');
        $confirm = $request->input('confirm-password');

        if(strlen($password) == 0 || strlen($confirm) == 0 )
        {
            toastr('Please fill all fields requird', 'error');
            return back();
        }

        if(strlen($password) < 4 || strlen($confirm) < 4 )
        {
            toastr('Password should be 4 or more chacacters!', 'error');
            return back();
        }

        if($password != $confirm)
        {
            toastr('Password mismatched!', 'error');
            return back();
        }

        $userToken = UserToken::where('token', decipher($token))->where('active',1);


        $user = User::findOrFail($userToken->first()->user_id);
        $user->update([
            'password' => Hash::make($password)
        ]);


        $userToken->update(['active' => 0]);

        if($user)
            toastr('Password successfully updated!', 'success');
            return redirect('/login');

    }

}
