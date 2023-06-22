@extends('layouts.authentications', ['title' => 'REMIS - Register User', 'style' => "style=max-width:600px!important;"])

@section('auth-content')

<h4 class="mb-2">Register Account</h4>
<p class="mb-4">Please fill required fields.</p>

<form class="mb-3" action="/register" method="post" enctype="multipart/form-data" autocomplete="off">

    @csrf

    <h6 class="mb-b fw-semibold">1. Account Details</h6>
    <div class="mb-3">
        <label for="email" class="form-label">Email <strong class="text-danger">*</strong></label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus/>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3 form-password-toggle fv-plugins-icon-container">
        <label class="form-label" for="password">Password <strong class="text-danger">*</strong></label>
        <div class="input-group input-group-merge has-validation">
            <input type="password" id="password" class="form-control" name="password" placeholder="············" aria-describedby="password">
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="fv-plugins-message-container invalid-feedback"></div>
    </div>

    <div class="mb-3">
        <label for="center" class="form-label">Responsibility Center <strong class="text-danger">*</strong></label>
        <select  id="center" class="form-select" name="center" >
            <option value="0">-- Select Responsibility Center --</option>
            @foreach($centers as $center)
                <option value="{{ $center->id }}" selected>{{ $center->term }}</option>
            @endforeach
        </select>
        @error('institute')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <hr class="my-4 mx-n4">

    <h6 class="mb-3 fw-semibold">2. Personal Info</h6>
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name <strong class="text-danger">*</strong></label>
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Required"/>
        @error('firstname')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="middlename" class="form-label">Middle Name</label>
        <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Required"/>
        @error('middlename')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name <strong class="text-danger">*</strong></label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Required"/>
        @error('lastname')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="extension" class="form-label">Extension</label>
        <input type="text" class="form-control" id="extension" name="extension" placeholder="Required"/>
        @error('extension')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" name="submit" type="submit">Register</button>
    </div>


    <p class="text-center">
        <span>Already have account?</span>
        <a href="/login">
          <span>Click here to login</span>
        </a>
    </p>

</form>

<div class="text-center">
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
