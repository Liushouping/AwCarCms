@extends('layouts.app')
@section('title', '最新活動')

@section('content')
<div class="offset-md-2 col-md-8">
  <h2 class="mb-4 text-center">最新消息</h2>
  <div class="list-group list-group-flush">
{{ $infos->title }}
<br>
{!! $infos->body !!}
  </div>

  <div class="mt-3">
    
  </div>
</div>
@stop