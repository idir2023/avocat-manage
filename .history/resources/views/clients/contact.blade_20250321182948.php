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
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contact</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Contact Us</h6>
                <h1 class="mb-4">Contact For Any Query</h1>
            </div>
            <div class="row bg-light p-5 rounded">
                <div class="col-lg-8 mb-5">
                    <div class="contact-form">
                        <!-- Display success message -->
                        @if (session('success'))
                            <div id="success" class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <!-- Form to submit contact info -->
                        <form action="{{ route('contact.store') }}" method="POST" novalidate>
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control p-4" name="name"
                                            placeholder="Your Name" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control p-4" name="prenom"
                                            placeholder="Your First Name" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control p-4" name="email"
                                            placeholder="Your Email" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control p-4" name="phone"
                                            placeholder="Your Phone" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control p-4" rows="6" name="message" placeholder="Your Message" required></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-4">
                    <div class="p-4 rounded">
                        <h4 class="mb-4">Get in Touch</h4>
                        <p><i class="fa fa-map-marker-alt text-primary"></i>
                            {{ $settings->localisation ?? 'Location, City, Country' }}</p>
                        <p><i class="fa fa-phone-alt text-primary"></i> {{ $settings->telephone ?? '+012 345 6789' }}
                        </p>
                        <p>
                            <i class="fa fa-envelope text-primary"></i>
                            <a href="mailto:{{ $settings->email ?? 'info@example.com' }}" class="text-dark">
                                {{ $settings->email ?? 'info@example.com' }}
                            </a>
                        </p>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square mr-2" href="{{ $settings->facebook ?? '#' }}"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="{{ $settings->twitter ?? '#' }}"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="{{ $settings->linkedin ?? '#' }}"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="{{ $settings->instagram ?? '#' }}"><i
                                    class="fab fa-instagram"></i></a>
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
