<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo">
                <i class='bx bx-cube' style="font-size: 1.5rem"></i>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2" style="text-transform:uppercase;">REMIS</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>


        @role(['super', 'admin', 'faculty', 'staff'])
            <!-- Documents -->
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Documents</span>
            </li>
            <li class="menu-item {{ openSide(['research', 'publication','presentation', 'extension', 'training', 'partnership']) }}">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-folder"></i>
                    <div data-i18n="My Files">My Files</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ activeSide('research') }}">
                        <a href="/research" class="menu-link">
                            <div data-i18n="Research">Research</div>
                        </a>
                    </li>
                    <li class="menu-item {{ activeSide('publication') }}">
                        <a href="/publication" class="menu-link">
                            <div data-i18n="Publication">Publication</div>
                        </a>
                    </li>
                    <li class="menu-item {{ activeSide('presentation') }}">
                        <a href="/presentation" class="menu-link">
                            <div data-i18n="Presentation">Presentation</div>
                        </a>
                    </li>
                    <li class="menu-item {{ activeSide('extension') }}">
                        <a href="/extension" class="menu-link">
                            <div data-i18n="Extension">Extension</div>
                        </a>
                    </li>
                    <li class="menu-item {{ activeSide('training') }}">
                        <a href="/training" class="menu-link">
                            <div data-i18n="Training">Training</div>
                        </a>
                    </li>
                    <li class="menu-item {{ activeSide('partnership') }}">
                        <a href="/partnership" class="menu-link">
                            <div data-i18n="Partnership">Partnership</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endrole

        {{-- @role(['super', 'admin', 'faculty', 'staff'])
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Monitoring</span>
            </li>
            <li class="menu-item {{ openSide(['lib']) }}">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-wallet"></i>
                    <div data-i18n="Finance">Finance</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ activeSide('lib') }}">
                        <a href="/lib" class="menu-link">
                            <div data-i18n="LIB">LIB</div>
                        </a>
                    </li>
                    <li class="menu-item {{ activeSide('ppmp') }}">
                        <a href="/ppmp" class="menu-link">
                            <div data-i18n="PPMP">PPMP</div>
                        </a>
                    </li>
                    <li class="menu-item {{ activeSide('pr') }}">
                        <a href="/pr" class="menu-link">
                            <div data-i18n="PR">PR</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endrole --}}

        @role(['super', 'admin'])
            <!-- User -->
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">User</span>
            </li>
            <li class="menu-item {{ openSide(['user']) }}">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="User">User</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ activeSide('user') }}">
                        <a href="/user" class="menu-link">
                            <div data-i18n="User list">User list</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endrole


        @role('super')
            <!-- Logs -->
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">History</span>
            </li>
            <li class="menu-item {{ openSide(['user-log', 'activity-log']) }}">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-history"></i>
                    <div data-i18n="Logs">Logs</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ activeSide('user-log') }}">
                        <a href="/user-log" class="menu-link">
                            <div data-i18n="User log">User log</div>
                        </a>
                    </li>
                    <li class="menu-item {{ activeSide('activity-log') }}">
                        <a href="/activity-log" class="menu-link">
                            <div data-i18n="Activity log">Activity log</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endrole


        @role(['super', 'admin'])
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">System</span>
            </li>

            <li class="menu-item {{ openSide(['rc']) }}">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-archive-in"></i>
                    <div data-i18n="Requisite">Requisite</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item  {{ activeSide('rc') }}">
                        <a href="/rc" class="menu-link">
                            <div data-i18n="Responsiblity Center">Responsiblity Center</div>
                        </a>
                    </li>
                    {{-- <li class="menu-item  {{ activeSide('program') }}">
                        <a href="/program" class="menu-link">
                            <div data-i18n="Program">Program</div>
                        </a>
                    </li> --}}
                </ul>
            </li>

            @role('super')
                <li class="menu-item {{ openSide(['general', 'favicon']) }}">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-cog"></i>
                        <div data-i18n="Setting">Setting</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ activeSide('general') }}">
                            <a href="/general" class="menu-link">
                                <div data-i18n="General">General</div>
                            </a>
                        </li>
                        <li class="menu-item {{ activeSide('favicon') }}">
                            <a href="/favicon" class="menu-link">
                                <div data-i18n="Fav Icon">Fav Icon</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item {{ openSide(['system-backup', 'database-backup']) }}">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-hdd"></i>
                        <div data-i18n="Backup">Backup</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ activeSide('system-backup') }}">
                            <a href="/system-backup" class="menu-link">
                                <div data-i18n="System Backup">System Backup</div>
                            </a>
                        </li>
                        <li class="menu-item {{ activeSide('database-backup') }}">
                            <a href="/database-backup" class="menu-link">
                                <div data-i18n="Database Backup">Database Backup</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item {{ activeSide('maintenance') }}">
                    <a href="/maintenance" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-chip"></i>
                        <div data-i18n="Maintenance">Maintenance</div>
                    </a>
                </li>
            @endrole
        @endrole
    </ul>
</aside>

