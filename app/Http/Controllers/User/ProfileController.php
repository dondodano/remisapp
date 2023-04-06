<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User\User;

class ProfileController extends Controller
{
    public function index()
    {
        return view('content.my.profile.index');
    }

    public function update(Request $request)
    {
        // Path
        $path = 'avatar/';
        $location = 'public/' . $path;
        // File
        $attachment_file = null;
        $attachment_file_original_name = null;
        $attachment_file_name = null;
        // NewFileName
        $newName = null;
        // Check if has file
        $file_has_attachment = $request->hasFile('avatar');
        // Validation
        if($file_has_attachment == true)
        {
            $attachment_file = $request->file('avatar');
            $attachment_file_name = $attachment_file->hashName();
            $attachment_file->storeAs($path, $attachment_file_name, 'public');
        }


        $firstname = $request->input('firstname');
        $middlename = $request->input('middlename');
        $lastname = $request->input('lastname');
        $extension = $request->input('extension');
        $title = $request->input('title');

        $email = $request->input('email');

        if(strlen($email) == 0 || strlen($firstname) == 0 || strlen($lastname) == 0  )
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
                $profile = User::findOrFail(sessionGet('id'));
                $profile->update([
                    'firstname' => $firstname,
                    'middlename' => inValidateNull($middlename),
                    'lastname' => $lastname,
                    'extension' => inValidateNull($extension),
                    'title' => inValidateNull($title),
                    'avatar' => $path . $attachment_file_name,
                    'email' => $email,
                ]);

                if($profile)
                {
                    session([
                        'avatar' => $path . $attachment_file_name,
                        'email' => $email,
                        'name_array' => [
                            'firstname' => $firstname,
                            'middlename' => $middlename,
                            'lastname' => $lastname,
                            'extension' => $extension,
                            'title' => $title
                        ],
                    ]);
                    logUserActivity($request, 'User ['.sessionGet('id').' updated profile ]');
                    toastr("Profile successfully updated!", "success");
                    return back();
                }else{
                    toastr("Unable to update profile!", "error");
                    return back();
                }
            }
        }
    }
}
