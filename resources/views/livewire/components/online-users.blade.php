<div class="card" >
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title  m-0 me-2">Online Users</h5>
        <small>
           {{ onlineUserCountText($onlineUsers['count']) }}
        </small>
    </div>
    <div class="table-responsive perfect-sc" id="perfect-0">
        <table class="table table-borderless">
            <tbody id="{{ rand() }}">

                @if($onlineUsers['record'])
                    @if(count($onlineUsers['record']) > 0)
                        @foreach($onlineUsers['record'] as $user)
                            @if(isset($user->id))
                                @if(Cache::has('user-' . $user->id))
                                    <tr>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center">
                                                <div class="avatar me-2 {{ isOnline($user->id) ? 'avatar-online' : 'avatar-offline' }}">
                                                    {!! $user->temp_avatar->avatar !!}
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <h6 class="mb-0 text-truncate">{{ $user->firstname .' '.$user->lastname }}</h6>
                                                    @isOnline($user->id)
                                                    <small class="text-truncate text-muted">Online</small>
                                                    @endisOnline
                                                    @isOffline($user->id)
                                                    <small class="text-truncate text-muted">Offline</small>
                                                    @endisOffline
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <small class="text-truncate text-muted">
                                                @isOffline($user->id)
                                                    {{ elapse(isOnlineTime($user->id)) }}
                                                @endisOffline
                                            </small>
                                        </td>
                                    </tr>
                                @endif
                            @endif
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
