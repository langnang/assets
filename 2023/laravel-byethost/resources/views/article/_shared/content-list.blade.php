@php
  $data = $data ?? [];
  Arr::forget($data, '_logs');
@endphp
<div class="list-group list-group-sm mb-3">
  @foreach ($data as $item)
    <div class="card card-sm mb-3">
      <a href="/{{ $prefix }}/content/{{ $item['cid'] }}"
        class="card-header text-decoration-none text-truncate">{{ $item['title'] }}</a>
      <div class="card-body markdown" style="">
        {!! markdown_to_html(Str::before($item['text'], '<!--more-->')) !!}
      </div>
      <div class="card-footer small">
        {{ $item['updated_at'] ?? '0000-00-00 00:00:00' }}
        <a href="/article/content/{{ $item['cid'] }}" class="float-right sr-only">
          more
          <i class="bi bi-three-dots"></i>
        </a>
      </div>
    </div>
  @endforeach
</div>
