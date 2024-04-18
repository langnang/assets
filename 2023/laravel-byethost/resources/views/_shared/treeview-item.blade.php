@php
  // $aside = [];
  $name = $name ?? 'treeview-item';
  $id = $id ?? $name . '-' . (string) Str::uuid();
  $data = $data ?? [];
  $depth = $depth ?? 0;
  $expanded = $expanded ?? [];
  $props = $props ?? [];
  $props['key'] = $props['key'] ?? 'mid';
  $props['label'] = $props['label'] ?? 'name';
  $props['ico'] = $props['ico'] ?? 'ico';
  $props['children'] = $props['children'] ?? 'children';
  $original = $data ?? [];
  // 获取原始数据数组
  if ($original instanceof \App\Models\Model) {
      $original = $data->getAttributes();
  }
  // 过滤非字符串，布尔值，数值，null
  $not_array_original = array_filter($original, function ($value) {
      return !is_array($value) && !$value instanceof \App\Models\Model && !$value instanceof \Illuminate\Support\Collection;
  });
  $href = $href ?? '#' . '{' . '{ ' . $props['label'] . ' }}';
  $replaced_href = str_replace(
      array_map(function ($key) {
          return '{' . '{ ' . $key . ' }' . '}';
      }, array_keys($not_array_original)),
      array_values($not_array_original),
      $href,
  );
  $_target = $_target ?? 'blank';
  $has_children = count($data[$props['children']] ?? []) > 0;
@endphp

<div class="card border-0">
  <a class="card-header border-bottom-0 text-decoration-none @if ($has_children) has-sub @endif"
    id="heading{{ $data[$props['key']] ?? '' }}" href="{{ $replaced_href }}"
    @if ($has_children) data-toggle="collapse" data-target="#collapse{{ $data[$props['key']] }}" aria-expanded="{{ in_array($data[$props['key']] ?? '', $expanded) ? 'true' : 'false' }}" aria-controls="collapse{{ $data[$props['key']] ?? '' }}" @endif>
    @for ($i = 0; $i < $depth; $i++)
      <span class="mr-3"></span>
    @endfor
    <i class="{{ $data[$props['ico']] ?? '' }}"></i>
    {{ $data[$props['label']] ?? '' }}
  </a>
  @if ($has_children)
    <div id="collapse{{ $item[$props['key']] ?? '' }}"
      class="collapse {{ in_array($data[$props['key']] ?? '', $expanded) ? 'show' : '' }}"
      aria-labelledby="heading{{ $item[$props['key']] ?? '' }}" data-parent="#heading{{ $data[$props['key']] ?? '' }}">
      {{-- @foreach ($data[$props['children']] ?? [] as $child)
        @include('_shared.treeview-item', ['data' => $child, 'props' => $props, 'depth' => $depth + 1])
      @endforeach --}}
      @include('_shared.treeview', [
          'data' => $data[$props['children']],
          'props' => $props,
          'depth' => $depth + 1,
      ])
    </div>
  @endif
</div>
