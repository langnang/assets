@php
  $_layout = $_layout ?? [];
  $_layout_uri = $_layout[Route::current()->uri] ?? [];
  // var_dump(Route::current()->uri);
  // var_dump(Route::currentRouteName());
  // var_dump(Route::currentRouteAction());
  // $_layout = array_merge($_layout, $_layout[Route::current()->uri] ?? []);
  // var_dump($_layout[Route::current()->uri] ?? []);
  // dump($_layout);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  @include('_layout.head', array_merge($_layout['head'] ?? [], $_layout_uri['head'] ?? []))
  @include('_layout.styles', array_merge($_layout['styles'] ?? [], $_layout_uri['styles'] ?? []))
  <style>
    .navbar-brand {
      width: 280px;
      text-align: center;
    }

    @media (max-width: 1060px) {
      .navbar-brand {
        width: auto;
        flex-grow: 1
      }
    }

    [data-role="aside"] {
      max-width: 280px;
      overflow: hidden;
    }

    ul.nav ul.nav {
      padding-left: 15px;
    }

    .nav-fill .nav-link {
      padding-left: 0;
      padding-right: 0;
    }

    li.node-treeview>span.icon.bi-chevron-right,
    li.node-treeview>span.icon.bi-chevron-down {
      float: right;
    }
  </style>
  @section('styles')
  @show
</head>

<body>
  @section('header')
    @include('_layout.header', array_merge($_layout['header'] ?? [], $_layout_uri['header'] ?? []))
  @show

  @section('main')
    <main class="pt-3" data-role="main">
      <div class="js-toc-content" data-role="content">
        @section('content') @show
      </div>
      {{-- <div class="js-toc position-fixed"></div> --}}
      @include('_layout.footer', array_merge($_layout['footer'] ?? [], $_layout_uri['footer'] ?? []))
    </main>
  @show
  <div id="alert_container" class="position-fixed" style="top: 1rem;right: 1rem;z-index: 9;"></div>
  <div id="toast_container" class="position-fixed" style="top: 1rem;right: 1rem;z-index: 9;"></div>
  @include('_layout.scripts', array_merge($_layout['scripts'] ?? [], $_layout_uri['scripts'] ?? []))

  @section('scripts') @show

</body>

</html>
