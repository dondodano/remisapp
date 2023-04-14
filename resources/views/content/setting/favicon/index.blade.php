@extends('layouts.master')

@section('site-content')
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Fav Icon</h5>
                </div>
                <div class="card-body">
                    <form action="/favicon/update" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="siteicon">Site Icon</label>
                            <div class="col-sm-10">
                                <img src="{{ getFileShortLocation(sessionGet('favicon')) }}" width="96" />
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="image">Upload Image</label>
                            <div class="col-sm-10">
                                <input type="file" id="image" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                <button type="reset" class="btn btn-label-secondary" name="cancel">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
