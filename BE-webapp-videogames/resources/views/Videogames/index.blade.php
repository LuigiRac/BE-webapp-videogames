@extends('layouts.app')


  @section('title', 'Videogames')


    
@section('content')

<table class="table text-center">
    <thead>
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Sviluppatori</th>
        {{-- <th scope="col">Genere</th> --}}
        {{-- <th scope="col">Data di Rilascio</th> --}}
        <th scope="col">Piattaforma</th>
        <th scope="col">Prezzo</th>
        {{-- <th scope="col">Descrizione</th> --}}
        
      </tr>
    </thead>
    <tbody>
        @foreach ($videogames as $videogame)
        <tr>
            <td>{{$videogame->title}}</td>
            <td>{{$videogame->developers}}</td>
            {{-- <td>{{$videogame->genre?->name}}</td> --}}
            {{-- <td>{{$videogame->release_date}}</td> --}}
            <td>
               @forelse($videogame->platforms as $platform)
                  <span class="badge btn-primary" style="background-color: {{$platform->color}}"> {{$platform->name}}
                  </span>
                  @empty In aggiornamento
               @endforelse
            </td>

            <td>
               @if($videogame->price == 0) 
                  <span> Free-to-Play
                  </span>
                  @else €{{$videogame->price}}
               @endif
            </td>
            {{-- <td>{{$videogame->description}}</td> --}}
            
          
            <td>
              <a class="btn btn-success" href="{{route('videogame.show', $videogame->id)}}">Visualizza</a>
            </td>

            <td>
              <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina
              </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="container">
    <a class="btn btn-primary" href="{{route('videogame.create')}}">Aggiungi un videogame</a>
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