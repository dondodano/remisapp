<div class="card">
    <div class="card-header  d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2"><i class="bx bx-list-ul me-2"></i>Activity Timeline</h5>
    </div>
    <div class="card-body perfect-sc" id="perfect-1" style="max-height: 320px !important; overflow:hidden;">

        @if(count($activityTimelines) > 0)
            <ul class="timeline timeline-dashed mt-3" >
                @if($activityTimelines)
                    @foreach ($activityTimelines as $timeline)
                        <li class="mb-4 timeline-item timeline-item-primary">
                            <span class="timeline-indicator timeline-indicator-primary">
                                <i class='bx bx-file'></i>
                            </span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-0">
                                    <h6 class="mb-0">{{ concat(' ',  [ $timeline->feed_file_owner->firstname, $timeline->feed_file_owner->lastname]) }}</h6>

                                    <a class="btn p-0" href="/{{ strtolower(basenameV2($timeline->feedable_type)) }}/evaluation/{{ $timeline->feedable_id }}"  title="Evaluate">
                                        <i class='bx bx-comment-dots'></i>
                                    </a>

                                </div>
                                <p class="mb-0"><span class="badge bg-label-primary">{{ basenameV2($timeline->feedable_type) }}</span></p>
                                <p class="mb-0">{{ $timeline->feed_content() }}</p>
                                <small>Created at : {{ setDate($timeline->date_created ) }}</small>
                            </div>
                        </li>
                    @endforeach
                @endif

                <li class="timeline-end-indicator ">
                    <i class="bx bx-check-circle text-success"></i>
                </li>
            </ul>
        @else
            <p class="text-muted">No activity happened...</p>
        @endif
    </div>
</div>
