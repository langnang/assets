@extends('_layout.auto')
@section('main')
  <div class="container">
    <div class="jumbotron text-center">
      <h1>CheatSheet
        <span class="dropdown">
          <button class="btn btn-default dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="true">
            version
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </span>
      </h1>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row masonry-list">
      @foreach ($contents as $index => $content)
        @if ($index === '_logs')
          @continue
        @endif
        <div class="col-md-2 masonry-item">
          <div class="panel panel-primary ">
            <div class="panel-heading ">{{ $content->title }}</div>
            <div class="panel-body bg-info">
              {{ $content->text }}
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
@endsection

@section('scripts')
  <script src="/public/vendor/masonry-layout/masonry.pkgd.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.masonry-list').masonry({
        itemSelector: ".masonry-item",
        percentPosition: true
      })
    })
  </script>
@endsection
