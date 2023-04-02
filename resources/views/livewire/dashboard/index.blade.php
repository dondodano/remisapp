<div>
    <div class="row">
        <div class="col-xl-4 mb-4">
            @livewire('components.mini-card', ['title' => 'Research','text' => $researches->count()])
        </div>
        <div class="col-xl-4 mb-4">
            @livewire('components.mini-card', ['title' => 'Publication','text' => $publications->count(), 'icon' => 'bx-file'])
        </div>
        <div class="col-xl-4 mb-4">
            @livewire('components.mini-card', ['title' => 'Presentation','text' => $presentations->count(), 'icon' => 'bx-slideshow'])
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 mb-4">
            @livewire('components.mini-card', ['title' => 'Training','text' => $trainings->count(), 'icon' => 'bx-run'])
        </div>
        <div class="col-xl-4 mb-4">
            @livewire('components.mini-card', ['title' => 'Extension','text' => $extensions->count(), 'icon' => 'bx-chalkboard'])
        </div>
        <div class="col-xl-4 mb-4">
            @livewire('components.mini-card', ['title' => 'Partnership','text' => $partnerships->count(), 'icon' => 'bx-trip'])
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-8">
            @livewire('components.activity-timeline', ['activityTimelines' => $activityTimelines])
        </div>
        <div class="col-md-4">
            @livewire('components.online-users', ['onlineUsers' => $onlineUsers])
        </div>
    </div>

    <div class="row">
        <div class="col-12" wire:poll.750ms>
            @livewire('components.document-table', ['documentRecords' => $documentRecords])
        </div>
    </div>
</div>
