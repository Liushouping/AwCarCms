<header>
  <nav>
    <h2><a href="{{route('home')}}" id="logo">
        <img src="https://static.wixstatic.com/media/d1e09d_1d7e8ef024f24502a04e6a423c5564d0~mv2.gif" style="width:100px">
    </a></h2>
    <button class="nav-button fa fa-bars"></button>
    <div>
      <ul>
        <button class="exit-menu fa fa-times"></button>
        <li><a href="{{ route('home') }}" class="active">首頁</a></li>
        <li><a href="{{ route('activity.indexActivity') }}">最新優惠</a></li>
        <li><a href="{{ route('car') }}">超跑車款</a></li>
        <li><a href="{{ route('power') }}">性能車款</a></li>
        <li><a href="{{ route('sop') }}">租車流程</a></li>
        <li><a href="{{ route('notice') }}">租車須知</a></li>
        <li><a href="/contact">聯絡我們</a></li>
      </ul>
    </div>
  </nav>
</header>
