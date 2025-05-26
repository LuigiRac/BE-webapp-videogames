@extends('layouts.videogame')


@section('title', 'Videogames')
    
@section('content')

<table class="table text-center">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Autore</th>
        <th scope="col">Categoria</th>
        <th scope="col">Console</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Descrizione</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($videogames as $videogame)
        <tr>
            <td>{{$videogame->title}}</td>
            <td>{{$videogame->author}}</td>
            <td>{{$videogame->category}}</td>
            <td>{{$videogame->console}}</td>
            <td>{{$videogame->price}}</td>
            <td>{{$videogame->description}}</td>
            
          
            <td>
              <a class="btn btn-outline-primary" href="">Visualizza</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection