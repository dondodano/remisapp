@extends('layouts.master')


@section('site-header')
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/datatables/dataTables.bootstrap5.min.css') }}"/>
@endsection

@section('site-content')

<div class="row">
    <div class="col-md-12">

        <div class="card mb-4">
            <h5 class="card-header">
                Institute list
                <div class="float-end">
                    <a href="/rc/create" class="btn btn-sm btn-primary">
                        <i class="bx bx-plus"></i> Add New Institute
                    </a>
                </div>
            </h5>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover datatable" id="datatable">
                        <thead class="table-light">
                            <tr>
                                <th>Term</th>
                                <th>Definition</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($responsibilitycenters as $responsibilitycenter )
                                <tr>
                                    <td>{{ $responsibilitycenter->term }}</td>
                                    <td>{{ $responsibilitycenter->definition }}</td>

                                    <td>
                                        @if($responsibilitycenter->status == 1)
                                            <i class='bx bx-check-circle text-success' title="Active"></i>
                                        @else
                                            <i class='bx bx-x-circle text-danger' title="Inactive"></i>
                                        @endif
                                    </td>

                                    <td>
                                        <div class="d-inline-block text-nowrap">
                                            <a href="/rc/edit/{{ $responsibilitycenter->id }}" class="btn btn-sm btn-icon" title="Edit">
                                                <i class="bx bx-edit"></i>
                                            </a>
                                            <form action="/rc/delete/{{ $responsibilitycenter->id }}" method="post" class="btn-icon">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-sm " title="Delete" type="submit" name="delete[]"><i class="bx bx-trash"></i></button>
                                            </form>
                                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            {!! statusActionControlV2($responsibilitycenter->id, $responsibilitycenter->status, 'rc') !!}
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
