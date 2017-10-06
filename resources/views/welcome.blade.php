<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Macess InStyle</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">

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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
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
                <div class="title m-b-md">
                    <img src="{{ asset('images/logo3.png')}}" style="width: 50%;">
                </div>

                <div class="links">
                    <a href="https://facebook.com/MacessInStyle" target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true" style="font-size: 18px; "></i> Macess InStyle</a>
                    <a href="https://instagram.com/macessinstyle" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 18px; "></i> macessinstyle</a>
                    <a href="tel: 0948-241-1162"><i class="fa fa-phone" aria-hidden="true" style="font-size: 18px; "> </i> +639-481-1162</a>
                    <a href="https://goo.gl/maps/Q1dmEQXmCa22" target="_blank"><i class="fa fa-map-marker" aria-hidden="true" style="font-size: 18px; "> </i> 2nd Flr. Lambert's Bldg., Maria Clara St., Tagbilaran City, Bohol 6300</a>
                </div>
            </div>
        </div>
    </body>
</html>
