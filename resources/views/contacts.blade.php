@extends('layouts.main')

@section('content')
   
 <div class="container">
   
   <h1>Contatti</h1>

   <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Titolo originale</th>
        <th scope="col">Nazionalità</th>
        <th scope="col">Data di uscita</th>
        <th scope="col">Voto</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($movies as $movie)
      <tr>
        <th scope="row">{{$movie['id']}}</th>
        <td>{{$movie['title']}}</td>
        <td>{{$movie['original_title']}}</td>
        <td>{{$movie['nationality']}}</td>
        <td>{{$movie['date']}}</td>
        <td>{{$movie['vote']}}</td>
      </tr>
      @empty
        <h4>Nessun film trovato</h4>
      @endforelse
    </tbody>
  </table>


 </div>
@endsection