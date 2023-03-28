<div>
    <div class="card mb-4" id="{{ rand() }}">
        <div class="card-header align-items-center">
            <h5 class="card-action-title mb-0">Extension details
                <div class="float-end">
                    <a href="/extension" class="btn btn-sm btn-secondary">
                        <i class="bx bx-left-arrow-alt"></i> Back to Extension list
                    </a>
                </div>
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <dl class="row mb-0">
                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Extension:</dt>
                        <dd class="col-sm-10 text-wrap">{{ $extensionModel->extension }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Date From:</dt>
                        <dd class="col-sm-10 text-wrap">{{ $extensionModel->date_from }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Date To</dt>
                        <dd class="col-sm-10 text-wrap">{{ $extensionModel->date_to  }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Quantity</dt>
                        <dd class="col-sm-10 text-wrap">{{ $extensionModel->quantity }}</dd>

                        <dt class="col-sm-2 fw-semibold mb-3 text-nowrap">Benefeciaries</dt>
                        <dd class="col-sm-10 text-wrap">{{ $extensionModel->beneficiaries }}</dd>
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
            @foreach ($extensionModel->attachments as $file )
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
