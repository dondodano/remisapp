
<div class="file-input"
    wire:ignore
    x-data
    x-init="()=>{
        const pond = FilePond.create($refs.{{ $attributes->get('ref') ?? 'input' }});
        pond.setOptions({
            allowMultiple: {{ $attributes->has('multiple') ? 'true' : 'false' }},
            server: {
                process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    @this.upload('{{ $attributes->whereStartsWith('wire:model')->first() }}', file, load, error, progress)
                },
                revert: (filename, load) => {
                    @this.removeUpload('{{ $attributes->whereStartsWith('wire:model')->first() }}', filename, load)
                },
            }
        });
        window.addEventListener('pondFileClear', e => {
            pond.removeFiles();
        });
    }">
    <input type="file" name="attachments" class="form-control" x-ref="{{ $attributes->get('ref') ?? 'input' }}">

</div>


@push('header-1')
    @once
        <link rel="stylesheet" href="{{ asset('/assets/vendor/libs/filepond/filepond.css') }}" />
    @endonce
@endpush

@push('footer-0')
    @once
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @endonce
@endpush

@push('footer-1')
    @once
        <script src="{{ asset('/assets/vendor/libs/filepond/filepond.js') }}"></script>
    @endonce
@endpush
