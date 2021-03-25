@extends('layouts.app')
@section('title','性能車款')
@section('bg-header')
<div class="d-flex justify-content-center align-items-center mb-5"  style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);width:100%;height:250px;">
  <h2 class="display-4 display-xs-5 font-weight-bolder text-white">:: 性能車款</h2>
</div>
@stop

@section('content')
<div class="container">
<div class="d-flex justify-content-between p-0">
<small><a href="{{ route('home') }}">:: 首頁</a> > 性能車款</small>
</div>
<div class="row row-cols-1 row-cols-md-2 mt-3">

@foreach( $powers as $power )
  <div class="col-lg-4 mb-4 tt">
    <div class="card icon-box" data-aos="zoom-in" data-aos-delay="100">
      <div class="position-relative">
      <img src="{{$power->image_url}}" class="card-img-top">
      <span class="position-absolute bg-dark text-white font-weight-bolder" style="top:0;left:0;padding:5px 20px">NT {{$power->price}}</span>
      </div>
      <div class="card-body p-3">
        車款類型
        <h5 class="card-title font-weight-bolder">{{$power->title}}</h5>
        <div class="d-flex justify-content-between p-0">
        <p class="card-text text-danger font-weight-bolder">{{$power->price}}<small class="text-dark font-weight-light">（租金）</small></p>
        <i class="fas fa-key"></i>
        </div>
      </div>
      <div class="card-footer border-top bg-white">
        <img src="{{asset('/image/fuel.svg')}}" width="25px">&nbsp; 車型：{{$power->model}}<br><br>
        <img src="{{asset('/image/cogwheel.svg')}}" width="25px">&nbsp; 引擎：{{$power->engine}}<br><br>
        <img src="{{asset('/image/exhaust-pipe.svg')}}" width="25px">&nbsp; 排氣量：{{$power->​exhaust}}<br><br>
        <img src="{{asset('/image/energy.svg')}}" width="25px">&nbsp; 最大馬力：{{$power->max_horsepower}}<br><br>
        <img src="{{asset('/image/chain.svg')}}" width="25px">&nbsp; 最大扭力：{{$power->​max_torque}}<br><br>
      </div>
    </div>
  </div>
@endforeach


</div>
</div>
@stop