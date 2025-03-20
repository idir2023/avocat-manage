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
                <h3 class="display-3 text-white text-uppercase">Actualite</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Actualite</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Our Actualite</h6>
                <h1 class="mb-4">Meet Our Actualite</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 pt-5 pt-lg-0">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel service-carousel position-relative"
                        style="margin-top: -100px; padding: 0 30px;">
                        @foreach ($actualites as $actualite)
                            <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4 pb-4">
                                <div class="icon-box bg-secondary text-primary mt-2 mb-4 d-flex align-items-center justify-content-center"
                                    style="width: 80px; height: 80px; border-radius: 50%;">
                                    @if (!empty($actualite->logo))
                                        <img class="img-fluid rounded-circle" src="{{ Storage::url($actualite->logo) }}"
                                            alt="{{ $actualite->nom }}"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                    @else
                                        <i class="fa fa-2x fa-landmark"></i>
                                    @endif
                                </div>
                                <h5 class="mb-4 px-4">{{ $actualite->nom }}</h5>
                                <p class="m-0">{{ $actualite->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services End -->


    <!-- Action Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-action rounded" style="height: 500px;">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-white mb-4">Let's get started. Call us now for a Free Consultation</h1>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="#">Call Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Action End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-5">
                <h6 class="text-uppercase">Testimonial</h6>
                <h1 class="mb-5">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('clients/img/testimonial-1.jpg') }}"
                            style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('clients/img/testimonial-2.jpg') }}"
                            style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('clients/img/testimonial-3.jpg') }}"
                            style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('clients/img/testimonial-4.jpg') }}"
                            style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    @include('clients.layouts.footer')

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('clients.layouts.scripts')
</body>

</html>
