<div>
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Extension list</h5>
                </div>
                <div class="table-responsive text-nowrap perfect-sc" id="perfect-0">

                    @include('vendor.remis-components.table-nav',['root' => 'extension', 'text' => 'Add New Extension'])

                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Extension</th>
                                <th>Inclusive Dates</th>
                                <th>Quantity</th>
                                <th>Beneficiares</th>
                                <th class="text-center">Evaluated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($extensions))
                                @if(count($extensions))
                                    @foreach ($extensions as $extension)
                                        <tr id="row-{{ $extension->id }}">
                                            <td title="{{ $extension->extension }}">{{ shorten($extension->extension) }}</td>
                                            <td><span class="badge bg-label-info">{{ $extension->date_from .'-'. $extension->date_to }}</span></td>
                                            <td>{{ $extension->quantity }}</td>
                                            <td title="{{ $extension->beneficiaries }}">{{ shorten($extension->beneficiaries) }}</td>
                                            <td class="text-center">
                                                @include('vendor.remis-components.repository-evaluate-indicator',['collection' => $extension])
                                            </td>
                                            <td>
                                                @include('vendor.remis-components.repository-dropdown',[ 'root' => 'extension', 'collection' => $extension])
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                {!! emptyEndRow(6) !!}
                                @endif
                            @else
                            {!! emptyEndRow(6) !!}
                            @endif
                        </tbody>
                    </table>

                    @include('vendor.remis-components.table-pagination', ['collection' => $extensions])
                </div>
            </div>

        </div>
    </div>
</div>
