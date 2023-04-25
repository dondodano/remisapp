<?php

namespace App\Jobs;

use App\Models\User\User;
use App\Models\User\UserRole;
use App\Models\User\UserToken;
use App\Mail\UserCredentialMailer;
use Illuminate\Support\Facades\Mail;
use App\Events\SendMailToUserCredentialEvent;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMailLaterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $newId;

    public function __construct($id)
    {
        $this->newId = decipher($id);
        $this->user = User::findOrFail($this->newId);
    }


    public function handle()
    {
        try{

            $token = token();

            $userToken = UserToken::create([
                'user_id' => $this->newId,
                'token' => $token
            ]);

            Mail::to($this->user->email)
                ->send(new UserCredentialMailer([
                    'recipient' => $this->user->firstname.' '.$this->user->lastname,
                    'email' => $this->user->email,
                    'token' => $token
                ]));

            toastr("Credentail of [<strong>".$this->user->firstname.' '.$this->user->lastname."</strong>] successfully sent!", "success");

        }catch(Exception $e)
        {
            toastr("Unable to send mail to [<strong>".$this->user->firstname.' '.$this->user->lastname."</strong>]!", "error");
            event(new SendMailToUserCredentialEvent(encipher($this->newId)));
        }
    }

}
