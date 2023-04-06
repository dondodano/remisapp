<div class="card mb-4">
    <h5 class="card-header">New Research Document
        <div class="float-end">
            <a href="/research" class="btn btn-sm btn-secondary">
                <i class="bx bx-left-arrow-alt"></i> Back to Research list
            </a>
        </div>
    </h5>
    <form class="card-body" wire:submit.prevent="store" enctype="multipart/form-data">
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
                    @if($attachments)
                        @foreach ($attachments as $attachment )
                            <li class="list-group-item justify-content-start list-group-item-action d-flex  align-items-center cursor-pointer">
                                <i class='bx bx-file  me-2'></i>
                                <div class="w-100">
                                    {{ $attachment->getClientOriginalName() }}
                                </div>
                            </li>
                        @endforeach
                    @else
                        <li class="list-group-item d-flex justify-content-between align-items-center">No files</li>
                    @endif

                </ul>
            </div>
        </div>



        <hr class="my-4 mx-n4">

        <h6>2. Basic Information</h6>
        <div class="row g-3">
            <div class="col-md-12">
                <label  title="Required" class="form-label" for="project-title">Project Title
                    <span class="text-danger">*</span>
                </label>
                <textarea id="project-title" class="form-control" name="project-title" wire:model.prevent.debounce.500ms="projectTitle"></textarea>
            </div>
            <div class="col-md-12">
                <label   title="Required" class="form-label" for="researcher">Researcher
                    <span class="text-danger">*</span>
                </label>
                <textarea id="researcher" class="form-control" name="researcher" wire:model.prevent.debounce.500ms="researcher"></textarea>
            </div>
            <div class="col-md-12">
                <label   title="Required" class="form-label" for="budget">Budget
                    <span class="text-danger">*</span>
                </label>
                <input type="number" id="budget" class="form-control" name="budget"  wire:model.prevent.debounce.500ms="budget">
            </div>

            <div class="col-md-4">
                <label   title="Required" class="form-label" for="year-start">Year Start
                    <span class="text-danger">*</span>
                </label>
                <input type="number" id="year-start" class="form-control" name="year-start" wire:model.prevent.debounce.500ms="yearStart">
            </div>

            <div class="col-md-4">
                <label   title="Required" class="form-label" for="year-end">Year End
                    <span class="text-danger">*</span>
                </label>
                <input type="number" id="year-end" class="form-control" name="year-end" wire:model.prevent.debounce.500ms="yearEnd">
            </div>

            <div class="col-md-4">
                <label   title="Required" class="form-label" for="remarks">Remarks
                    <span class="text-danger">*</span>
                </label>
                <select id="remarks" class="form-select" name="remarks" wire:model.prevent.debounce.500ms="status">
                    <option value="">-- Select Remarks --</option>
                    @foreach($statuses as $key => $status)
                        <option value="{{ $status->id }}">{{ $status->term }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <hr class="my-4 mx-n4">

        <h6>3. More Details</h6>
        <div class="row g-3 mb-3">
            <div class="col-md-3">
                <label title="Required" class="form-label" for="fund-type">Fund Type
                    <span class="text-danger">*</span>
                </label>
                <select id="fund-type" class="form-select" name="fund-type" wire:model.prevent.debounce.500ms="fundType">
                    <option value="">-- Select Fund Type --</option>
                    @foreach($fundtypes as $key => $fundtype)
                        <option value="{{ $fundtype->id }}">{{ $fundtype->term }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label title="Required" class="form-label" for="category">Category
                    <span class="text-danger">*</span>
                </label>
                <select id="category" class="form-select" name="category" wire:model.prevent.debounce.500ms="category">
                    <option value="">-- Select Category --</option>
                    @foreach($categories as $key => $category)
                        <option value="{{ $category->id }}">{{ $category->term }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="commodity">Commodity</label>
                <input type="text" id="commodity" class="form-control" name="commodity" wire:model.prevent.debounce.500ms="commodity">
            </div>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-md-12">
                <label class="form-label" for="program-title">Program Title</label>
                <textarea id="program-title" class="form-control" name="program-title"  wire:model.prevent.debounce.500ms="programTitle"></textarea>
            </div>

            <div class="col-md-12">
                <label title="Required" class="form-label" for="study-site">Study site
                    <span class="text-danger">*</span>
                </label>
                <textarea id="study-site" class="form-control" name="study-site" wire:model.prevent.debounce.500ms="studySite"></textarea>
            </div>
            <div class="col-md-12">
                <label title="Required" class="form-label" for="funding-agency">Funding Agency
                    <span class="text-danger">*</span>
                </label>
                <textarea id="funding-agency" class="form-control" name="funding-agency"  wire:model.prevent.debounce.500ms="fundingAgency"></textarea>
            </div>

            <div class="col-md-12">
                <label class="form-label" for="agency">Collaborative Agency</label>
                <textarea id="agency" class="form-control" name="agency"  wire:model.prevent.debounce.500ms="collaborativeAgency"></textarea>
            </div>
        </div>

        <div class="pt-4">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary">Cancel</button>
        </div>
    </form>
</div>
