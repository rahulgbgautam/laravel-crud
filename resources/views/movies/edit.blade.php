@extends('movies.layout')

@section('content')



<div class="container">

<div class="col-lg-8 m-auto d-block">

<br>

<form action="{{ route('movies.update',$movie->id) }}" method="POST">
	
	@csrf
	@method('PUT')
	<div class="form-group">
	
	<label for="na"> Title: </label>
	<input type="text" id="name" name="na" placeholder="Title" class="form-control" value="{{ $movie->title}}"><br>
	
	</div>
	
	<div class="form-group">
	
	<label for="dis"> Discription </label>
	<input type="text" id="dis" placeholder="Discription" name="dis" class="form-control" value="{{ $movie->discription}}"><br>
	
	</div>
	
	
	<div class="form-group">

	<button type="submit" name="submit" id="submit" value="submit" class="btn btn-success" onclick="popUp()"> Submit </button>
	
	</div>
	

</form>

</div>

</div>

@endsection


