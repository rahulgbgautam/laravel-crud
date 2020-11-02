@extends('movies.layout')

@section('content')


@if($message = Session::get('success'))

  <div class="alert alert-success text-center">
    {{ $message }}
  </div>

@endif

<div class="container">
  <h2>List</h2>
            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Discription</th>
        <th> </th>
        <th> </th>
        <th> </th>
        
        
      </tr>
    </thead>

    @if($movies)

    <tbody>
      @foreach($movies as $movie)      
      <tr>
        <td> {{ $movie->id }} </td>
        <td> {{ $movie->title }} </td>
        <td> {{ $movie->discription }} </td>
        <td class="align-middle"> 
          <a href=" {{ route('movies.show',$movie->id) }} " class="btn btn-info"> Show </a>
        </td>
        <td>   
          <a href=" {{ route('movies.edit',$movie->id) }} "  class="btn btn-primary"> Edit </a> 
        </td>
        <td>
          <form action="{{ route('movies.destroy' , $movie->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure Wants To Delete')"> Delete </button>
          </form>

        </td>

      </tr>
      @endforeach

    </tbody>
  </table>
  @endif

  {{!! $movies->links() !!}}

</div>

@endsection

