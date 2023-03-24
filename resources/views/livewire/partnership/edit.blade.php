<div>
    <div class="card mb-4">
        <h5 class="card-header">Edit Partnership Document
            <div class="float-end">
                <a href="/partnership" class="btn btn-sm btn-secondary">
                    <i class="bx bx-left-arrow-alt"></i> Back to Partnership list
                </a>
            </div>
        </h5>
        <form class="card-body" wire:submit.prevent="update" enctype="multipart/form-data">
            <h6>1. Upload File</h6>

            <div class="row g-3">
                <div class="col-md-12 mb-3">
                    <div class="file-input">
                        <input type="file" name="attachment" class="form-control" wire:model="attachments" multiple id="{{ $fileInputId }}">
                        <small class="text-muted"><i>Note : To change file. You need to select another file(s) to upload.</i></small>
                    </div>
                    <span class="text-info" wire:loading wire:target="attachments">
                        <div class="spinner-border spinner-border-sm text-info" role="status"></div>
                        Uploading...
                    </span>

                    @error('attachments.*')
                        <span class="text-danger">{{ $message }}
                    </span> @enderror

                </div>
            </div>


            <div class="row">
                <div class="col-md-12 mb-3">
                    <small class="text-light fw-semibold  mb-3">File list </small>
                    <ul class="list-group ">

                        @if (isset($attachments))
                            @if(count($attachments))
                                @foreach ($attachments as $attachment )
                                    <li class="list-group-item justify-content-start list-group-item-action d-flex  align-items-center cursor-pointer">
                                        <i class='bx bx-file  me-2'></i>
                                        <div class="w-100">
                                            {{ $attachment->getClientOriginalName() }}
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        @endif

                        @if(count($partnershipFiles))
                            @if(count($partnershipFiles) > 0)
                                @foreach ($partnershipFiles as $file)
                                    <li class="list-group-item justify-content-start list-group-item-action d-flex  align-items-center cursor-pointer" id="fileitem-{{ $file->id }}">
                                        <i class='bx bx-file  me-2'></i>
                                        <div class="w-100">
                                            {{ basename($file->file) }}
                                        </div>
                                        <div class="text-danger" wire:click="remove('{{ encipher($file->id) }}')">
                                            <i class='bx bx-x-circle'></i>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <li class="list-group-item d-flex justify-content-between align-items-center">No files</li>
                            @endif
                        @endif

                    </ul>
                </div>
            </div>



            <hr class="my-4 mx-n4">

            <h6>2. Partnership Detail</h6>
            <div class="row g-3">

                <div class="col-md-12">
                    <label title="Required" class="form-label" for="partner">Partner
                        <span class="text-danger">*</span>
                    </label>
                    <textarea id="partner" class="form-control" name="partner" wire:model="partner"></textarea>
                </div>

                <div class="col-md-12">
                    <label title="Required" class="form-label" for="activity">Activity
                        <span class="text-danger">*</span>
                    </label>
                    <textarea id="activity" class="form-control" name="activity" wire:model="activity"></textarea>
                </div>

                <div class="col-md-6">
                    <label title="Required" class="form-label" for="date_from">Date From
                        <span class="text-danger">*</span>
                    </label>
                    <input type="date" id="date_from" class="form-control" name="date_from"  wire:model="date_from">
                </div>
                <div class="col-md-6">
                    <label title="Required" class="form-label" for="date_to">Date To
                        <span class="text-danger">*</span>
                    </label>
                    <input type="date" id="date_to" class="form-control" name="date_to"  wire:model="date_to">
                </div>

            </div>

            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
        </form>
    </div>

</div>
