<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About</title>
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
                <h3 class="display-3 text-white text-uppercase">Notre Histoire</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Notre Histoire</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="{{asset('clients/img/about.jpg')}}" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
      
                    <h6 class="text-uppercase">Learn About Us</h6>
                    <h1 class="mb-4">We Provide Reliable And Effective Legal Services</h1>
                    <p>Chez Me Hanane Bounit, nous nous engageons à fournir des conseils juridiques de la plus haute qualité, en mettant l'accent sur les besoins de nos clients et en trouvant des solutions efficaces, adaptées à chaque situation.

                        Installé à Agadir, au Maroc, notre cabinet intervient aussi bien en conseil qu’en contentieux, au service des particuliers, des professionnels, ainsi que des petites et moyennes entreprises. Polyvalent et multidisciplinaire, nous offrons une large gamme de services juridiques dans plusieurs domaines du droit.
                        
                        À l’écoute de vos besoins, le Cabinet Me Hanane Bounit met son expertise à votre disposition, en prenant en compte vos objectifs afin de défendre au mieux vos intérêts, avec rigueur, humanité et professionnalisme.
                        
                        Trilingue Français, Anglais et Arabe, Me Hanane Bounit met à profit un riche parcours académique, incluant plusieurs masters en droit du travail, droit des affaires, droit de l’entreprise, et une spécialisation en risques psychosociaux, pour répondre aux enjeux juridiques les plus complexes.
                        
                        Forte également d’une expérience en entreprise, Me Bounit accompagne ses clients avec pragmatisme dans la maîtrise des risques juridiques, en tenant compte des réalités économiques et humaines de chaque structure.
                        
                        Le cabinet veille à exercer dans le strict respect du secret professionnel et d’une déontologie rigoureuse, garantissant à ses clients une approche confidentielle et indépendante.
                        
                        Nous vous invitons à explorer notre site pour découvrir l’éventail de nos services, ainsi que ce qui fait la force et la singularité de notre accompagnement juridique.
                        
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