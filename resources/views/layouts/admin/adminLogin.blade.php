<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Admin Login</title>
    <link href="{{asset('/assets/')}}/css/jquery-ui.css" rel="stylesheet" type="text/csss" />
    <link href="{{asset('/assets/')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('/assets/')}}/css/styleLogin.css">
</head>
<body>
    

    @yield('content')

<script src="{{asset('/assets/')}}/js/jquery-1.12.4-jquery.min.js"></script>

</body>

</html>