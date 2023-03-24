<div>
    <div class="card mb-4">
        <h5 class="card-header">Edit Training Document
            <div class="float-end">
                <a href="/training" class="btn btn-sm btn-secondary">
                    <i class="bx bx-left-arrow-alt"></i> Back to Training list
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
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

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

                        @if(count($trainingFiles))
                            @if(count($trainingFiles) > 0)
                                @foreach ($trainingFiles as $file)
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

            <h6>2. Training Detail</h6>
            <div class="row g-3">

                <div class="col-md-12">
                    <label title="Required" class="form-label" for="title">Title
                        <span class="text-danger">*</span>
                    </label>
                    <textarea id="title" class="form-control" name="title" wire:model="title"></textarea>
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


                <div class="col-md-3 col-12">
                    <label title="Required" class="form-label" for="duration">Duration
                        <span class="text-danger">*</span>
                    </label>
                    <input type="number" id="duration" class="form-control" name="duration"  wire:model="duration">
                </div>
                <div class="col-md-3 col-12">
                    <label title="Required" class="form-label" for="trainees">No of Trainees
                        <span class="text-danger">*</span>
                    </label>
                    <input type="number" id="trainees" class="form-control" name="trainees"  wire:model="trainees">
                </div>
                <div class="col-md-3 col-12">
                    <label title="Required" class="form-label" for="weight">Weight
                        <span class="text-danger">*</span>
                    </label>
                    <input type="number" id="weight" class="form-control" name="weight"  wire:model="weight">
                </div>
                <div class="col-md-3 col-12">
                    <label title="Required" class="form-label" for="surveyed">No of Trainees Surveyed
                        <span class="text-danger">*</span>
                    </label>
                    <input type="number" id="surveyed" class="form-control" name="surveyed"  wire:model="surveyed">
                </div>

                <div class="col-md-6 col-12">
                    <label title="Required" class="form-label" for="quality">Quality
                        <span class="text-danger">*</span>
                    </label>
                    <select id="quality" class="form-control" name="quality"  wire:model="quality">
                        <option value="">-- Select Quality --</option>
                        @foreach($qualities as $quality)
                            <option value="{{ $quality->id }}">{{ $quality->term}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 col-12">
                    <label title="Required" class="form-label" for="relevance">Relevance
                        <span class="text-danger">*</span>
                    </label>
                    <input type="number" id="relevance" class="form-control" name="relevance"  wire:model="relevance">
                </div>

            </div>

            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
        </form>
    </div>

</div>
