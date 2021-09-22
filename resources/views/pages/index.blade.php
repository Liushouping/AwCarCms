@extends('layouts.app')

@section('banner')
  @include('pages._banner')
@stop

@section('content')
<!-- 左邊影片右邊列表 -->
<section class="container">
  <div class="row">
    <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
        <div class="d-flex justify-content-between">
          <h3 class="font-weight-bolder mb-4">超跑出租</h3>
        </div>

        <a href="https://youtu.be/cASsC-MsJ1A" id="yt-preview">
          <div class="video-thumbnail mb-5">
            <img src="https://i2.wp.com/twgofun.com.tw/wp-content/uploads/2021/03/khc_tr1_001.png?w=1080&ssl=1" class="w-100 rounded-lg">
          </div>
        </a>
    </div>
    <!-- <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
      <div class="d-flex mb-4">
      <h3 class="font-weight-bolder">最新消息</h3>
      </div>
      @include('activities._activity')
    </div> -->
  </div>
</section>
<!-- 客戶權益 -->
<!-- <section id="services" class="services">
  <div class="container">
    <div class="section-title mb-4" data-aos="fade-right" data-aos-delay="100">
      <h3 class="font-weight-bolder">客戶權益</h3>
      <hr class="mt-2 mb-3 site_hr" width="120px">
      <p class="text-justify font-weight-light">免除您開車時之各種意外糾紛，可完全由保險公司處理，使您暢快享受駕駛樂趣！</p>
    </div>
    <div class="row">
        <div class="col-md-6 p-3">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
            <h4 class="font-weight-bolder title ml-0">手續快速簡便</h4>
            <hr>
            <p class="description font-weight-light ml-0">免押證件、免簽本票、超跑出租、租超跑、租跑車不用怕</p>
          </div>
        </div>
        <div class="col-md-6 mt-0 mt-md-0">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
            <h4 class="font-weight-bolder title ml-0 mt-3">租車皆含以下高額保險</h4>
            <hr>
            <p class="description font-weight-light ml-0">乙式車體險、竊盜險、第三人責任險、超額責任險、駕駛人傷害險、強制險
            </p>
          </div>
        </div>
    </div>
  </div>
</section> -->
<!-- 公司介紹 -->
<!-- <section style="background: linear-gradient(rgba(2, 2, 2, 0.7), rgba(0, 0, 0, 0.7)), url('https://bootstrapmade.com/demo/templates/Bethany/assets/img/cta-bg.jpg') fixed center center;background-size: cover;padding: 60px 0;">
  <div class="container">
    <div class="row">
      <div class="col-12 mt-5 mb-2" data-aos="zoom-in" data-aos-delay="100">
        <div class="text-center text-white">
          <h3 class="font-weight-bolder">殷煌國際超跑租賃</h3>
          <p class="text-justify font-weight-light">我們成立於2012年，合法登記經營，堅持以最安全的保障，最實惠的價格、最專業的服務，最完善的用車需求，嶄新風尚、率性優雅、駕馭光芒，歐洲最新車款、超級跑車，性能跑房車、休旅車，讓您體驗各式夢想車款的服務。。</p>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- 服務項目 -->
<!-- <section id="services" class="services">
  <div class="container">
    <div class="section-title mb-4" data-aos="fade-left" data-aos-delay="100">
      <h3 class="font-weight-bolder">服務項目</h3>
      <hr class="mt-2 mb-3 site_hr" width="120px">
      <p class="text-justify font-weight-light">採取預約制度，讓您不用出門就可以享受，送車到府的貼心服務！</p>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon"><i class="fas fa-mars-stroke"></i></div>
            <h4 class="font-weight-bolder title">結婚禮車</h4>
            <p class="description font-weight-light">婚紗攝影用車 | 婚禮用車</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-car"></i></div>
            <h4 class="font-weight-bolder title">自駕服務</h4>
            <p class="description font-weight-light">短、中、長期用車 | ​旅遊自駕用車</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-glass-cheers"></i></div>
            <h4 class="font-weight-bolder title">活動用車</h4>
            <p class="description font-weight-light">活動、商演用車 | 劇組拍攝用車</p>
          </div>
        </div>
    </div>
  </div>
</section> -->
<!-- 車款輪播 -->
<section class="container">
  <div class="row mb-3">
    <div class="col-md-12 mb-4" data-aos="fade-right" data-aos-delay="100">
      <div class="mb-4 text-center">
      <h3 class="font-weight-bolder">超跑車款</h3>
      <!-- <div class="pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div> -->
      <!-- <hr class="mt-2 mb-3 site_hr mx-auto" width="120px"> -->
      </div>
      @include('pages._product')
    </div>
  </div>
</section>
<!---->
<!-- <section class="container">
<div class="row">
<div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
      <form class="card p-5 mb-5" action="{{route('reservation.store')}}" method="POST" novalidate>
      {{ csrf_field() }}
      <div class="d-flex justify-content-between">
      <h3 class="font-weight-light">預約超跑</h3>
      <i class="fas fa-bookmark text-danger"></i>
      </div>
      <hr>
        <div class="form-row">
          <div class="col-md-6 mb-3">
          <i class="fas fa-bookmark text-danger"></i> <label>租車人姓名：</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="請輸入租車人姓名" required>
          </div>
          <div class="col-md-3 mb-3">
          <i class="fas fa-bookmark text-danger"></i> <label>先生/小姐：：</label>
          <select class="custom-select" name="gender" required>
            <option selected disabled value="">請選擇...</option>
            <option value="0">先生</option>
            <option value="1">小姐</option>
          </select>
          </div>
          <div class="col-md-3 mb-3">
          <i class="fas fa-bookmark text-danger"></i> <label>年齡：</label>
          <input class="form-control" type="number" value="18" name="age" id="example-number-input">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-3 mb-3">
          <i class="fas fa-bookmark text-danger"></i> <label>聯絡電話</label>
          <input type="phone" class="form-control" id="phone" name="phone" placeholder="請輸入聯絡電話" required>
          </div>
          <div class="col-md-6 mb-3">
          <label>電子信箱</label>
          <div class="input-group">
            <input type="email" class="form-control rounded-right" placeholder="請輸入電子信箱" name="email">
          </div>
          </div>
          <div class="col-md-3 mb-3">
          <label>LINE ID</label>
          <input type="text" class="form-control" id="line" name="line" placeholder="請輸入LINE ID">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
          <i class="fas fa-bookmark text-danger"></i> <label>租車日期</label>
          <input class="form-control" type="date" value="2021-08-19" name="date" id="example-date-input">
          </div>
          <div class="col-md-6 mb-3">
          <i class="fas fa-bookmark text-danger"></i> <label>租車時間</label>
          <input class="form-control" type="time" value="13:45" name="time" id="example-time-input">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
          <i class="fas fa-bookmark text-danger"></i> <label>選擇超跑車款</label>
          <select class="custom-select" name="car" required>
            <option value="0">無</option>
            @foreach($cars as $car)
            <option value="{{ $car->title }}">
                {{ $car->title }}
            </option>
            @endforeach
          </select>
          </div>
          <div class="col-md-6 mb-3">
          <i class="fas fa-bookmark text-danger"></i> <label>選擇性能車款</label>
          <select class="custom-select" name="power" required>
            <option value="0">無</option>
            @foreach($powers as $power)
            <option value="{{ $power->title}}">
                {{ $power->title }}
            </option>
            @endforeach
          </select>
          </div>
        </div>
        <div class="form-group">
          <label>備註</label>
          <textarea class="form-control" id="body" rows="3" name="body" placeholder="請輸入備註內容"></textarea>

        </div>

        <div class="form-group">
        <i class="fas fa-bookmark text-danger"></i> <label>驗證碼</label>
          <input id="captcha" class="form-control{{ $errors->has('captcha') ? ' is-invalid' : '' }}" name="captcha" required>

                <img class="thumbnail captcha mt-3 mb-2" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="點擊圖片重新獲取驗證碼">

                @if ($errors->has('captcha'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('captcha') }}</strong>
                  </span>
                @endif
        </div>

        <button type="submit" class="btn btn-danger w-100">送出</button>
      </form>
</div>
</div>
</section> -->

@stop
@section('script')
<script src="{{ asset('/js/YouTubePopUp.jquery.js') }}"></script>

<script>
  $("#yt-preview").YouTubePopUp();
</script>
@stop