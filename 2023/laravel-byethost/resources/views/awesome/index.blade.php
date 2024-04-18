@extends('_view.index')


@section('content-temp')
  <div class="container">
    <div class="list-group list-group-sm mb-3">
      @foreach ($contents as $index => $item)
        @if ($index === '_logs')
          @continue
        @endif
        <a href="/{{ $prefix }}/content/{{ $item['cid'] }}"
          class="list-group-item list-group-item-action">{{ $item['title'] }}</a>
      @endforeach
    </div>
  </div>
@endsection
