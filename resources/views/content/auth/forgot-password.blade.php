@extends('layouts.authentications', ['title' => 'Forgot Password'])

@section('auth-content')
    <h4 class="mb-2">Forgot Password?</h4>
    <p class="mb-4">Enter your email and we'll send you instructions to reset your password</p>

    <form id="formAuthentication" class="mb-3" action="/forgot-password" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email">Email</label>
            <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" name="reset-password" type="submit">Send Reset Link</button>
        </div>
    </form>

    <div class="text-center">
        <a href="/login" class="d-flex align-items-center justify-content-center">
            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
            Back to login
        </a>
    </div>
@endsection
