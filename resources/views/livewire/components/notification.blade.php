<div>
    <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <i class="bx bx-bell bx-sm"></i>
            @if(auth()->user()->unreadNotifications->count() > 0)
                <span class="badge bg-danger rounded-pill badge-notifications">{{ auth()->user()->unreadNotifications->count() }}</span>
            @endif

        </a>
        <ul class="dropdown-menu dropdown-menu-end py-0" data-bs-popper="static">
            <li class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                    <h5 class="text-body mb-0 me-auto">Notification</h5>
                    <a href="javascript:void(0)" class="dropdown-notifications-all text-body"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        aria-label="Mark all as read" data-bs-original-title="Mark all as read" wire:click="markallasread">
                        <i class="bx fs-4 bx-envelope-open"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown-notifications-list scrollable-container ps">
                <ul class="list-group list-group-flush">

                    @if(count(auth()->user()->notifications) > 0)
                        @foreach (auth()->user()->unreadNotifications as $notification )

                                <!-- Notification list -->
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">

                                                @if(isset($notification->data['repository']['file_owner']))
                                                    @if(strlen($notification->data['repository']['file_owner']['avatar']) == 0 )
                                                        {!! $notification->data['repository']['file_owner']['temp_avatar']['avatar'] !!}
                                                    @else
                                                        <img src="{{ getFileShortLocation($notification->data['repository']['file_owner']['avatar']) }}" alt="" class="w-px-40 h-auto rounded-circle">
                                                    @endif
                                                @endif



                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">
                                                @if($notification->data['repository']['owner'] == auth()->user()->id)
                                                    You have
                                                @else
                                                    {{ $notification->data['repository']['file_owner']['firstname'] .' '.$notification->data['repository']['file_owner']['lastname'] }}
                                                @endif

                                            </h6>
                                            <p class="mb-0">{{ ucfirst($notification->data['method']) .' new '. basenameV2($notification->data['type'])}} document</p>
                                            <small class="text-muted">{{ elapse($notification->created_at) }}</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-archive" wire:click="markasread('{{ $notification->id }}')">
                                                <span class="bx bx-x"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <!-- Notification list -->

                        @endforeach
                    @else
                        <li class="list-group-item list-group-item-action dropdown-notifications-item d-flex justify-content-center">
                            No notification available...
                        </li>
                    @endif

                </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
            </li>
            <li class="dropdown-menu-footer border-top">
                <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                    View all notifications
                </a>
            </li>
        </ul>
    </li>
</div>
