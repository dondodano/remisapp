<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User\User;
use App\Models\User\UserRole;
use App\Models\User\UserTempAvatar;


/**
 * This Controller is DEPRECIATED
 * Developer used LIVEWIRE instead
 */

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['user_role', 'temp_avatar'])->where('id', '<>', sessionGet('id'))->where('active',1)->get();
        return view('content.user.index', ['users' => $users]);
    }

    public function create()
    {
        return view('content.user.create', ['roles' => UserRole::where('active',1)->get()]);
    }

    public function store(Request $request)
    {
        $firstname = $request->input('firstname');
        $middlename = $request->input('middlename');
        $lastname = $request->input('lastname');
        $extension = $request->input('extension');
        $title = $request->input('title');

        $email = $request->input('email');
        $password = $request->input('password');
        $role = $request->input('role');

        if(strlen($email) == 0 || strlen($role) == 0 ||
        strlen($firstname) == 0 || strlen($lastname) == 0  )
        {
            toastr("Please fill all fields required!", "error");
            return back();
        }else{

            $emailAddress = filter_var($email, FILTER_SANITIZE_EMAIL);

            if(!filter_var( $emailAddress, FILTER_VALIDATE_EMAIL) )
            {
                session([
                    'input.email' => $email,
                    'input.password' => $password,
                    'input.role' => $role,
                    'input.firstname' => $firstname,
                    'input.middlename' => $middlename,
                    'input.lastname' => $lastname,
                    'input.extension' => $extension,
                    'input.title' => $title,
                ]);

                toastr("Invalid email address", "error");
                return back();
            }else{

                $user = User::firstOrCreate([
                    'firstname' => $firstname,
                    'middlename' => inValidateNull($middlename),
                    'lastname' => $lastname,
                    'extension' => inValidateNull($extension),
                    'title' => inValidateNull($title),

                    'email' => $email,
                    'password' => (strlen($password) > 0 ? md5($password) : null) ,
                    'role_id' => partialIntValue($role),
                ]);
                $user->save();


                $userTempAvatar = UserTempAvatar::create([
                    'user_id' => $user->id,
                    'avatar' => '<span class="avatar-initial rounded-circle '.bgSwitch().'">'.getFirstLettersOfName($firstname, $lastname).'</span>'
                ]);
                $userTempAvatar->save();

                if($user)
                    logUserActivity($request, 'Created new user with ID = ['.$user->id.']');
                    sessionForget([
                        'input.email',
                        'input.password',
                        'input.role',
                        'input.firstname',
                        'input.middlename',
                        'input.lastname',
                        'input.extension',
                        'input.title',
                    ]);
                    toastr("User successfully saved!", "success");
                    return back();
            }

        }


    }

    public function edit($id)
    {
        $user = User::with('user_role')->findOrFail($id);
        return view('content.user.edit', ['user' => $user, 'roles' => UserRole::where('active',1)->get()]);
    }

    public function update(Request $request, $id)
    {
        $firstname = $request->input('firstname');
        $middlename = $request->input('middlename');
        $lastname = $request->input('lastname');
        $extension = $request->input('extension');
        $title = $request->input('title');

        $email = $request->input('email');
        $password = $request->input('password');
        $role = $request->input('role');

        if(strlen($email) == 0 || strlen($role) == 0 ||
        strlen($firstname) == 0 || strlen($lastname) == 0  )
        {
            toastr("Please fill all fields required!", "error");
            return back();
        }else{

            $emailAddress = filter_var($email, FILTER_SANITIZE_EMAIL);

            if(!filter_var( $emailAddress, FILTER_VALIDATE_EMAIL) )
            {
                toastr("Invalid email address", "error");
                return back();
            }else{


                $newPassword = strlen($password) == 0 ? sessionGet('input.password') : md5($password);

                $user = User::findOrFail($id);
                $user->update([
                    'firstname' => $firstname,
                    'middlename' => inValidateNull($middlename),
                    'lastname' => $lastname,
                    'extension' => inValidateNull($extension),
                    'title' => inValidateNull($title),

                    'email' => $email,
                    'password' => $newPassword,
                    'role_id' => $role,
                ]);

                if($user)
                    logUserActivity($request, 'Updated user with ID = ['.$user->id.']');
                    sessionForget([
                        'input.password',
                    ]);
                    toastr("User successfully updated!", "info");
                    return back();
            }

        }


    }

    public function status($id, $action)
    {
        $user = User::findOrFail($id);

        if($action == 'active')
        {
            $user->status = 1;
        }else{
            $user->status = 0;
        }

        $user->date_modified = setTimestamp();
        $user->update();

        toastr("Status updated!", "info");
        return back();
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->active = 0;
        $user->date_modified = setTimestamp();
        $user->update();

        if($user)
            toastr("User [<strong>".$user->firstname.' '.$user->lastname."</strong>] successfully removed!", "info");
            return back();

    }


}
