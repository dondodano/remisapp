<div>
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Program list</h5>
                </div>
                <div class="table-responsive text-nowrap perfect-sc" id="perfect-0">

                    @include('livewire.requisite.program.includes.component_search')

                    <table class="table table-hover datatable" id="datatable">
                        <thead class="table-light">
                            <tr>
                                <th>Term</th>
                                <th>Definition</th>
                                <th>Institute</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if(is_countable($programs))
                                @if(count($programs))
                                    @foreach($programs as $program)
                                        <tr id="row-{{ $program->id }}">
                                            <td>{{ $program->term }}</td>
                                            <td>{{ $program->definition }}</td>
                                            <td>{{ $program->institute->term }}</td>
                                            <td>
                                                @if($program->status == 1)
                                                    <i class='bx bx-check-circle text-success' title="Active"></i>
                                                @else
                                                    <i class='bx bx-x-circle text-danger' title="Inactive"></i>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/program/edit/{{ $program->id }}" class="btn btn-sm btn-icon" title="Edit">
                                                    <i class='bx bx-edit'></i>
                                                </a>
                                                <button class="btn btn-sm btn-icon" title="Delete" type="button" wire:click.prevent="delete('{{ encipher($program->id) }}')">
                                                    <i class='bx bx-trash'></i>
                                                </button>

                                                <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                {!! requisiteLivewireControl($program) !!}
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

                    @if(is_countable($programs))
                        @if($programs->hasPages())
                            <div class="d-flex flex-row justify-content-end mt-3">
                                <div class="me-3">
                                    {{ $programs->links() }}
                                </div>
                            </div>
                        @endif
                    @endif

                </div>
            </div>

        </div>
    </div>
</div>
