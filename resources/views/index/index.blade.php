<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IMDB frienly version</title>
</head>
<body>
    <h1>IMDB frienly version</h1>
    <nav>
        <a href="/top-rated">Top rated movies</a>
    </nav>
    <h2>Top 10 movies of all times</h2>
    <ul>
        @foreach ($top_movies as $movie)
        <li>{{$movie->year}} {{$movie->name}}</li>
        @endforeach
    </ul>
</body>
</html>