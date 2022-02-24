@extends('../layouts/default',['title'=>'Top 50 movies'])
  
@section('content')
<h1>Top 50 movies</h1>
<ul>
    @foreach ($movies as $movie)
    <li>{{$movie->name}}<br>Rating: {{$movie->getFormatedRating()}} / 10 <a href="{{ action('MovieController@show',['id'=>$movie->id])}}">Read more</a></li>
    @endforeach
</ul>
@endsection
