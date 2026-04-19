<aside class="main-sidebar sidebar-light-primary">
    <a href="#" class="brand-link">
        <div class="brand-logo-wrap">
            <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="Logo">
        </div>
        <span class="brand-text">CB<span>VH</span></span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="sidebar-section-label">Main</li>

                <li class="nav-item">
                    <a href="#" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <div class="nav-icon-box">
                            <i class="fas fa-home"></i>
                        </div>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <div class="nav-icon-box">
                            <i class="fas fa-th"></i>
                        </div>
                        <p>Widgets</p>
                    </a>
                </li>

                <li class="sidebar-section-label">Configuration</li>

                <li class="nav-item {{ request()->routeIs('users.*', 'roles.*', 'permissions.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('users.*', 'roles.*', 'permissions.*') ? 'active' : '' }}">
                        <div class="nav-icon-box">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <p>
                            Setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
                                <span class="nav-sub-dot"></span>
                                <p>User management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('roles.index') }}" class="nav-link {{ request()->routeIs('roles.*') ? 'active' : '' }}">
                                <span class="nav-sub-dot"></span>
                                <p>Role</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('permissions.index') }}" class="nav-link {{ request()->routeIs('permissions.*') ? 'active' : '' }}">
                                <span class="nav-sub-dot"></span>
                                <p>Permission</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>

    <div class="sidebar-user-footer">
        <div class="cbvh-avatar">AD</div>
        <div>
            <p class="user-name">Admin</p>
            <p class="user-role">System administrator</p>
        </div>
    </div>
</aside>