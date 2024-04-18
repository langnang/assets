@php
  // $aside = [];
  $name = $name ?? 'treeview-item';
  $id = $id ?? $name . '-' . (string) Str::uuid();
  $data = $data ?? [];
  $depth = $depth ?? 0;
  $actives = $actives ?? [];
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

<li class="nav-item">
  <a class="nav-link @if (in_array($data[$props['key']], $actives)) active @endif"
    href="{{ $replaced_href }}">{{ $data[$props['label']] }}</a>
</li>
@if ($has_children)
  @include('_shared.treenavs', [
      'data' => $data[$props['children']],
      'actives' => $actives,
      'props' => $props,
      'depth' => $depth + 1,
      'href' => $href,
  ])
@endif
