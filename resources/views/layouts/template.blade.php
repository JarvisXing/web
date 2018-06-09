<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ config('app.name', 'Jarvis') }}</title>
    <!--add icon for web title-->
    <!---<link rel="shortcut icon" type="image/ico" href="{{ url(asset('favicon.ico')) }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="{{ asset('js/fontawesome-all.js') }}" ></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/left-sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">


</head>
<body>
    <div class="wrapper">
        <!-- left sidebar-->
        <aside class="main-left-sidebar">
            <section class="left-sidebar">
                <ul class="left-sidebar-menu">
                    <!--@can('index', \App\Models\Asset::class)-->
                    <!--@endcan-->
                    <!--regularly used-->
                    <li class="nav-item">
                        <a href="{{route('logout')}}" 
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fas fa-hourglass-start"></i><span>General</span>
                        </a>
                    </li>
                </ul>
            </section>
        </aside>

        <!-- Content wrapper. Contains page content -->
        <div class="main-content">
            @yield('content')
        </div>
        <!-- footer-->
        <footer class="main-footer">
         <i class="fas fa-user-astronaut" style="color: #a94442; font-size: 10px"></i> 
          This web is made by Jarvis!
         <i class="fas fa-user-astronaut" style="color: #a94442; font-size: 10px"></i> 

        </footer>
       
    </div><!--./wrapper-->
    <!--end main page-->
</body>
</html>
