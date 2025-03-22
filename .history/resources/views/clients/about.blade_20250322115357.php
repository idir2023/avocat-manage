<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Notre Histoire - Me Hanane Bounit</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Cabinet avocat Agadir" name="keywords">
    <meta content="Cabinet juridique Me Hanane Bounit à Agadir - Maroc" name="description">

    @include('clients.layouts.style')
</head>

<body>
    <!-- Header Start -->
    @include('clients.layouts.header')
    <!-- Header End -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px;">
                <h3 class="display-3 text-white text-uppercase">Notre Histoire</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="/">Accueil</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Notre Histoire</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <img class="img-fluid rounded shadow" src="{{ asset('clients/img/about.jpg') }}" alt="Cabinet Me Hanane Bounit">
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase mb-3">À propos de nous</h6>
                    <h2 class="mb-4 text-dark">Le Cabinet HB Avocats, à votre écoute à Agadir</h2>

                    <p class="text-muted mb-3">
                        Chez <strong>Me Hanane Bounit</strong>, nous nous engageons à fournir des conseils juridiques de la plus haute qualité, en plaçant vos besoins au cœur de notre démarche.
                    </p>

                    <p class="text-muted mb-3">
                        Basé à <strong>Agadir, Maroc</strong>, notre cabinet intervient en conseil et en contentieux, auprès des particuliers, professionnels, et PME. Notre approche multidisciplinaire nous permet de répondre efficacement à une grande diversité de problématiques juridiques.
                    </p>

                    <p class="text-muted mb-3">
                        Trilingue <strong>Français, Anglais et Arabe</strong>, Me Hanane Bounit s’appuie sur un parcours académique solide : plusieurs masters en droit du travail, droit des affaires, droit de l’entreprise, et une spécialisation en risques psychosociaux.
                    </p>

                    <p class="text-muted mb-3">
                        Forte d'une expérience en entreprise, Me Bounit offre un accompagnement pragmatique pour la maîtrise des risques juridiques, dans le respect des réalités humaines et économiques de chaque client.
                    </p>

                    <p class="text-muted mb-3">
                        Le cabinet agit dans le strict respect du <strong>secret professionnel</strong> et d’une <strong>déontologie rigoureuse</strong>, garantissant indépendance, confidentialité, et intégrité.
                    </p>

                    <p class="text-muted">
                        Nous vous invitons à parcourir notre site pour découvrir notre philosophie, nos services, et ce qui fait notre singularité dans le paysage juridique marocain.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Appointment Start -->
    @include('clients.layouts.appointment')
    <!-- Appointment End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{asset('clients/img/feature.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="feature-text bg-white rounded p-lg-5">
                        <h6 class="text-uppercase">Our Features</h6>
                        <h1 class="mb-4">Why Choose Us</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Best Law Practices</h5>
                                <p class="m-0">Ipsum duo tempor elitr rebum stet magna amet kasd. Ipsum magna ipsum ipsum stet ipsum</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Efficiency & Trust</h5>
                                <p class="m-0">Ipsum duo tempor elitr rebum stet magna amet kasd. Ipsum magna ipsum ipsum stet ipsum</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Results You Deserve</h5>
                                <p class="m-0">Ipsum duo tempor elitr rebum stet magna amet kasd. Ipsum magna ipsum ipsum stet ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Footer Start -->
    @include('clients.layouts.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('clients.layouts.scripts')
     
</body>

</html>