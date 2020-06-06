<!DOCTYPE html> 
<html lang="en" class="no-js') }}">
<?php 
    use App\Configuration;  
    $config = Configuration::first();
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@if(isset($title)) {{$title}} @else {{env('TITLE_APP')}} @endif</title>

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset($config->favicon) }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset($config->favicon) }}" />
    <link href="{{ asset('resources/assets/frontend/css/media_query.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('resources/assets/frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link href="{{ asset('resources/assets/frontend/css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="{{ asset('resources/assets/frontend/css/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('resources/assets/frontend/css/owl.theme.default.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('resources/assets/frontend/css/style_1.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="{{ asset('resources/assets/frontend/js/modernizr-3.5.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/resources/assets/plugins/select2/select2.min.css') }}">
</head>
<body>

    @include('layouts.frontend.header')

    @yield('content')


    @include('layouts.frontend.footer')

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('resources/assets/frontend/js/owl.carousel.min.js') }}"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js') }}"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="{{ asset('resources/assets/frontend/js/jquery.waypoints.min.js') }}"></script>
<!-- Main -->
<script src="{{ asset('resources/assets/frontend/js/main.js') }}"></script>
<script src="{{ asset('/resources/assets/plugins/select2/select2.full.min.js') }}"></script> 

</body>
</html>