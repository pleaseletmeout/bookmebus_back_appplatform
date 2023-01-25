    {{-- login style --}}
    
    {{-- <link href="{{asset('/assets/')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('/assets/')}}/css/styleLogin.css"> --}}

    <!-- [ LOADERs ]

================================================================================================================================-->

<div class="preloader">

    <div class="loader theme_background_color">

        <span></span>


    </div>
</div>
<!-- [ /PRELOADER ]

=============================================================================================================================-->

<!-- [WRAPPER ]

=============================================================================================================================-->

<div class="wrapper">

    <!-- [NAV]

============================================================================================================================-->

    <!-- Navigation
==========================================-->

    <nav class=" nim-menu navbar navbar-default navbar-fixed-top">

        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <a class="navbar-brand" href="{{url('/')}}">O<span class="themecolor">
                    n</span>line Bus Booking</a>

            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a href="#home" class="page-scroll">
                            <h3>Home</h3>
                        </a>
                    </li>

                    <li>
                        <a href="#two" class="page-scroll">
                            <h3>About</h3>
                        </a>
                    </li>

                    @auth
                        <li>
                            <a href="{{url('/admin/dashboard')}}" class="page-scroll">
                                <h3>Admin</h3>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('logout')}}" class="page-scroll" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                <h3>Logout</h3>
                            </a>
                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endauth

                    @guest
                        <li>
                            <a href="{{url('/login')}}" class="page-scroll">
                                <h3>Admin</h3>
                            </a>
                        </li>
                    @endguest


                    
                </ul>

            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container-fluid -->

    </nav>



    <!-- [/NAV]
