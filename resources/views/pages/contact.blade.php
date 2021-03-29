@extends('layouts.app')
@section('title','聯絡我們')
@section('bg-header')
<div class="d-flex justify-content-center align-items-center mb-5"  style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);width:100%;height:250px;">
  <h2 class="display-4 display-xs-5 font-weight-bolder text-white">:: 聯絡我們</h2>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@stop

@section('content')
<div class="container">
<small><a href="{{ route('home') }}">:: 首頁</a> > 聯絡我們</small>
  <div class="row mt-3">
    <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
      <form class="needs-validation card icon-box p-5 mb-5" action="{{route('contact.store')}}" method="POST" novalidate>
      {{ csrf_field() }}
      <h3 class="font-weight-light">聯絡我們</h3>
      <hr>
        <div class="form-group">
          <label>姓名</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="請輸入姓名" required>
          <div class="valid-feedback">
          您做得非常好！
          </div>
        </div>
        <div class="form-group">
          <label>電子信箱</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="請輸入信箱" required>
          <div class="valid-feedback">
          您做得非常好！
          </div>
        </div>
        <div class="form-group">
          <label>手機號碼</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="請輸入號碼" required>
          <div class="valid-feedback">
          您做得非常好！
          </div>
        </div>
        <div class="form-group">
          <label>標題</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="請輸入標題" required>
          <div class="valid-feedback">
          您做得非常好！
          </div>
        </div>
        <div class="form-group">
          <label>內容</label>
          <textarea class="form-control" id="body" rows="3" name="body" placeholder="請輸入內容" required></textarea>
          <div class="valid-feedback">
          您做得非常好！
          </div>
        </div>

        <div class="form-group">
          <label>驗證碼</label>
          <input id="captcha" class="form-control{{ $errors->has('captcha') ? ' is-invalid' : '' }}" name="captcha" required>

                <img class="thumbnail captcha mt-3 mb-2" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">

                @if ($errors->has('captcha'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('captcha') }}</strong>
                  </span>
                @endif
        </div>

        <button type="submit" class="btn btn-danger w-100">送出</button>
      </form>
    </div>
    <div class="col-md-6 mb-5" data-aos="fade-right" data-aos-delay="100">
      <div class="card icon-box p-5">
        <h3 class="font-weight-light">殷煌國際超跑租賃</h3>
        <hr>
        <ul>
          <li>公司地址：台北市信義區光復南路495號4樓</li>
          <li>公司信箱：service@alstonwilliams.com.tw</li>
          <li>營業時間：Mon - Sun: 10am - 9pm</li>
          <li>營業執照：北市運般汽字第013819號</li>
          <li>手機號碼：+886-988-081-658</li>
          <li>電話號碼： 02-7716-3255</li>
        </ul>
        <hr>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.0474554319244!2d121.55548971457132!3d25.03246354450793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442ab1e106d0127%3A0xacf40caabb40f87c!2zQVfmrrfnhYzlnIvpmpvotoXot5Hnp5_os4M!5e0!3m2!1szh-TW!2stw!4v1616162757124!5m2!1szh-TW!2stw" width="600" height="300" style="border:0;max-width:100%" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</div>
@stop


@section('script')
<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
@stop
