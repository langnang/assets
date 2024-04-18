{{-- 多选框 --}}
@php
  $uuid = (string) Str::uuid();
  $name = $name ?? 'checkbox';
  $props = $props ?? [];
  $valueKey = $props['value'] ?? 'value';
  $labelKey = $props['label'] ?? 'label';
  $disabledKey = $props['disabled'] ?? 'disabled';
  $checkedKey = $props['checked'] ?? 'checked';
  $childrenKey = $props['children'] ?? 'children';
  variable(basename(__FILE__), [$name, $uuid, $props, $valueKey, $checkboxes]);
@endphp
@isset($checkboxes)
  <style>
    .shared-checkbox {
      max-height: 50vh;
      overflow-y: auto;
    }

    .shared-checkbox .checkbox {
      margin-top: 4px;
      margin-bottom: 4px;
    }

    .shared-checkbox ul {
      padding-left: 20px;
    }
  </style>
  <ul class="list-unstyled shared-checkbox" data-view="{{ pathinfo(__FILE__)['filename'] }}">
    @foreach ($checkboxes ?? [] as $checkbox)
      <li>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="{{ $name }}" @if ($checkbox[$checkedKey]) checked @endif
              @if ($checkbox[$disabledKey]) disabled @endif value="{{ $checkbox[$valueKey] }}">
            {!! $checkbox[$labelKey] !!}
          </label>
        </div>
        @if (isset($checkbox[$childrenKey]))
          @include('_shared.checkbox', [
              'checkboxes' => $checkbox[$childrenKey],
              'props' => $props,
          ])
        @endif
      </li>
    @endforeach
  </ul>
@endisset
