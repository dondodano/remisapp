<li class="mb-3 timeline-item timeline-item-transparent">
    <span class="timeline-point timeline-point-primary"></span>
    <div class="timeline-event">
        <div class="timeline-header mb-1">
            <h6 class="mb-0">{{ $title }}</h6>
            <small class="text-muted">{{ elapse($dateCreated)}}</small>
        </div>
        <p class="mb-2 fst-italic">Created by - {{ ucwords($owner['firstname'].' '.$owner['lastname']) }}</p>

        @if(isset($attachments))
            @if(is_countable($attachments))
                @if(count($attachments) > 0)
                    @foreach ($attachments as $file)
                        <div class="d-flex mb-2">
                            <a href="{{ getFileShortLocation($file->file) }}" target="_blank" class="d-flex align-items-center me-3">
                                <i class="bx bx-file me-2"></i>
                                <h6 class="mb-0">{{ basename($file->file) }}</h6>
                            </a>
                        </div>
                    @endforeach
                @endif
            @endif
        @endif

    </div>
</li>
<li class="timeline-end-indicator">
    <i class="bx bx-check-circle text-success"></i>
</li>
