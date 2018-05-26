<!doctype html>
<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/flexslider.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Page</title>

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
        #our-faculty-sec {
            background-image: url({{asset('assets/img/bgblue1.jpeg')}});
        }
    </style>
</head>
@extends('layouts.app')
@section('contentforhome')
    <body>



    <div id="footer">
        <a href="#" style="color: #fff" target="_blank"></a>
    </div>

    </body>
@endsection

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
