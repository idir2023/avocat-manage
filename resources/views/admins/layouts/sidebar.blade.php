<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('dashboard') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
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
                        <span class="hide-menu">Expertises</span>
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

                <li class="sidebar-item"> 
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-security"></i>
                        <span class="hide-menu">Authentification</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="authentication-login.html" class="sidebar-link">
                                <i class="mdi mdi-login"></i>
                                <span class="hide-menu">Connexion</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="authentication-register.html" class="sidebar-link">
                                <i class="mdi mdi-account-plus"></i>
                                <span class="hide-menu">Inscription</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
