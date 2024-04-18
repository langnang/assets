@extends($prefix . '.layout')


@section('content')
  <div class="container" data-md5={{ $_md5 ?? '' }}>
    @include('_shared.discover-list', ['sources' => $sources, 'prefix' => $prefix])
  </div>
@endsection


@section('scripts')
  <script>
    $(document).ready(function() {
      $('#sourceContent .card-body').each(function(index, element) {
        new PerfectScrollbar(element, {
          wheelSpeed: 2,
          wheelPropagation: true,
          minScrollbarLenghth: 20,
        });
      })
    })
  </script>
@endsection
