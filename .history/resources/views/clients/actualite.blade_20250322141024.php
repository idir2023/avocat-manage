<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Actualite</title>
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
                <h3 class="display-3 text-white text-uppercase">Actualité</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Acceuil</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Actualité</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->



<!-- Actualités Start -->
<div class="container-fluid py-0">
    <div class="container py-2">
        <div class="text-center pb-4">
            <h6 class="text-uppercase text-primary" style="font-size: 20px;">Nos actualités</h6>
            <h1 class="mb-4" style="font-size: 34px;">Découvrez nos dernières publications</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 pt-5 pt-lg-0">
                <div class="bg-primary rounded" style="height: 200px;"></div>
                <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                    @foreach ($actualites as $actualite)
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-3 pb-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4 d-flex align-items-center justify-content-center"
                                style="width: 80px; height: 80px; border-radius: 50%;">
                                @if (!empty($actualite->logo))
                                    <img class="img-fluid rounded-circle" src="{{ Storage::url($actualite->logo) }}"
                                         alt="{{ $actualite->nom }}"
                                         style="width: 100%; height: 100%; object-fit: cover;">
                                @else
                                    <i class="fa fa-2x fa-newspaper"></i>
                                @endif
                            </div>
                            <h5 class="mb-3 px-4" style="font-size: 20px;">{{ $actualite->nom }}</h5>
                            <p class="m-0" style="font-size: 16px;">{{ $actualite->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Actualités End -->

<!-- Action Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-action rounded d-flex align-items-center justify-content-center" style="height: 500px;">
            <div class="col-lg-8 text-center">
                <h1 class="text-white mb-4" style="font-size: 28px;">Besoin d’un conseil ? Contactez-nous dès maintenant pour une consultation</h1>
                <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('contact') }}">Nous contacter</a>
            </div>
        </div>
    </div>
</div>
<!-- Action End -->

<!-- Témoignages Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center pb-5">
            <h6 class="text-uppercase text-primary" style="font-size: 20px;">Témoignages</h6>
            <h1 class="mb-5" style="font-size: 34px;">Ce que disent nos clients</h1>
        </div>

        <div class="owl-carousel testimonial-carousel">

            <!-- Témoignage 1 -->
            <div class="testimonial-item">
                <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-2">
                    <p class="mb-4" style="font-size: 17px;">
                        "Un accompagnement humain et professionnel dans mon dossier de licenciement. Me Bounit a su m'expliquer mes droits avec clarté."
                    </p>
                    <h5 class="mb-1 text-white">Yasmine L.</h5>
                    <small class="text-light">Assistante RH</small>
                </div>
            </div>

            <!-- Témoignage 2 -->
            <div class="testimonial-item">
                <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-2">
                    <p class="mb-4" style="font-size: 17px;">
                        "Grâce au cabinet, j’ai pu résoudre un litige commercial complexe. Équipe à l’écoute et très réactive. Je recommande vivement."
                    </p>
                    <h5 class="mb-1 text-white">Karim D.</h5>
                    <small class="text-light">Gérant de société</small>
                </div>
            </div>

            <!-- Témoignage 3 -->
            <div class="testimonial-item">
                <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-2">
                    <p class="mb-4" style="font-size: 17px;">
                        "Très satisfaite des conseils reçus pour la rédaction de mes contrats de travail. Une expertise précieuse et rassurante."
                    </p>
                    <h5 class="mb-1 text-white">Sara B.</h5>
                    <small class="text-light">Entrepreneure</small>
                </div>
            </div>

            <!-- Témoignage 4 -->
            <div class="testimonial-item">
                <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-2">
                    <p class="mb-4" style="font-size: 17px;">
                        "Le cabinet HB Avocats m’a accompagné dans une affaire familiale délicate avec beaucoup de tact et de professionnalisme."
                    </p>
                    <h5 class="mb-1 text-white">Hicham E.</h5>
                    <small class="text-light">Cadre administratif</small>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Témoignages End -->


    <!-- Footer Start -->
    @include('clients.layouts.footer')

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('clients.layouts.scripts')
</body>

</html>
