@extends('_layout.auto')

@section('content')
  <div class="container" data-role="content">
    加解密
    <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" href="#" id="pills-base64-tab" data-toggle="pill" data-target="#pills-base64"
          type="button" role="tab" aria-controls="pills-base64" aria-selected="true">Base64</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-md5-tab" data-toggle="pill" data-target="#pills-md5" type="button" role="tab"
          aria-controls="pills-md5" aria-selected="false">MD5</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-base64" role="tabpanel" aria-labelledby="pills-base64-tab">...
      </div>
      <div class="tab-pane fade" id="pills-md5" role="tabpanel" aria-labelledby="pills-md5-tab">...</div>
    </div>
  </div>
@endsection
