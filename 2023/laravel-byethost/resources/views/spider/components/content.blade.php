{{-- @extends('_layout.main') --}}
@php
  $content->setSpider();
@endphp
@php
  $_layout = $_layout ?? [];
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  {{--  @include('_layout.head') --}}
  {{--  @include('_layout.styles') --}}
  <style>
    .navbar-brand {
      width: 280px;
      text-align: center;
    }

    ul.nav ul.nav {
      padding-left: 15px;
    }
  </style>
  @section('style')
  @show
</head>

<body>
  @section('header')
    {{--  @include('_layout.header', $_layout['header'] ?? []) --}}
  @show
  @section('main')
    <main class="" data-role="main" style="padding-top: 1rem;">
    @section('content')
      <div class="container" data-role="content">
        @if (disable_functions('set_time_limit'))
          <div class="card">
            <div class="card-header">1</div>
          </div>
          <div class="row">
            <div class="card">
              <div class="card-header">1</div>
            </div>
          </div>
        @else
          @php
            set_time_limit(0); //设置程序执行时间
            ignore_user_abort(true); //设置断开连接继续执行
            header('X-Accel-Buffering: no'); //关闭buffer
            ob_start(); //打开输出缓冲控制
          @endphp
        @endif
      </div>
    @show
    {{--    @include('_layout.footer') --}}
  </main>
@show
{{-- <main>
  @section('main')
  @show
</main> --}}
{{-- @include('_layout.footer') --}}
{{-- @include('_layout.scripts') --}}
@section('scripts')
  <script>
    function prependPanelList(id, row) {
      const container = $(`#${id} .panel-body`)[0];
      console.log("🚀 ~ file: index.blade.php:141 ~ prependPanelList ~ container:", container);
    }
  </script>
@show
</body>

</html>
