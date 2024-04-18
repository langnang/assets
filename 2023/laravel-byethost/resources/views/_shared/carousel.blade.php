{{-- Carousel carousel.js --}}

{{-- A slideshow component for cycling through elements, like a carousel. Nested carousels are not supported. --}}
@php
  $uuid = pathinfo(__FILE__)['filename'];
  $name = $name ?? 'carousel';
  $id = $id ?? $name . '-' . $uuid;
  $controls = $controls ?? false;
  $carousels = $carousels ?? [
      [
          'active' => true,
          'img' => 'holder.js/1108x500/auto/#777:#555/text:First slide',
      ],
      [
          'img' => 'holder.js/1108x500/auto/#777:#555/text:First slide',
      ],
      [
          'img' => 'holder.js/1108x500/auto/#777:#555/text:First slide',
      ],
  ];
@endphp
{{-- <div id="{{ $id }}" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    @foreach ($carousels as $index => $item)
      <li data-target="#{{ $id }}" data-slide-to="{{ $index }}"
        class="{{ isset($item['active']) ? 'active' : '' }}">
      </li>
    @endforeach
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    @foreach ($carousels as $item)
      <div class="item {{ isset($item['active']) ? 'active' : '' }}">
        <img src="{{ $item['img'] }}" alt="...">
        <div class="carousel-caption">
        </div>
      </div>
    @endforeach
  </div>

  @if ($controls)
    <!-- Controls -->
    <a class="left carousel-control" href="#{{ $id }}" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#{{ $id }}" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  @endif
</div> --}}

<div id="{{ $id }}" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach ($carousels as $index => $item)
      <li data-target="#{{ $id }}" data-slide-to="{{ $index }}"
        class="{{ isset($item['active']) ? 'active' : '' }}">
      </li>
    @endforeach
  </ol>
  <div class="carousel-inner">
    @foreach ($carousels as $item)
      <div class="carousel-item {{ isset($item['active']) ? 'active' : '' }}">
        <img src="{{ $item['img'] }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-target="#{{ $id }}" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#{{ $id }}" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
