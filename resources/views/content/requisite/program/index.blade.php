@extends('layouts.master')


@section('site-header')
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/datatables/dataTables.bootstrap5.min.css') }}"/>
@endsection

@section('site-content')

<div class="row">
    <div class="col-md-12">

        <div class="card mb-4">
            <h5 class="card-header">
                Program list
                <div class="float-end">
                    <a href="/program/create" class="btn btn-sm btn-primary">
                        <i class="bx bx-plus"></i> Add New Program
                    </a>
                </div>
            </h5>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover datatable" id="datatable">
                        <thead class="table-light">
                            <tr>
                                <th>Institute</th>
                                <th>Term</th>
                                <th>Definition</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($programs as $program )
                                <tr>
                                    <td>{{ $program->institute->term }}</td>
                                    <td>{{ $program->term }}</td>
                                    <td>{{ $program->definition }}</td>

                                    <td>
                                        @if($program->status == 1)
                                            <i class='bx bx-check-circle text-success' title="Active"></i>
                                        @else
                                            <i class='bx bx-x-circle text-danger' title="Inactive"></i>
                                        @endif
                                    </td>

                                    <td>
                                        <div class="d-inline-block text-nowrap">
                                            <a href="/program/edit/{{ $program->id }}" class="btn btn-sm btn-icon" title="Edit">
                                                <i class="bx bx-edit"></i>
                                            </a>
                                            <form action="/program/delete/{{ $program->id }}" method="post" class="btn-icon">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-sm " title="Delete" type="submit" name="delete[]"><i class="bx bx-trash"></i></button>
                                            </form>
                                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            {!! statusActionControlV2($program->id, $program->status, 'program') !!}
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection


@section('site-footer-0')
    <script src="{{ asset('/assets/vendor/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/libs/datatables/dataTables.bootstrap5.min.js') }}"></script>
@endsection



@section('site-footer-1')
<script>
    $(document).ready(function(){ $('#datatable').DataTable() })
</script>
@endsection
