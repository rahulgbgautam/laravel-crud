@extends('movies.layout')

@section('content')



<div class="container">

<div class="col-lg-8 m-auto d-block">

<br>

<form action="{{ route('movies.store') }}" method="POST">
	
	@csrf

	<div class="form-group">
	
	<label for="na"> Title: </label>
	<input type="text" id="name" name="na" placeholder="Title" class="form-control"><br>
	
	</div>
	
	<div class="form-group">
	
	<label for="dis"> Discription </label>
	<input type="text" id="dis" placeholder="Discription" name="dis" class="form-control"><br>
	
	</div>
	
	
	<div class="form-group">

	<button type="submit" name="submit" id="submit" value="submit" class="btn btn-success" onclick="popUp()"> Submit </button>
	
	</div>
	

</form>

</div>

</div>

@endsection


