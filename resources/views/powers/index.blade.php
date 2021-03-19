@extends('layouts.app')

@section('bg-header')
<div class="d-flex justify-content-center align-items-center mb-5"  style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);width:100%;height:250px;">
  <h2 class="display-4 display-xs-5 font-weight-bolder text-white">:: 性能車款</h2>
</div>
@stop

@section('content')
<div class="container">
<div class="row row-cols-1 row-cols-md-2">

@foreach( $powers as $power )
  <div class="col-lg-4 mb-4">
    <div class="card p-3">
      <img src="{{$power->image_url}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$power->title}}</h5>
        <p class="card-text">
        車型：{{$power->model}}<br>
        ​引擎：{{$power->engine}}<br>
        ​排氣量：{{$power->​exhaust}}<br>
        ​最大馬力：{{$power->max_horsepower}}<br>
        ​最大扭力：{{$power->​max_torque}}<br>
        租金：{{$power->price}}
        </p>
      </div>
    </div>
  </div>
@endforeach


</div>
</div>
@stop
