<div>
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Training list</h5>
                </div>
                <div class="table-responsive text-nowrap perfect-sc" id="perfect-0">

                    @include('vendor.remis-components.table-nav',['root' => 'training', 'text' => 'Add New Training'])

                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Inclusie Dates</th>
                                <th>Duration</th>
                                <th>Trainee</th>
                                <th>Weight</th>
                                <th>Result</th>
                                <th class="text-center">Evaluated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($trainings))
                                @if(count($trainings))
                                    @foreach ($trainings as $training)
                                        <tr id="row-{{ $training->id }}">
                                            <td title="{{ $training->title }}">{{ shorten($training->title) }}</td>
                                            <td>
                                                <span class="badge bg-label-info">{{ $training->date_from }}</span> -  <span class="badge bg-label-info">{{ $training->date_to }}</span>
                                            </td>
                                            <td>{{ shorten($training->duration) }}</td>
                                            <td>{{ shorten($training->no_of_trainees) }}</td>
                                            <td>{{ shorten($training->weight) }}</td>

                                            <td>
                                                {{ $training->quality->term }} - {{ $training->relevance }}
                                            </td>

                                            <td class="text-center">
                                                @include('vendor.remis-components.repository-evaluate-indicator',['collection' => $training])
                                            </td>
                                            <td>
                                                @include('vendor.remis-components.repository-dropdown',[ 'root' => 'training', 'collection' => $training])
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                {!! emptyEndRow(8) !!}
                                @endif
                            @else
                            {!! emptyEndRow(8) !!}
                            @endif
                        </tbody>
                    </table>

                    @include('vendor.remis-components.table-pagination', ['collection' => $trainings])
                </div>
            </div>

        </div>
    </div>
</div>
