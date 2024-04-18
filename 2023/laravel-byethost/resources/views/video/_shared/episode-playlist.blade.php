@empty($episodes)
@else
  <div class="nav nav-tabs nav-fill mb-3" id="nav-tab" role="tablist">
    @foreach ($episodes as $index => $episode)
      <a class="nav-link @if ($index == 0) active @endif" id="nav-{{ $index }}-tab" data-toggle="tab"
        data-target="#nav-{{ $index }}" type="button" role="tab" aria-controls="nav-{{ $index }}"
        aria-selected="true">
        {{ $episode['title'] }}
        <span class="badge badge-primary">{{ count($episode['children'] ?? []) }}</span>
      </a>
    @endforeach
  </div>
  <div class="tab-content" id="nav-tabContent">
    @foreach ($episodes as $index => $episode)
      <div class="tab-pane fade @if ($index == 0) show active @endif" id="nav-{{ $index }}"
        role="tabpanel" aria-labelledby="nav-{{ $index }}-tab">
        <div class="row">
          @foreach (sizeof($episode['children']) > 0 ? $episode['children'] : [$episode] as $ep)
            <div class="col-12 mt-1 mb-1">
              <div class="input-group">
                <div class="input-group-prepend">
                  <a class="btn btn-sm align-middle btn-primary" role="button" type="button"
                    href="/{{ $prefix }}/episode/0?source={{ $source['cid'] }}&url={{ $ep['slug'] }}">
                    <i class="bi bi-play-btn"></i>
                    {{ $ep['title'] }}
                  </a>
                </div>
                <input type="text" class="form-control form-control-sm" readonly value="{{ $ep['play_url'] ?? '' }}">
                <div class="input-group-append">
                  <a class="btn btn-sm align-middle btn-info" role="button" type="button"
                    href="https://blog.luckly-mjw.cn/tool-show/m3u8-downloader/index.html?source={{ $episode['play_url'] ?? '' }}">
                    <i class="bi bi-download"></i>
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>
@endempty
