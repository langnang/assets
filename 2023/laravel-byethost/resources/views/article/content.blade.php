@extends('_view.index')

@section('content-left')
  <div class="jumbotron mb-3">
    <h1 class="display-4">{{ $content['title'] }}</h1>
  </div>
  <section class="markdown">
    {!! markdown_to_html($content['text']) !!}
  </section>
@endsection
