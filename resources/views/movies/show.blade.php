@extends('movies.layout')

@section('content')

<div class="container">
  
  @if($movie)
  <br>
  <br>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="https://images.unsplash.com/photo-1496345962527-29757c3a3d94?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"> {{ $movie->title }} </h4>
      <p class="card-text"> {{ $movie->discription }} </p>
    </div>
    @endif
  </div>
  <br>

@endsection
