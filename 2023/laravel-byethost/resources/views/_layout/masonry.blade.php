{{-- 瀑布流  --}}
@php
  $_layout = $_layout ?? [];
  $_layout['scripts'] = ['data' => ['masonry-layout/masonry.pkgd.min.js']];
  // dump($_layout['masonry']);
  $_layout['masonry'] = $_layout['masonry'] ?? [];
@endphp
@extends('_layout.main')

@section('scripts')
  <script>
    $(document).ready(function() {
      $("{{ $_layout['masonry']['container_selector'] ?? '.grid' }}").masonry({
        // set itemSelector so .grid-sizer is not used in layout
        itemSelector: "{{ $_layout['masonry']['container_selector'] ?? '.grid-item' }}",
        // use element for option
        // columnWidth: '.grid-sizer',
        percentPosition: true
      })
    })
  </script>
  <script>
    const codes = $('pre code.hljs');
    console.log(codes);
    // if ($aside.length > 0) {
    // new PerfectScrollbar($aside[0]);
    // }
  </script>
  @section('masonry-scripts') @show

@endsection
