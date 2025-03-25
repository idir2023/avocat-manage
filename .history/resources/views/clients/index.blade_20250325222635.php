<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home</title>
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
        line-height: 1.9;
        color: #333;
    }

    #loading {
        display: none;
        font-size: 16px;
        color: white;
        padding: 10px;
        background: rgba(0, 0, 0, 0.6);
        border-radius: 5px;
    }

    h1.display-3 {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        letter-spacing: 1px;
        font-size: 52px;
        /* légèrement plus grand */
        color: #2c2c2c;
    }

    h2,
    h3,
    .display-3 {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        letter-spacing: 1px;
        font-size: 32px;
        color: #3a3a3a;
    }

    p {
        font-size: 20px;
        line-height: 2;

    }
</style>

<body>
    <!-- Header Start -->
    @include('clients.layouts.header')
    <!-- Header End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('clients/img/carousel-1.jpg') }}"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3 text-center" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Cabinet HB Avocats
                            </h4>
                            <h2 class="display-4 text-white mb-4">Parce que chaque affaire mérite une attention
                                particulière</h2>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('contact') }}">Contactez-nous</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('clients/img/carousel-2.jpg') }}"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3 text-center" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Écoute & Engagement
                            </h4>
                            <h2 class="display-4 text-white mb-4">Un accompagnement juridique humain, efficace et
                                rigoureux</h2>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('cons') }}">Demander une
                                Consultation</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Carousel End -->


    <!-- À propos amélioré -->
    <div class="container-fluid py-0">
        <div class="container py-2">
            <div class="row align-items-center">

                <div class="col-lg-5 text-center mb-4 mb-lg-0 d-flex align-items-center" style="min-height: 400px;">
                    <div style="position: relative; width: 100%; height: 100%;">
                        <h2 style="font-size: 180px; color: #e0dfd8; font-weight: 900; line-height: 1;">HB</h2>

                        <!-- Texte superposé -->
                        <h3
                            style="
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 38px;
            color: #5a4c1d;
            letter-spacing: 2px;
            z-index: 2;
            background-color: rgba(255, 255, 255, 0.6);
            padding: 10px 20px;
            border-radius: 12px;
        ">
                            QUI SOMMES-NOUS</h3>
                    </div>
                </div>

                <!-- Côté droit : texte de présentation -->
                <div class="col-lg-7">
                    <h2 style="color: #5a4c1d; font-weight: 700; font-size: 32px;">Bienvenue chez Cabinet HB Avocats
                    </h2>

                    <p class="mt-4" style="font-size: 18px; color: #444; line-height: 1.8;">
                        Fondatrice du Cabinet HB Avocats, <strong>Maître Hanane Bounit</strong> est une avocate
                        expérimentée en droit social approfondie et en droit des affaires. Elle met son expertise au
                        service des particuliers et des entreprises à Agadir et au-delà.
                    </p>

                    <p style="font-size: 18px; color: #444; line-height: 1.8;">
                        Le cabinet privilégie l’écoute, la rigueur et la confidentialité afin de proposer des solutions
                        juridiques claires, efficaces et adaptées à chaque situation. Nous vous accompagnons à chaque
                        étape, avec réactivité et engagement.
                    </p>

                    <a href="{{ route('about') }}" class="btn btn-outline-primary px-4 py-2 mt-3"
                        style="border-radius: 30px;">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Domaines d'intervention Start -->
    <div class="container-fluid py-0">
        <div class="container py-2">
            <div class="row">
                <!-- Carousel des services -->
                <div class="col-12">

                    <div class="bg-primary rounded mb-5" style="height: 200px;"></div>
                    <div class="owl-carousel service-carousel position-relative"
                        style="margin-top: -100px; padding: 0 30px;">

                        <!-- START: Domain Cards (same content, styled to show 6 per slide) -->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm mx-2"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-briefcase"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Droit social approfondie</h5>
                            <p style="font-size: 17px;">Accompagnement des salariés et employeurs : contrats, ruptures,
                                harcèlement moral, licenciements abusifs, etc.</p>
                        </div>

                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm mx-2"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-file-contract"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Droit des Contrats</h5>
                            <p style="font-size: 17px;">Rédaction, relecture et négociation de contrats commerciaux,
                                professionnels ou civils avec sécurité juridique.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                        style="min-height: 380px;">
                       <div class="icon-box bg-secondary text-white mb-4">
                           <i class="fa fa-2x fa-map"></i>
                       </div>
                       <h5 class="mb-3" style="font-size: 22px;">Droit Foncier</h5>
                       <p style="font-size: 17px;">
                           Assistance juridique en matière de propriété, titres fonciers, litiges de terrain, morcellement, et régularisation des biens immobiliers.
                       </p>
                   </div>
                   <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                   style="min-height: 380px;">
                   <div class="icon-box bg-secondary text-white mb-4">
                       <i class="fa fa-2x fa-piggy-bank"></i>
                   </div>
                   <h5 class="mb-3" style="font-size: 22px;">Droit Financier et fiscale</h5>
                   <p style="font-size: 17px;">Conseils en matière de régulation financière, opérations de
                       financement, et conformité aux normes financières.</p>
               </div>

                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm mx-2"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-lightbulb"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Conseils Juridiques</h5>
                            <p style="font-size: 17px;">Éclairage juridique personnalisé pour particuliers ou
                                entreprises, analyse de situation, anticipation des risques.</p>
                        </div>

                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm mx-2"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-chalkboard-teacher"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Formations Professionnelles</h5>
                            <p style="font-size: 17px;">Sessions de formation juridique adaptées aux entreprises, RH ou
                                élus du personnel : droit social, contrats, obligations.</p>
                        </div>
                     
                   
                   

                        <!-- Droit de la Famille -->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-heart"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Droit de la Famille</h5>
                            <p style="font-size: 17px;">Mariage, divorce, pension alimentaire, garde d’enfants,
                                succession : un accompagnement humain et stratégique.</p>
                        </div>
                        <!-- Recours juridiques -->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-balance-scale"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">droit administratif & Recours</h5>
                            <p style="font-size: 17px;">Assistance dans la préparation et le dépôt de recours
                                administratifs ou contentieux selon votre situation.</p>
                        </div>

                        <!-- Démarches de visa -->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-passport"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Démarches de Visa</h5>
                            <p style="font-size: 17px;">Conseil et accompagnement dans les demandes de visa (Schengen,
                                USA, Canada...), avec constitution du dossier.</p>
                        </div>


                        <!-- Ajoute les autres cartes ici avec les mêmes classes -->
                        <!-- Assure-toi que chaque ".d-flex..." a bien class "mx-2" pour l'espacement horizontal -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Domaines d'intervention End -->

    <!-- Owl Carousel config (met dans un script en bas de page ou dans un fichier JS) -->
    <script>
        $(document).ready(function() {
            $(".service-carousel").owlCarousel({
                loop: true,
                margin: 30,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 5000,
                smartSpeed: 1000,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 4
                    },
                    1200: {
                        items: 6
                    }
                }
            });
        });
    </script>

    <!-- Pourquoi nous choisir Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <!-- Image -->
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{ asset('clients/img/feature.jpg') }}"
                            style="object-fit: cover;" alt="Pourquoi choisir notre cabinet">
                    </div>
                </div>

                <!-- Contenu -->
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="feature-text bg-white rounded shadow p-lg-5">
                        <h6 class="text-primary text-uppercase mb-3">Nos Atouts</h6>
                        <h2 class="mb-4 text-dark">Pourquoi choisir notre cabinet</h2>

                        <!-- Point 1 -->
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3 d-flex align-items-center justify-content-center"
                                style="border-radius: 50px;">
                                <h5 class="text-white m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Expertise juridique approfondie</h5>
                                <p class="m-0">Nous mettons à votre disposition une expertise solide dans divers
                                    domaines du droit, avec une approche rigoureuse et personnalisée.</p>
                            </div>
                        </div>

                        <!-- Point 2 -->
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3 d-flex align-items-center justify-content-center"
                                style="border-radius: 50px;">
                                <h5 class="text-white m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Écoute, confiance et réactivité</h5>
                                <p class="m-0">Nous plaçons la relation client au cœur de notre mission, avec une
                                    disponibilité constante et une confidentialité garantie.</p>
                            </div>
                        </div>

                        <!-- Point 3 -->
                        <div class="d-flex"> 
                            <div class="btn-primary btn-lg-square px-3 d-flex align-items-center justify-content-center" style="border-radius: 50px;">
                                <h5 class="text-white m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Accompagnement rigoureux et personnalisé</h5>
                                <p class="m-0">Nous mettons en place une stratégie juridique claire et adaptée à votre situation, avec un suivi attentif à chaque étape.</p>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pourquoi nous choisir End -->



    <!-- Action Start -->
    <!-- Action Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-action rounded d-flex align-items-center justify-content-center" style="height: 500px;">
                <div class="col-lg-8 text-center">
                    <h1 class="text-white mb-4">Besoin d’un conseil ? Contactez-nous dès maintenant pour une
                        consultation </h1>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('contact') }}">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Action End -->

    <!-- Action End -->



    <!-- Témoignages Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-5">
                <h6 class="text-uppercase text-primary">Témoignages</h6>
                <h1 class="mb-5">Ce que disent nos clients</h1>
            </div>

            <div class="owl-carousel testimonial-carousel">

                <!-- Témoignage 1 -->
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-2">
                        <p class="mb-4">
                            "Un accompagnement humain et professionnel dans mon dossier de licenciement. Me Bounit a su
                            m'expliquer mes droits avec clarté."
                            "I found Maitre Hanan Bounit to be an excellent and informed lawyer in Agadir. Her English really surprised me, it was excellent and easy to understand. 
                            She really took the time to understand what we needed. She was well equipped to handle questions about international businesses and gave excellent advice.
                             I am looking forward to continuing to work with her and have her guidance."
                        </p>
                        <h5 class="mb-1 text-white">Yasmine L.</h5>
                        <small class="text-light">Assistante RH</small>
                    </div>
                </div>

                <!-- Témoignage 2 -->
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-2">
                        <p class="mb-4">
                            "Grâce au cabinet, j’ai pu résoudre un litige commercial complexe. Équipe à l’écoute et très
                            réactive. Je recommande vivement."
                        </p>
                        <h5 class="mb-1 text-white">Karim D.</h5>
                        <small class="text-light">Gérant de société</small>
                    </div>
                </div>

                <!-- Témoignage 3 -->
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-2">
                        <p class="mb-4">
                            "Très satisfaite des conseils reçus pour la rédaction de mes contrats de travail. Une
                            expertise précieuse et rassurante."
                        </p>
                        <h5 class="mb-1 text-white">Sara B.</h5>
                        <small class="text-light">Entrepreneure</small>
                    </div>
                </div>

                <!-- Témoignage 4 -->
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-2">
                        <p class="mb-4">
                            "Le cabinet HB Avocats m’a accompagné dans une affaire familiale délicate avec beaucoup de
                            tact et de professionnalisme."
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
