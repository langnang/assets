@extends($prefix . '.layout')

@section('content')
  <div class="container" data-md5={{ $_md5 ?? '' }}>

    <div class="row row-cols-1">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Novel</li>
          @empty($source)
          @else
            <li class="breadcrumb-item active" aria-current="page">{{ $source['title'] }}</li>
          @endempty
          <li class="breadcrumb-item active" aria-current="page">
            {{ $content['title'] ?? '' }}
          </li>
        </ol>
      </nav>
    </div>

    <div class="row jumbotron mb-3">
      <div class="col">
        <div class="row media">
          <div class="col-12 col-sm-4 col-md-3 align-self-center mr-3">
            <div
              style="padding-top: 150%; background-image:url({{ $content['ico'] ?? '' }});background-position:50% 50%;background-size:cover;">
            </div>
          </div>
          <div class="col-12 col-sm-8 col-md-9 media-body">
            <h2 class="mt-0">{{ $content['title'] ?? '' }}</h2>
            <p class="mb-0">{{ $content['description'] ?? '' }}</p>
            <hr class="my-4">
            <a class="btn btn-sm btn-secondary" href="" role="button">开始阅读</a>
            @empty($content['download_urls'])
            @else
              @foreach ($content['download_urls'] as $download_url)
                <a class="btn btn-sm btn-outline-secondary" href="{{ $download_url }}" role="button">TXT 下载</a>
              @endforeach
            @endempty
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mb-3">
      @foreach ($chapters ?? [] as $chapter)
        <a class="col border pt-2 pb-2 pl-3 text-decoration-none" title="{{ $chapter['title'] ?? '' }}"
          @empty($source) href="/{{ $prefix }}/chapter/{{ $content['cid'] }}" @else href="/{{ $prefix }}/chapter/0?source={{ $source['cid'] }}&url={{ $chapter['url'] ?? '' }}" @endempty>
          <div class="text-truncate">{{ $chapter['title'] ?? '' }}</div>
        </a>
      @endforeach
    </div>
  </div>
@endsection
