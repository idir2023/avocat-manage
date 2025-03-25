<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Notre Histoire - Me Hanane Bounit</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Cabinet avocat Agadir" name="keywords">
    <meta content="Cabinet juridique Me Hanane Bounit à Agadir - Maroc" name="description">
    <link rel="icon" type="image/x-icon" href="{{ asset('clients/img/hb.jpeg') }}">

    @include('clients.layouts.style')
</head>

<style>
    body {
        font-family: 'Lora', serif;
        font-size: 18px;
        color: #333;
    }

    h1.display-3 {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        letter-spacing: 1px;
        font-size: 52px;
        color: #2c2c2c;
    }

    h2,
    h3,
    .display-3 {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        letter-spacing: 1px;
        font-size: 40px;
        color: #3a3a3a;
    }

    p {
        font-size: 20px;
    }

    .pack-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-top: 4px solid #5a4c1d;
        border-radius: 12px;
        background-color: #fff;
    }

    .pack-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .btn-outline {
        border-radius: 30px;
        font-weight: 500;
        padding: 10px 25px;
        transition: all 0.3s ease;
        color: #5a4c1d;
        border: 2px solid #5a4c1d;
    }

    .btn-outline:hover {
        background-color: #5a4c1d;
        color: #fff;
    }

    h6.text-uppercase {
        font-size: 16px;
        font-weight: bold;
        color: #5a4c1d !important;
    }

    h1.fw-bold {
        font-size: 34px;
        color: #333;
    }

    .card-body h4 {
        font-size: 24px;
        font-weight: bold;
        color: #5a4c1d;
    }

    .card-body h5 {
        font-size: 20px;
        color: #444;
    }

    .text-muted {
        font-size: 16px;
        color: #666 !important;
    }
</style>

<body>
    <!-- Header Start -->
    @include('clients.layouts.header')
    <!-- Header End -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Consultation</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Accueil</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Consultation</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Consultation Packs Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="text-center pb-5">
                <h6 class="text-uppercase" style="letter-spacing: 2px;">Consultations juridiques</h6>
                <h1 class="mb-4 fw-bold">Choisissez le Pack qui correspond à votre besoin</h1>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert"
                    style="border-left: 5px solid #28a745; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                    <i class="mdi mdi-check-circle-outline me-2" style="font-size: 1.5rem;"></i>
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="close ms-auto" data-dismiss="alert" aria-label="Close"
                        style="border: none; background: transparent;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row justify-content-center">
                <!-- Loop through packs -->
                @foreach ($packs as $pack)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card border-0 shadow-lg h-100 text-center p-4 pack-card hover-shadow">
                            <div class="card-body">
                                <h4 class="mb-3">{{ $pack->name }}</h4>
                                <h5 class="mb-3 fw-semibold">{{ $pack->slug }}</h5>
                                <p class="text-muted">{{ $pack->description }}</p>
                                {{-- <h5 class="mb-3 fw-semibold">{{ $pack->price }} DH</h5> --}}
                                @if (auth()->check())
                                
                                    <a href="{{ route('formConsultation', $pack->id) }}"
                                        class="btn btn-outline mt-3">Demander ce pack</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-outline mt-3">Connectez-vous
                                        d'abord</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Consultation Packs End -->

    <!-- Contact Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-action rounded d-flex align-items-center justify-content-center" style="height: 500px;">
                <div class="col-lg-8 text-center">
                    <h1 class="text-white mb-4">Besoin d’un conseil ? Contactez-nous dès maintenant pour une
                        consultation</h1>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('contact') }}">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    @include('clients.layouts.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    @include('clients.layouts.scripts')
</body>

</html>
