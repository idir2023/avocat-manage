<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Mes Consultations - Me Hanane Bounit</title>
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
        color: #333;
    }

    h1.display-3 {
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        letter-spacing: 1px;
        font-size: 52px;
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
    }

    .pack-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        border-radius: 12px;
        background-color: #fff;
        padding: 20px;
        border-top: 4px solid #5a4c1d;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
    }

    .pack-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        background-color: #fafafa;
    }

    .pack-card h4 {
        font-size: 24px;
        color: #5a4c1d;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .pack-card h5 {
        font-size: 16px;
        color: #888;
        margin-bottom: 15px;
    }

    .pack-card p {
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 10px;
    }

    .pack-card .btn-outline {
        border-radius: 30px;
        font-weight: 500;
        padding: 10px 25px;
        transition: all 0.3s ease;
        color: #5a4c1d;
        border: 2px solid #5a4c1d;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .pack-card .btn-outline:hover {
        background-color: #5a4c1d;
        color: #fff;
    }

    .text-muted {
        font-size: 16px;
        color: #666 !important;
    }

    @media (max-width: 768px) {
        .pack-card {
            padding: 15px;
        }

        .pack-card h4 {
            font-size: 22px;
        }

        .pack-card h5 {
            font-size: 14px;
        }

        .pack-card p {
            font-size: 14px;
        }

        .pack-card .btn-outline {
            font-size: 14px;
            padding: 8px 20px;
        }
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
                <h3 class="display-3 text-white text-uppercase">Mes Consultations</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Accueil</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Mes Consultations</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Consultation Section Start -->
    <div class="container-fluid py-0">
        <div class="container py-2">
            <div class="text-center pb-4">
                <h6 class="text-uppercase text-primary" style="font-size: 20px;">Nos consultation</h6>
                <h1 class="mb-4" style="font-size: 34px;">Découvrez nos dernières publications</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 pt-5 pt-lg-0">
                    <div class="bg-primary rounded" style="height: 200px;"></div>

                    <!-- Start Owl Carousel -->
                    <div class="owl-carousel position-relative"
                        style="margin-top: -100px; padding: 0 30px;">
                        @forelse($consultations as $consultation)
                            <div
                                class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-3 pb-4 pack-card">
                                <h4 class="mb-2">
                                    <i class="fas fa-calendar-alt text-primary"></i>
                                    {{ \Carbon\Carbon::parse($consultation->created_at)->format('d/m/Y H:i:s') }}
                                </h4>

                                <p><strong><i class="fas fa-exclamation-circle text-warning"></i> Problème:</strong>
                                    {{ $consultation->probleme }}</p>
                                <p><strong><i class="fas fa-box-open text-info"></i> Pack:</strong>
                                    {{ $consultation->pack->name }}</p>

                                <!-- Display Payment Status with Icons -->
                                <p class="m-0" style="font-size: 16px;">
                                    @if ($consultation->paiement_status == 'payé')
                                        <i class="fas fa-check-circle text-success"></i> Paiement Réussi
                                    @else
                                        <i class="fas fa-times-circle text-danger"></i> Paiement Non Réussi
                                    @endif
                                </p>

                                <!-- File Link -->
                                <a href="{{ asset('storage/' . $consultation->fichier) }}" target="_blank"
                                    class="text-primary">
                                    <i class="fas fa-file-pdf"></i> Voir le fichier
                                </a>

                                <!-- Reply Link -->

                                <a href="javascript:void(0)" onclick="showReply('{{ $consultation->reply_text }}')"
                                    class="text-primary">
                                    <i class="fas fa-reply"></i> Voir la réponse
                                </a>
                            </div>
                        @empty
                            <div
                                class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 px-3 pb-4 pack-card">
                                <h4>Aucune consultation disponible</h4>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Consultation Section End -->

    <!-- Footer Start -->
    @include('clients.layouts.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    @include('clients.layouts.scripts')

    <!-- Include SweetAlert (make sure you have SweetAlert in your project) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            // Initialize Owl Carousel
            $(".owl-carousel").owlCarousel({
                items: 1, // Show 1 item at a time
                loop: true,
                margin: 10,
                nav: true, // Navigation arrows
                dots: true, // Dots for pagination
                autoplay: true, // Autoplay feature
                autoplayTimeout: 3000, // Delay for autoplay
                autoplayHoverPause: true // Pause on hover
            });
        });

        function showReply(replyText) {
            // Show the reply text in a SweetAlert pop-up
            if (replyText) {
                Swal.fire({
                    title: 'Réponse:',
                    text: replyText,
                    icon: 'info',
                    confirmButtonText: 'OK'
                });
            } else {
                // Show a message if there is no reply
                Swal.fire({
                    title: 'Aucune réponse',
                    text: 'Il n\'y a pas de réponse pour cette consultation.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
            }
        }
    </script>
</body>

</html>
