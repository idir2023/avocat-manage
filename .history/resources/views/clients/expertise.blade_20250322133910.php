<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Expertise</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon & Styles -->
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
                <h3 class="display-3 text-white text-uppercase">Nos Domaines</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Accueil</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Nos Domaines</p>
                </div>
            </div>
        </div>
    </div>
   
    {{-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Our Expertise</h6>
                <h1 class="mb-4">Meet Our Expertise</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel team-carousel position-relative"
                        style="margin-top: -97px; padding: 0 30px;">
                        @if ($expertises->count() > 0)
                            @foreach ($expertises as $expertise)
                                <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                                    <h5 class="mb-2 px-4">{{ $expertise->nom }}</h5>
                                    <p class="mb-3 px-4">{{ $expertise->description }}</p>
                                    <div class="team-img position-relative">
                                        @if (!empty($expertise->logo))
                                            <img class="img-fluid" src="{{ Storage::url($expertise->logo) }}"
                                                alt="{{ $expertise->nom }}">
                                        @else
                                            <img class="img-fluid" src="{{ asset('images/default.png') }}"
                                                alt="Default Image">
                                        @endif
                                        <div class="team-social">
                                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-center">No expertise found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
   <!-- Domaines d'intervention Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <!-- Introduction -->
            <div class="col-lg-3">
                <h6 class="text-uppercase text-primary" style="font-size: 18px;">Nos domaines</h6>
                <h1 class="mb-4" style="font-size: 42px; font-weight: 700;">Domaines d’intervention</h1>
                <p style="font-size: 18px; line-height: 1.9;">
                    Nous accompagnons nos clients dans divers domaines du droit, avec une approche humaine, stratégique et rigoureuse, adaptée à chaque situation personnelle ou professionnelle.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary mt-2">Prendre rendez-vous</a>
            </div>

            <!-- Carousel des services -->
            <div class="col-lg-9 pt-5 pt-lg-0">
                <div class="bg-primary rounded" style="height: 200px;"></div>
                <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">

                    <!-- Droit du travail -->
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm" style="min-height: 380px;">
                        <div class="icon-box bg-secondary text-white mb-4">
                            <i class="fa fa-2x fa-briefcase"></i>
                        </div>
                        <h5 class="mb-3" style="font-size: 22px;">Droit du Travail</h5>
                        <p style="font-size: 17px;">Accompagnement des salariés et employeurs : contrats, ruptures, harcèlement moral, licenciements abusifs, etc.</p>
                    </div>

                    <!-- Droit des contrats -->
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm" style="min-height: 380px;">
                        <div class="icon-box bg-secondary text-white mb-4">
                            <i class="fa fa-2x fa-file-contract"></i>
                        </div>
                        <h5 class="mb-3" style="font-size: 22px;">Droit des Contrats</h5>
                        <p style="font-size: 17px;">Rédaction, relecture et négociation de contrats commerciaux, professionnels ou civils avec sécurité juridique.</p>
                    </div>

                    <!-- Conseils juridiques -->
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm" style="min-height: 380px;">
                        <div class="icon-box bg-secondary text-white mb-4">
                            <i class="fa fa-2x fa-lightbulb"></i>
                        </div>
                        <h5 class="mb-3" style="font-size: 22px;">Conseils Juridiques</h5>
                        <p style="font-size: 17px;">Éclairage juridique personnalisé pour particuliers ou entreprises, analyse de situation, anticipation des risques.</p>
                    </div>

                    <!-- Formations professionnelles -->
                    <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm" style="min-height: 380px;">
                        <div class="icon-box bg-secondary text-white mb-4">
                            <i class="fa fa-2x fa-chalkboard-teacher"></i>
                        </div>
                        <h5 class="mb-3" style="font-size: 22px;">Formations Professionnelles</h5>
                        <p style="font-size: 17px;">Sessions de formation juridique adaptées aux entreprises, RH ou élus du personnel : droit social, contrats, obligations.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Domaines d'intervention End -->

   <!-- Action Start -->
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
<!-- Action End -->>
    <!-- Footer Start -->
    @include('clients.layouts.footer')
    <!-- Footer End -->

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    @include('clients.layouts.scripts')

</body>

</html>
