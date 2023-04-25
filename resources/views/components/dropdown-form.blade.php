<div class="btn-group">
    <button type="button" id="{{ $id }}Form" class="btn btn-sm btn-primary dropdown-toggle" data-bs-toggle="dropdown"
        data-bs-auto-close="false" aria-expanded="false" style="min-width:80px;">
        {{ $text }}
    </button>
    <div class="dropdown-menu dropdown-menu-end w-px-300" aria-labelledby="{{ $id }}Form" style="">
        <div class="p-4">
            {{ $slot }}
        </div>
    </div>
</div>
