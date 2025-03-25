<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Expertise</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="icon" type="image/x-icon" href="{{ asset('clients/img/hb.jpeg') }}">

    <!-- Favicon & Styles -->
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
                <h3 class="display-3 text-white text-uppercase">Nos Domaines</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Accueil</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Nos Domaines</p>
                </div>
            </div>
        </div>
    </div>

    {{-- 
    @php
$icones = [
    'Droit du Travail' => 'fa-briefcase',
    'Droit des Contrats' => 'fa-file-contract',
    'Conseils Juridiques' => 'fa-lightbulb',
    'Formations Professionnelles' => 'fa-chalkboard-teacher',
    'Droit Comparé' => 'fa-globe',
    'Faire un Recours' => 'fa-balance-scale',
    'Démarches de Visa' => 'fa-passport',
    'Suivi des Dossiers' => 'fa-folder-open',
];
@endphp --}}


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
    <div class="container-fluid py-0">
        <div class="container py-2">
            <div class="row">
                <!-- Introduction -->
                <div class="col-lg-3">
                    <h6 class="text-uppercase text-primary" style="font-size: 18px;">Nos domaines</h6>
                    <h1 class="mb-4" style="font-size: 42px; font-weight: 700;">Domaines d’intervention</h1>
                    <p style="font-size: 18px; line-height: 1.9;">
                        Nous accompagnons nos clients dans divers domaines du droit, avec une approche humaine,
                        stratégique et rigoureuse, adaptée à chaque situation personnelle ou professionnelle.
                    </p>
                    <a href="{{ route('cons') }}" class="btn btn-primary mt-2">Demander une Consultation</a>
                </div>

                <!-- Carousel des services -->
                <div class="col-lg-9 pt-5 pt-lg-0">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel service-carousel position-relative"
                        style="margin-top: -100px; padding: 0 30px;">

                        <!-- Droit du travail -->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-briefcase"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Droit social approfondie</h5>
                            <p style="font-size: 17px;">Accompagnement des salariés et employeurs : contrats, ruptures,
                                harcèlement moral, licenciements abusifs, etc.</p>
                        </div>

                        <!-- Droit des contrats -->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-file-contract"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Droit des Contrats</h5>
                            <p style="font-size: 17px;">Rédaction, relecture et négociation de contrats commerciaux,
                                professionnels ou civils avec sécurité juridique.</p>
                        </div>

                        <!-- Conseils juridiques -->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-lightbulb"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Conseils Juridiques</h5>
                            <p style="font-size: 17px;">Éclairage juridique personnalisé pour particuliers ou
                                entreprises, analyse de situation, anticipation des risques.</p>
                        </div>

                        <!-- Formations professionnelles -->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-chalkboard-teacher"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Formations Professionnelles</h5>
                            <p style="font-size: 17px;">Sessions de formation juridique adaptées aux entreprises, RH ou
                                élus du personnel : droit social, contrats, obligations.</p>
                        </div>
                        <!-- Droit comparé -->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-globe"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Droit Comparé</h5>
                            <p style="font-size: 17px;">Analyse entre le droit marocain et international, pour une
                                meilleure compréhension et défense dans les affaires transfrontalières.</p>
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


                        <!-- Recours juridiques -->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-balance-scale"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Faire un Recours</h5>
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

                        <!-- Suivi des dossiers -->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-folder-open"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Suivi des Dossiers</h5>
                            <p style="font-size: 17px;">Nous assurons un suivi régulier et transparent de votre dossier
                                jusqu’à la résolution finale de votre affaire.</p>
                        </div>
                        <!-- Droit Fiscal -->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-coins"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Droit Fiscal</h5>
                            <p style="font-size: 17px;">Accompagnement dans les problématiques fiscales : déclarations,
                                contentieux avec l’administration, régularisations.</p>
                        </div>

                        <!-- Droit Administratif -->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-landmark"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Droit Administratif</h5>
                            <p style="font-size: 17px;">Recours contre les décisions administratives, litiges avec
                                l’administration, contentieux devant les juridictions administratives.</p>
                        </div>

                        <!-- Droit Financier -->
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-4 pb-4 shadow-sm"
                            style="min-height: 380px;">
                            <div class="icon-box bg-secondary text-white mb-4">
                                <i class="fa fa-2x fa-piggy-bank"></i>
                            </div>
                            <h5 class="mb-3" style="font-size: 22px;">Droit Financier</h5>
                            <p style="font-size: 17px;">Conseils en matière de régulation financière, opérations de
                                financement, et conformité aux normes financières.</p>
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
                    <h1 class="text-white mb-4">Besoin d’un conseil ? Contactez-nous dès maintenant pour une
                        consultation </h1>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('contact') }}">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>



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
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-2" style="min-height: 360px;">
                        <p class="mb-4 testimonial-content" style="max-height: 150px; overflow: hidden;">
                            "I asked this lawyer, Hanan Bounit, to help me with a problem I had with a company. She was professional, attentive and able to guide me effectively to resolve the situation. Thanks to his help, I was able to overcome this obstacle. Allah i3teha lkhir 🙏🏻"
                        </p>
                        <button class="btn btn-sm btn-light btn-read-more">Lire la suite</button>
                        <h5 class="mb-1 text-white mt-3">NORA IDRISSI SAAD.</h5>
                    </div>
                </div>
    
                <!-- Témoignage 2 -->
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-2" style="min-height: 360px;">
                        <p class="mb-4 testimonial-content" style="max-height: 150px; overflow: hidden;">
                            "I found Maitre Hanan Bounit to be an excellent and informed lawyer in Agadir. Her English really surprised me, it was excellent and easy to understand. She really took the time to understand what we needed. She was well equipped to handle questions about international businesses and gave excellent advice. I am looking forward to continuing to work with her and have her guidance."
                        </p>
                        <button class="btn btn-sm btn-light btn-read-more">Lire la suite</button>
                        <h5 class="mb-1 text-white mt-3">Stephanie Gross.</h5>
                    </div>
                </div>
    
                <!-- Témoignage 3 -->
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-2" style="min-height: 360px;">
                        <p class="mb-4 testimonial-content" style="max-height: 150px; overflow: hidden;">
                            "Exceptional Legal Service – Highly Recommended! I had the pleasure of working with Maitre Hanane Bounit, and I couldn’t be more satisfied with the service provided. From the very beginning, she demonstrated professionalism, expertise, and a genuine commitment to my case. She explained every step of the process, answered all my questions, and gave clear guidance. Thanks to her, my case was handled smoothly and successfully."
                        </p>
                        <button class="btn btn-sm btn-light btn-read-more">Lire la suite</button>
                        <h5 class="mb-1 text-white mt-3">Hassan Tariq Chaudhry.</h5>
                    </div>
                </div>
    
                <!-- Témoignage 4 -->
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-2" style="min-height: 360px;">
                        <p class="mb-4 testimonial-content" style="max-height: 150px; overflow: hidden;">
                            "A lawyer that I highly recommend! Human, attentive professionalism, and invested in her work. I won my case with her, and I can never thank her enough for her wise advice which greatly contributed to the result. Really great! 👌🏽"
                        </p>
                        <button class="btn btn-sm btn-light btn-read-more">Lire la suite</button>
                        <h5 class="mb-1 text-white mt-3">Atlas Vitry94.</h5>
                    </div>
                </div>
    
                <!-- Témoignage 5 -->
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-2" style="min-height: 360px;">
                        <p class="mb-4 testimonial-content" style="max-height: 150px; overflow: hidden;">
                            "I highly recommend Maître Hanane Bounit. She is a competent professional, attentive, and always available to answer my questions. Her human approach and her ability to explain things clearly reassured me throughout my process. Thanks to her expertise, my file was handled efficiently and successfully. I am very grateful for her support."
                        </p>
                        <button class="btn btn-sm btn-light btn-read-more">Lire la suite</button>
                        <h5 class="mb-1 text-white mt-3">Mohamed BOULKARAKIR.</h5>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    <!-- Témoignages End -->
    
    <!-- Read More JS -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const buttons = document.querySelectorAll('.btn-read-more');
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    const content = button.previousElementSibling;
                    content.style.maxHeight = '100%';
                    content.style.overflow = 'visible';
                    button.style.display = 'none';
                });
            });
        });
    </script>
    <!-- Témoignages End -->



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
