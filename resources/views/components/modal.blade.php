
<div >
    <div class="modal fade show" id="selectYearModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="selectYearModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>


@push('footer-1')
    @once
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
