@extends($prefix . '.layout')


@section('content')
  <div class="container" data-md5={{ $_md5 ?? '' }}>
    @foreach ($sources ?? [] as $index => $source)
      @include('_shared.source-item', ['index' => $index, 'source' => $source, 'prefix' => $prefix])
    @endforeach
  </div>
@endsection
