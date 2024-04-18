{{-- 书单页 --}}
@extends($prefix . '.layout')

@section('content')
  <div class="container" data-md5={{ $_md5 ?? '' }}>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Novel</li>
        @empty($source)
        @else
          <li class="breadcrumb-item active" aria-current="page">{{ $source['title'] }}</li>
          <li class="breadcrumb-item active" aria-current="page">
            {{ explode('::', $source['text']['discover']['urls'][$discover_index])[0] }}
          </li>
        @endempty
        @empty(request()->input('title'))
        @else
          <li class="breadcrumb-item active" aria-current="page">{{ request()->input('title') }}</li>
        @endempty

      </ol>
    </nav>
    @empty($source)
    @else
      @include('_shared.source-item', ['source' => $source, 'prefix' => $prefix])
    @endempty

    @include('video._shared.content-list', ['prefix' => $prefix, 'data' => $contents ?? []])
    @include('_shared.pagination', ['current_page' => $current_page, 'last_page' => $last_page])
  </div>
@endsection
