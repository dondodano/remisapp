<div>
    {{ time() }}

    @livewire('components.card')

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
