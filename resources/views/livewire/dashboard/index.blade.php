<div>
    <div class="row">
        <div class="col-xl-4 mb-4">
            @include('vendor.remis-components.mini-card',[
                'miniCardTitle' => "Research",
                'miniCardText' => $researches->count(),
                'miniCardIcon' => 'bx-search'
            ])
        </div>
        <div class="col-xl-4 mb-4">
            @include('vendor.remis-components.mini-card',[
                'miniCardTitle' => "Publication",
                'miniCardText' => $publications->count(),
                'miniCardIcon' => 'bx-file'
            ])
        </div>
        <div class="col-xl-4 mb-4">
            @include('vendor.remis-components.mini-card',[
                'miniCardTitle' => "Presentation",
                'miniCardText' => $presentations->count(),
                'miniCardIcon' => 'bx-slideshow'
            ])
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 mb-4">
            @include('vendor.remis-components.mini-card',[
                'miniCardTitle' => "Training",
                'miniCardText' => $trainings->count(),
                'miniCardIcon' => 'bx-run'
            ])
        </div>
        <div class="col-xl-4 mb-4">
            @include('vendor.remis-components.mini-card',[
                'miniCardTitle' => "Extension",
                'miniCardText' => $extensions->count(),
                'miniCardIcon' => 'bx-chalkboard'
            ])
        </div>
        <div class="col-xl-4 mb-4">
            @include('vendor.remis-components.mini-card',[
                'miniCardTitle' => "Partnership",
                'miniCardText' => $partnerships->count(),
                'miniCardIcon' => 'bx-trip'
            ])
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
