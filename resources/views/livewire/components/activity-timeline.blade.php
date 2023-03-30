<div class="card">
    <div class="card-header  d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2"><i class="bx bx-list-ul me-2"></i>Activity Timeline</h5>
    </div>
    <div class="card-body">

        <ul class="timeline timeline-dashed ">

            @if($timelines)
                @foreach ($timelines as $timeline)
                <li class="mb-4 timeline-item timeline-item-primary">
                    <span class="timeline-indicator timeline-indicator-primary">
                        <i class='bx bx-file'></i>
                    </span>
                    <div class="timeline-event">
                        <div class="timeline-header mb-0">
                            <h6 class="mb-0">{{ $timeline->name }}</h6>
                            <a href="/{{ $timeline->type }}/{{ $timeline->id }}" class="btn p-0" type="button" title="Evaluate">
                                <i class='bx bx-comment-dots'></i>
                            </a>
                        </div>
                        <p class="mb-0">{{ $timeline->content }}</p>
                        <small>{{ $timeline->created }}</small>
                    </div>
                </li>
                @endforeach
            @endif


            <li class="timeline-end-indicator">
                <i class="bx bx-check-circle text-success"></i>
            </li>
        </ul>

    </div>
</div>
