<div>
    <div class="row">
        <div class="col-md-5 col-12">
            <div class="card mb-4" id="{{ rand() }}">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <dl class="row mb-0">
                                <dt class="col-sm-5 fw-semibold mb-3 text-nowrap">Date Published:</dt>
                                <dd class="col-sm-7 text-wrap">{{ setDate($publication->date_published) }}</dd>

                                <dt class="col-sm-5 fw-semibold mb-3 text-nowrap">Title:</dt>
                                <dd class="col-sm-7 text-wrap">{{ $publication->title }}</dd>

                                <dt class="col-sm-5 fw-semibold mb-3 text-nowrap">Author</dt>
                                <dd class="col-sm-7 text-wrap">{{ $publication->author  }}</dd>

                                <dt class="col-sm-5 fw-semibold mb-3 text-nowrap">Publisher</dt>
                                <dd class="col-sm-7 text-wrap">{{ $publication->publisher }}</dd>

                                <dt class="col-sm-5 fw-semibold mb-3 text-nowrap">Volume</dt>
                                <dd class="col-sm-7">{{ $publication->volume }}</dd>

                                <dt class="col-sm-5 fw-semibold mb-3 text-nowrap">Issue</dt>
                                <dd class="col-sm-7">{{ $publication->issue }}</dd>

                                <dt class="col-sm-5 fw-semibold mb-3 text-nowrap">Page</dt>
                                <dd class="col-sm-7">{{ $publication->page }}</dd>

                                <dt class="col-sm-5 fw-semibold mb-3 text-nowrap"><i class='bx bx-comment me-1'></i> Evalution remark</dt>
                                <dd class="col-sm-7">

                                    <label class="switch switch-square" wire:click.prevent="remark('{{ ($publication->is_evaluated == 0 ? 1 : 0) }}')">
                                        <input type="checkbox" class="switch-input" {{ ($publication->is_evaluated == 1 ? 'checked' : null) }}>
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on">
                                                <i class="bx bx-check"></i>
                                            </span>
                                            <span class="switch-off">
                                                <i class="bx bx-x"></i>
                                            </span>
                                        </span>


                                        @if($publication->is_evaluated  == 0)
                                            <span class="switch-label">Under-evaluation</span>
                                        @else
                                            <span class="switch-label text-success">Evaluated</span>
                                        @endif

                                    </label>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-12">

            @if($publication->is_evaluated  == 0)
                <div class="card  mb-5 p-2">
                    <form  method="post" class="d-flex justify-content-between align-items-center" wire:submit.prevent="save">
                        <textarea class="form-control message-input border-0 me-3 shadow-none" wire:model.defer="evaluation" placeholder="Type your message here..."></textarea>
                        <button class="btn btn-primary d-flex send-msg-btn">
                            <i class='bx bx-subdirectory-left me-md-1 me-0'></i>
                            <span class="align-middle d-md-inline-block d-none">Enter</span>
                        </button>
                    </form>
                </div>
            @endif

            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2"><i class="bx bx-list-ul me-2"></i>Evaluation Timeline</h5>
                </div>
                <div class="card-body">

                    <ul class="timeline" >
                        @if(isset($publication->evaluations))
                            @if(count($publication->evaluations) > 0)

                                @foreach($publication->evaluations as $evaluation)
                                    <li class="mb-3 timeline-item timeline-item-transparent {{ ($evaluationEditId==$evaluation->id?$isEditting==true?'text-muted':'':'') }}" >
                                        <span class="timeline-point timeline-point-secondary"></span>
                                        <div class="timeline-event">
                                            <div class="timeline-header mb-0">
                                                <h6 class="mb-0">
                                                    {{ ucwords($evaluation->evaluators[0]->firstname.' '.$evaluation->evaluators[0]->lastname) }}
                                                </h6>

                                                @if($evaluation->evaluator_id == sessionGet('id'))
                                                <div class="dropdown">
                                                    @if ($evaluationEditId != $evaluation->id)
                                                        @if($isEditting == true)
                                                            @include('vendor.remis-components.evaluation_dropdown', ['evaluationId' => $evaluation->id])
                                                        @else
                                                            @include('vendor.remis-components.evaluation_dropdown', ['evaluationId' => $evaluation->id])
                                                        @endif
                                                    @else
                                                        <button type="button" class="btn p-0 text-danger" title="Cancel"  wire:click="cancel">
                                                            <i class='bx bx-x-circle'></i>
                                                        </button>
                                                    @endif
                                                </div>
                                                @endif

                                            </div>
                                            <p class="mb-0">
                                                {{ $evaluation->evaluation }}
                                            </p>
                                            <small class="text-muted">
                                                @if($isEditting == true)
                                                    @include('vendor.remis-components.evaluation_editting_state',[
                                                        'evaluationEditId' => $evaluationEditId,
                                                        'evaluationId' => $evaluation->id,
                                                        'dateModified' => $evaluation->date_modified
                                                    ])
                                                @else
                                                    @include('vendor.remis-components.evaluation_editting_state',[
                                                        'evaluationEditId' => $evaluationEditId,
                                                        'evaluationId' => $evaluation->id,
                                                        'dateModified' => $evaluation->date_modified
                                                    ])
                                                @endif

                                            </small>
                                        </div>

                                    </li>
                                @endforeach

                                @include('vendor.remis-components.evaluation-starter-timeline',[
                                    'title' => $publication->title,
                                    'dateCreated' => $publication->date_created,
                                    'owner' => ['firstname' => $publication->file_owner->firstname, 'lastname' => $publication->file_owner->lastname],
                                    'attachments' => $publication->attachments
                                ])

                            @else
                                @include('vendor.remis-components.evaluation-starter-timeline',[
                                    'title' => $publication->title,
                                    'dateCreated' => $publication->date_created,
                                    'owner' => ['firstname' => $publication->file_owner->firstname, 'lastname' => $publication->file_owner->lastname],
                                    'attachments' => $publication->attachments
                                ])
                            @endif
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

