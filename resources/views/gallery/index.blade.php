<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Shree Vidhya Coaching Classes') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flexslider.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- animatedresponsiveImagegrid  -->
    <link rel="stylesheet" href="{{asset('css/animatedresponsiveImagegrid.css')}}">
    <!-- Magnifoc Popup  -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('home') }}">{{ __('back') }}</a></li>
                    @else
                        <li><a class="nav-link" href="{{ route('home') }}">{{ __('back') }}</a></li>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <body>
    <div class="row" >

        @if(count($pictures) > 0)
            @foreach($pictures as $picture)
                <div class="card text-white bg-secondary mb-3 col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s" >
                    <div class="faculty-div"  >
                        <a href="{{asset('assets/img/Gallery/'.$picture->url)}} " rel="lightbox"> <img class="card-img-top"  src="{{asset('assets/img/Gallery/'.$picture->url)}}" style="height: 300px;width: 300px;"  class="img-rounded" /></a>
                        <div class="card-body">
                            <p class="card-text" >{{$picture->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div style="margin: 0 auto">
                <h2> NO PICTURES IN GALLERY</h2>
            </div>
        @endif


    </div>
</div>
</div>
</body>
<!--  Jquery Core Script -->
<script src="{{ asset('/assets/js/jquery-1.10.2.js') }}" defer></script>
<!--  Flexslider Scripts -->
<script src="{{ asset('assets/js/jquery.flexslider.js') }}" defer></script>
<!--  Scrolling Reveal Script -->
<script src="{{ asset('assets/js/scrollReveal.js') }}" defer></script>
<!--  Scroll Scripts -->
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
{{--<script src="{{ asset('assets/js/jquery.easing.min.js') }}" defer></script>--}}
<!--  Custom Scripts -->
<script src="{{ asset('assets/js/custom.js') }}" defer></script>
</html>