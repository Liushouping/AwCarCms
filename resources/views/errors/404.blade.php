@extends('layouts.app')

@section('bg-header')
<div class="d-flex justify-content-center align-items-center mb-5"  style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);width:100%;height:250px;">
  <h2 class="display-4 display-xs-5 font-weight-bolder text-white">:: 錯誤訊息</h2>
</div>
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5 mb-5 text-center">
      <h1 class="font-weight-bolder display-1">404</h1>
      <br>
      <h1 class="font-weight-light display-5">Not Found</h1>
    </div>
  </div>
</div>
@stop
