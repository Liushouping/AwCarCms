@extends('layouts.app')
@section('title', '首頁' )

@section('banner')
  @include('pages._banner')
@stop
@section('content')
  <div class="container">
    @include('shared._messages')
    <h1>这里是首页{{config('title')}}</h1>
  
  </div>
@stop