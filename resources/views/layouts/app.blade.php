<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('/image/favicon.ico') }}"/>
  <title>@yield('title', '超跑出租 | SPORT 超跑車款 | 台北市') | AW殷煌國際超跑租賃</title>
  <meta name="description"  content="{{ config('description') }}">
  <meta property="og:title" content="{{ config('og-title') }}">
  <meta property="og:description" content="{{ config('og-description') }}">
  <meta property="og:image" content="{{ config('og-image') }}">
  <meta property="og:url" content="{{ config('og-url') }}">
  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">
  <div class="loader_bg">
    <div class="loader"></div>
  </div>
    @include('sweetalert::alert')
    <!-- 導覽 -->
    @include('layouts._header')
    <!-- 橫幅 -->
    @yield('banner')
    <!-- 頁首 -->
    @yield('bg-header')
    <!-- 內容 -->
      @yield('content')
    <!-- 頁尾 -->
    @include('layouts._footer')
    <!-- 產品 -->
    <a href="tel:0912345678" class="right-bottom-tel"><i class="fas fa-phone-square"></i></a>
    <a href="https://line.me/ti/p/_3p57YrhGC" class="right-bottom-line"><i class="fab fa-line"></i></a>
    <a href="javascript:;" class="right-bottom" id="back-to-top"><i class="fas fa-arrow-circle-up"></i></a>
  </div>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
  <link href="{{ asset('/css/aos.css')}}" rel="stylesheet">
  <script src="{{ asset('/js/aos.js')}}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script src="https://unpkg.com/tilt.js@1.1.21/dest/tilt.jquery.min.js"></script>

  @yield('script')
  <script>
  setTimeout(function(){
    $('.loader_bg').fadeToggle();
  },500);

  $(document).ready(function() {
    $('button').on('click', function() {
      if($(this).hasClass('nav-button')) {
        $('nav div').addClass('show');
      } else if($(this).hasClass('exit-menu')) {
        $('nav div').removeClass('show');
      } 
      else if($(this).hasClass('to-top')) {
        $('html,body').animate({scrollTop:0}, 'slow');
      }
    });
  });

  AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
  });

  $( document ).ready(function() {
 
  // Greensock animation
  $(".card").on('click', function() {
    if ( $(this).hasClass('flip') ) {
      $(this).removeClass('flip');
      TweenLite.to($(this).find('.card-front'), 1, {autoAlpha:1, rotationY:0});
      TweenLite.to($(this).find('.card-back'), 1, {autoAlpha:1, rotationY:180}, 0);
    } else {
      $(this).addClass('flip');
      TweenLite.to($(this).find('.card-front'), 1, {autoAlpha:1, rotationY:180});
      TweenLite.to($(this).find('.card-back'), 1, {autoAlpha:1, rotationY:0}, 0);
    }
  });
  
  $('.js-tilt').tilt();
  });

  var btn = $('#back-to-top');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 50) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });

  </script>
</body>

</html>