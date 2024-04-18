@extends('test.layout')



@section('content')
  <div class="container" data-role="content">
    @php
      $data = serialize([
          'name' => '123',
          'value' => [[1, 2, 3, 4, 5]],
      ]);
      var_dump($data);
      var_dump(unserialize($data));
    @endphp
  </div>
@endsection
