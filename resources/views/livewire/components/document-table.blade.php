<div class="card">
    <div class="card-header">
        <h5 class="card-title">Document uploaded</h5>
    </div>
    <div class="table-responsive perfect-sc" id="perfect-2">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @if($documentRecords)
                    @foreach ($documentRecords as $record )
                        <tr>
                            <td>
                                <div class="d-flex justify-content-start align-items-center">
                                    <div class="avatar me-2">
                                        {!! $record->feed_file_owner->temp_avatar->avatar !!}
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-0 text-truncate">{{ concat(' ',  [ $record->feed_file_owner->firstname, $record->feed_file_owner->lastname]) }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $record->feed_content() }}</td>
                            <td>{{ basename($record->feedable_type) }}</td>
                            <td><span class="badge bg-label-secondary">{{ setDate($record->date_created ) }}</span></td>
                        </tr>
                    @endforeach
                @else
                    {!! emptyEndRow(4) !!}
                @endif
            </tbody>
        </table>

        {{-- @include('vendor.remis-components.table-pagination', ['collection' => $documentRecordsLink]) --}}

    </div>
</div>
