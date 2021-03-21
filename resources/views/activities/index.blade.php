@extends('layouts.app')

@section('bg-header')
<div class="d-flex justify-content-center align-items-center mb-5"  style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);width:100%;height:250px;">
  <h2 class="display-4 display-xs-5 font-weight-bolder text-white">:: 最新優惠</h2>
</div>
@stop

@section('content')

<div class="container">
<small><a href="{{ route('home') }}">:: 首頁</a> > 最新優惠</small>
  <div class="row">
  
  @foreach ($activitys as $activity)
    <div class="col-lg-4 mb-5 mt-3">
      <a href="{{ route('activity.showactivity', $activity->id) }}">
      <div class="card text-dark">
        <img src="{{$activity->image_url}}" class="card-img" alt="...">
        <div class="card-img-overlay">
          <p class="card-text">@if($activity->status == 0)<span class="badge bg-success text-white">準備</span>@elseif($activity->status == 1)<span class="badge bg-danger text-white">進行</span>@else<span class="badge bg-dark text-white">結束</span>@endif</p>
        </div>

        <div class="card-body text-center">
          <h5 class="font-weight-bolder">{{ $activity->title }}</h5>
          <!-- <br>
          <small>活動時間：{{ $activity->start_date }} ~ {{ $activity->end_date }}</small> -->
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
