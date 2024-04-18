{{-- 列表组 --}}

{{-- 列表组是灵活又强大的组件，不仅能用于显示一组简单的元素，还能用于复杂的定制的内容。 --}}
@php
  $name = $name ?? 'list-group';
  $uuid = pathinfo(__FILE__)['filename'];
  $id = $id ?? 'list-group-' . $uuid;
  $class = $class ?? '';
  $style = $style ?? '';
  $data = $data ?? [];
  $attrs = $attrs ?? [];
  $input = $input ?? '';
  $props = $props ?? [];
  $props['label'] = $props['label'] ?? 'label';
  $props['value'] = $props['value'] ?? 'value';
  $props['url'] = $props['url'] ?? 'url';
  $props['text'] = $props['text'] ?? 'text';
  $props['count'] = $props['count'] ?? 'count';
  $props['disabled'] = $props['disabled'] ?? 'disabled';
  $props['checked'] = $props['checked'] ?? 'checked';
  $props['selected'] = $props['selected'] ?? 'selected';
  $props['children'] = $props['children'] ?? 'children';
  $depth = -1;
  $href = $href ?? '';
  $include = $include ?? [];
  $checked = $checked ?? [];
@endphp
@isset($data)
  <ul class="list-group {{ $class }}" style="{{ $style }}" data-view="{{ $uuid }}">
    @foreach ($data as $item)
      @include('_shared.list-group-item', [
          'data' => $item,
          'class' => $class,
          'style' => $style,
          'itemClass' => $itemClass ?? '',
          'itemStyle' => $itemStyle ?? '',
          'props' => $props,
          'input' => $input,
          'depth' => $depth + 1,
          'checked' => $checked,
      ])
    @endforeach
  </ul>
@endisset
