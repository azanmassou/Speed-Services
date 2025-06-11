@extends('layouts.app')

@section('content')
<div class="container-fluid py-5 min-vh-100 d-flex align-items-center justify-content-center"
     style="background-image: url('{{ asset('images/bg_welcome.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">

    <div class="bg-dark bg-opacity-75 rounded-5 p-5 text-light shadow-lg w-100" style="max-width: 1100px;">
        <div class="row align-items-center justify-content-center">
            
            <!-- Texte de bienvenue -->
            <div class="col-lg-6 mb-4 mb-lg-0 text-center text-lg-start px-4">
                <h1 class="display-5 fw-bold mb-3 text-light">
                    Bienvenue sur
                    <br><span class="text-warning">la plateforme de gestion</span>
                    <br><span class="text-warning">Speed Services</span>
                </h1>
                <p class="fs-5 text-light">
                    Cet espace sécurisé est dédié aux <span class="fw-bold text-warning">agents et caissiers autorisés</span>.<br>
                    Connectez-vous pour gérer efficacement :<br>
                    <span class="text-info">transferts, opérations de caisse, change de devises</span>, et bien plus.
                </p>
                <a href="{{ route('login') }}" class="btn btn-warning btn-lg px-4 shadow-sm mt-4">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Se connecter
                </a>
            </div>

            <!-- Logo illustratif -->
            <div class="col-lg-6 text-center px-4">
                <img src="{{ asset('images/logo_speed_services.jpeg') }}"
                     alt="Logo Speed Services"
                     class="img-fluid rounded-4 shadow"
                     style="max-height: 320px; object-fit: contain;">
            </div>
        </div>
    </div>
</div>
@endsection
