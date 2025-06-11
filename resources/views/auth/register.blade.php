@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5 min-vh-100 d-flex align-items-center justify-content-center"
        style="background-image: url('{{ asset('images/bg_welcome.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">

        <div class="bg-dark bg-opacity-75 rounded-4 p-5 w-100 text-light shadow-lg" style="max-width: 1000px;">
            <div class="mb-4 text-center">
                <h2 class="fw-bold text-warning">
                    <i class="bi bi-person-plus-fill me-2"></i>Création de Compte Sécurisée
                </h2>
                <p class="text-light fs-5">Inscrivez-vous pour accéder à votre tableau de bord personnel.</p>
            </div>

            <form method="POST" action="{{ route('register') }}" novalidate>
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <x-input name="name" label="Nom complet" type="text" placeholder="Entrez votre psuedo"
                            icon="bi-person" class="form-control-lg" />
                    </div>
                    <div class="col-md-6">
                        <x-input name="email" label="Adresse e-mail" type="email" placeholder="Entrez votre email"
                            icon="bi-envelope-at" class="form-control-lg" />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <x-password-input name="password" label="Mot de passe" placeholder="********"
                            iconColor="text-success" class="form-control-lg" />
                    </div>
                    <div class="col-md-6">
                        <x-password-input name="password_confirmation" label="Confirmation" placeholder="********"
                            iconColor="text-success" class="form-control-lg" />
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <x-checkbox name="terms" label="I agree terms and conditions"
                        checked="{{ old('terms') ? 'true' : 'false' }}" />


                    <button type="submit" class="btn btn-success btn-lg fw-semibold">
                        <i class="bi bi-person-check me-1"></i> Créer un compte
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
