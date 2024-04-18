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


    @empty($links)
    @else
      @if (sizeof($links) > 0)
        <div class="card card-default">
          <div class="card-header">关联链接</div>
          <div class="card-body">
            <ul class="list-inline mb-0">
              @foreach ($links as $index => $item)
                @if ($index === '_logs')
                  @continue
                @endif
                <li class="list-inline-item"><a target="_blank" class="label label-default"
                    href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      @endif
    @endempty

  </div>
@endsection
