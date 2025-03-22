<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    @include('clients.layouts.style')
</head>

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
    <div class="container py-5">
        <div class="text-center pb-4">
            <h6 class="text-uppercase" style="font-size: 20px;">Contactez-nous</h6>
            <h1 class="mb-4" style="font-size: 38px;">Une question ? Un besoin ? Écrivez-nous</h1>
        </div>

        <div class="row bg-light p-5 rounded">

            <!-- Bloc explicatif -->
            <div class="col-lg-12 mb-5">
                <div class="bg-white p-4 rounded shadow-sm">
                    <h4 class="text-primary mb-3" style="font-size: 24px;">Posez votre question</h4>
                    <p style="font-size: 17px; line-height: 1.9;">
                        Vous pouvez présenter à <strong>Maître Hanane Bounit</strong> votre problème en remplissant le formulaire ci-dessous. 
                        Les données transmises resteront strictement <strong>confidentielles</strong>.
                    </p>
                    <p style="font-size: 17px; line-height: 1.9;">
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
                                        placeholder="Nom" required />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" name="prenom"
                                        placeholder="Prénom" required />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" name="email"
                                        placeholder="Adresse e-mail" required />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control p-4" name="phone"
                                        placeholder="Téléphone" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control p-4" rows="6" name="message" placeholder="Votre message" required></textarea>
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
                    <p class="mb-3" style="font-size: 16px;">
                        <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                        {{ $settings->localisation ?? 'Agadir, Maroc' }}
                    </p>
                    <p class="mb-3" style="font-size: 16px;">
                        <i class="fa fa-phone-alt text-primary mr-2"></i>
                        {{ $settings->telephone ?? '+212 6 00 00 00 00' }}
                    </p>
                    <p class="mb-3" style="font-size: 16px;">
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


    <!-- Footer Start -->
    @include('clients.layouts.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    @include('clients.layouts.scripts')

</body>

</html>
