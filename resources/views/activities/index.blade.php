@extends('layouts.app')
@section('title','最新消息')
@section('bg-header')
<div class="d-flex justify-content-center align-items-center mb-5"  style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);width:100%;height:250px;">
  <h2 class="display-4 display-xs-5 font-weight-bolder text-white">:: 最新消息</h2>
</div>
@stop

@section('content')

<div class="container">
<small><a href="{{ route('home') }}">:: 首頁</a> > 最新消息</small>
  <div class="row">
  <div class="col-lg-12 mt-3">
  <form action="search" method="get">
    <div class="input-group">
      <input type="text" placeholder="請輸入關鍵字" class="form-control" name="query" required/>
      <div class="input-group-append">
        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
      </div>
    </div>
  </form>
  </div>

  @foreach ($activitys as $activity)
    <div class="col-lg-4 mb-5 mt-3">
      <a href="{{ route('activity.showactivity', $activity->id) }}">
      <div class="card text-dark card-hover">
        <img src="{{$activity->image_url}}" class="card-img" alt="...">

        <div class="card-body">
          <small><i class="far fa-clock"></i> 活動時間：{{ $activity->start_date }} - {{ $activity->end_date }}</small>
          <p class="card-text">@if($activity->status == 0)<span class="badge bg-success text-white">準備</span>@elseif($activity->status == 1)<span class="badge bg-danger text-white">進行</span>@else<span class="badge bg-dark text-white">結束</span>@endif</p>
          <br>
          <h5 class="font-weight-bolder">{{ $activity->title }}</h5>
        </div>

      </div>
      </a>  
    </div>
  @endforeach
  <div class="container">
    <div class="row">
      <div class="col d-flex justify-content-center mb-5">
      {{ $activitys->render() }}
      </div>
    </div>
  </div>

  </div>
</div>
@stop
