<button class="btn p-0" type="button" id="timelineWapper-{{ $evaluationId }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="bx bx-dots-vertical-rounded"></i>
</button>
<div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineWapper-{{ $evaluationId }}" style="">
    <a class="dropdown-item" href="javascript:void(0);" wire:click="edit('{{ encipher($evaluationId) }}')">
        <i class="bx bx-pencil"></i> Edit
    </a>
    <a class="dropdown-item" href="javascript:void(0);" wire:click="delete('{{ encipher($evaluationId) }}')">
        <i class="bx bx-trash"></i> Delete
    </a>
</div>
