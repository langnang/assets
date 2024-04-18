{{-- 发现列表页 --}}
@php
@endphp

@if ($index ?? '' !== '_logs')
  <div class="card mb-3">
    <div class="card-header">
      <div class="media">
        <img src="{{ $source['ico'] }}" class="align-self-center mr-2" width="20" height="20" alt="">
        <div class="media-body">
          <p class="mt-0 mb-0">
            {{ $source->title }}
            <a class="float-right bi bi-link-45deg" title="{{ $source->slug }}"
              href="{{ $source->text['source_url'] ?? $source['slug'] }}" target="_blank"></a>
          </p>
        </div>
      </div>
    </div>
    <div class="card-body" style="position: relative;max-height: 300px;overflow:hidden;">
      @php
        if (empty($source->text['discover']['urls'])) {
            $source->get_source_discover_urls();
        }
      @endphp

      @foreach ($source->text['discover']['urls'] ?? [] as $indexOfUrl => $url)
        <a href="/{{ $prefix ?? 'spider' }}/discover/{{ $source->cid }}/{{ $indexOfUrl }}"
          class="badge badge-pill badge-dark">{{ explode('::', $url)[0] }}</a>
      @endforeach
    </div>
  </div>
@endif
