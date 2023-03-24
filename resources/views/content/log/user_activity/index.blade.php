@extends('layouts.master')


@section('site-header')
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/datatables/dataTables.bootstrap5.min.css') }}"/>
@endsection

@section('site-content')

<div class="row">
    <div class="col-md-12">

        <div class="card mb-4">
            <h5 class="card-header">
                User activity logs
            </h5>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover datatable" id="datatable">
                        <thead class="table-light">
                            <tr>
                                <th>Logged Date</th>
                                <th>Employee</th>
                                <th>IP Address</th>
                                <th>Activity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($logUserActivities as $logUserActivity )
                                <tr>

                                    <td>{{ $logUserActivity->log_date }}</td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3">
                                                    <span class="avatar-initial rounded-circle {{  bgSwitch() }}">
                                                        {{ getFirstLettersOfName($logUserActivity->user->firstname,$logUserActivity->user->lastname) }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="/edit/1" class="text-body text-truncate">
                                                    <span class="fw-semibold">
                                                        {{ concat(' ',[
                                                            $logUserActivity->user->firstname,
                                                            getMiddleInitial($logUserActivity->user->middlename),
                                                            $logUserActivity->user->lastname
                                                        ]) }}
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $logUserActivity->ip_address }}</td>
                                    <td>{{ $logUserActivity->activity }}</td>
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
