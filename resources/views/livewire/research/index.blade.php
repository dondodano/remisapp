<div class="row">
    <div class="col-md-12">

        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Research list</h5>
            </div>
            <div class="table-responsive text-nowrap perfect-sc" id="perfect-0">

                <div class="d-flex flex-nowaap border-bottom">
                    <div class="flex-fill p-3">
                        <select class="form-select" wire:model="filterCategory" >
                            <option value="">Select Category</option>
                            @if(!empty($categories))
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->term }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="flex-fill p-3">
                        <select class="form-select" wire:model="filterFund" >
                            <option value="">Select Fund</option>
                            @if(!empty($funds))
                                @foreach($funds as $fund)
                                    <option value="{{ $fund->id }}">{{ $fund->term }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="flex-fill p-3">
                        <select class="form-select" wire:model="filterStatus" >
                            <option value="">Select Status</option>
                            @if(!empty($research_statuses))
                                @foreach($research_statuses as $research_status)
                                    <option value="{{ $research_status->id }}">{{ $research_status->term }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="p-3">
                        <button class="btn btn-secondary" type="button" wire:click="resetFilter">
                            <i class="bx bx-reset"></i> Reset
                        </button>
                    </div>
                </div>

                @include('vendor.remis-components.table-nav',['root' => 'research', 'text' => 'Add New Research'])

                <table class="table table-hover datatable" id="datatable">
                    <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Budget</th>
                            <th>Category</th>
                            <th>Fund</th>
                            <th>Status</th>
                            <th>Evaluated</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if(is_countable($researches))
                            @if(count($researches) > 0)
                                @foreach ($researches as $research )
                                    <tr id="row-{{ $research->id }}">
                                        <td>{{ $research->project }}</td>
                                        <td>{{ currencyFormat($research->budget) }}</td>
                                        <td><span class="badge {{ badgeBg($research->category_id, [4 => 'bg-label-dark', 3 => 'bg-label-warning']) }}">{{ $research->category->term }}</span></td>
                                        <td><span class="badge {{ badgeBg($research->fund_id, [2 => 'bg-label-info', 1 => 'bg-label-primary']) }}">{{ $research->fund->term }}</span></td>
                                        <td>
                                            <span class="badge {{ badgeBg($research->status_id, [5 => 'bg-label-danger', 6 => 'bg-label-success']) }}">{{ $research->research_status->term }}</span>
                                        </td>

                                        <td class="text-center">
                                            @include('vendor.remis-components.repository-evaluate-indicator',['collection' => $research])
                                        </td>

                                        <td>
                                            @include('vendor.remis-components.repository-dropdown',[ 'root' => 'research', 'collection' => $research])
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                            {!! emptyEndRow(7) !!}
                            @endif
                        @else
                        {!! emptyEndRow(7) !!}
                        @endif

                    </tbody>
                </table>

                @include('vendor.remis-components.table-pagination', ['collection' => $researches])

            </div>
        </div>

    </div>
</div>
