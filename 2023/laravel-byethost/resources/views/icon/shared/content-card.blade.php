<div class="card text-center mb-2">
  <div class="card-body" title="{{ $content->title }}">
    <h5 class="card-title">
      @include('_shared.ico', ['ico' => $content])
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $content->title }}</h6>
  </div>
</div>
