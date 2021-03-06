<html lang="en">
  <head>
    <title>Dream Maker &mdash; making dreams meets realities</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <!-- Icons -->
  <link href="{{asset('frontend/css/nucleo.css ')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/font-awesome.min.css ')}}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{asset('frontend/css/argon.css?v=1.1.0 ')}}" rel="stylesheet">
  <link type="text/css" href="{{asset('frontend/css/message.css')}}" rel="stylesheet">
    <style>
      .custom-icon-wrap .custom-icon-inner .icon {
        display: inline-block;
        position: absolute;
        top: 100%;
        left: 100%;
    </style>
  </head>

  <div class="site-wrap">

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  @include('layouts.frontend.partial.topbar')
        
        @yield('content')

  @include('layouts.frontend.partial.footer')



  <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
  <script src="{{asset('frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('frontend/js/aos.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.sticky.js')}}"></script>

  
  <script src="{{asset('frontend/js/main.js')}}"></script>

  <!-- Argon JS -->
  <script src="{{asset('frontend/js/argon.js?v=1.1.0 ')}}"></script>

  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('frontend/js/message.js')}}"></script>
    
  </body>
</html>