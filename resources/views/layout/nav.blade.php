<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>

    </ul>

    <ul class="navbar-nav ml-auto">
        {{-- Messages --}}
        <li class="nav-item dropdown">
            <a class="nav-link navbar-icon-btn" data-toggle="dropdown" href="#">
                <i class="far fa-envelope"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <div class="media">
                        <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <div class="media">
                        <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <div class="media">
                        <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>

        {{-- Notifications --}}
        <li class="nav-item dropdown">
            <a class="nav-link navbar-icon-btn" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"><i class="fas fa-envelope mr-2"></i> 4 new messages <span
                        class="float-right text-muted text-sm">3 mins</span></a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"><i class="fas fa-users mr-2"></i> 8 friend requests <span
                        class="float-right text-muted text-sm">12 hours</span></a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"><i class="fas fa-file mr-2"></i> 3 new reports <span
                        class="float-right text-muted text-sm">2 days</span></a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>

        {{-- Fullscreen --}}
        <li class="nav-item">
            <a class="nav-link navbar-icon-btn" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        {{-- Sign Out --}}
        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm ml-2">
                    <i class="fas fa-sign-out-alt mr-1"></i> Sign out
                </button>
            </form>
        </li>

        {{-- User pill --}}
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <div class="cbvh-avatar">
                    {{ strtoupper(substr(Auth::user()->name ?? 'AD', 0, 2)) }}
                </div>
                <span class="d-none d-md-inline user-name">{{ Auth::user()->name ?? 'Admin' }}</span>
            </a>

            <ul class="dropdown-menu dropdown-menu-right user-dropdown-menu">
                {{-- Header --}}
                <li class="user-header">
                    <div class="cbvh-avatar avatar-lg">
                        {{ strtoupper(substr(Auth::user()->name ?? 'AD', 0, 2)) }}
                    </div>
                    <p>
                        {{ Auth::user()->name ?? 'Admin' }}
                        <small>{{ Auth::user()->email ?? 'admin@cbvh.com' }}</small>
                    </p>
                </li>

                {{-- Body --}}
                <li class="user-body">
                    <div class="row">
                        <div class="col-4 text-center">
                            <a href="#">Profile</a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="#">Activity</a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="#">Settings</a>
                        </div>
                    </div>
                </li>

                {{-- Footer --}}
                <li class="user-footer">
                    <a href="#" class="btn btn-info btn-sm">
                        <i class="fas fa-user mr-1"></i> Profile
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>