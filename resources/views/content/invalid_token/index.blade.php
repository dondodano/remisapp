@extends('layouts.authentications', ['title' => 'Invalid Token'])

@section('auth-content')
    <h3 class="mb-2 text-danger">Invalid Authentication</h3>
    <p>Ooops! The account you try to access is invalid.</p>
    <a class="btn btn-primary my-3" href="javascript:history.back()">
        Return
    </a>
@endsection
