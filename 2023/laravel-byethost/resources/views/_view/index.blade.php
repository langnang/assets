@php
  $contents = $contents ?? [];
  Arr::forget($contents, '_logs');
@endphp

@extends($prefix . '.layout')


@section('content')
@section('content-header')
  @section('content-header-prepend') @show
  <x-breadcrumb :data="$metas ?? []"></x-breadcrumb>
  <div class="container">
    @include('_shared.content-header', [
        'prefix' => $prefix,
        'metas' => $metas ?? [],
        'current_page' => $current_page ?? 1,
        'content' => $content ?? [],
    ])
  </div>
  @section('content-header-append') @show
@show
@section('content-body')
  @section('content-body-prepend') @show
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-9">
        @section('content-left') @include('_shared.content-list', ['prefix' => $prefix, 'data' => $contents ?? []]) @show
      </div>
      <div class="col-12 col-md-3 d-none d-md-block">
        @section('content-right') @show
        <div class="card card-xs mb-3">
          <div class="card-header">目录</div>
          @empty($categories)
            <div class="card-body"> </div>
          @else
            <ul class="list-group list-group-flush list-group-xs">
              @foreach ($categories as $category)
                <a class="list-group-item list-group-item-action text-truncate"
                  href="/{{ $prefix }}?mid={{ $category['mid'] }}&{{ Arr::query($query) }}"
                  title="{{ $category['name'] }}">
                  {{ $category['name'] }}</a>
                @if (count($category['children']) > 0)
                  @foreach ($category['children'] as $subCategory)
                    <a class="list-group-item list-group-item-action text-truncate"
                      href="/{{ $prefix }}?mid={{ $subCategory['mid'] }}&{{ Arr::query($query) }}"
                      title="{{ $subCategory['name'] }}">
                      <i class="list-group-indent"></i>{{ $subCategory['name'] }}</a>
                  @endforeach
                @endif
              @endforeach
            </ul>
          @endempty
        </div>
        <div class="card card-xs mb-3">
          <div class="card-header">标签</div>
          @if (!empty($tags))
            <div class="card-body">
              @foreach ($tags as $index => $tag)
                @if ($index === '_logs')
                  @php unset($item); @endphp
                  @continue
                @endif
                <a href="/{{ $prefix }}?mid={{ $tag['mid'] }}&{{ Arr::query($query) }}"
                  class="badge badge-dark mb-1 mr-1" title="{{ $tag['name'] }}">{{ $tag['name'] }}</a>
              @endforeach
            </div>
          @endif
        </div>
        <div class="card card-xs mb-3">
          <div class="card-header">页面</div>
          @if (!empty($pages))
            <div class="card-body">
              @foreach ($tags as $index => $tag)
                @if ($index === '_logs')
                  @php unset($item); @endphp
                  @continue
                @endif
                <a href="/{{ $prefix }}?mid={{ $tag['mid'] }}&{{ Arr::query($query) }}"
                  class="badge badge-dark mb-1 mr-1" title="{{ $tag['name'] }}">{{ $tag['name'] }}</a>
              @endforeach
            </div>
          @endif
        </div>
        <div class="card card-xs mb-3">
          <div class="card-header">最新</div>
          <div class="list-group list-group-flush list-group-xs ">
            @foreach ($latest_contents as $index => $item)
              @if ($index === '_logs')
                @php unset($item); @endphp
                @continue
              @endif
              <a href="/{{ $prefix }}/content/{{ $item['cid'] }}"
                class="list-group-item list-group-item-action text-truncate"
                title="{{ $item['title'] }}">{{ $item['title'] }}</a>
            @endforeach
          </div>
        </div>
        <div class="card card-xs mb-3">
          <div class="card-header">最热</div>
          <div class="list-group list-group-flush list-group-xs ">
            @foreach ($toplist_contents as $index => $item)
              @if ($index === '_logs')
                @php unset($item); @endphp
                @continue
              @endif
              <a href="/{{ $prefix }}/content/{{ $item['cid'] }}"
                class="list-group-item list-group-item-action text-truncate"
                title="{{ $item['title'] }}">{{ $item['title'] }}</a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  @show
  @section('content-body-append') @show
</div>
@endsection
