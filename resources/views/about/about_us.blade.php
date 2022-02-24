<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
        @foreach ($data as $person)
        @if (str_contains($person['name'],'Tom'))
        @continue
        @endif
        <div class="about-us__person">
            <h2 class="about-us__person-name">{{$person['name']}}</h2>        
            <div class="about-us__person-age">{{$person['age']}}</div>        
            <div class="about-us__person-position">{{$person['position']}}</div>        
        </div>
        @endforeach
</body>
</html>