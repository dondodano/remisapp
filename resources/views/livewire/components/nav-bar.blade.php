<div>
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item lh-1 me-3">
                    <x-dropdown-list id="dropdownQuarter" text="{{ $quarter }}">
                        <li><h6 class="dropdown-header text-uppercase">Select quarter</h6></li>
                        <li><a class="dropdown-item" href="javascript:void(0)"  wire:click.prevent="selectQuarter('cQ==')">1st Quarter</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)"  wire:click.prevent="selectQuarter('cg==')">2nd Quarter</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)"  wire:click.prevent="selectQuarter('cw==')">3rd Quarter</a></li>
                    </x-dropdown-list>
                </li>
                <li class="nav-item lh-1 me-3">
                    <x-dropdown-form id="dropdownYear" text="{{ $year }}">
                        <div class="mb-2">
                            <label for="yearField" class="form-label">Enter Year</label>
                            <input type="number" class="form-control" id="yearField" wire:model.defer="year" value="{{ $year }}">
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-sm btn-primary" wire:click.prevent="selectYear">Select year</button>
                        </div>
                    </x-dropdown-form>
                </li>

                @livewire('components.notification')

                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            {!! avatar() !!}
                            {{-- <img src="{{ asset('/assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" /> --}}
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            {!! avatar() !!}
                                            {{-- <img src="{{ asset('/assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" /> --}}
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block">{{ initialName() }}</span>
                                        <small class="text-muted">{{ sessionGet('role') }}</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/my/profile">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/my/password">
                                <i class="bx bx-lock-alt me-2"></i>
                                <span class="align-middle">Password</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/logout">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

</div>
