@extends('_layout.auto')
@php
  $content->setSpider();
@endphp
@section('content')
  @if (disable_functions('set_time_limit'))
  @else
    @include('spider.components.set_time_limit')
  @endif
@endsection
