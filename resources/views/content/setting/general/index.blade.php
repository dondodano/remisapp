@extends('layouts.master')

@section('site-content')



<div class="row">
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">General</h5>
            </div>
            <div class="card-body">
                <form action="/general/update" method="post">
                    @csrf

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="title">Site Title</label>
                        <div class="col-sm-10">
                            <input type="text" id="title" class="form-control" name="title" value="{{ $general_setting->site_title }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="sitedefinition">Site Definition</label>
                        <div class="col-sm-10">
                            <textarea id="sitedefinition" class="form-control" name="sitedefinition">{{ $general_setting->site_definition }}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="entity">Entity Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="entity" class="form-control" name="entity" value="{{ $general_setting->entity_name }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="entitydefinition">Entity Definition</label>
                        <div class="col-sm-10">
                            <textarea id="entitydefinition" class="form-control" name="entitydefinition">{{ $general_setting->entity_definition }}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="appurl">App URL</label>
                        <div class="col-sm-10">
                            <input type="text" id="appurl" class="form-control" name="appurl" value="{{ $general_setting->app_url }}">
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
