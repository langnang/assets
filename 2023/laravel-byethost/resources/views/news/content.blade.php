@extends('news.layout')

@section('content')
  <style>
    svg {
      max-width: 100%;
    }

    img {
      max-width: 100%
    }
  </style>
  <div class="container" data-md5={{ $_md5 ?? '' }}>
    <div class="card mb-3">
      <div class="card-header">{{ $content['title'] ?? '' }}</div>
      <div class="card-body markdown">
        {!! markdown_to_html($content['text'] ?? '') !!}
      </div>
      <div class="card-footer"></div>
    </div>
    @foreach ($comments_text ?? [] as $comment)
      <div class="card mb-3">
        <div class="card-body markdown">
          {!! markdown_to_html($comment ?? '') !!}
        </div>
        <div class="card-footer"></div>
      </div>
    @endforeach

  </div>
@endsection
