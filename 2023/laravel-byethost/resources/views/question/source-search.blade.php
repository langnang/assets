{{-- 书单页 --}}
@extends($prefix . '.layout')

@section('content')
  <div class="container" data-md5="{{ $_md5 ?? '' }}">

    <div class="row row-cols-1">
      @foreach ($sources as $source)
        @foreach ($sources['contents'] ?? [] as $content)
          <div class="col mb-3">
            @include('question._shared.content-item', [
                'content' => $content,
                'source' => $source ?? [],
            ])
          </div>
        @endforeach
      @endforeach

    </div>
    <nav class="text-center" aria-label="...">
      <ul class="pagination">
        <li class="page-item disabled">
          <a class="page-link">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
@endsection
