@php
  // $aside = [];
  $name = $name ?? 'aside';
  $id = $id ?? $name . '-' . (string) Str::uuid();
  $data = $data ?? [];
  $props = $props ?? [];
  $props['key'] = $props['key'] ?? 'mid';
  $props['label'] = $props['label'] ?? 'name';
  $props['ico'] = $props['ico'] ?? 'ico';
  $props['children'] = $props['children'] ?? 'children';
@endphp
<aside class="position-fixed bg-light" style="top: 56px;width: 100%;;max-width: 280px;height: 100%;">
  <section class="accordion" id="{{ $id }}">
    @if (false)
      @foreach ($data ?? [] as $item)
        <div class="card">
          <a class="card-header text-decoration-none @if (count($item[$props['children']]) > 0) has-sub @endif"
            id="heading{{ $item[$props['key']] }}" href="#{{ $item[$props['label']] }}"
            @if (count($item[$props['children']]) > 0) data-toggle="collapse"
          data-target="#collapse{{ $item[$props['key']] }}" aria-expanded="false" aria-controls="collapse{{ $item[$props['key']] }}" @endif>
            <i class="{{ $item[$props['ico']] ?? '' }}"></i>
            {{ $item[$props['label']] }}
          </a>
          @if (count($item[$props['children']]) > 0)
            <div id="collapse{{ $item[$props['key']] }}" class="collapse"
              aria-labelledby="heading{{ $item[$props['key']] }}" data-parent="#{{ $id }}">
              <ul class="list-group list-group-flush">
                @foreach ($item[$props['children']] ?? [] as $subItem)
                  <a class="list-group-item list-group-item-action"
                    href="#{{ $subItem[$props['label']] }}">{{ $subItem[$props['label']] }}</a>
                @endforeach
              </ul>
            </div>
          @endif
        </div>
      @endforeach
    @endif
    {{-- @include('_shared.treenavs', ['data' => $data, 'props' => $props]) --}}
    @include('_shared.treeview', ['data' => $data, 'props' => $props])
  </section>
</aside>
