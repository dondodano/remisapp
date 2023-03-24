<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User\User;
use App\Mail\UserCredentialMailer;
use Illuminate\Support\Facades\Mail;


/**
 * This Controller is DEPRECIATED
 * Developer used LIVEWIRE instead
 */

class UserSendMailController extends Controller
{
    public function sendmail($id)
    {
        $user = User::findOrFail($id);
        try{
            Mail::to($user->email)
                ->send(new UserCredentialMailer([
                    'recipient' => $user->firstname.' '.$user->lastname,
                    'email' => $user->email,
                    'password' => 'iloveyou'
                ]));

                toastr("Credentail of [<strong>".$user->firstname.' '.$user->lastname."</strong>] successfully sent!", "success");
                return back();

        }catch(Exception $e)
        {
            toastr("Unable to send mail to [<strong>".$user->firstname.' '.$user->lastname."</strong>]!", "error");
            return back();
        }
    }


}
