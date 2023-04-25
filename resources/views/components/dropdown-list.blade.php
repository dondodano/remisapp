
<div class="btn-group">
    <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="{{ $id }}Clickable"
        data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
        {{ $text }}
    </button>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="{{ $id }}Clickable" style="">
        {{ $slot }}
    </ul>
</div>
