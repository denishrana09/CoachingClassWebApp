<!doctype html>
<link rel="stylesheet" href="{{asset('css/lightbox.css')}}" type="text/css" media="screen" />
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

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shree Vidhya Coaching Classes</title>

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


            .modalDialog {
                position: fixed;
                font-family: Arial, Helvetica, sans-serif;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0,0,0,0.8);
                z-index: 99999;
                opacity:0;
                -webkit-transition: opacity 400ms ease-in;
                -moz-transition: opacity 400ms ease-in;
                transition: opacity 400ms ease-in;
                pointer-events: none;
            }
            .modalDialog:target {
                opacity:1;
                pointer-events: auto;
            }
            .modalDialog > div {
                width: 400px;
                position: relative;
                margin: 10% auto;
                padding: 5px 20px 13px 20px;
                border-radius: 10px;
                background: #fff;
                background: -moz-linear-gradient(#fff, #999);
                background: -webkit-linear-gradient(#fff, #999);
                background: -o-linear-gradient(#fff, #999);
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
    @extends('layouts.app')
    @section('contentforhome')
    <body>
       <div class="home-sec" id="home" >
        <div class="overlay">
            <div class="container">
                <div class="row text-center " >

                    <div class="col-lg-12  col-md-12 col-sm-12">
                        <div>
                            <h1 style="font-family:'Noto Sans Gujarati';color: white">
                                ॥ શ્રી સરસ્વતૈય નમ​:॥</h1>
                            <h5 style="color: white";>
                                "Knowledge is the best wealth which can not be stolen by anyone"
                            </h5>
                        </div>
                        <div class="flexslider set-flexi" id="main-section" >
                            <ul class="slides move-me">
                                <!-- Slider 01 -->
                                <li>
                                    <h1 style="font-family:'Noto Sans Gujarati';font-size: 100px;color: #E32E2E;-webkit-text-stroke-width:2px;-webkit-text-stroke-color: white;">
                                        શ્રી વિદ્યા</h1>
                                    <h1 style="font-family:'Noto Sans Gujarati';font-size: 40px;">કોચીંગ ક્લાસીસ</h1>
                                    {{--<a  href="#features-sec" class="btn btn-info btn-lg" >--}}
                                        {{--GET AWESOME--}}
                                    {{--</a>--}}
                                    {{--<a  href="#features-sec" class="btn btn-success btn-lg" >--}}
                                        {{--FEATURE LIST--}}
                                    {{--</a>--}}
                                </li>
                                <!-- End Slider 01 -->

                                <!-- Slider 02 -->
                                <li>
                                    <h1 style="font-family:'Noto Sans Gujarati';font-size: 100px;color: #E32E2E;-webkit-text-stroke-width:2px;-webkit-text-stroke-color: white;">
                                        શ્રી વિદ્યા</h1>
                                    <h1 style="font-family:'Noto Sans Gujarati';font-size: 40px;">એજ્યુકેશન</h1>
                                    {{--<a  href="#features-sec" class="btn btn-primary btn-lg" >--}}
                                        {{--GET AWESOME--}}
                                    {{--</a>--}}
                                    {{--<a  href="#features-sec" class="btn btn-danger btn-lg" >--}}
                                        {{--FEATURE LIST--}}
                                    {{--</a>--}}
                                </li>
                                <!-- End Slider 02 -->

                                <!-- Slider 03 -->
                                {{--<li>--}}
                                    {{--<h3 style="font-family:'Noto Sans Gujarati';">શ્રી વિદ્યા</h3>--}}
                                    {{--<h1>AWESOME FACULTY PANEL</h1>--}}
                                    {{--<a  href="#features-sec" style="background-color: white" class="btn btn-lg" >--}}
                                        {{--GET AWESOME--}}
                                    {{--</a>--}}
                                    {{--<a  href="#features-sec" class="btn btn-info btn-lg" >--}}
                                        {{--FEATURE LIST--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                <!-- End Slider 03 -->
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
       <!--HOME SECTION END-->
       <div  class="tag-line" >
           <div class="container">
               <div class="row  text-center" >

                   <div style="padding-top: 1mm" class="col-lg-12  col-md-12 col-sm-12">

                           <marquee behavior="SCROLL" direction="left"><h2 style="font-family:'Noto Sans Gujarati';" data-scroll-reveal="enter from the bottom after 0.5s" ><i class="fa fa-circle-o-notch"></i>
                           ધો. ૧ થી ટી.વાય.બી.કોમ​. સુધીના વર્ગો <i class="fa fa-circle-o-notch"></i> </h2></marquee>
                   </div>
               </div>
           </div>

       </div>
       <!--HOME SECTION TAG LINE END-->
       <div id="features-sec" class="container set-pad" >
           <div class="row text-center">

               <div  style="margin:0 auto" class="col-lg-8  col-lg-offset-4 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                   <h1  style="font-family:'Noto Sans Gujarati';" data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">
                       અમારી વિશેષતાઓ
                   </h1>
               </div>


           </div>
           <!--/.HEADER LINE END-->
           <div class="row" style="padding-left:65px">


               <div class="col-lg-6  col-md-6 col-sm-6" data-scroll-reveal="enter from the bottom after 0.4s">
                   <div >
                       {{--<i class="fa fa-paper-plane-o fa-4x icon-round-border" ></i>--}}
                       <h5 style="font-family:'Noto Sans Gujarati';">
                           <table border="0" width="1000" style="text-align: center;">
                               <ul>
                               <tr>
                                   <td style="height:50px"><li>દરેક પ્રેક્ટીકલ વિશયમા સતત પ્રેક્ટિસ આયોજ્નબધ્ધ મહેનત</li></td><td width="50"></td>
                                   <td style="height:50px"><li>એક બાળકને શ્રેષ્થ વિધ્યાર્થી બનાવ​વા માટે વાલીમિત્રો આટલુ અવશ્ય કરો આપના બાળકનું ગૃહકાર્ય રોજ કરાવો.</li></td><td width="50"></td>
                                   <td style="height:50px"><li>અનુભવી અને નિષ્ણાંત શિક્ષકોની ટીમ.</li></td>
                               </tr><tr></tr>
                               <tr>
                                   <td style="height:50px"><li>અઠવાડિક પરિક્ષાનું આયોજન.</li>​</td><td width="50"></td>
                                   <td style="height:50px"><li>હાજરી અને પ્રગતિની જાણ માટે મહિનામાં એકાદવાર સંચાલકશ્રીને અચૂક રુબરુ મળો.</li></td><td width="50"></td>
                                   <td style="height:50px"><li>ઊમેશ સર​ - M.Com.br,અનિલ સર​ - M.Com.</li></td>
                               </tr><tr></tr>
                               <tr>
                                   <td style="height:50px"><li>દરેક વિશયનું સંપૂર્ણ રીવીઝન નિષ્ણાંત અને અનુભ​વી શિક્ષકગણ</li></td><td width="50"></td>
                                   <td style="height:50px"><li>આપના બાળકને આપના સથ​વારાની જરુર છે.</li></td><td width="50"></td>
                                   <td style="height:50px"><li>યોગેશ સર - B.C.A.,અઝહર સર - B.Sc.,અશોક સર - B.C.A.</li></td>
                               </tr><tr></tr>
                               <tr>
                                   <td style="height:50px"><li>સાંસ્ક્રુતિક અને મનોરંજન કાર્યક્રમનુ આયોજન</li></td><td width="50"></td>
                                   <td style="height:50px"><li>આપના બાળકની જીગ્યાશાવ્રુતિ પ્રબળ બનાવ​વા સધન પ્રયત્ન કરો.</li></td><td width="50"></td>
                                   <td style="height:50px"><li>હીના ટીચર B.Com.,મયુરી ટીચર - B.Com.,પ્રિયંક સર - B.Com.Eng.</li></td>
                               </tr><tr></tr>
                               <tr>
                                   <td style="height:50px"><li>SMS પધ્ધતિ દ્વારા હાજરીની નોંધ​</li></td><td width="50"></td>
                                   <td style="height:50px"><li>વિધ્યાર્થી કે વાલીને અસંતોષ કે મુંઝ​વણ હોય તો તેમને વિના સંકોચે સંચાલકશ્રીને રુબરુ મળવું જે અંગે સ્ટાફ જોડે રક્ઝક કર​વી નહિ.</li></td><td width="50"></td>
                                   <td style="height:50px"><li>અંકિત સર - B.E.I.T.,અક્શય સર - B.Com.,પિયુષ સર - B.Com.</li></td>
                               </tr><tr></tr>
                               <tr>
                                   <td style="height:50px"><li>બોર્ડની પેપર સ્ટાઇલ મુજબ જ્વાબ લખ​વાની સમજણ</li></td>
                               </tr><tr></tr>
                               <tr>
                                   <td style="height:50px"><li>નબળા વિધ્યાર્થીઓ પર વ્યક્તિગત ધ્યાન</li></td>
                               </tr><tr></tr>
                               <tr>
                                   <td style="height:50px"><li>પૂરતી હ​વા-ઉજાસની સગ​વડ</li></td>
                               </tr><tr></tr>
                               <tr>
                                   <td style="height:50px"><li>પ્રોજેક્ટર પર વિષય વસ્તુની સમજૂતી</li></td>
                               </tr><tr></tr>
                               <tr>
                                   <td style="height:50px"><li>CCTV કેમેરા દ્વારા દરેક વર્ગ સજ્જ</li></td>
                               </tr><tr></tr>
                               </ul>
                           </table>
                       </h5>
                       </h5>
                       <hr />
                       <hr />
                   </div>
               </div>
           </div>
           </div>
       </div>
       <!-- FEATURES SECTION END-->
       <div id="faculty-sec" style="background-color: #000000" >
           <div class="container set-pad">
               <div class="row text-center">
                   <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2" style="margin:0 auto">
                       <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">OUR FACULTY </h1>
                       <p data-scroll-reveal="enter from the bottom after 0.3s">

                       </p>
                   </div>

               </div>
               <!--/.HEADER LINE END-->
               {{--<div class="row" style="display:flex;justify-content:center;align-items:center;">--}}
                   {{--@foreach($faconind as $faculty)--}}
                   {{--<div  class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">--}}

                       {{--<div>--}}

                           {{--<img style="float: left" src="{{asset('assets/img/faculty/'.$faculty->path)}}"/>--}}
                            {{--<div style="float: right">--}}
                               {{--<h3 >{{$faculty->fname}} {{$faculty->lname}}</h3>--}}
                               {{--<hr />--}}
                               {{--<h4>{{$faculty->qualification}} <br /> {{$faculty->Subject}}</h4>--}}
                               {{--<p >--}}
                                   {{--{{$faculty->description}}--}}
                               {{--</p>--}}
                            {{--</div>--}}

                       {{--</div>--}}

                   {{--</div>--}}
                   {{--@endforeach--}}

               {{--</div>--}}
               <div class="row" style="display:flex;justify-content:center;align-items:center;" >
                   <div  data-scroll-reveal="enter from the bottom after 0.4s">
                       {{--<div class="faculty-div" style="align-items: center;width: 33.34%">--}}
                           {{--<img src="{{asset('assets/img/faculty/1.jpg')}}" height="300px" width="350px"  class="img-rounded" />--}}
                       {{--</div>--}}
                       <table border="0" >
                           <tr>
                               <td style="height: 500px" width="250px">
                                    <h2> Name </h2>
                                   <h3> Designation </h3>
                                   <h3> Contact </h3>
                                   <h3> E-mail </h3>
                               </td>
                               <td width="500px">
                                   <img src="{{asset('assets/img/faculty/1.jpg')}}" height="100%" width="100%"  class="img-rounded" />
                               </td>
                               <td width="250px" style="justify-content:center;align-items:center;padding-left: 10%">
                                   <li class="nav-item dropdown">
                                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                           Our Quality Papers <span class="caret"></span>
                                       </a>

                                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                           <a class="dropdown-item" href="{{ route('PaperClass5') }}">
                                               {{ __('Class 5th') }}
                                           </a>
                                           <a class="dropdown-item" href="{{ route('PaperClass6') }}">
                                               {{ __('Class 6th') }}

                                               <a class="dropdown-item" href="{{ route('PaperClass7') }}">
                                                   {{ __('Class 7th') }}
                                               </a>

                                               <a class="dropdown-item" href="{{ route('PaperClass8') }}">
                                                   {{ __('Class 8th') }}
                                               </a>

                                               <a class="dropdown-item" href="{{ route('PaperClass9') }}">
                                                   {{ __('Class 9th') }}
                                               </a>

                                               <a class="dropdown-item" href="{{ route('PaperClass10') }}">
                                                   {{ __('Class 10th') }}
                                               </a>
                                               <a class="dropdown-item" href="{{ route('PaperClass11') }}">
                                                   {{ __('Class 11th') }}
                                               </a> <a class="dropdown-item" href="{{ route('PaperClass12') }}">
                                                   {{ __('Class 12th') }}
                                               </a>
                                       </div>
                                   </li>
                               </td>
                           </tr>
                       </table>

               </div>


               </div>
               <div style="display:flex;justify-content:center;align-items:center;padding-bottom: 10px">

                       <a class="btn btn-primary"  href="{{route('vfac')}}" role="button" aria-expanded="false" >
                           Show All
                       </a>
               </div>
           </div>
       </div>
       <!-- FACULTY SECTION END-->
       <!-- Gallery Section starts -->
       <div id="contact-sec"   >
           <div class="overlay">
               <div class="container set-pad">
                   <div class="row text-center">
                       <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2" style="margin:0 auto">
                           <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >Gallery</h1>
                           <p data-scroll-reveal="enter from the bottom after 0.3s">

                           </p>
                       </div>

                   </div>
                   <!--/.HEADER LINE END-->

                   <div class="row" >
                   {{--@foreach($pictures as $picture)--}}
                               {{--<div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">--}}
                                   {{--<div class="faculty-div" >--}}

                                       {{--<img src="{{asset('assets/img/Gallery/'.$picture->url)}}"  style="max-height: 300px; max-width: 400px;" class="img-rounded" />--}}
                                       {{--<img src="assets/img/gallery/1.jpg"  style="max-height: 300px; max-width: 400px;" class="img-rounded" />--}}
                                       {{--<img src="assets/img/gallery/1.jpg"  style="max-height: 300px; max-width: 400px;" class="img-rounded" />--}}
                                       {{--<h4>{{$picture->description}}</h4>--}}
                                   {{--</div>--}}
                               {{--</div>--}}
                                {{--@endforeach--}}
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

                       </div>
                       <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                       </a>
                       <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                       </a>
                   </div>

                   <!-- end image part-->

                   </div>
               </div>
           </div>
       </div>


       </div>
       </div>
       </div>
       </div>
       <div class="container">
           <div class="row set-row-pad"  >
               <div style="margin:0 auto" class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                   <h2 ><strong>Our Location </strong></h2>
                   <hr />
                   <div>
                   <h4>Address ,</h4>
                   <h4>Over , Here .</h4>
                   <h4><strong>Call:</strong>  Contact Number </h4>
                   <h4><strong>Email: </strong>Email@Over.Here</h4>
               </div>


           </div>
           <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

               <h2 ><strong>Social Conectivity </strong></h2>
               <hr />
               <div >
                   <a href="#">  <img src="assets/img/Social/facebook.png" alt="facebook logo" /> </a>
                   <a href="#"> <img src="assets/img/Social/google-plus.png" alt="google-plus logo" /></a>
                   <a href="#"> <img src="assets/img/Social/whatsapp.png" alt="whatsapp logo" /></a>
               </div>
           </div>


       </div>
       </div>
       <!-- CONTACT SECTION END-->
       <div id="footer">
           <a href="#" style="color: #fff" target="_blank">Design by : Siddharth&Denish</a>
       </div>
       <!-- FOOTER SECTION END-->

       <!--/.HEADER LINE END-->

    </body>
    @endsection
    <script type="text/javascript" src="{{asset('/js/lightbox.js')}}"></script>

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
<script>

</script>
</html>
