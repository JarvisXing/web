<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to Jarvis</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 160px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .time{
                color: #000;
                font-family: 'Times New Roman ', serif;
                font-size: 40px;
                font-weight: bold;

            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="time" id="currenttime"></div>
                <script>
                function showTime()
                {
                    nowtime=new Date();
                    year=nowtime.getFullYear();
                    month=nowtime.getMonth()+1;
                    date=nowtime.getDate();
                    hour=nowtime.getHours(); 
                    minute=nowtime.getMinutes();   
                    second=nowtime.getSeconds();
                    
                    document.getElementById("currenttime").innerHTML=hour+":"+minute+":"+second
                                        //+"<br/>"+year+"-"+month+"-"+date
                                            
                }
                showTime();
                setInterval("showTime()",1000);

                </script>
   
                <div class="title m-b-md">
                    Jarvis
                </div>
                
                <div class="links">
                    <a href="{{url('/news')}}">News</a>
                    <a href="{{url('/photo')}}">Photo</a>
                    <a href="{{route('movies.index')}}">Movie</a>
                    <a href="{{url('/about')}}">About</a>
                </div>
            </div>
        </div>
    </body>
</html>
