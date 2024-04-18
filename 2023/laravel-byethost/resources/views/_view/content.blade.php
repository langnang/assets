@extends(View::exists($prefix . '.index') ? $prefix . '.index' : $prefix . '.layout')

@section('content-left')
  @if ($content['type'] == 'page')
    {!! $content['text'] !!}
  @elseif ($content['type'] == 'post')
  @else
    <div class="container" data-role="content">
      <h1 class="display-1">404</h1>
      <h1 class="display-4">Page Not Found.</h1>
      <p>The Page you're looking for doesn't exist or another error occurred.</p>
    </div>
  @endif
@endsection
