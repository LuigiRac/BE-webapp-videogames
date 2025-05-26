@extends('layouts.videogame')

    
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                {{-- <img src="" class="card-img-top" alt=""> --}}
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">
                    Videogame N°: {{$videogame->id}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$videogame->title}}</h5>
                    <p class="card-text">{{$videogame->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Sviluppatori:</strong> {{$videogame->developers}}</li>
                    <li class="list-group-item"><strong>Categoria:</strong> {{$videogame->genre}}</li>
                    <li class="list-group-item"><strong>Piattaforma:</strong> {{$videogame->platform}}</li>
                    <li class="list-group-item"><strong>Data di rilascio:</strong> {{$videogame->release_date}}</li>
                    <li class="list-group-item"><strong>Prezzo:</strong> €{{$videogame->price}}</li>
                </ul>
                <div class="card-body text-center">
                    <a href="#" class="btn btn-primary me-2">View Trailer</a>
                    <a href="#" class="btn btn-outline-secondary">Add to Wishlist</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection