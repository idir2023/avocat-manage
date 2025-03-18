<?php // Retrieve the settings instance
 $settings = App\Models\Setting::first();

// Assuming $setting is an instance of the Setting model
$socialMedia = json_decode($settings->social_media, true); // Decode the first time

// Check if the decoding failed, i.e., if it's still a string
if (is_string($socialMedia)) {
    $socialMedia = json_decode($socialMedia, true); // Decode again if it's a string
}

?>
 
<div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;">
    <div class="row mt-5">
        <!-- Office Location -->
        <div class="col-lg-4">
            <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                <div class="ml-3">
                    <h5 class="text-white">Our Office</h5>
                    <p class="m-0">{{ $settings->office_location ?? 'Location, City, Country' }}</p>
                </div>
            </div>
        </div>

        <!-- Email -->
        <div class="col-lg-4">
            <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                <i class="fa fa-2x fa-envelope-open text-primary"></i>
                <div class="ml-3">
                    <h5 class="text-white">Email Us</h5>
                    <p class="m-0">{{ $settings->email ?? 'info@example.com' }}</p>
                </div>
            </div>
        </div>

        <!-- Phone -->
        <div class="col-lg-4">
            <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                <i class="fa fa-2x fa-phone-alt text-primary"></i>
                <div class="ml-3">
                    <h5 class="text-white">Call Us</h5>
                    <p class="m-0">{{ $settings->phone_number ?? '+012 345 6789' }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <!-- Company Info -->
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 mt-n2 display-4 text-primary text-uppercase">{{ $settings->company_name ?? 'Justice' }}</h1>
            </a>
            <p>{{ $settings->company_description ?? 'Volup amet magna clita tempor. Tempor sea eos vero ipsum.' }}</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="{{ $socialMedia['twitter'] ?? '#' }}"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="{{ $socialMedia['facebook'] ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="{{ $socialMedia['linkedin'] ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square" href="{{ $socialMedia['instagram'] ?? '#' }}"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- Popular Links -->
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Popular Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="{{route('home')}}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white mb-2" href="{{route('about')}}"><i class="fa fa-angle-right mr-2"></i>About</a>
                <a class="text-white mb-2" href="{{route('services')}}"><i class="fa fa-angle-right mr-2"></i>Services</a>
                <a class="text-white mb-2" href="{{route('team')}}"><i class="fa fa-angle-right mr-2"></i>Attorney</a>
                <a class="text-white" href="{{route('contact')}}"><i class="fa fa-angle-right mr-2"></i>Contact</a>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>FAQs</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy</a>
                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Site Map</a>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Newsletter</h4>
            <p>{{ $settings->newsletter_description ?? 'Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor.' }}</p>
            <div class="w-100">
                <div class="input-group">
                    <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
        <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">{{ $settings->company_name ?? 'Your Site Name' }}</a>. All Rights Reserved.</p>
        </div>
        <div class="col-md-6 text-center text-md-right">
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://github.com/idir2023">Idir Lahcen</a></p>
        </div>
    </div>
</div>
