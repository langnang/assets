@php
  $_layout = $_layout ?? [];
@endphp
@extends('_layout.main')
@section('styles')
  <style>
    @media (max-width: 991px) {
      [data-role="aside"] {
        /* width: 100%; */
        max-width: none;
        flex-basis: auto;
        height: auto;
      }

      [data-role="aside"]>aside {}
    }
  </style>
@endsection
@section('main')
  <main class="container-fluid" data-role="main">
    <div class="row">
      <div class="col pl-0 pr-0" data-role="aside">
        {{-- @include('_shared.treeview', $_layout['aside'] ?? []) --}}
        @section('aside') @include('_layout.aside', $_layout['aside'] ?? []) @show
      </div>
      <div class="col" data-role="content">
        @section('content') @show
        {{-- @include('_layout.footer') --}}
      </div>
    </div>
  </main>
@endsection
