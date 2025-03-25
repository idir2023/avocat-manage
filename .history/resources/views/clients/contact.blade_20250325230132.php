<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="icon" type="image/x-icon" href="{{ asset('clients/img/hb.jpeg') }}">

    <!-- Favicon -->
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
</style>

<body>
    <!-- Header Start -->
    @include('clients.layouts.header')
    <!-- Header End -->
<!-- Page Header Start -->
<div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 text-white text-uppercase">Contact</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Accueil</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Contact</p>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- Contact Start -->
<div class="container-fluid py-0">
    <div class="container py-2">
        <div class="text-center pb-4">
            <h6 class="text-uppercase" style="font-size: 22px;">Contactez-nous</h6>
        </div>

        <div class="row bg-light p-5 rounded">

            <!-- Bloc explicatif -->
            <div class="col-lg-12 mb-5">
                <div class="bg-white p-4 rounded shadow-sm">
                    <h4 class="text-primary mb-3" style="font-size: 26px;">Posez votre question</h4>
                    <p style="font-size: 19px; line-height: 2;">
                        Vous pouvez présenter à <strong>Maître Hanane Bounit</strong> votre problème en remplissant le formulaire ci-dessous. 
                        Les données transmises resteront strictement <strong>confidentielles</strong>.
                    </p>
                    <p style="font-size: 19px; line-height: 2;">
                        Le cabinet vous recontactera dans les plus brefs délais afin de convenir d’un rendez-vous personnalisé.
                    </p>
                </div>
            </div>

            <!-- Formulaire -->
            <div class="col-lg-8 mb-5">
                <div class="contact-form">
                    @if (session('success'))
                        <div id="success" class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" name="name"
                                        placeholder="Nom" required style="font-size: 17px;" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" name="prenom"
                                        placeholder="Prénom" required style="font-size: 17px;" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" name="email"
                                        placeholder="Adresse e-mail" required style="font-size: 17px;" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control p-4" name="phone"
                                        placeholder="Téléphone" required style="font-size: 17px;" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control p-4" rows="6" name="message" placeholder="Votre message" required style="font-size: 17px;"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block py-3" style="font-size: 18px;" type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Informations de contact -->
            <div class="col-lg-4">
                <div class="p-4 rounded">
                    <h4 class="mb-4" style="font-size: 24px;">Informations</h4>
                    <p class="mb-3" style="font-size: 17px;">
                        <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                        {{ $settings->localisation ?? 'Agadir, Maroc' }}
                    </p>
                    <p class="mb-3" style="font-size: 17px;">
                        <i class="fa fa-phone-alt text-primary mr-2"></i>
                        {{ $settings->telephone ?? '+212 6 00 00 00 00' }}
                    </p>
                    <p class="mb-3" style="font-size: 17px;">
                        <i class="fa fa-envelope text-primary mr-2"></i>
                        <a href="mailto:{{ $settings->email ?? 'contact@cabinet-hb.com' }}" class="text-dark">
                            {{ $settings->email ?? 'contact@cabinet-hb.com' }}
                        </a>
                    </p>
                    <div class="d-flex mt-4">
                        <a class="btn btn-primary btn-square mr-2" href="{{ $settings->facebook ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="{{ $settings->twitter ?? '#' }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="{{ $settings->linkedin ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-square" href="{{ $settings->instagram ?? '#' }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <!-- Image -->
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    <img class="position-absolute w-100 h-100" src="{{asset('clients/img/feature.jpg')}}" style="object-fit: cover;" alt="Pourquoi choisir notre cabinet">
                </div>
            </div>

            <!-- Contenu -->
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="feature-text bg-white rounded shadow p-lg-5">
                    <h6 class="text-primary text-uppercase mb-3">Nos Atouts</h6>
                    <h2 class="mb-4 text-dark">Pourquoi choisir notre cabinet</h2>

                    <!-- Point 1 -->
                    <div class="d-flex mb-4">
                        <div class="btn-primary btn-lg-square px-3 d-flex align-items-center justify-content-center" style="border-radius: 50px;">
                            <h5 class="text-white m-0">01</h5>
                        </div>
                        <div class="ml-4">
                            <h5>Expertise juridique approfondie</h5>
                            <p class="m-0">Nous mettons à votre disposition une expertise solide dans divers domaines du droit, avec une approche rigoureuse et personnalisée.</p>
                        </div>
                    </div>

                    <!-- Point 2 -->
                    <div class="d-flex mb-4">
                        <div class="btn-primary btn-lg-square px-3 d-flex align-items-center justify-content-center" style="border-radius: 50px;">
                            <h5 class="text-white m-0">02</h5>
                        </div>
                        <div class="ml-4">
                            <h5>Écoute, confiance et réactivité</h5>
                            <p class="m-0">Nous plaçons la relation client au cœur de notre mission, avec une disponibilité constante et une confidentialité garantie.</p>
                        </div>
                    </div>

                    <!-- Point 3 -->
                    <div class="d-flex">
                        <div class="btn-primary btn-lg-square px-3 d-flex align-items-center justify-content-center" style="border-radius: 50px;">
                            <h5 class="text-white m-0">03</h5>
                        </div>
                        <div class="ml-4">
                            <h5>Résultats concrets et efficaces</h5>
                            <p class="m-0">Nous nous engageons à obtenir les résultats que vous méritez grâce à une stratégie claire, rigoureuse et orientée vers la réussite.</p>
                        </div>
                    </div>

                </div>
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
<style>
    .btn-read-more {
    border: 1px solid #fff;
    color: #fff;
    background-color: transparent;
    transition: 0.3s;
    border-radius: 20px;
    padding: 6px 14px;
    font-size: 14px;
}
.btn-read-more:hover {
    background-color: #fff;
    color: #333;
}

</style>