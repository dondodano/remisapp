<a href="/{{ (isset($root) ? $root : 'research') }}/evaluation/{{ (isset($collection) ? $collection->id : 0) }}" class="btn btn-sm btn-icon " title="Evaluation" >
    <i class='bx bx-comment-detail'>
        @if(count($collection->evaluations) > 0)
            <span class="badge rounded-pill bg-danger badge-dot badge-notifications"></span>
        @endif
    </i>
</a>


<button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="bx bx-dots-vertical-rounded"></i>
</button>

<div class="dropdown-menu dropdown-menu-end m-0" style="">
    <a href="/{{ (isset($root) ? $root : 'research') }}/edit/{{ (isset($collection) ? $collection->id : 0) }}"  class="dropdown-item">
        <i class="bx bx-edit"></i> Edit
    </a>
    <div class="dropdown-divider"></div>


    <a href="/{{ (isset($root) ? $root : 'research') }}/preview/{{ (isset($collection) ? $collection->id : 0) }}" class="dropdown-item">
        <i class="bx bx-info-circle" ></i> View details
    </a>

    @if(isset($collection))
        @if(is_countable($collection->attachments))
            @if(count($collection->attachments) > 0)
                <button type="button" class="dropdown-item" wire:click="download('{{ (isset($collection) ? encipher($collection->id) : 0) }}')">
                    <i class="bx bx-download"></i> Download
                </button>
            @endif
        @endif
    @endif


    <div type="button" class="dropdown-divider"></div>
    <button class="dropdown-item" title="Delete" wire:click="delete('{{ (isset($collection) ? encipher($collection->id) : 0)}}')">
        <i class="bx bx-trash"></i> Delete
    </button>
</div>
