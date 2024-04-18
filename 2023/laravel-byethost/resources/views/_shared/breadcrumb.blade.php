{{-- 路径导航 --}}

{{-- 在一个带有层次的导航结构中标明当前页面的位置。 --}}
@php
  $uuid = pathinfo(__FILE__)['filename'];
  $id = $id ?? 'carousel-' . $uuid;
  $data = $data ?? [];
@endphp
<ol class="breadcrumb">
  @foreach ($data as $index => $item)
    <li class="breadcrumb-item @if ($index == count($data) - 1) active @endif">
      @empty($item['url'])
        {{ $item['title'] }}
      @else
        <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
      @endempty
    </li>
  @endforeach
</ol>
