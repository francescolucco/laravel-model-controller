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
 </div>
@endsection