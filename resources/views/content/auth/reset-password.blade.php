@extends('layouts.authentications', ['title' => 'Reset Password'])

@section('auth-content')
    <h4 class="mb-2">Reset Password</h4>
    <p class="mb-4">for {{ $email }}</p>

    <form id="formAuthentication" class="mb-3" action="/reset-password/{{ $token }}" method="POST">
        @csrf
        @method('PUT')

        <input name="email" type="hidden" value="{{ $email }}"/>

        <div class="mb-3 form-password-toggle fv-plugins-icon-container">
            <label class="form-label" for="password">New Password</label>
            <div class="input-group input-group-merge has-validation">
                <input type="password" id="password" class="form-control" name="password" aria-describedby="password">
                <span class="input-group-text cursor-pointer">
                    <i class="bx bx-hide"></i>
                </span>
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <div class="mb-3 form-password-toggle fv-plugins-icon-container">
            <label class="form-label" for="confirm-password">Confirm Password</label>
            <div class="input-group input-group-merge has-validation">
                <input type="password" id="confirm-password" class="form-control" name="confirm-password" aria-describedby="password">
                <span class="input-group-text cursor-pointer">
                    <i class="bx bx-hide"></i>
                </span>
            </div>
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>

        <button class="btn btn-primary d-grid w-100 mb-3" type="submit" name="submit">
            Set new password
        </button>
    </form>

    <div class="text-center">
        <a href="/login" class="d-flex align-items-center justify-content-center">
            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
            Back to login
        </a>
    </div>
@endsection
