<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top Rated Games</title>
</head>
<body>
    <h1>Top rated Games</h1>
    <ul>
        @foreach ($top_games as $game)
        <li>{{$game->name}}</li>            
        @endforeach
    </ul>
</body>
</html>