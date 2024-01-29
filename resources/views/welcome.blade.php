<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    <link rel="stylesheet" href="../scss/app.scss">
    
    @vite('resources/js/app.js')
</head>
<body>
    @foreach ($movies as $movie)
        {{$book['title']}}
    @endforeach
</body>
</html>