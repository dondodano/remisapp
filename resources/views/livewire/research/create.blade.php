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
                <x-file-pond wire:model="attachments" multiple/>
                <small class="text-muted"><i>Note : To change file. You need to select another file(s) to upload.</i></small>
            </div>

            @error('attachments.*')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <hr class="my-4 mx-n4">

        <h6>2. Basic Information</h6>
        <div class="row g-3">
            <div class="col-md-12">
                <label  title="Required" class="form-label" for="project-title">Project Title
                    <span class="text-danger">*</span>
                </label>
                <textarea id="project-title" class="form-control" name="project-title" wire:model.defer="projectTitle"></textarea>
            </div>
            <div class="col-md-12">
                <label   title="Required" class="form-label" for="researcher">Researcher
                    <span class="text-danger">*</span>
                </label>
                <textarea id="researcher" class="form-control" name="researcher" wire:model.defer="researcher"></textarea>
            </div>
            <div class="col-md-12">
                <label   title="Required" class="form-label" for="budget">Budget
                    <span class="text-danger">*</span>
                </label>
                <input type="number" id="budget" class="form-control" name="budget"  wire:model.defer="budget">
            </div>

            <div class="col-md-4">
                <label   title="Required" class="form-label" for="year-start">Year Start
                    <span class="text-danger">*</span>
                </label>
                <input type="number" id="year-start" class="form-control" name="year-start" wire:model.defer="yearStart">
            </div>

            <div class="col-md-4">
                <label   title="Required" class="form-label" for="year-end">Year End
                    <span class="text-danger">*</span>
                </label>
                <input type="number" id="year-end" class="form-control" name="year-end" wire:model.defer="yearEnd">
            </div>

            <div class="col-md-4">
                <label   title="Required" class="form-label" for="remarks">Remarks
                    <span class="text-danger">*</span>
                </label>
                <select id="remarks" class="form-select" name="remarks" wire:model.defer="status">
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
                <select id="fund-type" class="form-select" name="fund-type" wire:model.defer="fundType">
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
                <select id="category" class="form-select" name="category" wire:model.defer="category">
                    <option value="">-- Select Category --</option>
                    @foreach($categories as $key => $category)
                        <option value="{{ $category->id }}">{{ $category->term }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="commodity">Commodity</label>
                <input type="text" id="commodity" class="form-control" name="commodity" wire:model.defer="commodity">
            </div>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-md-12">
                <label class="form-label" for="program-title">Program Title</label>
                <textarea id="program-title" class="form-control" name="program-title"  wire:model.defer="programTitle"></textarea>
            </div>

            <div class="col-md-12">
                <label title="Required" class="form-label" for="study-site">Study site
                    <span class="text-danger">*</span>
                </label>
                <textarea id="study-site" class="form-control" name="study-site" wire:model.defer="studySite"></textarea>
            </div>
            <div class="col-md-12">
                <label title="Required" class="form-label" for="funding-agency">Funding Agency
                    <span class="text-danger">*</span>
                </label>
                <textarea id="funding-agency" class="form-control" name="funding-agency"  wire:model.defer="fundingAgency"></textarea>
            </div>

            <div class="col-md-12">
                <label class="form-label" for="agency">Collaborative Agency</label>
                <textarea id="agency" class="form-control" name="agency"  wire:model.defer="collaborativeAgency"></textarea>
            </div>
        </div>

        <div class="pt-4">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary">Cancel</button>
        </div>
    </form>
</div>
