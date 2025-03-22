<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-appointment rounded">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-8 py-5">
                    <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                        <h1 class="text-center text-white mb-4">Prendre une Consultation</h1>
                        
                        {{-- Affichage des messages de succès --}}
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        {{-- Affichage des erreurs de validation --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <form action="{{ route('consultation.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="nom" class="form-control border-0 p-4 @error('nom') is-invalid @enderror" placeholder="Nom" value="{{ old('nom') }}" required />
                                    @error('nom') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
    
                                <div class="form-group col-md-6">
                                    <input type="text" name="prenom" class="form-control border-0 p-4 @error('prenom') is-invalid @enderror" placeholder="Prénom" value="{{ old('prenom') }}" required />
                                    @error('prenom') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                         <div class="row">
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control border-0 p-4 @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required />
                                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" name="telephone" class="form-control border-0 p-4 @error('telephone') is-invalid @enderror" placeholder="Téléphone (optionnel)" value="{{ old('telephone') }}" />
                                @error('telephone') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                         </div>
                      

                            <div class="form-group">
                                <textarea name="probleme" class="form-control border-0 p-4 @error('probleme') is-invalid @enderror" placeholder="Décrivez votre problème" rows="4" required>{{ old('probleme') }}</textarea>
                                @error('probleme') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="text-white">Joindre un fichier (optionnel)</label>
                                    <input type="file" name="fichier" class="form-control border-0 p-2 bg-white @error('fichier') is-invalid @enderror" accept=".pdf,.doc,.docx,.jpg,.png" />
                                    @error('fichier') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
    
                                <div class="form-group col-md-6">
                                    <label class="text-white">Statut du Paiement</label>
                                    <select name="paiement_status" class="form-control border-0 px-4 @error('paiement_status') is-invalid @enderror" style="height: 47px;">
                                        <option value="en attente" {{ old('paiement_status') == 'en attente' ? 'selected' : '' }}>En attente</option>
                                        <option value="payé" {{ old('paiement_status') == 'payé' ? 'selected' : '' }}>Payé</option>
                                    </select>
                                    @error('paiement_status') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>
                         

                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Envoyer la Consultation</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

