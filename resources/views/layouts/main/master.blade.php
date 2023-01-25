<!DOCTYPE html>

<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">

    <meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bus Booking System</title>

    @yield('styles')


</head>

<body>

    
    <div class="wrapper">

        @include('layouts.main.header')

        <!-- [/MAIN-HEADING]
 
============================================================================================================================-->

        @yield('content')

        @include('layouts.main.footer')




        <!-- [/FOOTER]
 
============================================================================================================================-->




    </div>


    <!-- [ /WRAPPER ]

=============================================================================================================================-->


    <!-- [ DEFAULT SCRIPT ] -->
    @include('layouts.main.scriptInclude')
    
</body>


</html>