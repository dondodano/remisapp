<div>
    <div class="card mb-4">
        <h5 class="card-header">Edit Publication Document
            <div class="float-end">
                <a href="/publication" class="btn btn-sm btn-secondary">
                    <i class="bx bx-left-arrow-alt"></i> Back to Publication list
                </a>
            </div>
        </h5>
        <form class="card-body" wire:submit.prevent="update" enctype="multipart/form-data">
            <h6>1. Upload File</h6>

            <div class="row g-3">
                <div class="col-md-12 mb-3">
                    <div class="file-input">
                        <x-file-pond wire:model="attachments" multiple/>
                        <small class="text-muted"><i>Note : To change file. You need to select another file(s) to upload.</i></small>
                    </div>

                    @error('attachments.*')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 mb-3">
                    <small class="text-light fw-semibold  mb-3">File list </small>
                    <ul class="list-group ">

                        @if(isset($publicationFiles))
                            @if(count($publicationFiles) > 0)
                                @foreach ($publicationFiles as $file)
                                    <li class="list-group-item justify-content-start list-group-item-action d-flex  align-items-center cursor-pointer" id="fileitem-{{ $file->id }}">
                                        <i class='bx bx-file  me-2'></i>
                                        <div class="w-100">
                                            {{ basenameV2($file->file) }}
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

            <h6>2. Publication Detail</h6>
            <div class="row g-3">

                <div class="col-md-12">
                    <label title="Required" class="form-label" for="date_published">Date Published
                        <span class="text-danger">*</span>
                    </label>
                    <input type="date" id="date_published" class="form-control" name="date_published"  wire:model.defer="date_published">
                </div>

                <div class="col-md-12">
                    <label title="Required" class="form-label" for="title">Title
                        <span class="text-danger">*</span>
                    </label>
                    <textarea id="title" class="form-control" name="title" wire:model.defer="title"></textarea>
                </div>

                <div class="col-md-12">
                    <label title="Required" class="form-label" for="author">Author
                        <span class="text-danger">*</span>
                    </label>
                    <textarea id="author" class="form-control" name="author" wire:model.defer="author"></textarea>
                </div>

                <div class="col-md-12">
                    <label title="Required" class="form-label" for="publisher">Publisher
                        <span class="text-danger">*</span>
                    </label>
                    <textarea id="publisher" class="form-control" name="publisher" wire:model.defer="publisher"></textarea>
                </div>

                <div class="col-md-4">
                    <label   title="Required" class="form-label" for="volume">Volume
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="volume" class="form-control" name="volume" wire:model.defer="volume">
                </div>

                <div class="col-md-4">
                    <label   title="Required" class="form-label" for="issue">Issue
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="issue" class="form-control" name="issue" wire:model.defer="issue">
                </div>

                <div class="col-md-4">
                    <label   title="Required" class="form-label" for="page">Page
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="page" class="form-control" name="page" wire:model.defer="page">
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
        </form>
    </div>

</div>
