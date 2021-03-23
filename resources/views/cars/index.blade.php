@extends('layouts.app')
@section('title','超跑車款')
@section('bg-header')
<div class="d-flex justify-content-center align-items-center mb-5"  style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);width:100%;height:250px;">
  <h2 class="display-4 display-xs-5 font-weight-bolder text-white">:: 超跑車款</h2>
</div>
@stop

@section('content')
<div class="container">
<div class="d-flex justify-content-between p-0">
<small><a href="{{ route('home') }}">:: 首頁</a> > 超跑車款</small>
</div>
<div class="row row-cols-1 row-cols-md-2 mt-3">

@foreach( $cars as $car )
  <div class="col-lg-4 mb-4 tt">
    <div class="card icon-box" data-aos="zoom-in" data-aos-delay="100">
      <div class="position-relative">
      <img src="{{$car->image_url}}" class="card-img-top">
      <span class="position-absolute text-white font-weight-bolder" style="top:0;left:0;background:red;padding:5px 20px">NT {{$car->price}}</span>
      </div>
      <div class="card-body p-3">
        車款類型
        <h5 class="card-title font-weight-bolder">{{$car->title}}</h5>
        <div class="d-flex justify-content-between p-0">
        <p class="card-text text-danger font-weight-bolder">{{$car->price}}<small class="text-dark font-weight-light">（租金）</small></p>
        <a href="" class="btn btn-warning p-2 ">立即聯絡</a>
        </div>
      </div>
      <div class="card-footer border-top bg-white">
        <img src="{{asset('/image/fuel.svg')}}" width="25px">&nbsp; 車型：{{$car->model}}<br><br>
        <img src="{{asset('/image/cogwheel.svg')}}" width="25px">&nbsp; 引擎：{{$car->engine}}<br><br>
        <img src="{{asset('/image/exhaust-pipe.svg')}}" width="25px">&nbsp; 排氣量：{{$car->​exhaust}}<br><br>
        <img src="{{asset('/image/energy.svg')}}" width="25px">&nbsp; 最大馬力：{{$car->max_horsepower}}<br><br>
        <img src="{{asset('/image/chain.svg')}}" width="25px">&nbsp; 最大扭力：{{$car->​max_torque}}<br><br>
      </div>
    </div>
  </div>
@endforeach


</div>
</div>
@stop
