@extends($prefix . '.layout')

@section('content')
  <div class="container" data-md5={{ $_md5 ?? '' }}>
    @include('_shared.breadcrumb', [
        'data' => [['url' => '/' . $prefix, 'title' => 'Awesome'], ['title' => $content['title'] ?? '']],
    ])
    <section class="markdown">
      {!! markdown_to_html($content['text']) !!}
    </section>
  </div>
@endsection
