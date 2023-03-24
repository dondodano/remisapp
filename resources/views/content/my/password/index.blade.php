@extends('layouts.master')

@section('site-content')


<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <h5 class="card-header">
                My Password
            </h5>
            <form class="card-body" method="post" action="/my/password">

                @csrf

                <h6 class="mb-b fw-semibold">1. Account Details</h6>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="role">Role</label>
                    <div class="col-sm-9">
                        <input type="text" id="role" class="form-control" placeholder="Faculty" name="role" value="{{ fullName() }}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="role">Role</label>
                    <div class="col-sm-9">
                        <input type="text" id="role" class="form-control" placeholder="Faculty" name="role" value="{{ sessionGet('role') }}" disabled>
                    </div>
                </div>

                <hr class="my-4 mx-n4">

                <h6 class="mb-3 fw-semibold">2. Password</h6>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="current-password">Current Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="current-password" class="form-control" name="current-password" >
                    </div>
                </div>

                <div class="divider divider-dashed">
                    <div class="divider-text">
                        <i class="bx bx-lock-alt"></i>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="new-password">New Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="new-password" class="form-control" name="new-password"  value="">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label text-sm-end" for="confirm-password">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="confirm-password" class="form-control" name="confirm-password"  value="">
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
