@extends('../layouts/default',['title'=>'Movie: '.$movie_details->name])

@section('content')    
<h1>{{$movie_details->name}}</h1>
<div>
        <div>Run time {{$movie_details->length}}</div>
        <div>Year {{$movie_details->year}}</div>
        <div>Rating {{$movie_details->rating}}</div>
    </div>
    <hr />
        @include('../components/forms/review_form')
    <hr />
    {{-- <table>
        <tr>
            <th>Role</th>
            <th>Name</th>
            <th>Position</th>
        </tr>
        @foreach ($movie_staff as $person)
        <tr>
            <td>{{$person->role}}</td>
            <td>{{$person->fullname}}</td>
            <td>{{$person->slug}}</td>
        </tr>
        @endforeach
    </table> --}}
@endsection
