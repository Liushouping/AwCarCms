<header>
  <div class="pl-5 pr-5 pt-1 pb-1 bg-dark text-white d-flex justify-content-between">
    租貸超跑 官方網站
    <div>結婚禮車 / 自駕服務 / 活動用車</div>
  </div>
  <nav>
    <h2><a href="{{route('home')}}" id="logo">
        <img src="https://static.wixstatic.com/media/d1e09d_1d7e8ef024f24502a04e6a423c5564d0~mv2.gif" style="width:100px">
    </a></h2>
    <button class="nav-button fa fa-bars"></button>
    <div>
      <ul>
        <button class="exit-menu fa fa-times"></button>
        <li><a href="{{ route('home') }}" class=" {{ request()->is('/') ? 'active' : '' }} ">首頁</a></li>
        <li><a href="{{ route('activity.indexActivity') }}" class=" {{ request()->is('activity') ? 'active' : '' }} ">最新消息</a></li>
        <li><a href="{{ route('car') }}" class=" {{ request()->is('cars') ? 'active' : '' }} ">超跑車款</a></li>
        <li><a href="{{ route('power') }}" class=" {{ request()->is('powers') ? 'active' : '' }} ">性能車款</a></li>
        <li><a href="{{ route('sop') }}" class=" {{ request()->is('sop') ? 'active' : '' }} ">租車流程</a></li>
        <li><a href="{{ route('notice') }}" class=" {{ request()->is('notice') ? 'active' : '' }} ">租車須知</a></li>
        <li><a href="/contact" class=" {{ request()->is('contact') ? 'active' : '' }} ">聯絡我們</a></li>
      </ul>
    </div>
  </nav>
</header>
