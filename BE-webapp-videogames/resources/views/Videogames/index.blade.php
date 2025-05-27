@extends('layouts.videogame')

@section('title', 'Videogames')
    
@section('content')

<table class="table text-center">
    <thead>
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Sviluppatori</th>
        <th scope="col">Genere</th>
        <th scope="col">Data di Rilascio</th>
        <th scope="col">Piattaforma</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Descrizione</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($videogames as $videogame)
        <tr>
            <td>{{$videogame->title}}</td>
            <td>{{$videogame->developers}}</td>
            <td>{{$videogame->genre}}</td>
            <td>{{$videogame->release_date}}</td>
            <td>{{$videogame->platform}}</td>
            <td>{{$videogame->price}}</td>
            <td>{{$videogame->description}}</td>
            
          
            <td>
              <a class="btn btn-outline-primary" href="{{route('videogame.show', $videogame->id)}}">Visualizza</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="container">
    <a class="btn btn-primary" href="{{route('videogame.create')}}">Aggiungi un videogame</a>
</div>
@endsection