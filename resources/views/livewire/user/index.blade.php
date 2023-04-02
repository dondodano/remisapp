<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">User list</h5>
                </div>
                <div class="table-responsive text-nowrap perfect-sc" id="perfect-0">

                    @include('livewire.user.includes.component_search')

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
                            @if(is_countable($users))
                                @if(count($users) > 0)
                                    @foreach ($users as $user )
                                        @if(strtolower($user->user_role->term) != 'super')
                                            <tr id="row-{{ $user->id }}">
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
                                                    <button class="btn btn-sm btn-icon" title="Send Credential" type="button" wire:click.prevent="send('{{ encipher($user->id) }}')" wire:loading.attr="disabled" wire:target="send('{{ encipher($user->id) }}')">
                                                        <i class='bx bx-mail-send' wire:loading.remove wire:target="send('{{ encipher($user->id) }}')"></i>
                                                        <span class="spinner-border spinner-border-sm text-primary" role="status" id="spiner-{{ $user->id }}" wire:loading wire:target="send('{{ encipher($user->id) }}')"></span>
                                                    </button>
                                                    <a href="/user/edit/{{ $user->id }}" class="btn btn-sm btn-icon" title="Edit">
                                                        <i class="bx bx-edit"></i>
                                                    </a>
                                                    <button class="btn btn-sm btn-icon" title="Delete" type="button" wire:click.prevent="delete('{{ encipher($user->id) }}')">
                                                        <i class="bx bx-trash"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    {!! userLivewireControl($user) !!}
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @else
                                    {!! emptyEndRow(5) !!}
                                @endif
                            @else
                                {!! emptyEndRow(5) !!}
                            @endif
                        </tbody>
                    </table>

                    @if(is_countable($users))
                        @if($users->hasPages())
                            <div class="d-flex flex-row justify-content-end mt-3">
                                <div class="me-3">
                                    {{ $users->links() }}
                                </div>
                            </div>
                        @endif
                    @endif
                </div>
            </div>

        </div>
    </div>

</div>
