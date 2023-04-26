<div>
    <div class="card mb-4" id="{{ rand() }}">
        <div class="card-header align-items-center">
            <h5 class="card-action-title mb-0">Publication details
                <div class="float-end">
                    <a href="/publication" class="btn btn-sm btn-secondary">
                        <i class="bx bx-left-arrow-alt"></i> Back to Publication list
                    </a>
                </div>
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <dl class="row mb-0">
                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Date Published:</dt>
                        <dd class="col-sm-10 text-wrap">{{ setDate($publicationModel->date_published) }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Title:</dt>
                        <dd class="col-sm-10 text-wrap">{{ $publicationModel->title }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Author</dt>
                        <dd class="col-sm-10">{{ $publicationModel->author  }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Publisher</dt>
                        <dd class="col-sm-10">{{ $publicationModel->publisher }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Volume</dt>
                        <dd class="col-sm-10">{{ $publicationModel->volume }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Issue</dt>
                        <dd class="col-sm-10">{{ $publicationModel->issue }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Page</dt>
                        <dd class="col-sm-10">{{ $publicationModel->page }}</dd>

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
            @foreach ($publicationModel->attachments as $file )
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
