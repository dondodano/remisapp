<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use Response;
use App\Models\User\User;
use App\Models\Log\LogUser;
use App\Models\Setting\General;

use Auth;
use Cache;


class AuthController extends Controller
{
    public function index()
    {
        return view('content.auth.login');
    }

    public function signin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        /*if(strlen($email) == 0 || strlen($password) == 0)
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
                $credentials = [
                    'email' => $request->email,
                    'password' => md5($request->password)
                ];

                if($this->attempt($credentials))
                {

                    $request->session()->regenerate();

                    $user = User::with(['user_role', 'temp_avatar'])->where(function($w) use ($credentials){
                        $w->where('active',1)->where('status',1);
                        $w->where('email', $credentials['email']);
                        $w->where('password', $credentials['password']);
                    })->first();

                    $fullName = [
                        'firstname' => $user->firstname,
                        'middlename' => $user->middlename,
                        'lastname' => $user->lastname,
                        'extension' => $user->extension,
                        'title' => $user->title
                    ];

                    session([
                        'session' => token(),
                        'id' => $user->id,
                        'email' => $user->email,
                        'password' => $user->password,
                        'role_id' => $user->role_id,
                        'role' => $user->user_role->term,
                        'avatar' => $user->avatar,
                        'temp_avatar' => !empty($user->temp_avatar) ? $user->temp_avatar->avatar : '',
                        'name_array' => $fullName,
                        'current_year' => setToday('Y'),
                        'favicon' => General::where('id', 1)->first()->fav_icon
                    ]);



                    $this->logUser($request, 1);

                    toastr("Welcome! You have successfully logged in.", "success");
                    return redirect()->intended('/dashboard');

                }else{
                    toastr("These credentials do not match our records.", "error");
                    return redirect("login");
                }

            }
        }*/

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            $fullName = [
                'firstname' => Auth::user()->firstname,
                'middlename' => Auth::user()->middlename,
                'lastname' => Auth::user()->lastname,
                'extension' => Auth::user()->extension,
                'title' => Auth::user()->title
            ];

            session([
                'session' => token(),
                'id' => Auth::user()->id,
                'email' => Auth::user()->email,
                'password' => Auth::user()->password,
                'role_id' => Auth::user()->role_id,
                'role' => Auth::user()->user_role->term,
                'avatar' => Auth::user()->avatar,
                'temp_avatar' => !empty(Auth::user()->temp_avatar) ? Auth::user()->temp_avatar->avatar : '',
                'name_array' => $fullName,
                'current_year' => setToday('Y'),
                'favicon' => General::where('id', 1)->first()->fav_icon
            ]);

            $this->logUser($request, 1);

            toastr("Welcome! You have successfully logged in.", "success");
            return redirect()->intended('/dashboard');


        }else{
            toastr("These credentials do not match our records.", "error");
            return redirect("login");
        }


    }

    public function attempt($credentials)
    {
        $user = User::where(function($w) use ($credentials){
            $w->where('active', 1)->where('status',1);
            $w->where('email', $credentials['email']);
            $w->where('password', $credentials['password']);
        })->exists();

        return $user;
    }

    public function signout(Request $request)
    {
        /**
         * Log User
         */
        $this->logUser($request, 0);

        Cache::put('user-' . Auth::user()->id, [
            'time' => now(),
            'isOnline' => 0
        ]);

        $request->session()->forget('session');
        $request->session()->invalidate();

        return redirect('/login');
    }

    public function logUser($request, $state)
    {
        $logUser = LogUser::create([
            'user_id' => sessionGet('id'),
            'ip_address' => $request->ip(),
            'agent' => $request->header('User-Agent'),
            'log_state' => $state
        ]);
        $logUser->save();
    }
}
