@extends('_view.index')

@php
  // var_dump($contents->items());
  // var_dump($content);
  // foreach ($contents as $content) {
  // var_dump($content->cid);
  // }
@endphp
@section('content-left')
  <ul class="list-group list-group-sm">
    @foreach ($contents as $index => $item)
      @if ($index === '_logs')
        @continue
      @endif
      <a class="list-group-item" href="/{{ $prefix }}/content/{{ $item['cid'] }}">
        @include('_shared.ico', ['data' => $item['ico']])
        {{ $item['title'] }}
      </a>
    @endforeach
  </ul>
  <a class="col-md-12" href="/spider/run?slug=siteinfo">
    SiteInfo
  </a>
@endsection
