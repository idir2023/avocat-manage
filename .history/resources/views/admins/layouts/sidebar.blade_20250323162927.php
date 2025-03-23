<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">

                <!-- Check if the user is an admin -->
                @if (auth()->user()->is_admin)
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard') }}"
                            aria-expanded="false">
                            <i class="mdi mdi-view-dashboard"></i>
                            <span class="hide-menu">{{ __('messages.dashboard') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('consultations.index') }}" aria-expanded="false">
                            <i class="mdi mdi-calendar-check"></i>
                            <span class="hide-menu">Consultations</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('actualites.index') }}" aria-expanded="false">
                            <i class="mdi mdi-newspaper"></i>
                            <span class="hide-menu">Actualités</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('expertises.index') }}" aria-expanded="false">
                            <i class="mdi mdi-briefcase"></i>
                            <span class="hide-menu">Nos Domaines</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('parametres.index') }}" aria-expanded="false">
                            <i class="mdi mdi-settings"></i>
                            <span class="hide-menu">Paramètres</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('contacts.index') }}" aria-expanded="false">
                            <i class="mdi mdi-email"></i>
                            <span class="hide-menu">Contacts</span>
                        </a>
                    </li>
                @else
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('consultations.index') }}" aria-expanded="false">
                            <i class="mdi mdi-calendar-check"></i>
                            <span class="hide-menu">My Consultations</span>
                        </a>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
