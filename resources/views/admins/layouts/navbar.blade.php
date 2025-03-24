<style>
    /* Ensure the dropdown works properly on mobile screens */
    @media (max-width: 768px) {
        /* Make sure the profile and other items are aligned to the right on mobile */
        .navbar-nav.float-end {
            display: block !important; /* Make sure it is not hidden */
            position: static !important; /* Reset any absolute positioning if present */
        }

        /* Ensure the dropdown is shown on mobile when clicked */
        .navbar-nav .nav-item .dropdown-menu {
            display: none !important; /* Hide dropdown by default */
        }

        /* Show dropdown when the parent item is active (clicked) */
        .navbar-nav .nav-item.show .dropdown-menu {
            display: block !important;
        }

        /* Remove the dropdown arrow on mobile */
        .navbar-nav .nav-item .dropdown-toggle::after {
            content: none !important;
        }

        /* Add padding or background to make dropdown more mobile-friendly */
        .navbar-nav .nav-item .dropdown-menu {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .nav-item .dropdown-item {
            padding: 10px;
        }
    }
</style>

<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <a class="navbar-brand" href="index.html">
                <b class="logo-icon ps-2">
                    <img src="{{ asset('admins/assets/images/logo-icon.png') }}" alt="homepage" class="light-logo" />
                </b>
            </a>
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav float-start me-auto">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                        <i class="mdi mdi-menu font-24"></i>
                    </a>
                </li>
            </ul>

            <!-- Make sure float-end is visible on mobile and aligned to the right -->
            <ul class="navbar-nav float-end">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('admins/assets/images/users/1.jpg') }}" alt="user" class="rounded-circle" width="31">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            <i class="ti-user me-1 ms-1"></i> My Profile
                        </a>
                        @if (auth()->user()->is_admin)
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('users.manage') }}">
                                <i class="ti-settings me-1 ms-1"></i> Account Setting
                            </a>
                        @endif
                        <div class="dropdown-divider"></div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off me-1 ms-1"></i> Logout
                        </a>
                        <div class="dropdown-divider"></div>
                        <div class="ps-4 p-10">
                            <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-success btn-rounded text-white">View Profile</a>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
