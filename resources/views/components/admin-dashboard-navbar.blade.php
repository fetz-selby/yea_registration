<div class="nav-header">
    <a href="#" class="brand-logo">
        <img  width="20%" src="{{ asset('logo_1.png') }}" alt="">
        <img class="logo-compact" src="{{ asset('logo_2.png') }}" alt="">
        <img class="brand-title"  width="90%" src="{{ asset('logo_2.png') }}" alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>

<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('admin.home') }}" class="dropdown-item">
                                <i class="icon-user"></i>
                                <span class="ml-2">Profile</span>
                            </a>
                            <a href="{{ route('admin.logout') }}" class="dropdown-item">
                                <i class="icon-key"></i>
                                <span class="ml-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>