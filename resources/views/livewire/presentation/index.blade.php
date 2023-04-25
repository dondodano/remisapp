<div>
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Presentation list</h5>
                </div>
                <div class="table-responsive text-nowrap perfect-sc" id="perfect-0">

                    @include('vendor.remis-components.table-nav',['root' => 'presentation', 'text' => 'Add New Presentation'])

                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Venue</th>
                                <th>Date Presented</th>
                                <th>Type</th>
                                <th class="text-center">Evaluated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($presentations))
                                @if(count($presentations))
                                    @foreach ($presentations as $presentation)
                                        <tr id="row-{{ $presentation->id }}">
                                            <td title="{{ $presentation->title }}">{{ shorten($presentation->title) }}</td>
                                            <td title="{{ $presentation->author }}">{{ shorten($presentation->author) }}</td>
                                            <td title="{{ $presentation->venue }}">{{ shorten($presentation->venue) }}</td>
                                            <td><span class="badge bg-label-secondary">{{ setDate($presentation->date_published) }}</span></td>
                                            <td>
                                                <span class="badge bg-label-info">{{ $presentation->type->term }}</span>
                                            </td>
                                            <td class="text-center">
                                                @include('vendor.remis-components.repository-evaluate-indicator',['collection' => $presentation])
                                            </td>
                                            <td>
                                                @include('vendor.remis-components.repository-dropdown',[ 'root' => 'presentation', 'collection' => $presentation])
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

                    @include('vendor.remis-components.table-pagination', ['collection' => $presentations])
                </div>
            </div>

        </div>
    </div>
</div>
