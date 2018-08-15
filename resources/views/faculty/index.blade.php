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
<div  style="align-items: center;align-content: center;text-align-all: center;display:inline-grid " >

   <table style="text-align: center" border="1">
        <td width="500px"></td>
       <th style="height:50px"><li>અનુભવી અને નિષ્ણાંત શિક્ષકોની ટીમ.</li></th>
       <tr><td width="50px"></td><td style="height:50px"><li>ઊમેશ સર​ - M.Com.br,અનિલ સર​ - M.Com.</li></td></tr>
       <tr><td width="50px"></td><td style="height:50px"><li>યોગેશ સર - B.C.A.,અઝહર સર - B.Sc.,અશોક સર - B.C.A.</li></td></tr>
       <tr><td width="50px"></td><td style="height:50px"><li>હીના ટીચર B.Com.,મયુરી ટીચર - B.Com.,પ્રિયંક સર - B.Com.Eng.</li></td></tr>
       <tr><td width="50px"></td><td style="height:50px"><li>અંકિત સર - B.E.I.T.,અક્શય સર - B.Com.,પિયુષ સર - B.Com.</li></td></tr>
   </table>

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