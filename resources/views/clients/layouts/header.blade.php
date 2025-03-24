<?php
$settings = \App\Models\Parametre::first();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg-secondary d-none d-lg-block">
            <a href="{{ route('home') }}"
                class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
             
                <h1 class="m-0 text-4xl font-extrabold text-primary text-uppercase leading-tight text-center shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105 flex items-center justify-center gap-3">
    <!-- Logo HB -->
    <img src="{{ asset('clients/img/hb.jpeg') }}" alt="Logo HB" class="w-12 h-12 rounded-full shadow-md object-cover" />

  
</h1>


            </a>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                <a href="{{ route('home') }}" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary text-uppercase">HB AVOCAT</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Accueil</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">Notre Histoire</a>
                        {{-- <a href="{{route('actualite')}}" class="nav-item nav-link">Actualité</a> --}}
                        <a href="{{ route('expertise') }}" class="nav-item nav-link">Nos Domaines</a>
                        <a href="{{ route('cons') }}" class="nav-item nav-link">Consultation</a>

                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>

                    @if (auth()->check())
                        <!-- Logout Button -->
                        <a href="{{ route('logout') }}"
                            class="btn btn-primary mr-3 d-block bg-blue-500 text-white hover:bg-blue-600 rounded-lg py-2 px-4 mb-3 sm:mb-0"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        <!-- Admin Dashboard Link (Desktop Only) -->
                        @if (auth()->user()->is_admin)
                            <a href="{{ route('dashboard') }}"
                                class="btn btn-primary mr-3 d-block bg-green-500 text-white hover:bg-green-600 rounded-lg py-2 px-4 mb-3 sm:mb-0">
                                Dashboard
                            </a>
                        @else
                            <!-- Consultation Link (Mobile Friendly) -->
                            <a href="{{ route('consultation.show') }}"
                                class="btn btn-primary mr-3 d-block bg-yellow-500 text-white hover:bg-yellow-600 rounded-lg py-2 px-4 mb-3 sm:mb-0">
                                See my consultations
                            </a>
                        @endif
                    @else
                        <a href="{{ route('login') }}"
                            class="btn btn-primary mr-3 d-block bg-indigo-500 text-white hover:bg-indigo-600 rounded-lg py-2 px-4 mb-3 sm:mb-0">
                            Sign up
                        </a>
                    @endif

                </div>
            </nav>
        </div>
    </div>
</div>
