@extends('_view.index')
@php
  if (empty($content['type'])) {
      if (sizeof($content['options']) == 2) {
          $content['type'] = 'switch';
      } elseif (sizeof($content['options']) >= 3) {
          $content['type'] = 'radio';
          if (sizeof(str_split($content['suggestion'])) > 1) {
              $content['type'] = 'checkbox';
          }
      }
  }

@endphp
@section('content-left')
  @empty($content)
  @else
    <div class="card mb-3">
      <div class="card-header">{!! $content['title'] !!}</div>
      <div class="card-body">
        <p>{{ $content['description'] ?? '' }}</p>

        @switch($content['type']??'')
          @case('radio')
          @case('单选')

          @case('单选题')
            @foreach ($content['options'] ?? [] as $index => $option)
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radio" value="{{ $index }}">
                <label class="form-check-label">
                  {{ $index + 1 }}: {{ $option }}
                </label>
              </div>
            @endforeach
          @break

          @case('checkbox')
          @case('多选')

          @case('多选题')
            @foreach ($content['options'] ?? [] as $index => $option)
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="radio" value="{{ $index }}">
                <label class="form-check-label">
                  {{ $index + 1 }}: {{ $option }}
                </label>
              </div>
            @endforeach
          @break

          @case('switch')
          @case('判断')

          @case('判断题')
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                True
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
              <label class="form-check-label" for="exampleRadios2">
                False
              </label>
            </div>
          @break

          @case('markdown')
          @case('简述')

          @case('概述')
          @case('简述题')

          @case('概述题')
            <div class="form-group">
              <textarea class="form-control" rows="6"></textarea>
            </div>
          @case('input')
          @case('填空')

          @case('填空题')
          @case('code')

          @case('编程')
          @case('编程题')

          @case('代码')
          @case('代码题')
          @break

          @default
            <div class="form-group">
              <textarea class="form-control" rows="5"></textarea>
            </div>
        @endswitch
        <br>
      </div>
      <div class="card-footer">
        <div class="form-group text-right mb-0">
          <button type="submit" class="btn btn-primary">上一题</button>
          <button type="submit" class="btn btn-primary">下一题</button>
        </div>
      </div>
    </div>
    <div class="card mb-3">
      <a class="card-header" data-toggle="collapse" href="#suggestion" role="button" aria-expanded="false"
        aria-controls="collapseExample">
        参考答案
      </a>
      <div id="suggestion" class="card-body collapse">
        <p> <b>答案</b>: {!! $content['suggestion'] ?? '' !!}</p>
        <p> <b>解析</b>: <br>
        <section class="markdown">
          {!! markdown_to_html($content['text'] ?? '') !!}
        </section>
        </p>
      </div>
    </div>
  @endempty
@endsection
