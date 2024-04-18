{{-- 发现列表页 --}}
@php
  
@endphp
<ul class="nav nav-tabs nav-justified mb-3 text-center" id="sourceTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="spider-tab" data-toggle="tab" data-target="#spider" role="tab" aria-controls="spider"
      aria-selected="true">Spider</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link disabled" id="openapi-tab" data-toggle="tab" data-target="#openapi" role="tab"
      aria-controls="openapi" aria-selected="false">OpenAPI</a>
  </li>

</ul>
<div class="tab-content" id="sourceContent">
  <div class="tab-pane fade show active" id="spider" role="tabpanel" aria-labelledby="spider-tab">
    <form class="mb-3" action="/{{ $prefix }}/sourceSearch" data-role="search">
      <div class="input-group">
        <input type="text" class="form-control" name="search" aria-label="...">
        <span class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit">Search!</button>
        </span>
      </div>
    </form>

    @foreach ($sources ?? [] as $indexOfSource => $source)
      @if ($indexOfSource !== '_logs')
        <div class="card card-sm mb-3">
          <div class="card-header">
            <div class="media">
              <img src="{{ $source['ico'] }}" class="align-self-center mr-2" width="20" height="20"
                alt="">
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
    @endforeach
  </div>
  <div class="tab-pane fade " id="openapi" role="tabpanel" aria-labelledby="openapi-tab">...</div>
</div>
