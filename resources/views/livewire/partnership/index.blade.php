<div>
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Partnership list</h5>
                </div>
                <div class="table-responsive text-nowrap perfect-sc" id="perfect-0">

                    @include('vendor.remis-components.table-nav',['root' => 'partnership', 'text' => 'Add New Partnership'])

                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Partnership</th>
                                <th>Activity</th>
                                <th>Inclusive Dates</th>
                                <th class="text-center">Evaluated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($partnerships))
                                @if(count($partnerships))
                                    @foreach ($partnerships as $partnership)
                                        <tr id="row-{{ $partnership->id }}">
                                            <td title="{{ $partnership->partner }}">{{ shorten($partnership->partner) }}</td>
                                            <td title="{{ $partnership->activity }}">{{ shorten($partnership->activity) }}</td>
                                            <td>
                                                <span class="badge bg-label-info">{{ $partnership->date_from }}</span> -
                                                <span class="badge bg-label-info">{{ $partnership->date_to }}</span>
                                            </td>
                                            <td class="text-center">
                                                @include('vendor.remis-components.repository-evaluate-indicator',['collection' => $partnership])
                                            </td>
                                            <td>
                                                @include('vendor.remis-components.repository-dropdown',[ 'root' => 'partnership', 'collection' => $partnership])
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                {!! emptyEndRow(5) !!}
                                @endif
                            @else
                            {!! emptyEndRow(5) !!}
                            @endif
                        </tbody>
                    </table>

                    @include('vendor.remis-components.table-pagination', ['collection' => $partnerships])
                </div>
            </div>

        </div>
    </div>
</div>
