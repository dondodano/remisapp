<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Jobs\SendMailLaterJob;
use App\Mail\ForgotPasswordMailer;
use App\Models\User\PasswordReset;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('content.auth.forgot-password');
    }

    public function send(Request $request)
    {
        $request->validate(['email' =>  'required|email']);

        $email = $request->input('email');
        $token = token();

        PasswordReset::create([
            'email' => $email,
            'token' => $token,
        ]);

        Mail::to($email)
            ->send(new ForgotPasswordMailer([
                'email' => $email,
                'token' => $token
            ]));

        toastr('Please check your email!', 'info');
    }


}
