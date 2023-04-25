@extends('layouts.master')


@section('site-header')
    <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/datatables/dataTables.bootstrap5.min.css') }}"/>
@endsection

@section('site-content')

<div class="row">
    <div class="col-md-12">

        <div class="card mb-4">
            <h5 class="card-header">
                User list
                <div class="float-end">
                    <a href="/user/create" class="btn btn-sm btn-primary">
                        <i class="bx bx-plus"></i> Add New User
                    </a>
                </div>
            </h5>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover datatable" id="datatable">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user )
                                @if($user->role_id != 1)
                                    <tr>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center user-name">
                                                @if(!empty($user->temp_avatar))
                                                    {!! avatarWrapper($user->temp_avatar->avatar, 'avatar-sm') !!}
                                                @else
                                                    {!! avatarWrapper('<span class="avatar-initial rounded-circle '.bgSwitch().'">'.getFirstLettersOfName($user->firstname, $user->lastname).'</span>', 'avatar-sm') !!}
                                                @endif
                                                <div class="d-flex flex-column">
                                                    <a href="/edit/1" class="text-body text-truncate">
                                                        <span class="fw-semibold">
                                                            {{ concat(' ',[
                                                                $user->firstname,
                                                                getMiddleInitial($user->middlename),
                                                                $user->lastname
                                                            ]) }}
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td><span class="badge bg-info">{{ $user->user_role->term }}</span></td>
                                        <td>
                                            <i class="bx fs-4 {{ statusIcon($user->status) }}" title="{{ statusText($user->status) }}"></i>
                                        </td>
                                        <td>
                                            <div class="d-inline-block text-nowrap">
                                                <form action="/user/sendmail/{{ $user->id }}" method="post" class="btn-icon">
                                                    @csrf
                                                    <button class="btn btn-sm" title="Send Credential">
                                                        <i class='bx bx-mail-send'></i>
                                                    </button>
                                                </form>
                                                <a href="/user/edit/{{ $user->id }}" class="btn btn-sm btn-icon" title="Edit">
                                                    <i class="bx bx-edit"></i>
                                                </a>
                                                <form action="/user/delete/{{ $user->id }}" method="post" class="btn-icon">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-sm " title="Delete" type="submit" name="delete[]"><i class="bx bx-trash"></i></button>
                                                </form>
                                                <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                {!! statusActionControl($user->id,$user->status) !!}

                                            </div>
                                        </td>
                                    </tr>
                                @endif
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
