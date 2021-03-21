@extends('layouts.app')

@section('bg-header')
<div class="d-flex justify-content-center align-items-center mb-5"  style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);width:100%;height:250px;">
  <h2 class="display-4 display-xs-5 font-weight-bolder text-white">:: 租車須知</h2>
</div>
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
    <div class="container">
      <div class="row">
        <div class="col pl-5 pr-5 mb-5">
        <small><a href="{{ route('home') }}">:: 首頁</a> > 租車流程</small>
          @foreach($notices as $notice)
          <div class="d-flex justify-content-between mt-3">
          <h5>{{ $notice->title }}</h5>
          <p>更新時間：{{$notice->created_at}}</p>
          </div>
          <hr>
          {!! $notice->body !!}
          <hr>
          @endforeach
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@stop
