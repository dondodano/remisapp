@component('mail::message')
<strong>New Account Information</strong>
<br/>
<p>Good day {{ isset($data['recipient']) ?  $data['recipient'] : null }}!</p>
<br/>
<p>For first time user, click the login button to access {{ config('app.name') }}.</p>
<p><i>Note : The method on logging in on your account will work for first time user or newly registered user to the system.</i></p>
<br/>
<br/>
@component('mail::button', ['url' => config('app.url').'/auth' .'/' . $data['token'], 'color' => 'success'])
Click here to Login
@endcomponent
<br/>
<br/>
Thanks,
<br/>
{{ config('app.name') }}
@endcomponent
