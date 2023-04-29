@component('mail::message')
<strong>Password Reset</strong>
<br/>
<p>Good day!</p>
<br/>
<p>This is to acknowledge your request to reset your password in order to access {{ config('app.name') }}.</p>
<br/>
<br/>
<p>Click here to reset your password.</p>
@component('mail::button', ['url' => config('app.url').'/reset-password' .'/' . $data['token'], 'color' => 'success'])
Click here to Login
@endcomponent
<br/>
<br/>
Thanks,
<br/>
{{ config('app.name') }}
@endcomponent
