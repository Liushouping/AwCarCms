@extends('layouts.app')
@section('title'," $activitys->title ")
@section('bg-header')
<div class="d-flex justify-content-center align-items-center mb-5"  style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);width:100%;height:250px;">
  <h2 class="display-4 display-xs-5 font-weight-bolder text-white">:: 最新優惠</h2>
</div>
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 p-4 ckeditor">
        <small><a href="{{ route('home') }}">:: 首頁</a> > 最新優惠</small>
        <hr>
        <img src="{{$activitys->image_url}}" class="card-img">
        <h2 class="font-weight-bolder mb-4 mt-4">{{ $activitys->title }}</h2>
        <small>發佈時間：{{ $activitys->created_at }}</small>
        <br>
        <small>活動時間：{{ $activitys->start_date }} ~ {{ $activitys->end_date }}</small>
        <br><hr>
        <br>
        {!! $activitys->body !!}
        <hr>
        <div class="page-func-blk d-flex justify-content-center align-items-center mt-5 mb-5">
          @if($previous)<a href="{{ url( 'activity/' . $previous ) }}" class="btn-page-direction">上一則</a>@else
          <div class="btn-page-direction">無</div>@endif
          <a href="{{route('activity.indexActivity')}}" class="btn-page-direction" target="_self">回列表</a> 
          @if($next)<a href="{{ url( 'activity/' . $next ) }}" class="btn-page-direction">下一則</a>@else
          <div class="btn-page-direction">無</div>@endif
        </div>
        <hr>
          
    </div>
    <div class="col-md-4 p-3 mb-5 border-left">
      <h2 class="font-weight-bolder mb-3">最新消息</h2>
      <table class="table table-hover">
      <tbody>
        @foreach ($dates as $date)
          <tr>
            <td style="font-size:16px">
            <a href="{{ route('activity.showactivity', $date->id) }}">
            <span class="badge badge-danger">{{$loop->index+1}}</span>
            &nbsp;&nbsp;{{ $date->title }}
            </a>
            </td>
          </tr>
        @endforeach
      </tbody>
      </table>
    </div>
  </div>
</div>
@stop
