<div>
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Program</h5>
                    <div class="float-end">
                        <a href="/program" class="btn btn-sm btn-secondary">
                            <i class="bx bx-left-arrow-alt"></i> Back to Program list
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form  wire:submit.prevent="update"  enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="institute">Institute</label>
                            <div class="col-sm-10">
                                <select id="institute" class="form-select" name="institute" wire:model.debounce.500ms="institute">
                                    <option value="">-- Select item --</option>
                                    @foreach ($institutes as $institute )
                                        <option value="{{ $institute->id }}">{{ $institute->term }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="term">Term</label>
                            <div class="col-sm-10">
                                <input type="text" id="term" class="form-control" name="term" wire:model.debounce.500ms="term">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="definition">Definition</label>
                            <div class="col-sm-10">
                                <textarea id="definition" class="form-control" name="definition" wire:model.debounce.500ms="definition"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                <button type="reset" class="btn btn-label-secondary" name="cancel">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
</div>
