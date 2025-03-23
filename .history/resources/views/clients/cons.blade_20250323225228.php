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


</style>

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
    <!-- Packs de Consultation Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center pb-5">
            <h6 class="text-uppercase text-primary">Consultations juridiques</h6>
            <h1 class="mb-4">Choisissez le Pack qui correspond à votre besoin</h1>
        </div>
        <div class="row justify-content-center">

            <!-- Pack 1 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center border-top border-primary border-3">
                    <h4 class="mb-3 text-primary">Pack 1</h4>
                    <h5 class="mb-3">Droit du Travail & Droit de la Famille</h5>
                    <p>Questions liées aux contrats de travail, licenciements, pensions, divorces, successions, etc.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary mt-3">Demander ce pack</a>
                </div>
            </div>

            <!-- Pack 2 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center border-top border-secondary border-3">
                    <h4 class="mb-3 text-secondary">Pack 2</h4>
                    <h5 class="mb-3">Visas, Recours & Formations</h5>
                    <p>Assistance pour les démarches de visa, recours administratifs, formations juridiques, etc.</p>
                    <a href="{{ route('register') }}" class="btn btn-secondary mt-3">Demander ce pack</a>
                </div>
            </div>

            <!-- Pack 3 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="bg-white rounded shadow-sm p-4 h-100 text-center border-top border-dark border-3">
                    <h4 class="mb-3 text-dark">Pack 3</h4>
                    <h5 class="mb-3">Droit Fiscal</h5>
                    <p>Problèmes d’impôts, régularisations fiscales, relations avec l’administration fiscale.</p>
                    <a href="{{ route('register') }}" class="btn btn-dark mt-3">Demander ce pack</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Packs de Consultation End -->


    <!-- About Start -->
    <div class="container-fluid py-0">
        <div class="container py-2">
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
                        Trilingue <strong>Français, Anglais et Arabe</strong>, Me Hanane Bounit s’appuie sur un parcours académique solide : plusieurs masters en droit social approfondie, droit des affaires, droit de l’entreprise ,droit civil et  droit de famille.
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