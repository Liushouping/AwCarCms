<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', '客家美食饗宴，消保宣導計畫') | 台灣客家美食交流協會</title>

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  @yield('style')
</head>

<body>
  <div id="app">
    <!-- 導覽 -->
    @include('layouts._header')
    <!-- 橫幅 -->
    @yield('banner')
    <!-- 內容 -->
      @yield('content')
    <!-- 頁尾 -->
    @include('layouts._footer')
  </div>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
  @yield('script')
</body>

</html>