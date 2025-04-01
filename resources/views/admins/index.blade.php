@extends('admins.layouts.master')

@section('content')
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                    <h6 class="text-white">Users</h6>
                    <div class="text-white">{{ $totalUser ?? 0 }} users</div>
                </div>
            </div>
        </div>

        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-message"></i></h1>
                    <h6 class="text-white">Contacts</h6>
                    <div class="text-white">{{ $totalContact ?? 0 }} contacts</div>
                </div>
            </div>
        </div>

        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-calendar-check"></i></h1>
                    <h6 class="text-white">Consultations</h6>
                    <div class="text-white">{{ $totalConsultation ?? 0 }} consultations</div>
                </div>
            </div>
        </div>

        <!-- Column -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-hover">
                <div class="box bg-purple text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-certificate"></i></h1>
                    <h6 class="text-white">Expertises</h6>
                    <div class="text-white">{{ $totalExpertise ?? 0 }} total</div>
                </div>
            </div>
        </div>

        <!-- Column -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-hover">
                <div class="box bg-primary text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-newspaper"></i></h1>
                    <h6 class="text-white">Actualités</h6>
                    <div class="text-white">{{ $totalActualite ?? 0 }} active</div>
                </div>
            </div>
        </div>

        <!-- Column -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-hover">
                <div class="box bg-secondary text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-package"></i></h1>
                    <h6 class="text-white">Packs</h6>
                    <div class="text-white">{{ $totalPack ?? 0 }} available</div>
                </div>
            </div>
        </div>
    

    </div>
@endsection
 