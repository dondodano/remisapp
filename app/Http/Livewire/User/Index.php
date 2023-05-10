<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User\User;

use Livewire\WithPagination;

use App\Models\User\UserRole;
use App\Jobs\SendMailLaterJob;
use App\Models\User\UserToken;
use App\Mail\UserCredentialMailer;
use Illuminate\Support\Facades\Mail;

use Illuminate\Database\Eloquent\Collection;
use App\Events\SendMailToUserCredentialEvent;

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
        // return User::with(['user_role' => function($query){
        //     $query->where('is_visible', '=',1);
        // }]);

        return User::with('user_role')->where('role_id', '<>', 1);
    }

    public function delete($id)
    {
        $newId = decipher($id);
        $user = User::findOrFail($newId);
        $user->delete();

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
                event(new SendMailToUserCredentialEvent($id));//dispatch(new SendMailLaterJob($id) );
                toastr("User [<strong>".$user->firstname." ".$user->last."</strong>] account successfully activated!", "info");
        }
    }

    public function send($id)
    {
        event(new SendMailToUserCredentialEvent($id));
       // dispatch(new SendMailLaterJob($id) );
    }

    public function render()
    {
        return view('livewire.user.index',[
            'users' =>  $this->all->latest()->paginate($this->paginate)
        ])
        ->extends('layouts.master')
        ->section('site-content');
        //->paginate($this->paginate)
    }
}
