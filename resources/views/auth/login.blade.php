@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5 min-vh-100 d-flex align-items-center justify-content-center"
        style="background-image: url('{{ asset('images/bg_welcome.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">

        <div class="bg-dark bg-opacity-75 rounded-4 p-5 w-100 text-light shadow-lg" style="max-width: 700px;">
            <div class="mb-4 text-center">
                <h2 class="fw-bold text-warning">
                    <i class="bi bi-shield-lock-fill me-2"></i>Connexion Sécurisée
                </h2>
                <p class="text-light fs-5">Connectez-vous à votre espace sécurisé pour gérer vos opérations.</p>
            </div>

            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf

                <x-input name="identifier" label="Psuedo ou E-mail" type="text"
                    placeholder="Entrez votre psuedo ou email" icon="bi-person-circle" class="form-control-lg" />

                <x-password-input name="password" label="Mot de passe" placeholder="********" iconColor="text-warning"
                    class="form-control-lg" />

                <div class="d-flex justify-content-between align-items-center mb-4">
                    @if (Route::has('password.request'))
                        <a class="text-light text-decoration-underline" href="{{ route('password.request') }}">
                            Mot de passe oublié ?
                        </a>
                    @endif
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <x-checkbox name="terms" label="Se souvenir de moi" />

                    <button type="submit" class="btn btn-success btn-lg fw-semibold">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Se connecter
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
