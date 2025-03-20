@extends('admins.layouts.master')
@section('title', 'Profile')
@section('title_2', 'Edit Profile')

 
@section('content')
    <div class="container py-5">
        <x-slot name="header">

            <h2 class="fw-semibold text-dark">Profile</h2>
        </x-slot>
 
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm  ">
                    <div class="card-body">
                        @include('admins.profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="card shadow-sm  ">
                    <div class="card-body">
                        @include('admins.profile.partials.update-password-form')
                    </div>
                </div>

                <div class="card shadow-sm">
                    <div class="card-body">
                        @include('admins.profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
