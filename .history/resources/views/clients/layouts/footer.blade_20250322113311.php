<?php
$settings = \App\Models\Parametre::first();
?>
<div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;">
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                <div class="ml-3">
                    <h5 class="text-white">Our Office</h5>
                    <p class="m-0">{{ $settings->localisation ?? 'Location, City, Country' }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                <i class="fa fa-2x fa-envelope-open text-primary"></i>
                <div class="ml-3">
                    <h5 class="text-white">Email Us</h5>
                    <p class="m-0">{{ $settings->email ?? 'info@example.com' }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                <i class="fa fa-2x fa-phone-alt text-primary"></i>
                <div class="ml-3">
                    <h5 class="text-white">Call Us</h5>
                    <p class="m-0">{{ $settings->telephone ?? '+012 345 6789' }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-5 justify-content-center">
        <div class="col-lg-4 col-md-6 mb-5">
            
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="{{ $settings->twitter ?? '#' }}"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="{{ $settings->facebook ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="{{ $settings->linkedin ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square" href="{{ $settings->instagram ?? '#' }}"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4 text-center text-lg-left">Popular Links</h4>
            <div class="d-flex flex-column align-items-center align-items-lg-start mt-4">
                <a class="text-white mb-2" href="{{route('home')}}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white mb-2" href="{{route('about')}}"><i class="fa fa-angle-right mr-2"></i>About</a>
                <a class="text-white mb-2" href="{{route('actualite')}}"><i class="fa fa-angle-right mr-2"></i>Actualite</a>
                <a class="text-white mb-2" href="{{route('expertise')}}"><i class="fa fa-angle-right mr-2"></i>Expertise</a>
                <a class="text-white" href="{{route('contact')}}"><i class="fa fa-angle-right mr-2"></i>Contact</a>
            </div>
        </div>
     
    </div>
    <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
        <div class="col-md-6 text-center text-md-left">
            <p class="m-0 text-white">© 2025 https://cabinethbavocats.com/. Tous droits réservés.</p>
        </div>
        
        <div class="col-md-6 text-center text-md-right">
            <p class="m-0 text-white">
                Designed by 
                <a class="font-weight-bold text-primary" href="https://falcondeev.vercel.app/" target="_blank">FalconDEV</a>
            </p>
        </div>
    </div>
    
</div>
