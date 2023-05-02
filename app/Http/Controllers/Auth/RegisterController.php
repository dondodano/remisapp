<?php

namespace App\Http\Controllers\Auth;

use App\Models\User\User;
use Illuminate\Http\Request;
use App\Models\User\UserRole;
use App\Models\Requisite\Institute;
use App\Models\User\UserTempAvatar;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('content.auth.register',[
            'roles' => UserRole::where('is_visible',1)->get(),
            'institutes' => Institute::activeStatus()->get()
        ]);
    }

    public function save(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'institute' => 'required',
            'firstname' => 'required',
            'lastname' => 'required'
        ]);

        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');

        $register = User::firstOrCreate([
            'firstname' => $firstName,
            'middlename' => $request->input('middlename'),
            'lastname' => $lastName,
            'extension' => $request->input('extension'),
            'title' => $request->input('title'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'institute_id' => $request->input('institute'),
            'role_id' => '3',
            'status' => '0'
        ]);
        $register->save();

        $tempAvatar = UserTempAvatar::firstOrCreate([
            'user_id' => $register->id,
            'avatar' =>  '<span class="avatar-initial rounded-circle '.bgSwitch().'">'.getFirstLettersOfName($firstName, $lastName).'</span>'
        ]);

        if($register)
            logUserActivity(request(), 'User ID = ['.$register->id.'] has registered');
            toastr("Account successfully registed! Please wait for the confirmation of your registration through email!", "success");
            return redirect()->intended('/login');
    }
}
