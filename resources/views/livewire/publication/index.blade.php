<div>
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Publication list</h5>
                </div>
                <div class="table-responsive text-nowrap perfect-sc" id="perfect-0">

                    @include('vendor.remis-components.table-nav',['root' => 'publication', 'text' => 'Add New Publication'])

                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Publisher</th>
                                <th>Date Published</th>
                                <th class="text-center">Evaluated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($publications))
                                @if(count($publications))
                                    @foreach ($publications as $publication)
                                        <tr id="row-{{ $publication->id }}">
                                            <td title="{{ $publication->title }}">{{ shorten($publication->title) }}</td>
                                            <td title="{{ $publication->author }}">{{ shorten($publication->author) }}</td>
                                            <td title="{{ $publication->publisher }}">{{ shorten($publication->publisher) }}</td>
                                            <td><span class="badge bg-label-secondary">{{ setDate($publication->date_published) }}</span></td>
                                            <td class="text-center">@include('vendor.remis-components.repository-evaluate-indicator',['collection' => $publication])</td>
                                            <td>
                                                @include('vendor.remis-components.repository-dropdown',[ 'root' => 'publication', 'collection' => $publication])
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

                    @include('vendor.remis-components.table-pagination', ['collection' => $publications])
                </div>
            </div>

        </div>
    </div>
</div>
