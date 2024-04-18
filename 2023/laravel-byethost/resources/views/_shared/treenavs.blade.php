@php
  // $aside = [];
  $name = $name ?? 'treeview';
  $id = $id ?? $name . '-' . (string) Str::uuid();
  $data = $data ?? [];
  $actives = $actives ?? [];
  $props = $props ?? [];
  $props['key'] = $props['key'] ?? 'mid';
  $props['label'] = $props['label'] ?? 'name';
  $props['ico'] = $props['ico'] ?? 'ico';
  $props['children'] = $props['children'] ?? 'children';
  $depth = $depth ?? 0;
  $href = $href ?? '#' . '{' . '{ ' . $props['label'] . ' }}';
  $_target = $_target ?? 'blank';
@endphp

<ul class="nav nav-pills flex-column">
  @foreach ($data ?? [] as $item)
    @include('_shared.treenavs-item', [
        'data' => $item,
        'actives' => $actives,
        'props' => $props,
        'depth' => $depth,
        'href' => $href,
    ])
  @endforeach
</ul>
