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



           

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
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
                            <br />

                            <br />
                            <h1 style="font-family:'Noto Sans Gujarati',serif;color: white;font-size:7vw;">
                                ॥ શ્રી સરસ્વતૈય નમ​:॥</h1>
                            <h5 style="color: white;font-size:3vw;">
                                "Knowledge is the best wealth which can not be stolen by anyone"
                            </h5>
                        </div>
                        {{--<div class="flexslider set-flexi" id="main-section" style="background-image: url('{{ asset('assets/img/vidhyaClassesLogo.jpg') }}');background-repeat: no-repeat;">--}}
                            {{--<ul class="slides move-me">--}}
                                {{--<!-- Slider 01 -->--}}
                                {{--<li>--}}
                                    {{--<h1 style="font-family:'Noto Sans Gujarati';font-size: 100px;color: #E32E2E;-webkit-text-stroke-width:2px;-webkit-text-stroke-color: white;">--}}
                                        {{--શ્રી વિદ્યા</h1>--}}
                                    {{--<h1 style="font-family:'Noto Sans Gujarati';font-size: 40px;">કોચીંગ ક્લાસીસ</h1>--}}
                                    {{--<a  href="#features-sec" class="btn btn-info btn-lg" >--}}
                                        {{--GET AWESOME--}}
                                    {{--</a>--}}
                                    {{--<a  href="#features-sec" class="btn btn-success btn-lg" >--}}
                                        {{--FEATURE LIST--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<!-- End Slider 01 -->--}}

                                {{--<!-- Slider 02 -->--}}
                                {{--<li>--}}
                                    {{--<h1 style="font-family:'Noto Sans Gujarati';font-size: 100px;color: #E32E2E;-webkit-text-stroke-width:2px;-webkit-text-stroke-color: white;">--}}
                                        {{--શ્રી વિદ્યા</h1>--}}
                                    {{--<h1 style="font-family:'Noto Sans Gujarati';font-size: 40px;">એજ્યુકેશન</h1>--}}
                                    {{--<a  href="#features-sec" class="btn btn-primary btn-lg" >--}}
                                        {{--GET AWESOME--}}
                                    {{--</a>--}}
                                    {{--<a  href="#features-sec" class="btn btn-danger btn-lg" >--}}
                                        {{--FEATURE LIST--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<!-- End Slider 02 -->--}}

                                {{--<!-- Slider 03 -->--}}
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
                                {{--<!-- End Slider 03 -->--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                        <div class="row row-list flexslider set-flexi " id="main-section">
                            <div class="col-lg-3 container-img"><img class="img-responsive" src="{{asset('assets/img/vidhyaClassesLogo.jpg')}}"> </div>
                            <div class="col-lg-9 container-paragraph">
                                <p>
                                    <ul class="slides move-me">
                                    <!-- Slider 01 -->
                                    <li>
                                    <h1 style="font-family:'Noto Sans Gujarati',serif;font-size: 100px;color: #E32E2E;-webkit-text-stroke-width:2px;-webkit-text-stroke-color: white;">
                                    શ્રી વિદ્યા</h1>
                                    <h1 style="font-family:'Noto Sans Gujarati',serif;font-size: 40px;">કોચીંગ ક્લાસીસ</h1>
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
                                    <h1 style="font-family:'Noto Sans Gujarati',serif;font-size: 100px;color: #E32E2E;-webkit-text-stroke-width:2px;-webkit-text-stroke-color: white;">
                                    શ્રી વિદ્યા</h1>
                                    <h1 style="font-family:'Noto Sans Gujarati',serif;font-size: 40px;">એજ્યુકેશન</h1>
                                    {{--<a  href="#features-sec" class="btn btn-primary btn-lg" >--}}
                                    {{--GET AWESOME--}}
                                    {{--</a>--}}
                                    {{--<a  href="#features-sec" class="btn btn-danger btn-lg" >--}}
                                    {{--FEATURE LIST--}}
                                    {{--</a>--}}
                                    </li>
                                    <!-- End Slider 02 -->
                                    </ul>

                                </p>
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

                   <div style="padding-top: 1mm" class="col-lg-12  col-md-12 col-sm-12 ">

                           <marquee behavior="SCROLL" direction="left">
                           <h2 style="font-family:'Noto Sans Gujarati',serif;font-size: 2vw" data-scroll-reveal="enter from the bottom after 0.5s" >
                           <i class="fa fa-circle-o-notch"></i>
                           ધો. ૧ થી ટી.વાય.બી.કોમ​. સુધીના વર્ગો <i class="fa fa-circle-o-notch"></i> </h2></marquee>
                   </div>
               </div>
           </div>

       </div>
       <!--HOME SECTION TAG LINE END-->
       <div id="features-sec"  >
           <div class="overlay">
               <div class="container set-pad">
           <div class="row text-center">

               <div  style="margin:0 auto" class="col-lg-8  col-lg-offset-4 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                   <h1  style="font-family:'Noto Sans Gujarati',serif;font-size: 5vw" data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">
                       અમારી વિશેષતાઓ
                   </h1>
               </div>


           </div>
           <!--/.HEADER LINE END-->
           <div class="row" >


               <div class="col-md-12 col-sm-12" data-scroll-reveal="enter from the bottom after 0.4s">
                   <div class="table-responsive">
                       {{--<i class="fa fa-paper-plane-o fa-4x icon-round-border" ></i>--}}
                       <h5 style="font-family:'Noto Sans Gujarati';">
                           <table class="table" >
                               <ul>
                               <tr>
                                   <td width="100px"></td>
                                   <td class="text-nowrap"><li>દરેક પ્રેક્ટીકલ વિષયમાં સતત પ્રેક્ટિસ આયોજ્નબધ્ધ મહેનત</li></td><td width="50"></td>
                                   <td class="text-nowrap"><li>બોર્ડની પેપર સ્ટાઇલ મુજબ જ્વાબ લખ​વાની સમજણ</li></td>
                                   {{--<td style="height:50px"><li>એક બાળકને શ્રેષ્થ વિધ્યાર્થી બનાવ​વા માટે વાલીમિત્રો આટલુ અવશ્ય કરો આપના બાળકનું ગૃહકાર્ય રોજ કરાવો.</li></td>--}}

                               </tr><tr></tr>
                               <tr><td width="100px"></td>
                                    <td class="text-nowrap"><li>અઠવાડિક પરિક્ષાનું આયોજન.</li></td>
                                    <td width="50"></td>
                                   <td class="text-nowrap"><li>નબળા વિધ્યાર્થીઓ પર વ્યક્તિગત ધ્યાન</li></td>
                                   {{--<td style="height:50px"><li>હાજરી અને પ્રગતિની જાણ માટે મહિનામાં એકાદવાર સંચાલકશ્રીને અચૂક રુબરુ મળો.</li></td><td width="50"></td>--}}


                               </tr><tr></tr>
                               <tr><td width="100px"></td>
                                   <td class="text-nowrap"><li>દરેક વિષયનુ સંપૂર્ણ રીવીઝન નિષ્ણાંત અને અનુભ​વી શિક્ષકગણ</li></td><td width="50"></td>
                                   <td class="text-nowrap"><li>પૂરતી હ​વા-ઉજાસની સગ​વડ</li></td>
                                   {{--<td style="height:50px"><li>આપના બાળકને આપના સથ​વારાની જરુર છે.</li></td>--}}

                               </tr><tr></tr>
                               <tr><td width="100px"></td>
                                   <td class="text-nowrap"><li>સાંસ્ક્રુતિક અને મનોરંજન કાર્યક્રમનુ આયોજન</li></td><td width="50"></td>
                                   <td class="text-nowrap"><li>પ્રોજેક્ટર પર વિષય વસ્તુની સમજૂતી</li></td>
                                   {{--<td style="height:50px"><li>આપના બાળકની જીગ્યાશાવ્રુતિ પ્રબળ બનાવ​વા સધન પ્રયત્ન કરો.</li></td>--}}

                               </tr><tr></tr>
                               <tr><td width="100px"></td>
                                   <td class="text-nowrap"><li>SMS પધ્ધતિ દ્વારા હાજરીની નોંધ​</li></td><td width="50"></td>
                                   <td class="text-nowrap"><li>CCTV કેમેરા દ્વારા દરેક વર્ગ સજ્જ</li></td>
                                   {{--<td style="height:50px"><li>વિધ્યાર્થી કે વાલીને અસંતોષ કે મુંઝ​વણ હોય તો તેમને વિના સંકોચે સંચાલકશ્રીને રુબરુ મળવું જે અંગે સ્ટાફ જોડે રક્ઝક કર​વી નહિ.</li></td><td width="50"></td>--}}

                               </tr><tr></tr>
                               {{--<tr>--}}
                                   {{----}}
                               {{--</tr><tr></tr>--}}
                               {{--<tr>--}}
                                   {{----}}
                               {{--</tr><tr></tr>--}}
                               {{--<tr>--}}
                                  {{----}}
                               {{--</tr><tr></tr>--}}
                               {{--<tr>--}}
                                   {{----}}
                               {{--</tr><tr></tr>--}}
                               {{--<tr>--}}
                                   {{----}}
                               {{--</tr><tr></tr>--}}
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
       </div>

       <!-- FEATURES SECTION END-->
       <div id="faculty-sec"   >
           <div class="overlay">
           <div class="container set-pad">
               <div class="row text-center">
                   <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2" style="margin:0 auto">
                       <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">OUR FACULTY </h1>
                       <p data-scroll-reveal="enter from the bottom after 0.3s">

                       </p>
                   </div>

               </div>
               <div class="row" style="display:flex;justify-content:center;align-items:center;" >
                   <div  data-scroll-reveal="enter from the bottom after 0.4s">

                       <div class="row" style=" border-bottom:1px solid #000;">
                       <div class="col-lg-4 " style="text-align: left">
                               <h2 style="font-family:'Noto Sans Gujarati';"><br> &nbsp; વિજય સર </h2>
                               <h4>&nbsp;&nbsp; M.Com </h4>
                               <h5 style="font-family:'verdana';"> &nbsp;&nbsp;73831 63531 </h5>
                               <h5 style="font-family:'verdana';"> &nbsp;&nbsp;98251 85050 </h5>
                               <h5> &nbsp;&nbsp; svcclass@yahoo.com</h5>
                               <h5> &nbsp;&nbsp; svcclass@gmail.com </h5></div>
                       <div class="col-lg-4 container-img"><img class="img-responsive" width="100%" height="100%    " src="{{asset('assets/img/faculty/1.jpg')}}"> </div>
                       <div class="col-lg-4 container-paragraph"><p>

                           <ul class="navbar-nav ml-auto"><h3>
                           <li style="color:black" class="nav-item dropdown">

                               <a id="navbarDropdown" style="color: white;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                  aria-haspopup="true" aria-expanded="false" v-pre>
                                   &nbsp;&nbsp;Download Our <br> &nbsp;&nbsp;Quality Papers <span class="caret"></span>

                               </a>


                               <div class="dropdown-menu" aria-labelledby="navbarDropdown" color="black">
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
                               </a>
                               <a class="dropdown-item" href="{{ route('PaperClass12') }}">
                               {{ __('Class 12th') }}
                               </a>
                               <a class="dropdown-item" href="{{ route('PaperClassFYBCom') }}">
                                   {{ __('F.Y. B.Com.') }}
                               </a>
                               <a class="dropdown-item" href="{{ route('PaperClassSYBCom') }}">
                                   {{ __('S.Y. B.Com.') }}
                               </a>
                               <a class="dropdown-item" href="{{ route('PaperClassTYBCom') }}">
                                   {{ __('T.Y. B.Com.') }}
                               </a>
                               </a>
                               </div>
                               </li>
                               </h3>
                           </ul>

                           </p>
                       </div>
                       </div>

               </div>


               </div>
               <div style="display:flex;justify-content:center;align-items:center;padding-bottom: 10px">

                       <a class="btn btn-primary"  href="{{route('vpic')}}" role="button" aria-expanded="false" >
                           Show Pictures
                       </a>
                   {{--<a class="btn btn-primary"  id="myBtn" role="button" aria-expanded="false" >--}}
                       {{--Our Faculties--}}
                   {{--</a>--}}
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Our Faculties</button>
                   <!-- Modal -->
                   <div class="modal fade" id="myModal" role="dialog">
                       <div class="modal-dialog" style="color: black">

                           <!-- Modal content-->
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h4 class="modal-title" style="color: black"><b>અનુભવી અને નિષ્ણાંત શિક્ષકોની ટીમ.</b></h4>
                                   <button type="button" class="close" data-dismiss="modal">&times;</button>

                               </div>
                               <div class="modal-body" style="color: black">
                                   <table  style="font-family:'Noto Sans Gujarati';">

                                       <tr><td width="50px"></td><td  >અનિલ સર​ - M.Com.</td><td width="50px"></td><td style="height:50px">યોગેશ સર - B.C.A.</td></tr>
                                       <tr><td width="50px"></td><td style="height:50px">હીના ટીચર - B.Com.</td><td width="50px"></td><td>મયુરી ટીચર - B.Com.</td></tr>
                                       <tr><td width="50px"></td><td style="height:50px">પ્રિયંક સર - B.Com.Eng.</td><td width="50px"></td><td>અંકિત સર - B.E.I.T.</td></tr>
                                       <tr><td width="50px"></td><td style="height:50px">અક્શય સર - B.Com.</td><td width="50px"></td><td>પિયુષ સર - B.Com.</td></tr>
                                       <tr><td width="50px"></td><td style="height:50px">ઊમેશ સર​ - M.Com</td></tr>

                                   </table>
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                               </div>
                           </div>

                       </div>
                   </div>


               </div>
           </div>
       </div>
       </div>
       </div>
       <!-- FACULTY SECTION END-->
       <!-- Gallery Section starts -->
       {{--<div id="contact-sec"   >--}}
           {{--<div class="overlay">--}}
               {{--<div class="container set-pad">--}}
                   {{--<div class="row text-center">--}}
                       {{--<div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2" style="margin:0 auto">--}}
                           {{--<h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >Gallery</h1>--}}
                           {{--<p data-scroll-reveal="enter from the bottom after 0.3s">--}}

                           {{--</p>--}}
                       {{--</div>--}}

                   {{--</div>--}}
                   {{--<!--/.HEADER LINE END-->--}}

                   {{--<div class="row" >--}}
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
                       {{--@if(count($pictures) > 0)--}}
                                {{--@foreach($pictures as $picture)--}}
                               {{--<div class="card text-white bg-secondary mb-3 col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s" >--}}
                                   {{--<div class="faculty-div"  >--}}
                                       {{--<a href="{{asset('assets/img/Gallery/'.$picture->url)}} " rel="lightbox"> <img class="card-img-top"  src="{{asset('assets/img/Gallery/'.$picture->url)}}" style="height: 300px;width: 300px;"  class="img-rounded" /></a>--}}
                                       {{--<div class="card-body">--}}
                                       {{--<p class="card-text" >{{$picture->description}}</p>--}}
                                   {{--</div>--}}
                                   {{--</div>--}}
                               {{--</div>--}}
                               {{--@endforeach--}}
                           {{--@else--}}
                           {{--<div style="margin: 0 auto">--}}
                       {{--<h2> NO PICTURES IN GALLERY</h2>--}}
                           {{--</div>--}}
                           {{--@endif--}}
                                {{--</div>--}}


                       {{--</div>--}}



                   {{--</div>--}}

                       {{--</div>--}}
                       {{--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
                           {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                           {{--<span class="sr-only">Previous</span>--}}
                       {{--</a>--}}
                       {{--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
                           {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                           {{--<span class="sr-only">Next</span>--}}
                       {{--</a>--}}
                   {{--</div>--}}

                   {{--<!-- end image part-->--}}

                   {{--</div>--}}
               {{--</div>--}}
           {{--</div>--}}
       {{--</div>--}}


       {{--</div>--}}
       {{--</div>--}}
       {{--</div>--}}
       {{--</div>--}}
       <div class="container">
           <div class="row set-row-pad"  >
               <div style="margin:0 auto" class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                   <h2 ><strong>Our Locations </strong></h2>
                   <hr />
                   <div  style="font-family:'Noto Sans Gujarati';">
                       <h4> <b>Address 1 :</b> <a href="https://www.google.co.in/maps/place/Shree+Vidhya+Coaching+Classes/@21.192377,72.8226661,17z/data=!4m8!1m2!2m1!1sshetan+faliya+gopipura!3m4!1s0x3be04e670e2f142d:0x10656d89f95462d6!8m2!3d21.1914168!4d72.825923" target="_blank">
                                                  ૮/૧૯૫૮-એ, ગોવિંદજીના મંદિરની સામે, શેતાન ફળિયા, ગોપીપુરા. </a></h4>
                       <h4><strong>Contact:</strong> વિજય સર<br> 98251 85050 </br> 97377 91849<br/></h4>
                       <h4> <b>Address 2 :</b> બી-૯,ઉમિયા નગર સોસાયટી,ગોડદરા નહેર પાસે, પર​વટ પાટીયા.</h4>
                   <h4><strong>Contact:</strong> જાગૃતિબેન મણીકાવાલા <br> 73831 63531 <br/> </h4>
                   <h4><strong>Email: </strong> svcclass@yahoo.com</h4>
                   <h4>svcclass@gmail.com</h4>
               </div>


           </div>
           <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

               <h2 ><strong>Social Conectivity </strong></h2>
               <hr />
               <div >
                   <a href="https://www.facebook.com/vijay.manikawala.9" target="_blank">  <img src="assets/img/Social/facebook.png" alt="facebook logo" /> </a>
                   <a href="mailto:svcclass@gmail.com"> <img src="assets/img/Social/google-plus.png" alt="google-plus logo" /></a>
                   <a href="https://wa.me/9825185050" target="_blank"> <img src="assets/img/Social/whatsapp.png" alt="whatsapp logo" /></a>
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

</html>
