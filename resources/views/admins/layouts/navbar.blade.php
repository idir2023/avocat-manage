<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <b class="logo-icon ps-2">
                    <img src="{{ asset('admins/assets/images/logo-icon.png') }}" alt="homepage" class="light-logo" />
                </b>
            </a>
            <!-- Toggle Button for Mobile View -->
            <!-- Language Switcher Menu using Bootstrap -->
            <div class="d-block d-md-none">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="languageMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-translate me-2"></i> <!-- Icon for Language -->
                    {{ LaravelLocalization::getCurrentLocaleNative() }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="languageMenuButton">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a class="dropdown-item btn btn-sm"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="d-block d-md-none">
                <ul class="navbar-nav float-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('admins/assets/images/users/1.jpg') }}" alt="user"
                                class="rounded-circle" width="31">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item btn btn-sm" href="{{ route('profile.edit') }}">
                                <i class="ti-user me-1 ms-1"></i> {{ __('messages.profile') }}
                            </a>
                            @if (auth()->user()->is_admin)
                                <a class="dropdown-item btn btn-sm" href="{{ route('users.manage') }}">
                                    <i class="ti-settings me-1 ms-1"></i> {{ __('messages.settings') }}
                                </a>
                            @endif
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                            <a class="dropdown-item btn btn-sm" href="javascript:void(0)"
                                onclick="document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off me-1 ms-1"></i> {{ __('messages.logout') }}
                            </a>
                            <div class="ps-4 p-10">
                                <a href="{{ route('profile.edit') }}"
                                    class="btn btn-sm btn-success btn-rounded text-white">
                                    {{ __('messages.view_profile') }} </a>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>

            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>

        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav float-start me-auto">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                        data-sidebartype="mini-sidebar">
                        <i class="mdi mdi-menu font-24"></i>
                    </a>
                </li>
            </ul>

            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="languageMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ LaravelLocalization::getCurrentLocaleNative() }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="languageMenuButton">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a class="dropdown-item"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Profile Dropdown for User -->
            <ul class="navbar-nav float-end">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                        id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('admins/assets/images/users/1.jpg') }}" alt="user"
                            class="rounded-circle" width="31">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            <i class="ti-user me-1 ms-1"></i> {{ __('messages.profile') }}
                        </a>
                        @if (auth()->user()->is_admin)
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('users.manage') }}">
                                <i class="ti-settings me-1 ms-1"></i>  {{ __('messages.settings') }}
                            </a>
                        @endif
                        <div class="dropdown-divider"></div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="javascript:void(0)"
                            onclick="document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off me-1 ms-1"></i>  {{ __('messages.logout') }}
                        </a>
                        <div class="dropdown-divider"></div>
                        <div class="ps-4 p-10">
                            <a href="{{ route('profile.edit') }}"
                                class="btn btn-sm btn-success btn-rounded text-white"> {{ __('messages.view_profile') }}</a>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>

    </nav>
</header>
