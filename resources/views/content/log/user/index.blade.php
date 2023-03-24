@extends('layouts.master')


@section('site-header')
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/datatables/dataTables.bootstrap5.min.css') }}"/>
@endsection

@section('site-content')

<div class="row">
    <div class="col-md-12">

        <div class="card mb-4">
            <h5 class="card-header">
                User logs
            </h5>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover datatable" id="datatable">
                        <thead class="table-light">
                            <tr>
                                <th>Logged Date</th>
                                <th>State</th>
                                <th>Employee</th>
                                <th>IP Address</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($logs->get() as $log )
                                <tr>

                                    <td>{{ $log->log_date }}</td>
                                    <td>
                                        @if($log->log_state == 1)
                                            <i class='bx bx-log-in-circle text-success' title="Signed in"></i>
                                        @else
                                            <i class='bx bx-log-out-circle text-danger' title="Signed out"></i>
                                        @endif
                                    </td>

                                    <td>
                                            <div class="d-flex justify-content-start align-items-center user-name">
                                                <div class="avatar-wrapper">
                                                    <div class="avatar avatar-sm me-3">
                                                        <span class="avatar-initial rounded-circle {{ bgSwitch() }}">
                                                            {{ getFirstLettersOfName($log->user->firstname,$log->user->lastname) }}
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="/edit/1" class="text-body text-truncate">
                                                        <span class="fw-semibold">
                                                            {{concat(' ',[
                                                                $log->user->firstname,
                                                                getMiddleInitial($log->user->middlename),
                                                                $log->user->lastname
                                                            ])}}
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                    </td>
                                    <td>{{ $log->ip_address }}</td>
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
