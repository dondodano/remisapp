<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

use App\Models\User\User;
use App\Models\User\UserRole;
use App\Models\User\UserTempAvatar;

class Edit extends Component
{
    public $user;
    public $email, $password, $role;
    public $firstname, $middlename, $lastname, $extension, $title;

    public function getRolesProperty()
    {
        return UserRole::where('is_visible',1)->get();
    }

    public function mount($id)
    {
        $this->user = User::findOrFail($id);

        $this->email = $this->user->email;
        $this->password = $this->user->password;
        $this->role = $this->user->role_id;

        $this->firstname = $this->user->firstname;
        $this->middlename = $this->user->middlename;
        $this->lastname = $this->user->lastname;
        $this->extension = $this->user->extension;
    }

    public function update()
    {
        if(strlen($this->email) == 0 || strlen($this->password) == 0 || strlen($this->role) == 0 || strlen($this->firstname) == 0 ||
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

        $update = $this->user;
        $update->update([
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'extension' => $this->extension,
            'title' => $this->title,
            'email' => $this->email,
            'password' => $this->password,
            'role_id' => $this->role,
        ]);

        $tempAvatar = UserTempAvatar::where('user_id', $this->user->id);
        $tempAvatar->update([
            'avatar' =>  '<span class="avatar-initial rounded-circle '.bgSwitch().'">'.getFirstLettersOfName($this->firstname, $this->lastname).'</span>'
        ]);

        if($update)
            logUserActivity(request(), 'Updated user with ID = ['.$this->user->id.']');
            toastr("User successfully updated!", "success");
    }

    public function render()
    {
        return view('livewire.user.edit',[
            'roles' => $this->roles
        ])
        ->extends('layouts.master')
        ->section('site-content');
    }
}
