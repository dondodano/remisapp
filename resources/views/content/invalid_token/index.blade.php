@extends('layouts.singleton')

@section('singleton-content')
<div class="authentication-wrapper authentication-basic px-4">
    <div class="authentication-inner">
        <!-- Verify Email -->
        <div class="card">
            <div class="card-body text-center">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                    <a href="{{ config('app.url') }}" class="app-brand-link gap-2">
                        <span class="demo text-body fw-bolder" style="font-size:1.75rem;">{{ config('app.name') }}</span>
                    </a>
                </div>
                <!-- /Logo -->
                <h3 class="mb-2 text-danger">Invalid Authentication</h3>
                <p>Ooops! The account you try to access is invalid.</p>
                <a class="btn btn-primary my-3" href="javascript:history.back()">
                    Return
                </a>
            </div>
        </div>
        <!-- /Verify Email -->
    </div>
</div>
@endsection
