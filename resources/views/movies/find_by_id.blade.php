@extends('../layouts/default',['title'=>'Movie: '.$movie->name])

@section('content')    
<h1>{{$movie->name}}</h1>
<div class="movie__details">
        <div>Run time {{$movie->length}}</div>
        <div>Year {{$movie->year}}</div>
        <div>Rating {{$movie->rating}}</div>
        <div>Type {{$movie->movieType->name}}</div>
        <div>Status {{$movie->movieStatus->slug ?? 'not defined'}}</div>
        <div>Certification {{$movie->certification->slug ?? 'not defined'}}</div>
    </div>
    <div>
        <form action="{{ action('MovieController@delete',['id'=>$movie->id])}}" method="post">
            @csrf
            @method('DELETE')

            <input type="submit" value="Delete">
        </form>
    </div>
    
    
    <hr />
        @include('../components/forms/review_form')
    <hr />
    
@endsection
