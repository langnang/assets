@extends('help.layout')

@section('content')
  <div class="container" data-role="content">
    <div class="card mb-3">
      <div class="card-header">Awesome</div>
      <div class="card-body">
        <div class="row">
          <dt class="col-2">JSON</dt>
          <dd class="col-10">
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a href="">awesome.json</a></li>
            </ul>
          </dd>
          <dt class="col-2">Excel</dt>
          <dd class="col-10">
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a href="">awesome.meta.xlsx</a></li>
              <li class="list-inline-item"><a href="">awesome.content.xlsx</a></li>
            </ul>
          </dd>
        </div>
      </div>
    </div>
  </div>
@endsection
