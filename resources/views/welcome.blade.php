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

        <title>Laravel</title>

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
       <div id="faculty-sec" >
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
               <div class="row" style="margin:0 auto">

                   @foreach($faculties as $faculty)
                   <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">

                       <div class="faculty-div">

                               <h3 >{{$faculty->fname}} {{$faculty->lname}}</h3>
                               <hr />
                               <h4>{{$faculty->qualification}} <br /> {{$faculty->subject}}</h4>
                               <p >
                                   {{$faculty->description}}
                               </p>

                       </div>

                   </div>
                   @endforeach
               </div>
           </div>
       </div>
       <!-- FACULTY SECTION END-->
       <div id="contact-sec"   >
           <div class="overlay">
               <div class="container set-pad">
                   <div class="row text-center">
                       <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2" style="margin:0 auto">
                           <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >CONTACT US  </h1>
                           <p data-scroll-reveal="enter from the bottom after 0.3s">
                               Contact Information
                           </p>
                       </div>

                   </div>
                   <!--/.HEADER LINE END-->
                   <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >


                       <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2" style="margin:0 auto">
                           <form>
                               <div class="form-group">
                                   <input type="text" class="form-control "  required="required" placeholder="Your Name" />
                               </div>
                               <div class="form-group">
                                   <input type="text" class="form-control " required="required"  placeholder="Your Email" />
                               </div>
                               <div class="form-group">
                                   <textarea name="message" required="required" class="form-control" style="min-height: 150px;" placeholder="Message"></textarea>
                               </div>
                               <div class="form-group">
                                   <button type="submit" class="btn btn-info btn-block btn-lg">SUBMIT REQUEST</button>
                               </div>

                           </form>
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
</html>
