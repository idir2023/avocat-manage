<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-appointment rounded">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-8 py-5">
                    <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                        <h1 class="text-center text-white mb-4">Prendre une Consultation</h1>

                        <!-- Flash Messages -->
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center"
                            role="alert"
                            style="border-left: 5px solid #28a745; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                            <i class="mdi mdi-check-circle-outline me-2" style="font-size: 1.5rem;"></i>
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="close ms-auto" data-dismiss="alert" aria-label="Close"
                                style="border: none; background: transparent;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                      @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Consultation Form -->
                        @if(auth()->check())
                            <form id="consultation-form" action="{{ route('consultation.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <input type="text" name="nom" class="form-control border-0 p-4 @error('nom') is-invalid @enderror" 
                                               placeholder="Nom" value="{{ auth()->user()->name }}" required />
                                        @error('nom') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="email" name="email" class="form-control border-0 p-4 @error('email') is-invalid @enderror" 
                                               placeholder="Email" value="{{ auth()->user()->email }}" required />
                                        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="text" name="telephone" class="form-control border-0 p-4 @error('telephone') is-invalid @enderror" 
                                               placeholder="Téléphone (optionnel)" value="{{ auth()->user()->phone }}" />
                                        @error('telephone') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea name="probleme" class="form-control border-0 p-4 @error('probleme') is-invalid @enderror" 
                                              placeholder="Décrivez votre problème" rows="4" required>{{ old('probleme') }}</textarea>
                                    @error('probleme') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="text-white">Joindre un fichier (optionnel)</label>
                                        <input type="file" name="fichier" class="form-control border-0 p-2 bg-white @error('fichier') is-invalid @enderror" 
                                               accept=".pdf,.doc,.docx,.jpg,.png" />
                                        @error('fichier') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                                <div>
                                    <button id="checkout-button" class="btn btn-primary btn-block border-0 py-3">
                                        Passer au paiement 
                                     </button>
                                    <input type="hidden" id="consultation_id" name="consultation_id">
                                </div>
                                <div id="loading" style="display: none; text-align: center; margin-bottom: 10px;">
                                    <span class="spinner-border spinner-border-sm text-light"></span> Traitement en cours...
                                </div>
                                
                            </form>
                        @else
                        <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('contact') }}">Nous contacter</a>
                            <a href="{{ route('register') }}"   <a class="btn btn-primary py-3 px-5 mt-2" >
                                Connectez-vous pour payer
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
$(document).ready(function () {
    $("#checkout-button").click(function (e) {
        e.preventDefault();
        
        let formData = new FormData($("#consultation-form")[0]);
        
        // Afficher le loading
        $("#loading").show();

        $.ajax({
            url: "{{ route('consultation.store') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            success: function (response) {
                $("#loading").hide(); // Cacher le loading après la réponse

                if (response.success) {
                    let consultationId = response.consultation_id;
                    if (consultationId) {
                        $("#loading").show(); // Afficher le loading pour Stripe

                        $.ajax({
                            url: "{{ route('consultation.createCheckoutSession') }}",
                            type: "POST",
                            data: { consultation_id: consultationId },
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            },
                            success: function (session) {
                                $("#loading").hide(); // Cacher le loading avant la redirection

                                if (session.id) {
                                    let stripe = Stripe("{{ env('STRIPE_KEY') }}");
                                    stripe.redirectToCheckout({ sessionId: session.id })
                                        .then(function (result) {
                                            if (result.error) {
                                                console.error("Erreur Stripe : " + result.error.message);
                                            }
                                        });
                                } else {
                                    console.error("Erreur: Session Stripe non créée");
                                }
                            },
                            error: function (xhr, status, error) {
                                $("#loading").hide();
                                console.error("Erreur lors de la récupération de la session Stripe:", error);
                            }
                        });
                    } else {
                        console.error("Erreur: consultation_id non valide");
                    }
                } else {
                    alert("Erreur lors de la sauvegarde de la consultation");
                }
            },
            error: function (xhr, status, error) {
                $("#loading").hide();
                console.error("Erreur lors de la soumission du formulaire:", error);
                alert("Une erreur est survenue lors de la soumission du formulaire");
            }
        });
    });
});
</script>

