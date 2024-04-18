@extends($prefix . '.layout')


@section('content')
  <div class="container">
    <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-3">
          <div
            style="padding-top: 150%; background-image:url({{ $content['ico'] ?? '' }});background-position:50% 50%;background-size:cover;">
          </div>
        </div>
        <div class="col-md-9">
          <div class="card-body">
            <h5 class="card-title">{{ $content['title'] }}</h5>
            <p class="card-text">{{ $content['description'] }}</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    @include('video._shared.episode-playlist', ['episodes' => $content['episodes'] ?? []])
    @empty($play_urls)
    @else
      <div class="card mb-3">
        <div class="card-header">
          播放地址
        </div>
        <ul class="list-group list-group-flush list-group-sm">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
      </div>
    @endempty
    @empty($download_urls)
    @else
      <div class="card mb-3">
        <div class="card-header">
          下载地址
        </div>
        <ul class="list-group list-group-flush list-group-sm">
          @foreach ($download_urls as $url)
            <a href="{{ $url }}" class="list-group-item list-group-item-action text-truncate">
              {{ $url }}
            </a>
          @endforeach
        </ul>
      </div>
    @endempty
  </div>
@endsection
