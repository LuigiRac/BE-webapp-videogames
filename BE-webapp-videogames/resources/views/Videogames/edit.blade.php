@extends('layouts.videogame')

    
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Modifica un Videogioco</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('videogame.update', $videogame)}}" method="POST"> 
                        @csrf 
                        @method('PUT')

                        {{-- TITOLO --}}
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$videogame->title}}" required>
                        </div>

                        {{-- SVILUPPATORI --}}
                        <div class="mb-3">
                            <label for="developers" class="form-label">Sviluppatori</label>
                            <input type="text" class="form-control" id="developers" name="developers" value="{{$videogame->developers}}"  required>
                        </div>

                        {{-- GENERE --}}
                        <div class="mb-3">
                            <label for="genre" class="form-label">Genere</label>
                            <input type="text" class="form-control" id="genre" name="genre" value="{{$videogame->genre}}" required>
                        </div>

                        {{-- DATA DI RILASCIO --}}
                        <div class="mb-3">
                            <label for="release_date" class="form-label">Data di Rilascio</label>
                            <input type="date" class="form-control" id="release_date" value="{{$videogame->release_date}}" name="release_date">
                        </div>

                        {{-- PIATTAFORMA --}}
                        <div class="mb-3">
                            <label for="platform" class="form-label">Piattaforma</label>
                            <input type="text" class="form-control" id="platform" name="platform" value="{{$videogame->platform}}" required>
                        </div>

                        {{-- PREZZO --}}
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo (€)</label>
                            <input type="number" step="0.01" class="form-control" id="price" value="{{$videogame->price}}" name="price" required>
                        </div>

                        {{-- DESCRIZIONE --}}
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control" id="description" name="description" rows="5">{{$videogame->description}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Salva Modifiche</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection