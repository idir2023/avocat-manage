<?php 
$settings = \App\Models\Parametre::first();
?>
<div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5 py-3" style="margin-top: 90px; font-size: 14px;">
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="d-flex justify-content-lg-center p-3" style="background: rgba(256, 256, 256, .05);">
                <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                <div class="ml-3">
                    <h6 class="text-white mb-1">Adresse</h6>
                    <p class="m-0">{{ $settings->localisation ?? 'Agadir, Maroc' }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex justify-content-lg-center p-3" style="background: rgba(256, 256, 256, .05);">
                <i class="fa fa-2x fa-envelope-open text-primary"></i>
                <div class="ml-3">
                    <h6 class="text-white mb-1">Email</h6>
                    <p class="m-0">{{ $settings->email ?? 'contact@cabinet-hb.com' }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex justify-content-lg-center p-3" style="background: rgba(256, 256, 256, .05);">
                <i class="fa fa-2x fa-phone-alt text-primary"></i>
                <div class="ml-3">
                    <h6 class="text-white mb-1">Téléphone</h6>
                    <p class="m-0">{{ $settings->telephone ?? '+212 6 00 00 00 00' }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-4 justify-content-center">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="d-flex justify-content-start mt-3">
                <a class="btn btn-sm btn-outline-light btn-square mr-2" href="{{ $settings->twitter ?? '#' }}"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square mr-2" href="{{ $settings->facebook ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square mr-2" href="{{ $settings->linkedin ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square" href="{{ $settings->instagram ?? '#' }}"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <h6 class="text-primary mb-3 text-center text-lg-left">Liens utiles</h6>
            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <a class="text-white mb-2" href="{{route('home')}}"><i class="fa fa-angle-right mr-2"></i>Accueil</a>
                <a class="text-white mb-2" href="{{route('about')}}"><i class="fa fa-angle-right mr-2"></i>À propos</a>
                <a class="text-white mb-2" href="{{route('actualite')}}"><i class="fa fa-angle-right mr-2"></i>Actualités</a>
                <a class="text-white mb-2" href="{{route('expertise')}}"><i class="fa fa-angle-right mr-2"></i>Expertises</a>
                <a class="text-white" href="{{route('contact')}}"><i class="fa fa-angle-right mr-2"></i>Contact</a>
            </div>
        </div>
    </div>

    <div class="row p-3 mt-4 mx-0" style="background: rgba(256, 256, 256, .05);">
        <div class="col-md-6 text-center text-md-left">
            <p class="m-0 text-white">© 2025 cabinethbavocats.com. Tous droits réservés.</p>
        </div>
        <div class="col-md-6 text-center text-md-right">
            <p class="m-0 text-white">
                Créé par 
                <a class="font-weight-bold text-primary" href="https://falcondeev.vercel.app/" target="_blank">FalconDEV</a>
            </p>
        </div>
    </div>
</div>
