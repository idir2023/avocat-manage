<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JUSTICE - Free Lawyer Website Template</title>
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
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
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
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
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
                        <form action="{{ route('contact.store') }}" method="POST" name="sentMessage">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name" name="name" 
                                           placeholder="Your Name" required="required"
                                           data-validation-required-message="Please enter your name" aria-label="Your Name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="prenom" name="prenom" 
                                           placeholder="Your Prenom" required="required"
                                           data-validation-required-message="Please enter your prenom" aria-label="Your Prenom" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" name="email" 
                                           placeholder="Your Email" required="required"
                                           data-validation-required-message="Please enter your email" aria-label="Your Email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="tel" class="form-control p-4" id="phone" name="phone" 
                                           placeholder="Your Phone" required="required"
                                           data-validation-required-message="Please enter your phone" aria-label="Your Phone" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                             <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" name="message" 
                                          placeholder="Message" required="required" 
                                          data-validation-required-message="Please enter your message" aria-label="Message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
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
