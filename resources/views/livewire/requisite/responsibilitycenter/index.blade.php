<div>
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Responsibility Center list</h5>
                </div>
                <div class="table-responsive text-nowrap perfect-sc" id="perfect-0">

                    @include('livewire.requisite.responsibilitycenter.includes.component_search')

                    <table class="table table-hover datatable" id="datatable">
                        <thead class="table-light">
                            <tr>
                                <th>Term</th>
                                <th>Definition</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if(is_countable($responsibilitycenters))
                                @if(count($responsibilitycenters))
                                    @foreach($responsibilitycenters as $responsibilitycenter)
                                        <tr id="row-{{ $responsibilitycenter->id }}">
                                            <td>{{ $responsibilitycenter->term }}</td>
                                            <td>{{ $responsibilitycenter->definition }}</td>
                                            <td>
                                                @if($responsibilitycenter->status == 1)
                                                    <i class='bx bx-check-circle text-success' title="Active"></i>
                                                @else
                                                    <i class='bx bx-x-circle text-danger' title="Inactive"></i>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/rc/edit/{{ $responsibilitycenter->id }}" class="btn btn-sm btn-icon" title="Edit">
                                                    <i class='bx bx-edit'></i>
                                                </a>
                                                <button class="btn btn-sm btn-icon" title="Delete" type="button" wire:click.prevent="delete('{{ encipher($responsibilitycenter->id) }}')">
                                                    <i class='bx bx-trash'></i>
                                                </button>

                                                <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                {!! requisiteLivewireControl($responsibilitycenter) !!}
                                            </td>
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

                    {{-- @if(is_countable($responsibilitycenters))
                        @if($responsibilitycenters->hasPages())
                            <div class="d-flex flex-row justify-content-end mt-3">
                                <div class="me-3">
                                    {{ $responsibilitycenters->links() }}
                                </div>
                            </div>
                        @endif
                    @endif --}}

                    @include('vendor.remis-components.table-pagination', ['collection' => $responsibilitycenters])

                </div>
            </div>

        </div>
    </div>
</div>
