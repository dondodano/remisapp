<div class="card">
    <div class="card-header">
        <h5 class="card-title">Document uploaded</h5>
    </div>
    <div class="tabl-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>

                @if($records)
                    @if(count($records) > 0)
                        <tr>
                            <td>
                                <div class="d-flex justify-content-start align-items-center">
                                    <div class="avatar me-2">
                                        <span class="avatar-initial rounded-circle bg-label-danger">{{ getFirstLettersOfName($user->firstname, $user->lastname) }}</span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-0 text-truncate">{{ $user->firstname.' '. $user->lastname }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>Banana Harvesting</td>
                            <td>Research</td>
                            <td><span class="badge bg-label-secondary">03-30-2023</span></td>
                        </tr>
                    @else
                    {!! emptyEndRow(4) !!}
                    @endif
                @else
                    {!! emptyEndRow(4) !!}
                @endif
            </tbody>
        </table>
    </div>
</div>
