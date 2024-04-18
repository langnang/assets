{{-- 书单页 --}}
@extends('question.layout')

@section('content')
  <div class="container" data-md5="{{ $_md5 ?? '' }}">
    @empty($sources)
      <div class="row row-cols-1 mb-3">
        @foreach ($contents ?? ($discover['contents'] ?? []) as $contentItem)
          <div class="col mb-3">
            @include('question._shared.content-item', [
                'content' => $contentItem,
                'source' => $source ?? [],
            ])
          </div>
        @endforeach
      </div>
    @else
      @foreach ($sources as $source)
        <div class="row row-cols-1 mb-3">
          @foreach ($source['contents'] ?? [] as $content)
            <div class="col mb-3">
              @include('question._shared.content-item', [
                  'content' => $content,
                  'source' => $source ?? [],
              ])
            </div>
          @endforeach
        </div>
      @endforeach
    @endempty
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
