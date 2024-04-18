@php
  $_layout['brand'] = 'Icon';
  $_layout['aside'] = $tree;
@endphp
@extends('_layout.sidebar')

@section('content')
  @foreach ($tree ?? [] as $category)
    @empty($category->contents->count())
    @else
      <div class="card panel-default text-center  mb-3">
        <div class="card-header">{{ $category->name }}</div>
        <div class="card-body text-center">
          <div class="row">
            @foreach ($category->contents ?? [] as $content)
              <div class="col-2">
                @include('icon.shared.content-card', ['content' => $content])
              </div>
            @endforeach
          </div>
        </div>
      </div>
    @endempty

    @foreach ($category->children ?? [] as $subCategory)
      @empty($subCategory->contents->count())
      @else
        <div class="card panel-default mb-3">
          <div class="card-header" id="{{ $subCategory->name }}">
            <h4>{{ $subCategory->name }}</h4>
          </div>
          <div class="card-body text-center">
            <div class="row">
              @foreach ($subCategory->contents ?? [] as $content)
                <div class="col-2">
                  @include('icon.shared.content-card', ['content' => $content])
                </div>
              @endforeach

            </div>
          </div>
        </div>
      @endempty
    @endforeach
  @endforeach
@endsection
