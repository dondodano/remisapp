<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;

use App\Jobs\SendMailLaterJob;

use App\Models\User\User;
use App\Models\User\UserRole;
use App\Models\User\UserToken;
use App\Mail\UserCredentialMailer;
use Illuminate\Support\Facades\Mail;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 10;
    public $search = "";


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedSearch()
    {
        $searchValue = "%".$this->search."%";
        $this->all->where('firstname', 'like', $searchValue)
            ->orWhere('middlename', 'like', $searchValue)
            ->orWhere('lastname', 'like', $searchValue)
            ->orWhere('extension', 'like', $searchValue)
            ->orWhere('title', 'like', $searchValue)
            ->orWhere('email', 'like', $searchValue);
    }

    public function getAllProperty()
    {
        return User::with('user_role')->where('active',1);
    }

    public function delete($id)
    {
        $newId = decipher($id);
        $user = User::findOrFail($newId);
        $user->active = 0;
        $user->date_modified = setTimestamp();
        $user->update();

        if($user)
            toastr("User [<strong>".$user->firstname.' '.$user->lastname."</strong>] successfully removed!", "info");
    }

    public function deactive($id)
    {
        $newId = decipher($id);
        $user = User::findOrFail($newId);
        if($user->status == 1)
        {
            $user->status = 0;
            $user->date_modified = setTimestamp();
            $user->update();

            if($user)
                toastr("User [<strong>".$user->firstname." ".$user->last."</strong>] account  successfully deactivated!", "info");
        }
    }

    public function active($id)
    {
        $newId = decipher($id);
        $user = User::findOrFail($newId);

        if($user->status == 0)
        {
            $user->status = 1;
            $user->date_modified = setTimestamp();
            $user->update();

            if($user)
                toastr("User [<strong>".$user->firstname." ".$user->last."</strong>] account successfully activated!", "info");
        }
    }

    public function send($id)
    {
        // notyf()
        // ->ripple(false)
        // ->addInfo('Sending credential to email.');

        // $newId = decipher($id);
        // $user = User::findOrFail($newId);

        // try{

        //     $token = token();

        //     $userToken = UserToken::create([
        //         'user_id' => $newId,
        //         'token' => $token
        //     ]);

        //     Mail::to($user->email)
        //         ->send(new UserCredentialMailer([
        //             'recipient' => $user->firstname.' '.$user->lastname,
        //             'email' => $user->email,
        //             'token' => encipher($token)
        //         ]));

        //         toastr("Credentail of [<strong>".$user->firstname.' '.$user->lastname."</strong>] successfully sent!", "success");

        // }catch(Exception $e)
        // {
        //     toastr("Unable to send mail to [<strong>".$user->firstname.' '.$user->lastname."</strong>]!", "error");
        // }

        dispatch(new SendMailLaterJob($id) )->delay(now()->addMinute(1));

    }

    public function render()
    {
        return view('livewire.user.index',[
            'users' =>  $this->all->orderBy('id', 'desc')->paginate($this->paginate)
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
