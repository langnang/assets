{{-- 书单页 --}}
@extends('news.layout')

@section('content')
  <div class="container" data-md5={{ $_md5 ?? '' }}>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">News</li>
        <li class="breadcrumb-item active" aria-current="page">{{ $source->title }}</li>
        {{-- <li class="breadcrumb-item active" aria-current="page">{{ $discover_index }}</li> --}}
      </ol>
    </nav>

    <div class="row row-cols-1">
      @foreach ($contents ?? [] as $content)
        <div class="col mb-3">
          <a class="card text-body text-decoration-none"
            @empty($source) href="/{{ $prefix }}/content/{{ $content['cid'] }}" @else href="/{{ $prefix }}/content/0?source={{ $source['cid'] }}&url={{ $content['slug'] ?? '' }}" @endempty>
            @empty($content['ico'])
            @else
              <div class="card-img-top"
                style="padding-top: 150%; background-image:url({{ $content['ico'] ?? '' }});background-position:50% 50%;background-size:cover;">
              </div>
            @endempty
            <div class="card-header">
              {{ $content['title'] ?? '' }}
            </div>
            <div class="card-body">
              <p class="card-title" title="{{ $content['description'] ?? '' }}" data-role="video-title">
                {{ $content['description'] ?? '' }}
              </p>
            </div>
          </a>
        </div>
      @endforeach

    </div>
    <nav class="text-center" aria-label="...">
      <ul class="pagination">
        <li class="page-item disabled">
          <a class="page-link">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
@endsection
