<div>
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">User logs</h5>
                </div>
                <div class="table-responsive text-nowrap perfect-sc" id="perfect-0">

                    @include('livewire.log.includes.component_search')

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

                            @if(is_countable($logs))
                                @if(count($logs))
                                    @foreach($logs as $log)
                                        <tr id="row-{{ $log->id }}">
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
                                @else
                                    {!! emptyEndRow(4) !!}
                                @endif
                            @else
                                {!! emptyEndRow(4) !!}
                            @endif

                        </tbody>
                    </table>

                    {{-- @if(is_countable($logs))
                        @if($logs->hasPages())
                            <div class="d-flex flex-row justify-content-end mt-3">
                                <div class="me-3">
                                    {{ $logs->links() }}
                                </div>
                            </div>
                        @endif
                    @endif --}}

                    @include('vendor.remis-components.table-pagination', ['collection' => $logs])

                </div>
            </div>

        </div>
    </div>
</div>
