<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User\User;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function index()
    {
        return view('content.my.password.index');
    }

    public function update(Request $request)
    {

        /**
         * Important Notice : Bug in password. Find way to update password
         */

        $session_password = sessionGet('password'); // Hashed Already
        $current_password  =$request->input('current-password'); // Current Hashing
        $new_password = $request->input('new-password');
        $confirm_password = $request->input('confirm-password');

        if(strlen($current_password) == 0 || strlen($new_password) == 0 || strlen($confirm_password) == 0)
        {
            toastr("Please fill all fields!", "error");
            return back();
        }else{

            // if($current_password != $session_password)
            // {
            //     toastr("Invalid password!", "error");
            //     return back();
            // }

            if(!Hash::check($current_password, $session_password))
            {
                toastr("Invalid password!", "error");
                return back();
            }else{
                if($new_password != $confirm_password)
                {
                    toastr("Mismatched password!", "error");
                    return back();
                }else{
                    $user = User::findOrFail(sessionGet('id'));

                    $hashPassword =  bcrypt($new_password);

                    $user->update([
                        'password' => $hashPassword,
                        'date_modified' => setTimestamp()
                    ]);

                    if($user)
                    {
                        logUserActivity($request, 'User ['.sessionGet('id').' updated password ]');
                        session([ 'password' => $hashPassword ]);
                        toastr("Password successfully updated!", "success");
                        return back();
                    }else{
                        toastr("Unable to update password!", "error");
                        return back();
                    }
                }
            }
        }
    }
}
