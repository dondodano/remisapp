<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;
use Response;
use App\Models\User\User;
use App\Models\Log\LogUser;
use App\Models\Setting\General;
use App\Events\PusherNotificationEvent;

use Auth;
use Cache;


class AuthController extends Controller
{
    public function index()
    {
        // $webIcon = 'images/default_logo';
        // if(Cache::get('webicon'))
        // {
        //     $webIcon = Cache::get('webicon')['path'];
        // }

        return view('content.auth.login');
        // ,[
        //     'webicon' => getFileShortLocation($webIcon)
        // ]);
    }

    public function signin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->input('remember');

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $email,
            'password' => $password,
            'status' => '1'
        ], $remember)) {
            $request->session()->regenerate();


            $fullName = [
                'firstname' => Auth::user()->firstname,
                'middlename' => Auth::user()->middlename,
                'lastname' => Auth::user()->lastname,
                'extension' => Auth::user()->extension,
                'title' => Auth::user()->title
            ];

            $webIcon = General::where('id', 1)->first()->fav_icon;

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
                'webicon' => $webIcon,
                'responsibility_center' => [
                    'id' => Auth::user()->responsibility_center_id,
                    'name' => Auth::user()->with('user_responsibility_center')->first()->user_responsibility_center->term
                ]
            ]);

            $this->logUser($request, 1);

            Cache::rememberForever('webicon', function() use ($webIcon){
                return ['path' => $webIcon];
            });

            event(new PusherNotificationEvent('UserOnlineStatus'));



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
        if(Auth::check())
        {
            $this->logUser($request, 0);

            Cache::put('user-' . Auth::user()->id, [
                'time' => now(),
                'isOnline' => 0
            ]);

            event(new PusherNotificationEvent('UserOnlineStatus'));
        }

        $request->session()->forget('session');
        $request->session()->invalidate();


        Auth::logout();

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
