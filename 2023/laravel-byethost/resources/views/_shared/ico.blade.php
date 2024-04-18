{{-- 徽标 --}}

@php
  $name = $name ?? 'ico';
  $id = $id ?? $name . '-' . (string) Str::uuid();
  $data = $data ?? '';
  $props = $props ?? [];
  $size = '24'; // 尺寸
  $color = ''; // 颜色
  $border = false; // 边框
  $radius = false;
  $round = false;
  // $ico = $props['ico'] ?? '';
  $icon = $props['icon'] ?? '';
  $src = $props['src'] ?? '';
@endphp


@empty($data)
  <i></i>
@else
  @php
    $expl = explode(' ', $data);
    $len = sizeof($expl);
  @endphp
  @if ($len == 1 && filter_var($data, FILTER_VALIDATE_URL) !== false)
    <img src="{{ $data }}" data-src="{{ $data }}" class="lozad align-self-center" width="{{ $size }}">
  @elseif($len == 2)
    <i class="{{ $data }}"></i>
  @endif
@endempty
