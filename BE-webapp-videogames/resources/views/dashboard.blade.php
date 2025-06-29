@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-3 text-dark my-4"> <img src="{{ asset('storage/log/logo_game.svg') }}" style="width: 50px;" alt="GameDB Logo"> Benvenuto nella tua Dashboard {{ Auth::user()->name }}</h2>
    
    

    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row g-4">
        <!-- PROFILO -->
        <div class="col-md-6 col-xl-4 d-flex justify-content-center">
            <div class="card shadow-sm border-primary border-start border-5 h-100">
                <div class="card-body">
                    <h5 class="card-title text-primary"><i class="bi bi-person"></i> Il tuo profilo</h5>
                    <p class="card-text">Gestisci le informazioni del tuo profilo. Gestisci utente e password</strong></p>
                    <a href="{{ url('profile') }}" class="btn btn-outline-primary btn-sm">Vai al profilo</a>
                </div>
            </div>
        </div>

        <!-- VIDEOGAME -->
        <div class="col-md-6 col-xl-4">
            <div class="card shadow-sm border-success border-start border-5 h-100">
                <div class="card-body">
                    <h5 class="card-title text-success"><i class="bi bi-controller"></i> I tuoi giochi</h5>
                    <p class="card-text">Gestisci i titoli che hai inserito o salvato nel tuo database personale.</p>
                    <a href="{{ route('videogame.index') }}" class="btn btn-outline-success btn-sm">Vai ai giochi</a>
                </div>
            </div>
        </div>

    
    </div>
</div>
@endsection
