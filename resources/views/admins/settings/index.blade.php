@extends('admins.layouts.master')
@section('title', 'Settings')
@section('title_2', 'Company Settings')
@section('content')

    <div class="row">
        <!-- Left Column: Display Settings -->
        <div class="col-xl-12 col-lg-12 stretch-card grid-margin">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title text-primary">Company Settings</h4>

                    <!-- Display success message if any -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('success') }}

                        </div>
                    @endif

                    <!-- Settings Form -->
                    <form action="{{ route('settings.update', $settings->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <!-- Company Name -->
                            <div class="form-group col-md-4">
                                <label for="company_name" class="font-weight-semibold">Company Name</label>
                                <input type="text" class="form-control @error('company_name') is-invalid @enderror"
                                    id="company_name" name="company_name"
                                    value="{{ old('company_name', $settings->company_name) }}" required>
                                @error('company_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="form-group col-md-4">
                                <label for="email" class="font-weight-semibold">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email', $settings->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Address -->
                            <div class="form-group col-md-4">
                                <label for="address" class="font-weight-semibold">Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" required>{{ old('address', $settings->address) }}</textarea>
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- Phone Number -->
                            <div class="form-group col-md-6">
                                <label for="phone_number" class="font-weight-semibold">Phone Number</label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                    id="phone_number" name="phone_number"
                                    value="{{ old('phone_number', $settings->phone_number) }}">
                                @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Website -->
                            <div class="form-group col-md-6">
                                <label for="website" class="font-weight-semibold">Website</label>
                                <input type="url" class="form-control @error('website') is-invalid @enderror"
                                    id="website" name="website" value="{{ old('website', $settings->website) }}">
                                @error('website')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <!-- Social Media Links -->
                        <div class="form-group">
                            <label for="social_media" class="font-weight-semibold">Social Media</label>
                            <textarea class="form-control @error('social_media') is-invalid @enderror" id="social_media" name="social_media">{{ old(
                                'social_media',
                                json_encode([
                                    'facebook' => $socialMedia['facebook'] ?? '',
                                    'twitter' => $socialMedia['twitter'] ?? '',
                                    'linkedin' => $socialMedia['linkedin'] ?? '',
                                    'instagram' => $socialMedia['instagram'] ?? '',
                                ]),
                            ) }}</textarea>
                            <small class="form-text text-muted">Example: {"facebook": "https://facebook.com", "twitter":
                                "https://twitter.com", "linkedin": "https://linkedin.com", "instagram":
                                "https://instagram.com"}</small>
                            @error('social_media')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Update Settings</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
