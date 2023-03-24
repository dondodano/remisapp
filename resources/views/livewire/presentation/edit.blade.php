<div>
    <div class="card mb-4">
        <h5 class="card-header">Edit Presentation Document
            <div class="float-end">
                <a href="/presentation" class="btn btn-sm btn-secondary">
                    <i class="bx bx-left-arrow-alt"></i> Back to Presentation list
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
                        <span class="text-danger">{{ $message }} </span>
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

                        @if(count($presentationFiles))
                            @if(count($presentationFiles) > 0)
                                @foreach ($presentationFiles as $file)
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

            <h6>2. Presentation Detail</h6>
            <div class="row g-3">

                <div class="col-md-12">
                    <label title="Required" class="form-label" for="date_presented">Date Presented
                        <span class="text-danger">*</span>
                    </label>
                    <input type="date" id="date_presented" class="form-control" name="date_presented"  wire:model="date_presented">
                </div>

                <div class="col-md-12">
                    <label   title="Required" class="form-label" for="type">Presentation Type
                        <span class="text-danger">*</span>
                    </label>
                    <select id="type" class="form-select" name="type" wire:model="type">
                        <option value="">-- Select type --</option>
                        @foreach($types as $key => $type)
                            <option value="{{ $type->id }}">{{ $type->term }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-12">
                    <label title="Required" class="form-label" for="title">Title
                        <span class="text-danger">*</span>
                    </label>
                    <textarea id="title" class="form-control" name="title" wire:model="title"></textarea>
                </div>

                <div class="col-md-12">
                    <label title="Required" class="form-label" for="author">Author
                        <span class="text-danger">*</span>
                    </label>
                    <textarea id="author" class="form-control" name="author" wire:model="author"></textarea>
                </div>

                <div class="col-md-12">
                    <label title="Required" class="form-label" for="forum">Forum
                        <span class="text-danger">*</span>
                    </label>
                    <textarea id="forum" class="form-control" name="forum" wire:model="forum"></textarea>
                </div>

                <div class="col-md-12">
                    <label title="Required" class="form-label" for="venue">Venue
                        <span class="text-danger">*</span>
                    </label>
                    <textarea id="venue" class="form-control" name="venue" wire:model="venue"></textarea>
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
        </form>
    </div>

</div>
