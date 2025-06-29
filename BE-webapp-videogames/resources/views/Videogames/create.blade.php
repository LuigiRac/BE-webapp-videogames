@extends('layouts.videogame')

    
@section('content')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Aggiungi un Nuovo Videogioco</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('videogame.store')}}" method="POST" enctype="multipart/form-data"> 
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
                            <button type="button" id="togglePlatformsBtn">
                                Piattaforme
                            </button>
                            
                            <div id="platformsContainer">
                                
                                @foreach ($platforms as $platform)
                                <div class="tag">
                                    <input type="checkbox" name="platforms[]" value="{{ $platform->id }}" id="{{ $platform->id }}">
                                    <label for="{{ $platform->id }}">{{ $platform->name }}</label>
                                </div>
                                 @endforeach

                            </div>
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
                        
                        {{-- IMMAGINE --}}
                        <div class="form-group mb-3">
                            <label for="image">Carica un'immagine:</label>
                            <input type="file" name="image" id="image">
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <button type="submit" class="btn btn-success">Salva Videogioco</button>
                            <a class="btn btn-success" href="{{route('videogame.index')}}">Torna alla Home</a>
                        </div>

                         
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection