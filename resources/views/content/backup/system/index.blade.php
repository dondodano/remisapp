@extends('layouts.master')


@section('site-content')
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4">
                <h5 class="card-header">
                    System backup list
                    <div class="float-end">
                        <a href="/system-backup/create" class="btn btn-sm btn-primary">
                            <i class="bx bx-plus"></i> Create Backup
                        </a>
                    </div>
                </h5>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover datatable" id="datatable">
                            <thead class="table-light">
                                <tr>
                                    <th>File</th>
                                    <th>Size</th>
                                    <th>Date Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($files as $file)
                                    <tr>
                                        <td>{{ $file['filename'] }}</td>
                                        <td>{{ getFileSize(filesize($file['location'])) }}</td>
                                        <td>{{ date("M. d, Y h:i:s A", filectime($file["location"])) }}</td>
                                        <td>
                                            <div class="d-inline-block text-nowrap">
                                                <a href="/system-backup/download/{{ $file['filename'] }}" class="btn btn-sm btn-icon" title="Download">
                                                    <i class="bx bx-download"></i>
                                                </a>

                                                <form action="/system-backup/delete/{{ $file['filename'] }}" method="post" class="btn-icon">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-sm " title="Delete" type="submit" name="delete[]"><i class="bx bx-trash"></i></button>
                                                </form>
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

@push('header-0')
    @once
        <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/datatables/dataTables.bootstrap5.min.css') }}"/>
    @endonce
@endpush

@push('footer-0')
    @once
        <script src="{{ asset('/assets/vendor/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('/assets/vendor/libs/datatables/dataTables.bootstrap5.min.js') }}"></script>
    @endonce
@endpush


@push('footer-1')
    @once
        <script>
            $(document).ready(function(){ $('#datatable').DataTable() })
        </script>
    @endonce
@endpush
