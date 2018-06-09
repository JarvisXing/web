<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <title>Photo </title>
    </head>
    
    <body>
        <ul>
            @foreach($movies as $movie)
                <li>{{$movie->movie_title}}</li>
            @endforeach
        </ul>        

    </body>


    
</html>
