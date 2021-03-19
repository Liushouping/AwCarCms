@extends('layouts.app')

@section('bg-header')
<div class="d-flex justify-content-center align-items-center mb-5"  style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);width:100%;height:250px;">
  <h2 class="display-4 display-xs-5 font-weight-bolder text-white">:: 租車流程</h2>
</div>
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col pl-5 pr-5 mb-5">
      @foreach($sops as $sop)
      <div class="d-flex justify-content-between">
      <h5>{{ $sop->title }}</h5>
      <p>更新時間：{{$sop->created_at}}</p>
      </div>
      <hr>
      {!! $sop->body !!}
      <hr>
      @endforeach
    </div>
  </div>
</div>
@stop
