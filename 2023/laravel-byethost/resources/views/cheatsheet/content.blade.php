@extends('_view.index')

@section('content-body')
  <style>
    pre {
      margin-bottom: 0;
    }
  </style>
  <div class="container">
    <div class="jumbotron mb-3">
      <h1 class="display-4">{{ $content['title'] }}</h1>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 grid">
      @foreach ($content['text_items'] as $item)
        <div class="col pt-2 pb-2 grid-item">
          <div class="card">
            <h2 class="card-header"> {{ $item['title'] }}</h2>
            <div class="card-body markdown">
              {!! markdown_to_html($item['text']) !!}
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection

@section('masonry-scripts')
  {{-- <script src="/public/vendor/highlight.js/js/php.min.js"></script> --}}
@endsection
