@php
  $_layout = $_layout ?? [];
  $_layout['aside'] = [
      'data' => [$root_content],
      'props' => ['key' => 'cid', 'label' => 'title'],
      'href' => "/$prefix/content/{{ cid }}",
      'expanded' => $root_content['bubble_keys'],
  ];
@endphp

@extends($prefix . '.layout')

@section('content')
  <div class="container">
    <h1>{{ $content['title'] }}</h1>
    <section class="markdown">
      {!! markdown_to_html($content['text']) !!}
    </section>
  </div>
@endsection
