@extends('layouts.videogame')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container">
        <div class="logo_gamedb">
            <img src="{{ asset('storage/log/logo_game.svg') }}" alt="GameDB Logo">
        </div>

        @if(Auth::user())
             {{-- {{ dd(Auth::user()) }}  --}}
        <h1 class="display-5 fw-bold">
           {{ Auth::user()->name }} Benvenuto su GameDB <i class="bi bi-database"></i> <i class="bi bi-controller"></i>
        </h1>
        @else
        <h1 class="display-5 fw-bold">Benvenuti su GameDB <i class="bi bi-database"></i> <i class="bi bi-controller"></i>
        </h1>
       
        @endif

        <p class="col-md-8 fs-4">
            Siete pronti a prendere il controllo dei vostri dati? La nostra piattaforma semplifica la gestione del database, rendendola intuitiva ed efficiente per tutti.
        </p>

        @if (Auth::user())
        <div class="d-flex wrap">
            <a class="nav-link icon-link" href="{{ url('dashboard') }}">Vai alla tua dashboard</a> 
        </div>

        <div><a class="nav-link icon-link" href="{{route('videogame.index')}}">Vai alla tua libreria giochi</a> </div>
        
        @endif

    </div>
</div>

<div class="content">
    <div class="container">
        <p>Prendi il controllo della tua passione per i videogiochi! Questa piattaforma intuitiva è stata progettata per semplificare la gestione del tuo database personale, permettendoti di catalogare, organizzare e avere sempre a portata di mano tutte le informazioni sui tuoi titoli preferiti. Che tu sia un collezionista incallito o semplicemente voglia tenere traccia dei giochi che hai, qui troverai lo strumento perfetto per le tue esigenze.</p>
    </div>
</div>

@endsection