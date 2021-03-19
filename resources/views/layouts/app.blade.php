<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', '超跑出租 | SPORT 超跑車款 | 台北市') | AW殷煌國際超跑租賃</title>
  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">
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
  </div>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
  @yield('script')
  <script>
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
  </script>
</body>

</html>