@extends('../layouts/default')

@section('content')
    <h1>Welcome to Friendly imdb</h1>
    <p>search our growing list of movies</p>

    {{-- search section --}}
    <div class="search__container">
        <form action="{{ action('MovieController@search') }}" method="post">
            @csrf
            <div class="search--input">
                <label for="search">Search by movie title</label>
                <input id="search" name="search" type="search">
            </div>
            <div>
                <input type="submit" value="Search">
            </div>
        </form>
    </div>
    {{-- end search section --}}
@endsection