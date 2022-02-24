<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Friendly IMDB'}}</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    @include('../includes/header') {{-- navigation bar --}}
    
    @include('../includes/alert') {{-- Alert window from session --}}
    
    @yield('content') {{-- primary content section --}}

    @include('../includes/footer') {{-- footer --}}
</body>
</html>