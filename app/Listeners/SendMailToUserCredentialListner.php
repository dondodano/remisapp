<?php

namespace App\Listeners;


use App\Models\User\User;
use App\Models\User\UserRole;
use App\Models\User\UserToken;
use App\Mail\UserCredentialMailer;
use Illuminate\Support\Facades\Mail;
use App\Events\SendMailToUserCredentialEvent;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendMailToUserCredentialListner
{

    public function __construct()
    {

    }


    public function handle(SendMailToUserCredentialEvent $event)
    {
        try{

            $token = token();

            $userToken = UserToken::create([
                'user_id' => $event->newId,
                'token' => $token
            ]);

            Mail::to($event->user->email)
                ->send(new UserCredentialMailer([
                    'recipient' => $event->user->firstname.' '.$event->user->lastname,
                    'email' => $event->user->email,
                    'token' => encipher($token)
                ]));

                toastr("Credentail of [<strong>".$event->user->firstname.' '.$event->user->lastname."</strong>] successfully sent!", "success");

        }catch(Exception $e)
        {
            toastr("Unable to send mail to [<strong>".$event->user->firstname.' '.$event->user->lastname."</strong>]!", "error");
        }
    }
}
