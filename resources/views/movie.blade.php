<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Movies</title>
</head>
<body>
    <h1>Movies</h1>
    <div class="container-movie">
    @foreach ($movies as $item)
        
            <div class="movie">
                <h2>{{$item->title}}</h2>
                <h3>{{$item->nationality}}</h3>
                <h3>{{$item->date}}</h3>
                <h3>{{$item->vote}}</h3>
            </div>
       
    @endforeach
    </div>
</body>
</html>