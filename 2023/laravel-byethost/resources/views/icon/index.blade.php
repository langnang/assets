@extends('_layout.auto')

@section('content')
  <div class="container" data-role='content'>
    <div class="row">
      @foreach ($branches as $branch)
        <div class="col">
          <a class="card text-decoration-none" href="/icon/{{ $branch->slug }}">
            <div class="card-body">
              <h5 class="card-title text-center"> {{ $branch->name }}</h5>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
@endsection
