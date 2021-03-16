@extends('layouts.app')

@section('bg-header')
<div class="d-flex justify-content-center align-items-center mb-5"  style="background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);width:100%;height:300px;">
  <h2 class="display-4 display-xs-5 font-weight-bolder text-white">:: 最新消息</h2>
</div>
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 border-right p-5">
        <small><a href="{{ route('home') }}">:: 首頁</a> > <a href="" class="text-secondary">最新消息</a></small>

        <h2 class="mb-4 mt-5">{{ $infos->title }}</h2>
        <small>發佈日期：{{ $infos->created_at }}</small>
          <div class="list-group list-group-flush">
          
          <br>
          {!! $infos->body !!}
          
          </div>

          <div class="page-func-blk d-flex justify-content-center align-items-center mt-5">
            @if($previous)<a href="{{ url( 'info/' . $previous ) }}" class="btn-page-direction">上一則</a>@else
            <div class="btn-page-direction">無</div>@endif
            <a href="{{route('home')}}" class="btn-page-direction" target="_self">回列表</a> 
            @if($next)<a href="{{ url( 'info/' . $next ) }}" class="btn-page-direction">下一則</a>@endif
          </div>
          
    </div>
    <div class="col-md-4 p-5">
      <h2 class="mb-4 mt-5"><i class="fas fa-anchor"></i> 近期消息</h2>
      <table class="table table-hover">
      <tbody>
        @foreach ($dates as $date)
          <tr>
            <td style="font-size:16px">
            <a href="{{ route('info.showInfo', $date->id) }}">
            <span>{{$loop->index+1}} - </span>
            {{ $date->title }}
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
