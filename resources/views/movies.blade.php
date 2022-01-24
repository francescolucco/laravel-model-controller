@extends('layouts.main')

@section('content')
   
 <div class="cards container">
   
   <h1>Film</h1>
  <div class="row">
    @forelse ($movies as $movie)
    <div class="col-4 text-white p-3">
      <div class="card text-center">
        <div class="box-img mb-3">
          <img src="{{$movie['image']}}" alt="">
        </div>
        <h3 class="title-card text-center">{{$movie['title']}}</h3>
        <h6>Titolo originale: {{$movie['original_title']}}</h6>
        <p>Nazionalità {{$movie['nationality']}}</p>
        <h5 class="text-center">{{$movie['date']}}</h5>
        <h4 class="text-center">Voto: {{$movie['vote']}}</h4>
      </div>
    </div>
    @empty
      <h4>Nessun film trovato</h4>
    @endforelse
  </div>



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