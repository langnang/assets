@php
  $name = $name ?? 'list-group';
  $uuid = pathinfo(__FILE__)['filename'];
  $id = $id ?? 'list-group-' . $uuid;
  $class = $class ?? '';
  $itemClass = $itemClass ?? '';
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
  $depth = $depth ?? 0;
  $href = $href ?? '';
  $include = $include ?? [];
  $checked = $checked ?? [];
@endphp

<li class="list-group-item d-flex flex-row {{ $itemClass }}" data-role="{{ $name }}"
  title="{{ $data[$props['label']] }}">
  @if ($input = 'checkbox')
    @for ($i = 0; $i < $depth; $i++)
      <i class="list-group-indent"></i>
    @endfor
    <div class="form-check text-truncate">
      <input class="form-check-input" type="checkbox" @if (in_array($data[$props['value']], $checked)) checked @endif
        value="{{ $data[$props['value']] }}" name="{{ $name }}">
      <label class="form-check-label">
        {{ $data[$props['label']] }}
      </label>
    </div>
  @else
    @for ($i = 0; $i < $depth; $i++)
      <i class="list-group-indent"></i>
    @endfor
    <label>{{ $data[$props['label']] }}</label>
  @endif
</li>

@if (count($data[$props['children']]) > 0)
  @foreach ($data[$props['children']] as $item)
    @include('_shared.list-group-item', [
        'data' => $item,
        'class' => $class,
        'itemClass' => $itemClass,
        'props' => $props,
        'input' => $input,
        'depth' => $depth + 1,
    ])
  @endforeach
@endif
