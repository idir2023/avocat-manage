<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Consultation Form - Me Hanane Bounit</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Cabinet avocat Agadir" name="keywords">
    <meta content="Cabinet juridique Me Hanane Bounit à Agadir - Maroc" name="description">
    <link rel="icon" type="image/x-icon" href="{{ asset('clients/img/hb.jpeg') }}">

    @include('clients.layouts.style')
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

    </style>
</head>

<body>
    <!-- Header Start -->
    @include('clients.layouts.header')
    <!-- Header End -->

    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Formulaire de Consultations</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Accueil</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Consultations</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Consultation Form Start -->
    @include('clients.layouts.consultations')
    <!-- Consultation Form End -->

    <!-- Footer Start -->
    @include('clients.layouts.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    @include('clients.layouts.scripts')

</body>

</html>
