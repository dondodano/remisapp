@extends('layouts.authentications', ['title' => 'Configuration'])

@section('auth-content')
<h4 class="mb-2">REMIS Configuration</h4>
<p class="mb-4">Please click the button to optimize system files.</p>
<form id="formAuthentication" class="mb-3" action="/deploy" method="POST">
    @csrf
    <div class="mb-5 mt-5">
        <button class="btn btn-primary d-grid w-100" name="deploy" type="submit">Deploy Now</button>
    </div>
</form>
@endsection
