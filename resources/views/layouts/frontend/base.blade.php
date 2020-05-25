<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<?php 
    use App\Configuration;  
    $config = Configuration::first();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>@if(isset($title)) {{$title}} @else {{env('TITLE_APP')}} @endif</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset($config->favicon) }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset($config->favicon) }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('resources/assets/frontend/css/bootstrap.min.css') }}">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{ asset('resources/assets/frontend/css/pogo-slider.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('resources/assets/frontend/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('resources/assets/frontend/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('resources/assets/frontend/css/custom.css') }}">
 

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER 
    <div id="preloader">
        <div class="loader">
            <img src="resources/assets/frontend/images/loader.gif" alt="#" />
        </div>
    </div>-->
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <?php 
        if (Auth::user()) {  
    ?>
       @include('layouts.frontend.header-auth')
    <?php 
        }else{ 
    ?>
        @include('layouts.frontend.header')
    <?php 
        }
    ?>
      
    <!-- End header -->

        @yield('content')

      @include('layouts.frontend.footer')
 
    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('resources/assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('resources/assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('resources/assets/frontend/js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('resources/assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('resources/assets/frontend/js/jquery.pogo-slider.min.js') }}"></script>
    <script src="{{ asset('resources/assets/frontend/js/slider-index.js') }}"></script>
    <script src="{{ asset('resources/assets/frontend/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('resources/assets/frontend/js/form-validator.min.js') }}"></script>
    <!-- <script src="resources/assets/frontend/js/contact-form-script.js') }}"></script> -->
    <script src="{{ asset('resources/assets/frontend/js/isotope.min.js') }}"></script>
    <script src="{{ asset('resources/assets/frontend/js/images-loded.min.js') }}"></script>
    <script src="{{ asset('resources/assets/frontend/js/custom.js') }}"></script>
     <script src="https://www.google.com/recaptcha/api.js"></script>
         <!-- end section -->
<script type="text/javascript">
    function verifyEmail(element1, element2)
  // La fonction reçois en paramètre les 2 éléments
 { 
  var passed=false
  // On va donner à la variable passed la valeur false (fausse).

   if (element1.value!='' || element2.value!=''){
      if (element1.value!=element2.value) { 
        document.getElementById('notification').style.display = 'block';
        element1.select();
        element1.focus;
        element1.value='';
        element2.value='';
        element1.style.background = 'Yellow';
        element2.style.background = 'Yellow';
   }

   else
   passed=true
   return passed
 }
 } 
</script>
</body>
</html>