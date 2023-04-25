<div>
    <div class="card mb-4" id="{{ rand() }}">
        <div class="card-header align-items-center">
            <h5 class="card-action-title mb-0">Presentation details
                <div class="float-end">
                    <a href="/presentation" class="btn btn-sm btn-secondary">
                        <i class="bx bx-left-arrow-alt"></i> Back to Presentation list
                    </a>
                </div>
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <dl class="row mb-0">
                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Date Presented:</dt>
                        <dd class="col-sm-10 text-wrap">{{ setDate($presentation->date_presented) }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Title:</dt>
                        <dd class="col-sm-10 text-wrap">{{ $presentation->title }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Author</dt>
                        <dd class="col-sm-10 text-wrap">{{ $presentation->author  }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Forum</dt>
                        <dd class="col-sm-10 text-wrap">{{ $presentation->forum }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Venue</dt>
                        <dd class="col-sm-10 text-wrap">{{ $presentation->venue }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Type</dt>
                        <dd class="col-sm-10"><span class="badge bg-label-info">{{ $presentation->type->term }}</span></dd>
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
            @foreach ($presentation->attachments as $file )
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
