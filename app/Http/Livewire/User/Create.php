<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

use App\Models\User\User;
use App\Models\User\UserRole;
use App\Models\User\UserTempAvatar;

class Create extends Component
{

    /**
     * @password =
     */

    public $email, $password, $role;
    public $firstname, $middlename, $lastname, $extension, $title;

    public function getRolesProperty()
    {
        return UserRole::where('is_visible',1)->get();
    }

    public function store()
    {
        if(strlen($this->email) == 0  || strlen($this->role) == 0 || strlen($this->firstname) == 0 ||
        strlen($this->middlename) == 0 || strlen($this->lastname) == 0 )
        {
            toastr("Please fill all required fields!", "error");
            return ;
        }


        $emailAddress = filter_var($this->email, FILTER_SANITIZE_EMAIL);
        if(!filter_var( $emailAddress, FILTER_VALIDATE_EMAIL) )
        {
            toastr("Invalid email address", "error");
            return ;
        }

        $user = User::firstOrCreate([
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'extension' => $this->extension,
            'title' => $this->title,
            'email' => $this->email,
            'password' => (strlen($this->password) > 0 ? bcrypt($this->password) : null),
            'role_id' => $this->role,
        ]);
        $user->save();

        $tempAvatar = UserTempAvatar::firstOrCreate([
            'user_id' => $user->id,
            'avatar' =>  '<span class="avatar-initial rounded-circle '.bgSwitch().'">'.getFirstLettersOfName($this->firstname, $this->lastname).'</span>'
        ]);

        if($user)
            logUserActivity(request(), 'Created new user with ID = ['.$user->id.']');
            toastr("User successfully saved!", "success");
            $this->email=null;
            $this->password=null;
            $this->role=null;
            $this->firstname=null;
            $this->middlename=null;
            $this->lastname=null;
            $this->extension=null;
            $this->title=null;
    }

    public function render()
    {
        return view('livewire.user.create',[
            'roles' => $this->roles
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
