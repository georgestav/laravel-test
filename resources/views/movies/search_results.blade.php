@extends('../layouts/default')

@section('content')
    <ul>
        @dump($movies)
        @foreach ($movies as $movie)
        <li>{{$movie->year}} {{$movie->name}} <a href="{{ action('MovieController@show',['id'=>$movie->id])}}">Read more</a></li>
        @endforeach
    </ul>
@endsection