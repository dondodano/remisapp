
<div >
    <div class="modal fade show" id="selectYearModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="selectYearModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                {{ $slot }}
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Understood</button>
                    <button type="button" class="btn btn-danger"
                        x-data
                        x-on:click="$dispatch('closeModal')">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


@push('footer-1')
    @once
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script>
            window.addEventListener('showModal', event => {
                $(".modal").modal('show');
            })

            window.addEventListener('closeModal', event => {
                $(".modal").modal('hide');
            })
        </script>
    @endonce
@endpush
