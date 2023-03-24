<div>
    <div class="row">
        <div class="col-md-5 col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <dl class="row mb-0">
                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap"><i class='bx bx-pin me-1'></i> Project Title:</dt>
                        <dd class="col-sm-7 text-wrap">{{ $researchModel->project }}</dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap"><i class='bx bx-user me-1'></i> Researcher:</dt>
                        <dd class="col-sm-7 text-wrap">{{ $researchModel->researcher }}</dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap"><i class='bx bx-money me-1'></i> Budget:</dt>
                        <dd class="col-sm-7">{{ currencyFormat($researchModel->budget) }}</dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap"><i class='bx bx-calendar me-1'></i> Year Start:</dt>
                        <dd class="col-sm-7">{{ $researchModel->year_start }}</dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap"><i class='bx bx-calendar me-1'></i> Year End</dt>
                        <dd class="col-sm-7">{{ $researchModel->year_end }}</dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap"><i class='bx bx-check-double me-1'></i>Project Status</dt>
                        <dd class="col-sm-7"><span class="badge {{ badgeBg($researchModel->status_id, [5 => 'bg-label-danger', 6 => 'bg-label-success']) }}">{{ $researchModel->research_status->term }}</span></dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap"><i class='bx bx-comment me-1'></i> Evalution remark</dt>
                        <dd class="col-sm-7">

                            <label class="switch switch-square" wire:click.prevent="remark('{{ ($researchModel->is_evaluated == 0 ? 1 : 0) }}')">
                                <input type="checkbox" class="switch-input" {{ ($researchModel->is_evaluated == 1 ? 'checked' : null) }}>
                                <span class="switch-toggle-slider">
                                    <span class="switch-on">
                                        <i class="bx bx-check"></i>
                                    </span>
                                    <span class="switch-off">
                                        <i class="bx bx-x"></i>
                                    </span>
                                </span>


                                @if($researchModel->is_evaluated  == 0)
                                    <span class="switch-label">Under-evaluation</span>
                                @else
                                    <span class="switch-label text-success">Evaluated</span>
                                @endif
                            </label>

                        </dd>
                    </dl>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <dl class="row mb-0">
                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap"><i class='bx bx-diamond me-1'></i> Fund:</dt>
                        <dd class="col-sm-7"><span class="badge {{ badgeBg($researchModel->fund_id, [2 => 'bg-label-info', 1 => 'bg-label-primary']) }}">{{ $researchModel->fund->term }}</span></dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap"><i class='bx bx-menu me-1'></i> Category:</dt>
                        <dd class="col-sm-7"><span class="badge {{ badgeBg($researchModel->category_id, [4 => 'bg-label-dark', 3 => 'bg-label-warning']) }}">{{ $researchModel->category->term }}</span></dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap"><i class='bx bx-briefcase me-1'></i> Commodity:</dt>
                        <dd class="col-sm-7 text-wrap">{{ $researchModel->commodity }}</dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap"><i class='bx bx-file me-1'></i> Program Title:</dt>
                        <dd class="col-sm-7 text-wrap">{{ $researchModel->program }}</dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap"><i class='bx bx-map me-1'></i> Study Site:</dt>
                        <dd class="col-sm-7 text-wrap">{{ $researchModel->sites }}</dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap"><i class='bx bx-shield-alt me-1'></i> Funding Agency:</dt>
                        <dd class="col-sm-7 text-wrap">{{ $researchModel->agency }}</dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-wrap"><i class='bx bx-group me-1'></i> Collaborative Agency:</dt>
                        <dd class="col-sm-7 text-wrap">{{ $researchModel->collaborative }}</dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-12">

            @if($researchModel->is_evaluated  == 0)
                <div class="card  mb-5 p-2">
                    <form  method="post" class="d-flex justify-content-between align-items-center" wire:submit.prevent="save">
                        <textarea class="form-control message-input border-0 me-3 shadow-none" wire:model.debounce.500ms="evaluation" placeholder="Type your message here..."></textarea>
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
                        @if(isset($researchModel->evaluations))
                            @if(count($researchModel->evaluations) > 0)

                                @foreach($researchModel->evaluations as $evaluation)
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
                                    'title' => $researchModel->title,
                                    'dateCreated' => $researchModel->date_created,
                                    'owner' => ['firstname' => $researchModel->file_owner->firstname, 'lastname' => $researchModel->file_owner->lastname],
                                    'attachments' => $researchModel->attachments
                                ])

                            @else
                                @include('vendor.remis-components.evaluation-starter-timeline',[
                                    'title' => $researchModel->title,
                                    'dateCreated' => $researchModel->date_created,
                                    'owner' => ['firstname' => $researchModel->file_owner->firstname, 'lastname' => $researchModel->file_owner->lastname],
                                    'attachments' => $researchModel->attachments
                                ])
                            @endif
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
