@extends('admins.layouts.master')
@section('title', 'Settings')
@section('title_2', 'Update Settings')

@section('content')

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-lg rounded-lg">
                    <div class="card-header">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    </div>

                     <form action="{{ route('parametres.update', $parametre->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row mb-4">
                                <!-- Name and Surname Fields -->
                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="nom" class="control-label">Nom</label>
                                    <input type="text" name="nom" id="nom" class="form-control"
                                        value="{{ old('nom', $parametre->nom) }}">
                                </div>
                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="prenom" class="control-label">Prenom</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control"
                                        value="{{ old('prenom', $parametre->prenom) }}">
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                    <label for="localisation" class="control-label">Localisation</label>
                                    <textarea name="localisation" id="localisation" class="form-control">{{ old('localisation', $parametre->localisation) }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <!-- Contact Info Fields -->
                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="email" class="control-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ old('email', $parametre->email) }}">
                                </div>
                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="telephone" class="control-label">Telephone</label>
                                    <input type="text" name="telephone" id="telephone" class="form-control"
                                        value="{{ old('telephone', $parametre->telephone) }}">
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                    <label for="instagram" class="control-label">Instagram</label>
                                    <input type="text" name="instagram" id="instagram" class="form-control"
                                        value="{{ old('instagram', $parametre->instagram) }}">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <!-- Social Media Fields -->
                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="linkedin" class="control-label">LinkedIn</label>
                                    <input type="text" name="linkedin" id="linkedin" class="form-control"
                                        value="{{ old('linkedin', $parametre->linkedin) }}">
                                </div>
                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="facebook" class="control-label">Facebook</label>
                                    <input type="text" name="facebook" id="facebook" class="form-control"
                                        value="{{ old('facebook', $parametre->facebook) }}">
                                </div>
                                <div class="form-group col-md-12 col-lg-4">
                                    <label for="twitter" class="control-label">Twitter</label>
                                    <input type="text" name="twitter" id="twitter" class="form-control"
                                        value="{{ old('twitter', $parametre->twitter) }}">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <!-- Website and YouTube Fields -->
                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="website" class="control-label">Website</label>
                                    <input type="text" name="website" id="website" class="form-control"
                                        value="{{ old('website', $parametre->website) }}">
                                </div>
                                <div class="form-group col-md-6 col-lg-4">
                                    <label for="youtube" class="control-label">YouTube</label>
                                    <input type="text" name="youtube" id="youtube" class="form-control"
                                        value="{{ old('youtube', $parametre->youtube) }}">
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row mb-3">
                                <div class="col-md-4 text-right">
                                    <button type="submit" class="btn btn-info btn-sm">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
