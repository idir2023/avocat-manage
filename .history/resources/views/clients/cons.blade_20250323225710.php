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
    /* line-height: 1.9; */
    color: #333;
}

h1.display-3 {
    font-family: 'Playfair Display', serif;
    font-weight: 700;
    letter-spacing: 1px;
    font-size: 52px; /* légèrement plus grand */
    color: #2c2c2c;
}

h2, h3, .display-3 {
    font-family: 'Playfair Display', serif;
    font-weight: 600;
    letter-spacing: 1px;
    font-size: 40px;
    color: #3a3a3a;
}

p {
    font-size: 20px;
    /* line-height: 2; */
 
}

.pack-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-top: 4px solid #b22222; /* Rouge marocain */
    border-radius: 12px;
    background-color: #fff;
}

.pack-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}

.btn-outline-danger {
    border-radius: 30px;
    font-weight: 500;
    padding: 10px 25px;
    transition: all 0.3s ease;
}

.btn-outline-danger:hover {
    background-color: #b22222;
    color: #fff;
    border-color: #b22222;
}

</style>

<body>
    <!-- Header Start -->
    @include('clients.layouts.header')
    <!-- Header End -->
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Consultation</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Accueil</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Consul</p>
                </div>
            </div>
        </div>
    </div>
<!-- Packs de Consultation Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center pb-5">
            <h6 class="text-uppercase text-danger" style="letter-spacing: 2px;">Consultations juridiques</h6>
            <h1 class="mb-4 fw-bold">Choisissez le Pack qui correspond à votre besoin</h1>
        </div>
        <div class="row justify-content-center">

            <!-- Pack -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card border-0 shadow-lg h-100 text-center p-4 pack-card hover-shadow">
                    <div class="card-body">
                        <h4 class="text-danger mb-3">Pack 1</h4>
                        <h5 class="mb-3 fw-semibold">Droit du Travail & Droit de la Famille</h5>
                        <p class="text-muted">Questions liées aux contrats de travail, licenciements, pensions, divorces, successions, etc.</p>
                        <a href="{{ route('register') }}" class="btn btn-outline-danger mt-3">Demander ce pack</a>
                    </div>
                </div>
            </div>

            <!-- Pack -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card border-0 shadow-lg h-100 text-center p-4 pack-card hover-shadow">
                    <div class="card-body">
                        <h4 class="text-danger mb-3">Pack 2</h4>
                        <h5 class="mb-3 fw-semibold">Visas, Recours & Formations</h5>
                        <p class="text-muted">Assistance pour les démarches de visa, recours administratifs, formations juridiques, etc.</p>
                        <a href="{{ route('register') }}" class="btn btn-outline-danger mt-3">Demander ce pack</a>
                    </div>
                </div>
            </div>

            <!-- Pack -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card border-0 shadow-lg h-100 text-center p-4 pack-card hover-shadow">
                    <div class="card-body">
                        <h4 class="text-danger mb-3">Pack 3</h4>
                        <h5 class="mb-3 fw-semibold">Droit Fiscal</h5>
                        <p class="text-muted">Problèmes d’impôts, régularisations fiscales, relations avec l’administration fiscale.</p>
                        <a href="{{ route('register') }}" class="btn btn-outline-danger mt-3">Demander ce pack</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Packs de Consultation End -->

<!-- Packs de Consultation End -->


    <!-- Features End -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-action rounded d-flex align-items-center justify-content-center" style="height: 500px;">
                <div class="col-lg-8 text-center">
                    <h1 class="text-white mb-4">Besoin d’un conseil ? Contactez-nous dès maintenant pour une consultation </h1>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('contact') }}">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
    


    <!-- Footer Start -->
    @include('clients.layouts.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('clients.layouts.scripts')
     
</body>

</html>