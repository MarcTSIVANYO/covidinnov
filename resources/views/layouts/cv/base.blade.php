<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
<meta name="description" content="My name {{$title}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ $favicon }}" />
    <link rel="stylesheet" href="{{ asset('resources/assets/cv/vendor/material-design-lite/material.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/assets/cv/css/main.css') }}"> 
    <meta name="theme-color" content="#180f24">
    <title>{{$title}}</title>
    <meta content="My name is {{$title}}" name="description">
    <meta property="og:title" content="{{$title}}">
    <meta property="og:description" content="My name is {{$title}}">
    <meta property="og:type" content="website"> 
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@{{$title}}"> 

  </head>
  <body class="mdl-color--grey-100 mdl-color-text--grey-800 mdl-base fonts--loading">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <header class="header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">{{$title}}</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="#about">Apropos</a>
            <a class="mdl-navigation__link" href="#skills">Compétences</a> 
            <a class="mdl-navigation__link" href="#projects">Expérience</a>
            <a class="mdl-navigation__link" href="#follow-me">Réseaux sociaux</a>
            <!-- <a class="mdl-navigation__link" href="#contact">Contact</a> -->
            <a href="{{url('/')}}" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
              PUBLIER MON CV
            </a>
          </nav>
        </div>
      </header>

      <!-- Navigation -->
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">{{$title}}</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="#skills">Compétences</a> 
            <a class="mdl-navigation__link" href="#projects">Expérience</a>
            <a class="mdl-navigation__link" href="#follow-me">Follow Me</a>
            <!-- <a class="mdl-navigation__link" href="#follow-me">Contact</a> -->
            <a href="{{url('/')}}" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
              PUBLIER MON CV
            </a>
        </nav>
      </div>

        @yield('content')
    </div>

    <script src="{{ asset('resources/assets/cv/vendor/raven/3.27.0/raven.min.js') }}"></script>
    <script src="{{ asset('resources/assets/cv/vendor/material-design-lite/material.min.js') }}"></script>
    <script src="{{ asset('resources/assets/cv/vendor/loadcss/0.1.7/loadCSS.min.js') }}"></script>
    <script>
      Raven.config('https://cdf67a30b325483893c7d843765a6cf2@sentry.io/158789').install();

      var ss=loadCSS('https://fonts.googleapis.com/icon?family=Material+Icons');
      onloadCSS(ss,function(){document.body.classList.add('mdi--loaded');});
    </script>
    <noscript><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"></noscript>
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166034127-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-166034127-1');
</script>

  </body>
 
</html>
