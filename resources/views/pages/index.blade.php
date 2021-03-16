@extends('layouts.app')

@section('banner')
  @include('pages._banner')
@stop

@section('content')
  <div class="container">
  <!-- 列表 -->
  <div class="row mb-3">
    <div class="col-md-6 mb-5">
      <div class="d-flex justify-content-between mb-4">
      <h1 class="display-5"><i class="fas fa-dungeon"></i> 最新消息</h1>
      </div>
      @include('infos._info')
    </div>
    <div class="col-md-6">
      <div class="d-flex justify-content-between mb-4">
        <h1 class="display-5"><i class="fas fa-bookmark"></i> 精彩回顧</h1>
        </div>
        <!-- 16:9 aspect ratio -->
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xgsvKRqavvo"></iframe>
        </div>
    </div>
  </div>
  <!-- 立刻加入我們 -->
  <div section class="mt-5">
    <div class="p-5 rounded" style="background-color: #2E3D80;">
      <div class="row justify-content-around">
        <div class="col-md-8">
          <h1 class="display-5 text-light">準備好加入了嗎？</h1>
          <p class="lead text-light">推廣客家美食文化、發揚傳承客家廚藝，展現客家廚師團結精神。</p>
        </div>
        <div class="col-md-2">
          <a class="btn btn-lg btn-light mt-md-5 mt-xs-3" href="/docs/5.0/components/navbar/" role="button">立刻加入 &raquo;</a>
        </div>
      </div>
    </div>
  </div>
  <!-- 合作夥伴 -->
  <!-- <div class="mx-auto text-center mt-5">
  <h1 class="display-5">合作夥伴</h1>
  </div>
  <div class="swiper-container" id="swiper2">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://balloontaiwan.taitung.gov.tw/Content/images/index/sponsor-04.png" class="w-100">

      </div>
      <div class="swiper-slide">
        <img src="https://balloontaiwan.taitung.gov.tw/Content/images/index/sponsor-12.png" class="w-100">

      </div>
      <div class="swiper-slide">
        <img src="https://balloontaiwan.taitung.gov.tw/content/images/index/helper-02.png" class="w-100">

      </div>
      <div class="swiper-slide">
        <img src="https://balloontaiwan.taitung.gov.tw/content/images/index/helper-02.png" class="w-100">

      </div>
      <div class="swiper-slide">
        <img src="https://balloontaiwan.taitung.gov.tw/content/images/index/helper-02.png" class="w-100">

      </div>
      <div class="swiper-slide">
        <img src="https://balloontaiwan.taitung.gov.tw/content/images/index/helper-02.png" class="w-100">

      </div>
      <div class="swiper-slide">
        <img src="https://balloontaiwan.taitung.gov.tw/content/images/index/helper-02.png" class="w-100">

      </div>
      <div class="swiper-slide">
        <img src="https://balloontaiwan.taitung.gov.tw/content/images/index/helper-02.png" class="w-100">

      </div>
      <div class="swiper-slide">
        <img src="https://balloontaiwan.taitung.gov.tw/content/images/index/helper-02.png" class="w-100">

      </div>
      <div class="swiper-slide">
        <img src="https://balloontaiwan.taitung.gov.tw/content/images/index/helper-02.png" class="w-100">

      </div>

    </div>
    <div class="swiper-button-next sn2"></div>
    <div class="swiper-button-prev sp2"></div>
  </div> -->
  <!--  -->
  </div>
@stop
