<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title  m-0 me-2">Online Users</h5>
        <small>
            {{ count($users) }} {{ _(count($users) > 0 ? 'online/s' : 'online') }}
        </small>
    </div>
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Period</td>
                </tr>
            </thead>
            <tbody>
                @if($users)
                    @if(count($users) > 0)
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="avatar me-2 avatar-online">
                                            <span class="avatar-initial rounded-circle bg-label-danger">{{ getFirstLettersOfName($user->firstname, $user->lastname) }}</span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-truncate">{{ $user->firstname .' '.$user->lastname }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td><small class="text-truncate text-muted">4 hours ago</small></td>
                            </tr>
                        @endforeach
                    @else
                    {!! emptyEndRow(2) !!}
                    @endif
                @else
                    {!! emptyEndRow(2) !!}
                @endif
            </tbody>
        </table>
    </div>
</div>
