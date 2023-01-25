@extends('layouts.main.master')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/library/font-awesome-4.3.0/css/font-awesome.min.css">


    <!-- [ PLUGIN STYLESHEET ]
        
=========================================================================================================================-->

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/')}}/images/icon.png">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/css/animate.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/css/owl.theme.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/css/magnific-popup.css">

    <!-- [ Boot STYLESHEET ]
        
=========================================================================================================================-->

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/library/bootstrap/css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/library/bootstrap/css/bootstrap.css">

    <!-- [ DEFAULT STYLESHEET ] 
        
=========================================================================================================================-->

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/css/style.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/css/responsive.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/css/color/themecolor.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
@endsection

@section('content')
<section class="main-heading" id="home">

    <div class="overlay">

        <div class="container">

            <div class="row">

                <div class="main-heading-content col-md-12 col-sm-12 text-center">

                    <h1 class="main-heading-title"><span class="main-element themecolor" data-elements=" Online Ticket, Online Ticket, Online Ticket"></span></h1>

                    <h1 class="main-heading-title"><span class="main-element themecolor" data-elements=" Reservation System, Reservation System, Reservation System"></span>
                    </h1>

                    <p class="main-heading-text">WELCOME TO,<br />E - TICKETING FOR BUSES</p>

                    <div class="btn-bar">

                        <a href="#" class="btn btn-custom theme_background_color">Make Your Booking Now</a>

                    </div>

                </div>

            </div>

        </div>

    </div>


</section>

<section class="main-heading" id="home">

    <div class="overlay">

        <div class="container">

            <div class="row">

                <div class="main-heading-content col-md-12 col-sm-12 text-center">

                    <h1 class="main-heading-title">XYZ Railway Co. Contact List</h1>

                    <p class="main-heading-text">The XYZ Railway Corporation is 112 years old and it runs a unilaterally designed track system of 1067mm cape gauge. Only 30km of its track distribution is in double track and that is within Lagos area.
                        <br />The XYZ railway narrow gauge network is approximately 3,500 km long and is currently being extended by a narrow gauge line between ABC and the BCA - Port Harcourt line and a 275 km long standard gauge line between
                        Ikakpe  Ajaokuta  Warri.
                    </p>

                    <div class="btn-bar">

                        <a href="{{url('/')}}" class="btn btn-custom theme_background_color">Get Started</a>

                        <a href="{{url('/')}}" class="btn btn-custom-outline">Admin</a>

                    </div>

                </div>

            </div>

        </div>

    </div>


</section>


<!-- [/MAIN-HEADING]

============================================================================================================================-->



<!-- [ABOUT US]

============================================================================================================================-->

<section class="aboutus white-background black" id="two">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center black">
                <h3 class="title">ABOUT <span class="themecolor">US</span></h3>
                <p class="a-slog">Developed By MenglySovan KimChhorngTry SovannaKongMoa YongHao </p>
            </div>
        </div>
  
        <div class="gap">
        </div>
  
  
        <div class="row about-box">
            <div class="col-sm-4 text-center">
                <div class="margin-bottom">
                    <i class="fa fa-newspaper-o"></i>
                    <h4>Get Bus Tickets from the comfort of your home</h4>
                    <p class="black">Book Bus tickets from anywhere using the robust ticketing platform exclusively built to provide the passengers with pleasant ticketing experience. </p>
                </div>
                <!-- / margin -->
  
            </div>
            <!-- /col -->
  
            <div class="col-sm-4 about-line text-center">
                <div class="margin-bottom">
                    <i class="fa fa-diamond"></i>
                    <h4>BUS & Ticketing related information at your fingertips</h4>
                    <p class="black">Checkout available seats, route information, fare information on real time basis with BOOK ME BUS.</p>
                </div>
                <!-- / margin -->
  
            </div>
            <!-- /col -->
  
            <div class="col-sm-4 text-center">
  
                <div class="margin-bottom">
  
                    <i class="fa fa-dollar"></i>
  
                    <h4>Pay Securely</h4>
  
                    <p class="black">Online payment. (NO REFUND!)</p>
  
                </div>
                <!-- / margin -->
  
            </div>
            <!-- /col -->
  
        </div>
        <!-- /row -->
    </div>
  </section>


@endsection



