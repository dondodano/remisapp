<div>
    <div class="row">
        <div class="col-xl-4 mb-4">
            @livewire('components.mini-card', ['title' => 'Research','text' => '1234'])
        </div>
        <div class="col-xl-4 mb-4">
            @livewire('components.mini-card', ['title' => 'Publication','text' => '1234', 'icon' => 'bx-file'])
        </div>
        <div class="col-xl-4 mb-4">
            @livewire('components.mini-card', ['title' => 'Presentation','text' => '1234', 'icon' => 'bx-slideshow'])
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 mb-4">
            @livewire('components.mini-card', ['title' => 'Training','text' => '1234', 'icon' => 'bx-run'])
        </div>
        <div class="col-xl-4 mb-4">
            @livewire('components.mini-card', ['title' => 'Extension','text' => '1234', 'icon' => 'bx-chalkboard'])
        </div>
        <div class="col-xl-4 mb-4">
            @livewire('components.mini-card', ['title' => 'Partnership','text' => '1234', 'icon' => 'bx-trip'])
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
