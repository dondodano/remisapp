<div>
    <div class="row">
        <div class="col-xl-4 mb-4">
            <x-mini-card title="Research" text="{{ $researches }}" icon="bx-search"  />
        </div>
        <div class="col-xl-4 mb-4">
            <x-mini-card title="Publication" text="{{ $publications }}" icon="bx-file"  />
        </div>
        <div class="col-xl-4 mb-4">
            <x-mini-card title="Presentation" text="{{ $presentations }}" icon="bx-slideshow"  />
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 mb-4">
            <x-mini-card title="Training" text="{{ $trainings }}" icon="bx-run" />
        </div>
        <div class="col-xl-4 mb-4">
            <x-mini-card title="Extension" text="{{ $extensions }}" icon="bx-chalkboard" />
        </div>
        <div class="col-xl-4 mb-4">
            <x-mini-card title="Partnership" text="{{ $partnerships }}" icon="bx-trip" />
        </div>
    </div>


    <div class="row mb-4">
        <div class="col-md-8">
            @livewire('components.activity-timeline')
        </div>
        <div class="col-md-4">
            @livewire('components.online-users')
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @livewire('components.document-table')
        </div>
    </div>
</div>

@push('footer-2')
    @once
        <script>
            window.addEventListener('refreshComponent', event => {
                Livewire.emit('refreshDashboard')
                console.log('emitting...')
            })
        </script>
    @endonce
@endpush
