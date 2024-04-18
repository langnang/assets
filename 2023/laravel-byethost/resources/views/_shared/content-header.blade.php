@php
  $current_page = $current_page ?? 1;
  $content = $content ?? [];
  $metas = $metas ?? [];
  Arr::forget($metas, '_logs');
  $is_form = Route::current()->uri == "$prefix/content-form";
@endphp
<div class="row">
  <div class="col-12 col-md-9">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-xs pl-3 pr-3">
        <li class="breadcrumb-item d-inline" aria-current="page">
          <a href="/{{ $prefix }}{{ $is_form ? '/content-form' : '' }}">{{ strtoupper($prefix) }}</a>
        </li>
        @if (!empty($query['type']))
          <li class="breadcrumb-item d-inline active" aria-current="page">{{ $query['type'] }}</li>
        @endif
        @if (!empty($query['status']))
          <li class="breadcrumb-item d-inline active" aria-current="page">{{ $query['status'] }}</li>
        @endif
        @if (!empty($current_page) && $current_page > 1)
          <li class="breadcrumb-item d-inline active" aria-current="page">{{ $current_page }}</li>
        @endif
        @if (!empty($content))
          <li class="breadcrumb-item d-inline active" aria-current="page">{{ $content['title'] }}</li>
        @endif
        <div class="ml-auto align-self-center">
          @if (request()->hasAny(['title']))
            <span class="badge badge-pill badge-primary ml-1">
              {{ request()->input('title') }}
              <a href="#" class="text-white text-decoration-none bi bi-x-circle" aria-hidden="true"></a>
            </span>
          @endif
          @isset($metas)
            @foreach ($metas as $index => $item)
              @if ($index === '_logs')
                @php unset($item); @endphp
                @continue
              @endif
              <span class="badge badge-pill badge-primary ml-1">
                {{ $item['name'] }}
                <a href="#" class="text-white text-decoration-none bi bi-x-circle" aria-hidden="true"></a>
              </span>
            @endforeach
          @endisset
        </div>
      </ol>
    </nav>
  </div>
  <div class="col-12 col-md-3">
    <form method="get" action="/{{ $prefix }}{{ $is_form ? '/content-form' : '' }}" class="mb-3">
      <div class="form-group">
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" name="title" placeholder="">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
