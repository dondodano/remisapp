@extends('layouts.singleton')

@section('singleton-content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">

            <!-- Reset Password -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="{{ config('app.url') }}" class="app-brand-link gap-2">
                            <span class="demo text-body fw-bolder" style="font-size:1.75rem;">{{ config('app.name') }}</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Change Password</h4>
                    <p class="mb-4">for <span class="fw-bold">{{ $user->user->email }}</span></p>
                    <form id="formAuthentication" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework" action="/change-password/{{ encipher($user->token) }}" method="POST" novalidate="novalidate">
                        @csrf
                        @method('PUT')
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
                            Update password
                        </button>
                        <div class="text-center">
                            <a href="/login">
                                <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                                Back to login
                            </a>
                        </div>
                    <input type="hidden">
                    </form>
                </div>
            </div>
            <!-- /Reset Password -->

        </div>
    </div>
  </div>
@endsection
