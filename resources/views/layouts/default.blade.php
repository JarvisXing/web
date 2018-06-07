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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/left-sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

</head>
<body>
    <div class="wrapper">
        <!--header-->
        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <!-- Navbar Top Menu -->
                <ul class="navbar-top-menu">
                    <!--@can('index', \App\Models\Asset::class)-->
                    <!--@endcan-->
                    <!--regularly used-->
                    <li class="nav-item">
                        <a href="{{route('logout')}}" 
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fas fa-hourglass-start"></i>
                        </a>
                    </li>
                    <!--dashboard-->
                    <li class="nav-item">
                        <a href="{{route('logout')}}" 
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fas fa-chart-area"></i>
                        </a>
                    </li>
                    <!--Money-->
                    <li class="nav-item">
                        <a href="{{route('logout')}}" 
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fas fa-money-check-alt"></i>
                        </a>
                    </li>
                    <!--Media-->
                    <li class="nav-item">
                        <a href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <!--Research-->
                    <li class="nav-item">
                        <a href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fas fa-graduation-cap"></i>
                        </a>
                    </li>
                    <!--Users-->
                    <li class="nav-item">
                        <a href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fas fa-users"></i>
                        </a>
                    </li>
                    <!--Settings-->
                    <li class="nav-item">
                        <a href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                    <!-- Authentication Links -->
                    
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                            <i class="fas fa-user"></i>
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}">
                                <i class="fas fa-info-circle"></i>
                                Profile
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}">
                                <i class="fas fa-sign-out-alt"></i>
                                {{ __('Logout') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endguest                  
                </ul>   
            </nav>
        </header>

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
                            <i class="fas fa-hourglass-start"></i>
                        </a>
                    </li>
                    <!--dashboard-->
                    <li class="nav-item">
                        <a href="{{route('logout')}}" 
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fas fa-chart-area"></i>
                        </a>
                    </li>
                    <!--Money-->
                    <li class="nav-item">
                        <a href="{{route('logout')}}" 
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fas fa-money-check-alt"></i>
                        </a>
                    </li>
                    <!--Media-->
                    <li class="nav-item">
                        <a href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <!--Research-->
                    <li class="nav-item">
                        <a href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fas fa-graduation-cap"></i>
                        </a>
                    </li>
                    <!--Users-->
                    <li class="nav-item">
                        <a href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fas fa-users"></i>
                        </a>
                    </li>
                    <!--Settings-->
                    <li class="nav-item">
                        <a href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fas fa-cog"></i>
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

        </footer>
       
    </div><!--./wrapper-->
    <!--end main page-->
</body>
</html>
