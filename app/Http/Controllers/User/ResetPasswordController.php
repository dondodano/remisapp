<?php

namespace App\Http\Controllers\User;

use App\Models\User\User;
use Illuminate\Http\Request;
use App\Models\User\PasswordReset;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function index($token)
    {
        $detail = PasswordReset::where('token', $token)->where('active',1);

        if(!$detail->exists())
        {
            return abort(404);
        }

        return view('content.auth.reset-password', [
            'email' => $detail->first()->email,
            'token' => $token
        ]);
    }

    public function reset(Request $request, $token)
    {
        $password = $request->input('password');
        $confirm = $request->input('confirm-password');

        if(strlen($password) == 0 || strlen($confirm) == 0)
        {
            toastr('Please fill all fields requird', 'error');
            return back();
        }

        if($password != $confirm)
        {
            toastr('Password mismatched!', 'error');
            return back();
        }

        $passwordResetModel = PasswordReset::where('token', $token);
        if(!$passwordResetModel->exists())
        {
            toastr('Invalid token!', 'error');
            return back();
        }

        $user = User::where('email', $passwordResetModel->first()->email)->update([
            'password' => Hash::make($confirm)
        ]);

        $passwordResetModel->update(['active' => 0]);

        if($user)
            toastr('Password successfully updated!', 'success');
            return redirect('/login');

    }
}
