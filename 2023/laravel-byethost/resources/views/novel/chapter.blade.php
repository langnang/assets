@extends($prefix . '.layout')

@section('content')
  <div class="container" data-md5={{ $_md5 ?? '' }}>
    <div class="row row-cols-1">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Novel</li>
          <li class="breadcrumb-item active" aria-current="page">{{ $source['title'] }}</li>
          <li class="breadcrumb-item active" aria-current="page">
            {{ $content['title'] ?? '' }}
          </li>
        </ol>
      </nav>
    </div>

    <div class="card row mb-3">
      <div class="card-header">
        <h2 class="mb-0">{{ $chapter['title'] ?? '' }}</h2>
      </div>
      <div class="card-body markdown">
        {!! markdown_to_html($chapter['text'] ?? '') !!}
      </div>

    </div>

    <div class="row row-cols-3 mb-3">
      <a class="col border pt-2 pb-2 pl-3  text-decoration-none">
        <div class="text-center">上一页</div>
      </a>
      <a class="col border pt-2 pb-2 pl-3 text-decoration-none">
        <div class="text-center">目录</div>
      </a>
      <a class="col border pt-2 pb-2 pl-3 text-decoration-none">
        <div class="text-center">下一页</div>
      </a>
    </div>
  </div>
@endsection
