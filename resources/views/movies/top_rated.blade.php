@extends('../layouts/default')

@section('content')   
    <h1>Top rated Movies</h1>
    <nav>
        <a href="/">Home</a>
    </nav>
    <h2>Top 50 movies of all times</h2>
    <ul>
        @foreach ($top_50 as $movie)
        <li>{{$movie->year}} {{$movie->name}}</li>
        @endforeach
    </ul>
@endsection