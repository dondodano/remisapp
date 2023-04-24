<div>
    <x-modal >
        <div class="modal-header">
            <h5 class="modal-title" id="selectYearModalLabel">Select year</h5>
            <button type="button" class="btn-close" x-data x-on:click="$dispatch('closeModal')" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>I will not close if you click outside me. Don't even try to press escape key.</p>
        </div>
    </x-modal>
</div>
