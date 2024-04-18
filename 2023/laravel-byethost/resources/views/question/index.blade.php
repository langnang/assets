{{-- @extends($prefix . '.layout') --}}
@extends('_view.index')

@section('content-header-prepend')
  <div class="container-fluid">
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-6">
      <div class="col mb-3">
        <a href='/{{ $prefix }}?type=radio&{{ Arr::query($query) }}'
          class="card text-decoration-none text-center text-white bg-primary">
          <div class="card-body p-2">
            <p class="card-text mb-2">单选题</p>
            <h5 class="card-title mb-0" name="count-radio">0</h5>
          </div>
        </a>
      </div>
      <div class="col mb-3">
        <a href='/{{ $prefix }}?type=checkbox&{{ Arr::query($query) }}'
          class="card text-decoration-none text-center text-white bg-secondary">
          <div class="card-body p-2">
            <p class="card-text mb-2">多选题</p>
            <h5 class="card-title mb-0" name="count-checkbox">0</h5>
          </div>
        </a>
      </div>
      <div class="col mb-3">
        <a href='/{{ $prefix }}?type=switch&{{ Arr::query($query) }}'
          class="card text-decoration-none text-center text-white bg-success">
          <div class="card-body p-2">
            <p class="card-text mb-2">判断题</p>
            <h5 class="card-title mb-0" name="count-switch">0</h5>
          </div>
        </a>
      </div>
      <div class="col mb-3">
        <a href='/{{ $prefix }}?type=input&{{ Arr::query($query) }}'
          class="card text-decoration-none text-center text-white bg-danger">
          <div class="card-body p-2">
            <p class="card-text mb-2">填空题</p>
            <h5 class="card-title mb-0" name="count-input">0</h5>
          </div>
        </a>
      </div>
      <div class="col mb-3">
        <a href='/{{ $prefix }}?type=markdown&{{ Arr::query($query) }}'
          class="card text-decoration-none text-center text-white bg-warning">
          <div class="card-body p-2">
            <p class="card-text mb-2">概述题</p>
            <h5 class="card-title mb-0" name="count-markdown">0</h5>
          </div>
        </a>
      </div>
      <div class="col mb-3">
        <a href='/{{ $prefix }}?type=code&{{ Arr::query($query) }}'
          class="card text-decoration-none text-center text-white bg-info">
          <div class="card-body p-2">
            <p class="card-text mb-2">编程题</p>
            <h5 class="card-title mb-0" name="count-code">0</h5>
          </div>
        </a>
      </div>
    </div>
  </div>
@endsection

@section('content-body-prepend')
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-3">
      <div class="col mb-3">
        <a class="card text-decoration-none text-center bg-light" href="#">
          <div class="card-body p-2">
            <h5 class="card-title">题库练习</h5>
          </div>
        </a>
      </div>
      <div class="col mb-3">
        <a class="card text-decoration-none text-center text-white bg-dark" href="#">
          <div class="card-body p-2">
            <h5 class="card-title">试题模拟</h5>
          </div>
        </a>
      </div>
      <div class="col mb-3">
        <a class="card text-decoration-none text-center" href="/{{ $prefix }}/content/0?random">
          <div class="card-body p-2">
            <h5 class="card-title">随机一练</h5>
          </div>
        </a>
      </div>
    </div>
    {{-- @foreach ($tree as $meta)
        <div class="card mb-3">
          <a href="/{{ $prefix }}/meta/{{ $meta->mid }}" class="card-header">{{ $meta->name }}</a>
          <div class="card-body row">
            @foreach ($meta->children as $item)
              <div class="col-3 mb-3">
                <div class="card">
                  <a href="/{{ $prefix }}/meta/{{ $meta->mid }}" class="card-body p-2">
                    {{ $item->name }}
                  </a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @endforeach --}}
  </div>
@endsection

@section('scripts')
  @foreach (['radio', 'checkbox', 'switch', 'input', 'markdown', 'code'] as $key)
    <script>
      $(document).ready(() => {
        anime({
          targets: $('[name="count-{{ $key }}"]')[0],
          innerHTML: [0, {{ $counts[$key] ?? 0 }}],
          easing: 'linear',
          round: 1
        });
      })
    </script>
  @endforeach
  <script>
    $(document).ready(() => {})
  </script>
@endsection
