<!DOCTYPE html>
<html lang="en">

<head>
  <title>Toolkit</title>
  @include('toolkit.shared.head')
</head>

<body>
  @section('header')
    @include('toolkit.shared.header')
  @show
  <main>
    <div class="container">
      @section('main')

      @show
      @isset($links)
        @include('toolkit.shared.links')
      @endisset
      @isset($refs)
        @include('toolkit.shared.refs')
      @endisset
  </main>
  @section('footer')
    @include('toolkit.shared.footer')
  @show
</body>

</html>
