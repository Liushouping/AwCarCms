<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 footer-column">
        <ul class="nav flex-column">
          <li class="nav-item mb-3">
            <span class="footer-title">關於我們</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('activity.indexActivity') }}">最新消息</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('car') }}">超跑車款</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('power') }}">性能車款</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('sop') }}">租車流程</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('notice') }}">租車資訊</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">聯絡我們</a>
          </li>

        </ul>
      </div>
      <div class="col-md-4 footer-column">
        <ul class="nav flex-column">
          <li class="nav-item mb-3">
            <span class="footer-title">殷煌國際超跑租賃</span>
          </li>
          <li class="nav-item">
            <span class="nav-link">台北市信義區光復南路495號4樓</span>
          </li>
          <li class="nav-item">
            <span class="nav-link"><a href="mailto:">信箱：service@alstonwilliams.com.tw</a></span>
          </li>
          <li class="nav-item">
            <span class="nav-link">營業時間：Mon - Sun: 10am - 9pm</span>
          </li>
          <li class="nav-item">
            <span class="nav-link">營業執照：北市運般汽字第013819號</span>
          </li>
        </ul>
      </div>
      <div class="col-md-4 footer-column">
        <ul class="nav flex-column">
          <li class="nav-item mb-3">
            <span class="footer-title">客戶服務</span>
          </li>
          <li class="nav-item">
            <span class="nav-link"><i class="fas fa-mobile-alt"></i> <a href="tel:{{ config('phone') }}">{{ config('phone') }}</a></span>
          </li>
          <li class="nav-item">
            <span class="nav-link"><i class="fas fa-phone-alt"></i><a href="tel:{{ config('tel') }}">{{ config('tel') }}</a></span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fab fa-line"></i>&nbsp;&nbsp;alstonwilliams</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fab fa-weixin"></i>&nbsp;&nbsp;Alstonwilliams2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fab fa-whatsapp"></i>&nbsp;&nbsp;+886 988 081 658</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="text-center"><i class="fas fa-ellipsis-h"></i></div>
    
    <div class="row text-center ">
      <div class="col-md-4 box">
        <ul class="list-inline quick-links">
          <li class="list-inline-item">
            <a href="{{ route('policy') }}">隱私權政策</a>
          </li>
        </ul>
      </div>
      <div class="col-md-4 box">
        <ul class="list-inline social-buttons">
          <li class="list-inline-item">
            <a href="https://www.instagram.com/AlstonWilliamsSportCar">
            <i class="fab fa-instagram"></i>
          </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.facebook.com/AlstonWilliamsSportCar">
            <i class="fab fa-facebook-f"></i>
          </a>
          </li>
          <li class="list-inline-item">
            <a href="http://line.me/ti/p/_3p57YrhGC">
            <i class="fab fa-line"></i>
          </a>
          <li class="list-inline-item">
            <a href="https://static.wixstatic.com/media/d1e09d_a62de0c551c145f7a16df233e0e49bf2~mv2.jpg">
            <i class="fab fa-weixin"></i>
          </a>
          </li>
        </ul>
      </div>
      <div class="col-md-4 box">
        <ul class="list-inline quick-links">
          <span class="copyright quick-links">&copy; 2021 Taiwan Alston Williams Sport Car</span>
        </ul>
      </div>
    </div>
  </div>
</footer>