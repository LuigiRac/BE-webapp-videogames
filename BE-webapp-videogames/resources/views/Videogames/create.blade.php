@extends('layouts.videogame')

    
@section('content')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Aggiungi un Nuovo Videogioco</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('videogame.store')}}" method="POST"> 
                        @csrf 

                        {{-- TITOLO --}}
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="" required>
                        </div>

                        {{-- SVILUPPATORI --}}
                        <div class="mb-3">
                            <label for="developers" class="form-label">Sviluppatori</label>
                            <input type="text" class="form-control" id="developers" name="developers" placeholder="" required>
                        </div>

                        {{-- GENERE --}}
                        <div class="mb-3">
                            <label for="genre" class="form-label">Genere</label>
                            
                            <select name="genre_id" id="genre_id" class="form-select">
                                  <option value="" selected disabled>Seleziona un genere</option>
                                @foreach ($genres as $genre)
                                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                                @endforeach
                            </select>

                        </div>

                        {{-- DATA DI RILASCIO --}}
                        <div class="mb-3">
                            <label for="release_date" class="form-label">Data di Rilascio</label>
                            <input type="date" class="form-control" id="release_date" name="release_date">
                        </div>

                        {{-- PIATTAFORMA --}}
                        <div class="mb-3">
                            <label for="platform" class="form-label">Piattaforma</label>
                            <input type="text" class="form-control" id="platform" name="platform" placeholder="" required>
                        </div>

                        {{-- PREZZO --}}
                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo (€)</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="" required>
                        </div>

                        {{-- DESCRIZIONE --}}
                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control" id="description" name="description" rows="5" placeholder="Una breve descrizione del gioco..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Salva Videogioco</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection