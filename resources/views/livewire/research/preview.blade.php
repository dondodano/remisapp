
<div>
    <div class="card mb-4" id="{{ rand() }}">
        <div class="card-header align-items-center">
            <h5 class="card-action-title mb-0">Research details
                <div class="float-end">
                    <a href="/research" class="btn btn-sm btn-secondary">
                        <i class="bx bx-left-arrow-alt"></i> Back to Research list
                    </a>
                </div>
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-6 col-12">
                    <dl class="row mb-0">
                        <dt class="col-sm-4 fw-semibold mb-3 text-nowrap">Project Title:</dt>
                        <dd class="col-sm-8 text-wrap">{{ $research->project }}</dd>

                        <dt class="col-sm-4 fw-semibold mb-3 text-nowrap">Researcher:</dt>
                        <dd class="col-sm-8 text-wrap">{{ $research->researcher }}</dd>

                        <dt class="col-sm-4 fw-semibold mb-3 text-nowrap">Budget:</dt>
                        <dd class="col-sm-8">{{ currencyFormat($research->budget) }}</dd>

                        <dt class="col-sm-4 fw-semibold mb-3 text-nowrap">Year Start:</dt>
                        <dd class="col-sm-8">{{ $research->year_start }}</dd>

                        <dt class="col-sm-4 fw-semibold mb-3 text-nowrap">Year End</dt>
                        <dd class="col-sm-8">{{ $research->year_end }}</dd>

                        <dt class="col-sm-4 fw-semibold mb-3 text-nowrap">Status</dt>
                        <dd class="col-sm-8"><span class="badge {{ badgeBg($research->status_id, [5 => 'bg-label-danger', 6 => 'bg-label-success']) }}">{{ $research->research_status->term }}</span></dd>
                    </dl>
                </div>
                <div class="col-xl-6 col-12">
                    <dl class="row mb-0">
                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap">Fund:</dt>
                        <dd class="col-sm-7"><span class="badge {{ badgeBg($research->fund_id, [2 => 'bg-label-info', 1 => 'bg-label-primary']) }}">{{ $research->fund->term }}</span></dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap">Category:</dt>
                        <dd class="col-sm-7"><span class="badge {{ badgeBg($research->category_id, [4 => 'bg-label-dark', 3 => 'bg-label-warning']) }}">{{ $research->category->term }}</span></dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap">Commodity:</dt>
                        <dd class="col-sm-7 text-wrap">{{ $research->commodity }}</dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap">Program Title:</dt>
                        <dd class="col-sm-7 text-wrap">{{ $research->program }}</dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap">Study Site:</dt>
                        <dd class="col-sm-7 text-wrap">{{ $research->sites }}</dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap">Funding Agency:</dt>
                        <dd class="col-sm-7 text-wrap">{{ $research->agency }}</dd>

                        <dt class="col-sm-5 fw-semibold mb-3 text-nowrap">Collaborative Agency:</dt>
                        <dd class="col-sm-7 text-wrap">{{ $research->collaborative }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>


    <div class="card mb-4" id="{{ rand() }}">
        <div class="card-header align-items-center">
            <h5 class="card-action-title mb-0">Attachments</h5>
        </div>
        <div class="card-body ">
            @foreach ($research->attachments as $file )
                <div class="row">
                    <div class="col-12">
                        <object data="{{ getFileShortLocation($file->file) }}#view=Fit" type="application/pdf" width="100%" height="480" title="{{ basename($file->file) }}" zoom="40">
                            <p>It appears your Web browser is not configured to display PDF files. No worries, just <a href="{{ getFileShortLocation($file->file) }}">click here to download the PDF file.</a></p>
                        </object>

                        <div class="divider divider-dashed">
                            <div class="divider-text">
                                <i class='bx bx-image-alt'></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
