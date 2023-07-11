@extends('layouts.master')

@section('site-content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">
                    My Profile
                </h5>
                <form class="card-body" method="post" action="/my/profile" enctype="multipart/form-data">

                    @csrf

                    <h6 class="mb-b fw-semibold">1. Avatar</h6>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" >Avatar</label>
                        <div class="col-sm-9">
                            {!! avatar("avatar-xl") !!}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="avatar">Upload</label>
                        <div class="col-sm-9">
                            <input type="file" id="avatar" class="form-control"  name="avatar" >
                        </div>
                    </div>

                    <hr class="my-4 mx-n4">

                    <h6 class="mb-b fw-semibold">2. Profile details</h6>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="fullname">Full Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="fullname" class="form-control" placeholder="Faculty" name="fullname" value="{{ fullName() }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="role">Role</label>
                        <div class="col-sm-9">
                            <input type="text" id="role" class="form-control" placeholder="Faculty" name="role" value="{{ sessionGet('role') }}" disabled>
                        </div>
                    </div>

                    <hr class="my-4 mx-n4">

                    <h6 class="mb-3 fw-semibold">3. Personal Information</h6>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="firstname">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="firstname" class="form-control" name="firstname" value="{{ sessionGet('name_array')['firstname'] }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="middlename">Middle Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="middlename" class="form-control" name="middlename"  value="{{ sessionGet('name_array')['middlename'] }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="lastname">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="lastname" class="form-control" name="lastname"  value="{{ sessionGet('name_array')['lastname'] }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="extension">Extension</label>
                        <div class="col-sm-9">
                            <input type="text" id="extension" class="form-control" name="extension"  value="{{ sessionGet('name_array')['extension'] }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="title">Title</label>
                        <div class="col-sm-9">
                            <input type="text" id="title" class="form-control" name="title"  value="{{ sessionGet('name_array')['title'] }}">
                        </div>
                    </div>

                    <hr class="my-4 mx-n4">

                    <h6 class="mb-3 fw-semibold">4. Credential</h6>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label text-sm-end" for="email">Email</label>
                        <div class="col-sm-9">
                            <input type="text" id="email" class="form-control" name="email"  value="{{ sessionGet('email') }}">
                        </div>
                    </div>

                    <div class="pt-4">
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary me-sm-2 me-1" name="submit">Submit</button>
                                <button type="reset" class="btn btn-label-secondary" name="cancel">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
