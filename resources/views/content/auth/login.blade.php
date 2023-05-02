@extends('layouts.authentications', ['title' => 'REMIS - Login'])

@section('auth-content')
    <h4 class="mb-2">Welcome to SPAMAST - REMIS!</h4>
    <p class="mb-4">Please sign-in to your account.</p>

    <form id="formAuthentication" class="mb-3" action="{{ route('login.submit') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus/>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
            </div>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" name="signin" type="submit">Sign in</button>
        </div>
    </form>

    <div class="text-center ">
        <a href="/forgot-password" class="mt-3">
            Forgot Password?
        </a>

        <br/>

        <br/>

        <p class="text-center">
            <span>Don't have account?</span>
            <a href="/register">
              <span>Click here to register</span>
            </a>
        </p>

        <div class="divider my-4">
            <div class="divider-text">
                <i class='bx bx-dots-horizontal'></i>
            </div>
        </div>


        <a href="/home" class="btn btn-secondary">
            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i> Back to public
        </a>
    </div>

@endsection
