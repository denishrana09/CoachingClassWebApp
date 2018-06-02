<!doctype html>
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
            #faculty-sec {
                background-image: url({{asset('assets/img/bgblue1.jpeg')}});
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

                        <div class="flexslider set-flexi" id="main-section" >
                            <ul class="slides move-me">
                                <!-- Slider 01 -->
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>THE UNIQUE METHOD</h1>
                                    <a  href="#features-sec" class="btn btn-info btn-lg" >
                                        GET AWESOME
                                    </a>
                                    <a  href="#features-sec" class="btn btn-success btn-lg" >
                                        FEATURE LIST
                                    </a>
                                </li>
                                <!-- End Slider 01 -->

                                <!-- Slider 02 -->
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>UNMATCHED APPROACH</h1>
                                    <a  href="#features-sec" class="btn btn-primary btn-lg" >
                                        GET AWESOME
                                    </a>
                                    <a  href="#features-sec" class="btn btn-danger btn-lg" >
                                        FEATURE LIST
                                    </a>
                                </li>
                                <!-- End Slider 02 -->

                                <!-- Slider 03 -->
                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>AWESOME FACULTY PANEL</h1>
                                    <a  href="#features-sec" style="background-color: white" class="btn btn-lg" >
                                        GET AWESOME
                                    </a>
                                    <a  href="#features-sec" class="btn btn-info btn-lg" >
                                        FEATURE LIST
                                    </a>
                                </li>
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

                       <h2 data-scroll-reveal="enter from the bottom after 0.5s" ><i class="fa fa-circle-o-notch"></i> WELCOME TO THE SHREE VIDHYA COACHING CLASSES <i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
           </div>

       </div>
       <!--HOME SECTION TAG LINE END-->
       <div id="features-sec" class="container set-pad" >
           <div class="row text-center">

               <div  style="margin:0 auto" class="col-lg-8  col-lg-offset-4 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                   <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">FEATURE LIST </h1>
               </div>


           </div>
           <!--/.HEADER LINE END-->
           <div class="row" >


               <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                   <div class="about-div">
                       <i class="fa fa-paper-plane-o fa-4x icon-round-border" ></i>
                       <h3 >Quality <br /> Education</h3>
                       <hr />
                       <hr />
                       <p >
                          Description by Client
                       </p>
                       <a href="#" class="btn btn-info btn-set"  >ASK THE EXPERT</a>
                   </div>
               </div>
               <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                   <div class="about-div">
                       <i class="fa fa-bolt fa-4x icon-round-border" ></i>
                       <h3 >SYSTEMATIC APPROACH</h3>
                       <hr />
                       <hr />
                       <p >
                           Description by Client
                       </p>
                       <a href="#" class="btn btn-info btn-set"  >ASK THE EXPERT</a>
                   </div>
               </div>
               <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                   <div class="about-div">
                       <i class="fa fa-magic fa-4x icon-round-border" ></i>
                       <h3 >ONE TO <br />ONE STUDY</h3>
                       <hr />
                       <hr />
                       <p >
                           Description by Client
                       </p>
                       <a href="#" class="btn btn-info btn-set"  >ASK THE EXPERT</a>
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
                           Description by Client

                       </p>
                   </div>

               </div>
               <!--/.HEADER LINE END-->
               <div class="row" style="display:flex;justify-content:center;align-items:center;">
                   @foreach($faconind as $faculty)
                   <div  class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">

                       <div>

                           <img style="float: left" src="{{asset('assets/img/faculty/'.$faculty->path)}}"/>
                            <div style="float: right">
                               <h3 >{{$faculty->fname}} {{$faculty->lname}}</h3>
                               <hr />
                               <h4>{{$faculty->qualification}} <br /> {{$faculty->Subject}}</h4>
                               <p >
                                   {{$faculty->description}}
                               </p>
                            </div>

                       </div>

                   </div>
                   @endforeach

               </div>
               <div style="display:flex;justify-content:center;align-items:center;">

                       <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                           Show All
                       </a>
                   <div class="collapse" id="collapseExample"  >
                       <div >
                           <div class="row" style="display:flex;justify-content:center;align-items:center;">
                               <table >
                                   <tr>
                                   <th>Name</th>
                                       <th></th>
                                       <th>Qualification</th>
                                       <th></th>
                                       <th>Subject</th>
                                   </tr>
                               @foreach($faculties as $faculty)
                                   <div  class="col-lg-4  col-md-4 col-sm-4" >

                                       <div>

                                           <div style="float: right">
                                        <tr><td><h3 >{{$faculty->fname}} {{$faculty->lname}}</h3></td><td></td>

                                            <td><h4>{{$faculty->qualification}} <br /></h4></td><td></td><td><h4> {{$faculty->Subject}}</h4></td>

                                           </div>

                                       </div>

                                   </div>
                               @endforeach
                               </table>

                           </div>

                       </div>
                   </div>
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
                                @foreach($pictures as $picture)
                               <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s" >
                                   <div class="faculty-div" >
                                       <a href="{{asset('assets/img/Gallery/'.$picture->url)}}" id="lightbox" title="{{$picture->description}}">
                                        <img src="{{asset('assets/img/Gallery/'.$picture->url)}}" style="height: 300px;width: 300px;"  class="img-rounded" />
                                       </a>
                                       <h3 >{{$picture->description}}</h3>
                                   </div>
                               </div>
                               @endforeach
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

       <!-- Gallery Section Starts-->
       <div id="contact-sec"   >
           <div class="overlay">
               <div class="container set-pad">
                   <div class="row text-center">
                       <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2" style="margin:0 auto">
                           <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >Papers</h1>
                           <p data-scroll-reveal="enter from the bottom after 0.3s">

                           </p>
                       </div>

                   </div>
                   <!--/.HEADER LINE END-->
                   <div class="row" style="display:flex;justify-content:center;align-items:center;">
                       <table border="0">
                           <tr><th style="text-align:center" width="500px">Standard</th><th style="text-align:center"  width="500px">Description</th><th style="text-align:center"  width="500px">Link</th></tr>
                       @foreach($files as $file)
                           <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s" >
                               <div class="faculty-div" >
                                   <tr><td align="center">{{$file->std}}</td><td align="center">{{$file->description}}</td><td align="center"><a href="{{ asset('assets/pdf/'.$file->url) }}" target="_blank">Link</a></td></tr>
                               </div>
                           </div>
                       @endforeach
                       </table>
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
                   <a href="#">  <img src="assets/img/Social/facebook.png" alt="" /> </a>
                   <a href="#"> <img src="assets/img/Social/google-plus.png" alt="" /></a>
                   <a href="#"> <img src="assets/img/Social/twitter.png" alt="" /></a>
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
    $("#lightbox").on("click", function() {
        $(this).modal();
    });
</script>
</html>
