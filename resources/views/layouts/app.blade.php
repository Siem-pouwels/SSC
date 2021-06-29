<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SuperSoccerCards') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/bounce.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
<style>
    body {
      background-color: #191919;
      font-weight: 600;
      text-align: center !important;
      color: white;
    }
  .gold-nav {
      color: #DCBE38;
      font-size: 20px;
      text-transform: uppercase;
  }
  .logo {
      width: 16px;
      height: 16px;
  }
  /* code for making hover effects */
  .hoverable {
      display: inline-block;
      backface-visibility: hidden;
      vertical-align: middle;
      position: relative;
      box-shadow: 0 0 1px rgba(0, 0, 0, 0);
      transform: translateZ(0);
      transition-duration: 0.3s;
      transition-property: transform;
    }
    
    .hoverable:before {
      position: absolute;
      pointer-events: none;
      z-index: -1;
      content: "";
      top: 100%;
      left: 5%;
      height: 10px;
      width: 90%;
      opacity: 0;
      background: -webkit-radial-gradient(center, ellipse, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 80%);
      background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 80%);
      /* W3C */
      transition-duration: 0.3s;
      transition-property: transform, opacity;
    }
    
    .hoverable:hover, .hoverable:active, .hoverable:focus {
      transform: translateY(-5px);
    }
    
    .hoverable:hover:before, .hoverable:active:before, .hoverable:focus:before {
      opacity: 1;
      transform: translateY(-5px);
    }
    
    @keyframes bounce-animation {
      16.65% {
        -webkit-transform: translateY(8px);
        transform: translateY(8px);
      }
      33.3% {
        -webkit-transform: translateY(-6px);
        transform: translateY(-6px);
      }
      49.95% {
        -webkit-transform: translateY(4px);
        transform: translateY(4px);
      }
      66.6% {
        -webkit-transform: translateY(-2px);
        transform: translateY(-2px);
      }
      83.25% {
        -webkit-transform: translateY(1px);
        transform: translateY(1px);
      }
      100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
      }
    }
    .bounce {
      animation-name: bounce-animation;
      animation-duration: 2s;
    }
    
    /*everything below here is just setting up the page, so dont worry about it */
    @media (min-width: 768px) {
      .navbar_main {
        text-align: center !important;
        float: none;
        display: inline-block;
        width: 91%;
      }
    }
    
    
    .nav_main {
      background-color: black !important;
      text-transform: uppercase;
    }
    .nav_main li {
      margin-left: 8em;
      margin-right: 8em;
      
    }
    .nav_main li a {
      transition: 0.5s color ease-in-out;
    }
    
    .page-title {
      opacity: 0.75 !important;
    }
    
    #myCarousel {
      width: 70%;
      margin: 0 auto;
    }

    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 35px; 
      background-color: #343a40;
      color: #DCBE38;
      text-align: center;
    }

    .footer-text {
      text-align: center;
      font-size: 20px;
      margin: 0 auto;
    }
  </style>
