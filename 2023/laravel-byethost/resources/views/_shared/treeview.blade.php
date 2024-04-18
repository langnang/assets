@php
  // $aside = [];
  $name = $name ?? 'treeview';
  $id = $id ?? $name . '-' . (string) Str::uuid();
  $data = $data ?? [];
  $expanded = $expanded ?? [];
  $props = $props ?? [];
  $props['key'] = $props['key'] ?? 'mid';
  $props['label'] = $props['label'] ?? 'name';
  $props['ico'] = $props['ico'] ?? 'ico';
  $props['children'] = $props['children'] ?? 'children';
  $depth = $depth ?? 0;
  $href = $href ?? '#' . '{' . '{ ' . $props['label'] . ' }}';
  $_target = $_target ?? 'blank';
@endphp

<section class="treeview accordion" id="{{ $id }}">
  @foreach ($data ?? [] as $item)
    @include('_shared.treeview-item', [
        'data' => $item,
        'expanded' => $expanded,
        'props' => $props,
        'depth' => $depth,
        'href' => $href,
    ])
  @endforeach
</section>
