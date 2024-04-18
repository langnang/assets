@php
  $url = '/question/content/';
  if (empty($source)) {
      $url .= $content['cid'];
  } else {
      $url .= "0?source={$source['cid']}&url={$content['slug']}";
  }
@endphp
<div class="card">
  <div class="card-header">
    <a href="{{ $url }}">
      @empty($content['type'])
      @else
        <span> 【{{ $content['type'] }}】 </span>
      @endempty
      {!! $content['title'] ?? '' !!}</a>
  </div>

  @empty($content['description'])
  @else
    <div class="card-body">
      {{ $content['description'] ?? '' }}
    </div>
  @endempty

  @empty($content['options'])
  @else
    <ul class="list-group list-group-flush">
      @foreach ($content['options'] ?? [] as $option)
        <li class="list-group-item">{{ $option }}</li>
      @endforeach
    </ul>
  @endempty
  <div class="card-footer"></div>

</div>
