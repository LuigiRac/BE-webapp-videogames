@extends('layouts.videogame')

    
@section('content')

<div class="container mt-5">
    <div class="row d-flex align-items-stretch">
        <div class="col-md-6 mb-4">
            <div class="card h-100"> <div class="card-header card-header-color">
                    Videogame N°: {{$videogame->id}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$videogame->title}}</h5>
                    <p class="card-text videogame-description">{{$videogame->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Sviluppatori:</strong> {{$videogame->developers}}</li>
                    <li class="list-group-item"><strong>Genere:</strong> {{$videogame->genre?->name}}</li>

                    <li class="list-group-item"><strong>Piattaforma:</strong>
                        @forelse($videogame->platforms as $platform)
                           <span class="badge btn-primary" style="background-color: {{$platform->color}}"> {{$paltform->name}}

                           </span>
                           @empty In aggiornamento
                           @endforelse
                    </li>

                    <li class="list-group-item"><strong>Data di rilascio:</strong> {{$videogame->release_date}}</li>
                    <li class="list-group-item"><strong>Prezzo:</strong> €{{$videogame->price}}</li>
                </ul>

                <div class="card-body d-flex justify-content-between align-items-center ">

                     {{-- FRECCIA INDIETRO --}}
                    @if ($previousVideogameId)
                        <a href="{{ route('videogame.show', $previousVideogameId) }}" class="btn btn-success">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                    @else
                        <button class="btn btn-outline-secondary button-mod" disabled>
                             <i class="bi bi-arrow-left"></i>
                        </button>
                    @endif

                    {{-- BOTTONI MODIFICA ED ELIMINA --}}
                    <div>
                        <a href="{{route('videogame.edit', $videogame)}}" class="btn btn-primary me-2">Modifica</a>
                        <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina
                        </button>
                    </div>
                    
                    {{-- FRECCIA AVANTI--}}
                    @if ($nextVideogameId)
                        <a href="{{ route('videogame.show', $nextVideogameId) }}" class="btn btn-success">
                             <i class="bi bi-arrow-right "></i>
                        </a>
                    @else
                        <button class="btn btn-outline-secondary" disabled>
                             <i class="bi bi-arrow-right "></i>
                        </button>
                    @endif
                </div>
                
            </div>
        </div>

        <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
            <div class="card h-100" style="width: 18rem;"> {{-- <img src="" class="card-img-top" alt=""> --}}
                <div class="card-body text-center">
                    Spazio per Immagine / Dettagli Extra
                </div>
            </div>
        </div>
    </div>
</div>


{{-- TASTI AGGIUNTA E HOME --}}
<div class="container text-center d-flex py-4 gap-3">
    <div class="d-flex flex-column  gap-3 ">
        <a class="btn btn-primary" href="{{route('videogame.create')}}">Aggiungi un Videogame</a>
        <a class="btn btn-success" href="{{route('videogame.index', $videogame)}}">Torna alla Home</a>
    </div>
   
{{-- MODAL --}}
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina definitivamente?</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               Sei sicuro di voler eliminare il videogame?
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annulla</button>

               <form action="{{route('videogame.destroy', $videogame)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger " value="Elimina">
               </form>
            </div>
         </div>
      </div>
   </div>

</div>

@endsection