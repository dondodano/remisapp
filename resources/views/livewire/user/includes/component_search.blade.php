<div class="d-flex flex-nowrap border-bottom mt-3">
    <div class="flex-fill mb-3">
        <div class="d-flex flex-row ">
            <div class="ms-3 ">
                <select class="form-select" wire:model="paginate">
                    <option value="1">1</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>
    </div>
    <div class="flex-fill mb-3">
        <div class="d-flex flex-row justify-content-end">
            <div class="me-3">
                <input type="search" class="form-control" placeholder="Search" wire:model.debounce.500ms="search" >
            </div>
            <div class="me-3">
                <a href="/user/create" class="btn btn-primary">
                    <i class="bx bx-plus"></i> Add New User
                </a>
            </div>
        </div>
    </div>
</div>
