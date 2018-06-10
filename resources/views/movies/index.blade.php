<!doctype html>

<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <title>Photo</title>
        <script defer src="{{ asset('js/fontawesome-all.js') }}" ></script>

    </head>
    
    <body>

    <div>
        <table border="1">
        <thead>
            <tr>
                @foreach($movies_column as $movie)
                    <th>{{$movie}}</th>
                @endforeach
                <th>Aciton</th>
            </tr>
        </thead>
        <tfoot>
           
        </tfoot>
        <tbody>
            @foreach($moives_data as $movie)
            <tr>
                @foreach($movie as $item)
                <td>{{$item}}</td>
                @endforeach
                <td>
                <a href="{{route('movies.create')}}" >
                    <i class="fas fa-edit"></i>
                </a>
                <a href="{{route('welcome')}}" >
                    <i class="fas fa-home"></i>
                </a>              
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>   
   
</html>
