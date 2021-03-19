@extends('layouts.app')

@section('banner')
  @include('pages._banner')
@stop

@section('content')
<!-- 列表 -->
<section class="container">
  <div class="row mb-3">
    <div class="col-md-6 mb-4">
      <div class="d-flex justify-content-between mb-4">
      <h3 class="font-weight-bolder">最新優惠</h3>
      <!-- <h3 class="text-primary font-weight-bolder pull-right"> 更多優惠</h3> -->
      </div>
      @include('activities._activity')
    </div>
    <div class="col-md-6">
        <div class="d-flex justify-content-between">
          <h3 class="font-weight-bolder mb-4">超跑出租</h3>
        </div>

        <a href="https://youtu.be/cASsC-MsJ1A" id="yt-preview">
          <div class="video-thumbnail">
            <img src="https://i2.wp.com/twgofun.com.tw/wp-content/uploads/2021/03/khc_tr1_001.png?w=1080&ssl=1" class="w-100">
          </div>
        </a>
    </div>
  </div>
</section>
<!--  -->
<section id="services" class="services">
  <div class="container">
    <div class="section-title mb-4">
      <h3 class="font-weight-bolder">客戶權益</h3>
      <p class="text-justify font-weight-light">免除您開車時之各種意外糾紛，可完全由保險公司處理，使您暢快享受駕駛樂趣！</p>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="icon-box" style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);color:#fff">
          <!-- <div class="icon"><i class="fas fa-car"></i></div> -->
            <h4 class="font-weight-bolder title">手續快速簡便</h4>
            <p class="description font-weight-light">免押證件、免簽本票、超跑出租、租超跑、租跑車不用怕</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="icon-box" style="background-image: linear-gradient(-225deg, #3D4E81 0%, #5753C9 48%, #6E7FF3 100%);color:#fff">
            <!-- <div class="icon"><i class="fas fa-car"></i></div> -->
            <h4 class="font-weight-bolder title">租車皆含以下高額保險</h4>
            <p class="description font-weight-light">乙式車體險、竊盜險、第三人責任險、超額責任險、駕駛人傷害險、強制險
            </p>
          </div>
        </div>
    </div>
  </div>
</section>
<!-- 過場 -->
<section style="background: linear-gradient(rgba(2, 2, 2, 0.7), rgba(0, 0, 0, 0.7)), url('https://bootstrapmade.com/demo/templates/Bethany/assets/img/cta-bg.jpg') fixed center center;background-size: cover;padding: 60px 0;">

  <div class="container">
    <div class="row">
      <div class="col-12 mt-5 mb-2">
        <div class="text-center text-white">
          <h3 class="font-weight-bolder">殷煌國際超跑租賃</h3>
          <p class="text-justify font-weight-light">我們成立於2012年，合法登記經營，堅持以最安全的保障，最實惠的價格、最專業的服務，最完善的用車需求，嶄新風尚、率性優雅、駕馭光芒，歐洲最新車款、超級跑車，性能跑房車、休旅車，讓您體驗各式夢想車款的服務。。</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 服務項目 -->
<section id="services" class="services">
  <div class="container">
    <div class="section-title mb-4">
      <h3 class="font-weight-bolder">服務項目</h3>
      <p class="text-justify font-weight-light">採取預約制度，讓您不用出門就可以享受，送車到府的貼心服務！</p>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="icon-box">
          <div class="icon"><i class="fas fa-car"></i></div>
            <h4 class="font-weight-bolder title">結婚禮車</h4>
            <p class="description font-weight-light">婚紗攝影用車 | 婚禮用車</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-car"></i></div>
            <h4 class="font-weight-bolder title">自駕服務</h4>
            <p class="description font-weight-light">短、中、長期用車 | ​旅遊自駕用車</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-car"></i></div>
            <h4 class="font-weight-bolder title">活動用車</h4>
            <p class="description font-weight-light">活動、商演用車 | 劇組拍攝用車</p>
          </div>
        </div>
    </div>
  </div>
</section>
@stop

@section('script')
<script src="https://www.jqueryscript.net/demo/Responsive-Youtube-Vimeo-Video-Lightbox-Plugin-YouTubePopUp/YouTubePopUp.jquery.js"></script>

<script>
  $("#yt-preview").YouTubePopUp();
</script>
@stop