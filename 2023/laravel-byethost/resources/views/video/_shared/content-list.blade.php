@php
  $data = $data ?? [];
  Arr::forget($data, '_logs');
@endphp
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
  @foreach ($data as $item)
    <div class="col mb-3">
      <a class="card card-sm text-body text-decoration-none"
        @empty($source) href="/{{ $prefix }}/content/{{ $item['cid'] }}" @else href="/{{ $prefix }}/content/0?source={{ $source['cid'] }}&url={{ $item['slug'] ?? '' }}" @endempty>
        <div class="row no-gutters">
          <div class="col-2 col-sm-4 col-md-12">
            <div class="card-img-top"
              style="padding-top: 150%; background-image:url({{ $item['ico'] ?? '' }});background-position:50% 50%;background-size:cover;">
            </div>
          </div>
          <div class="col-10 col-sm-8 col-md-12">
            <div class="card-body">
              <p class="card-title text-truncate" title="{{ $item['title'] ?? '' }}" data-role="video-title">
                {{ $item['title'] ?? '' }}
              </p>
            </div>
          </div>
        </div>
      </a>
    </div>
  @endforeach
</div>
