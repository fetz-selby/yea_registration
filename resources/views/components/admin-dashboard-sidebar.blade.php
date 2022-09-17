<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li>
                <a href="{{ route('admin.home') }}" aria-expanded="false">
                    <i class="icon icon-single-04"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            @can('view users')
                <li class="@if ($active === 'users.edit') mm-active @endif">
                    <a href="{{ route('admin.users.index') }}" aria-expanded="false">
                        <i class="icon icon-single-04"></i>
                        <span class="nav-text">Users</span>
                    </a>
                </li>
            @endcan
            @can('view roles')
                <li class="@if ($active === 'roles.edit') mm-active @endif">
                    <a href="{{ route('admin.roles.index') }}" aria-expanded="false">
                        <i class="icon icon-single-04"></i>
                        <span class="nav-text">Roles</span>
                    </a>
                </li>
            @endcan
            <li class="@if ($active === 'artisans.index') mm-active @endif">
                <a href="{{ route('admin.artisans.index') }}" aria-expanded="false">
                    <i class="icon icon-single-04"></i>
                    <span class="nav-text">Artisans</span>
                </a>
            </li>
            <li class="@if ($active === 'artisans.shortlisted') mm-active @endif">
                <a href="{{ route('admin.artisans.shortlisted') }}" aria-expanded="false">
                    <i class="icon icon-single-04"></i>
                    <span class="nav-text">Shortlisted</span>
                </a>
            </li>
            <li class="@if ($active === 'artisans.vetted') mm-active @endif">
                <a href="{{ route('admin.artisans.vetted') }}" aria-expanded="false">
                    <i class="icon icon-single-04"></i>
                    <span class="nav-text">Vetted</span>
                </a>
            </li>
            <li class="@if ($active === 'artisans.engaged') mm-active @endif">
                <a href="{{ route('admin.artisans.engaged') }}" aria-expanded="false">
                    <i class="icon icon-single-04"></i>
                    <span class="nav-text">Engaged</span>
                </a>
            </li>
        </ul>
    </div>
</div>
