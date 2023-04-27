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

        $favIcon = 'images/default_logo';

        if(Cache::get('favicon'))
        {
            $favIcon = Cache::get('favicon')['path'];
        }

        return view('content.auth.login',[
            'favicon' => getFileShortLocation($favIcon)
        ]);
    }

    public function signin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $email,
            'password' => $password,
            'status' => '1'
        ])) {
            $request->session()->regenerate();


            $fullName = [
                'firstname' => Auth::user()->firstname,
                'middlename' => Auth::user()->middlename,
                'lastname' => Auth::user()->lastname,
                'extension' => Auth::user()->extension,
                'title' => Auth::user()->title
            ];

            $favIcon = General::where('id', 1)->first()->fav_icon;

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
                'favicon' => $favIcon
            ]);

            $this->logUser($request, 1);

            Cache::rememberForever('favicon', function() use ($favIcon){
                return ['path' => $favIcon];
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
        $this->logUser($request, 0);

        Cache::put('user-' . Auth::user()->id, [
            'time' => now(),
            'isOnline' => 0
        ]);

        event(new PusherNotificationEvent('UserOnlineStatus'));

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
