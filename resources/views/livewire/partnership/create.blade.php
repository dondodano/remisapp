<div>
    <div class="card mb-4">
        <h5 class="card-header">New Partnership Document
            <div class="float-end">
                <a href="/partnership" class="btn btn-sm btn-secondary">
                    <i class="bx bx-left-arrow-alt"></i> Back to Partnership list
                </a>
            </div>
        </h5>
        <form class="card-body" wire:submit.prevent="store" enctype="multipart/form-data">
            <h6>1. Upload File</h6>

            <div class="row g-3">
                <div class="col-md-12 mb-3">
                    <div class="file-input">
                        <x-filepond wire:model="attachments" multiple/>
                        <small class="text-muted"><i>Note : To change file. You need to select another file(s) to upload.</i></small>
                    </div>

                    @error('attachments.*')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
            </div>

            <hr class="my-4 mx-n4">

            <h6>2. Partnership Detail</h6>
            <div class="row g-3">

                <div class="col-md-12">
                    <label title="Required" class="form-label" for="partner">Partner
                        <span class="text-danger">*</span>
                    </label>
                    <textarea id="partner" class="form-control" name="partner" wire:model.defer="partner"></textarea>
                </div>

                <div class="col-md-12">
                    <label title="Required" class="form-label" for="activity">Activity
                        <span class="text-danger">*</span>
                    </label>
                    <textarea id="activity" class="form-control" name="activity" wire:model.defer="activity"></textarea>
                </div>

                <div class="col-md-6">
                    <label title="Required" class="form-label" for="date_from">Date From
                        <span class="text-danger">*</span>
                    </label>
                    <input type="date" id="date_from" class="form-control" name="date_from"  wire:model.defer="date_from">
                </div>
                <div class="col-md-6">
                    <label title="Required" class="form-label" for="date_to">Date To
                        <span class="text-danger">*</span>
                    </label>
                    <input type="date" id="date_to" class="form-control" name="date_to"  wire:model.defer="date_to">
                </div>

            </div>

            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
        </form>
    </div>

</div>
