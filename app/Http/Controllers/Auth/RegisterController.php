<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User\UserRole;
use App\Models\Requisite\Institute;
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

        toastr()->error('An error has occurred please try again later.');
        //return back();
    }
}
