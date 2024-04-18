@extends('_view.index')

@php
@endphp
@section('content-left')
  <div class="card mb-3">
    <div class="card-body">
      <div class="row mb-1">
        <div class="col col-auto">类型</div>
        <div class="col">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row mb-1">
        <div class="col col-auto">类型</div>
        <div class="col">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row mb-1">
        <div class="col col-auto">类型</div>
        <div class="col">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row mb-1">
        <div class="col col-auto">类型</div>
        <div class="col">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button class="btn btn-primary">Search</button>
    </div>
  </div>
  @if (view()->exists($prefix . '._shared.content-list'))
    @include($prefix . '._shared.content-list', ['data' => $contents, 'prefix' => $prefix])
  @else
    @include('_shared.content-list', ['data' => $contents, 'prefix' => $prefix])
  @endif
@endsection
