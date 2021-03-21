@extends('layouts.app')

@section('bg-header')
<div class="d-flex justify-content-center align-items-center mb-5"  style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);width:100%;height:250px;">
  <h2 class="display-4 display-xs-5 font-weight-bolder text-white">:: 超跑車款</h2>
</div>
@stop

@section('content')
<div class="container">
<small><a href="{{ route('home') }}">:: 首頁</a> > 超跑車款</small>
<div class="row row-cols-1 row-cols-md-2 mt-3">

@foreach( $cars as $car )
  <div class="col-lg-4 mb-4">
    <div class="card icon-box">
      <img src="{{$car->image_url}}" class="card-img-top" alt="...">
      <div class="card-body p-3">
        <h5 class="card-title">{{$car->title}}</h5>
        <p class="card-text">
        車型：{{$car->model}}<br>
        ​引擎：{{$car->engine}}<br>
        ​排氣量：{{$car->​exhaust}}<br>
        ​最大馬力：{{$car->max_horsepower}}<br>
        ​最大扭力：{{$car->​max_torque}}<br>
        租金：{{$car->price}}
        </p>
<!-- <button type="button" class="btn btn-primary btn-lg btn-block">聯絡電話  <i class="fas fa-phone-alt"></i></button>
<button type="button" class="btn btn-danger btn-lg btn-block">登記詢問  <i class="fas fa-angle-double-right"></i></button> -->
      </div>
    </div>
  </div>
@endforeach


</div>
</div>
@stop
