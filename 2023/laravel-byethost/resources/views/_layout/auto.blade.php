@php
  $_layout = $_layout ?? [];
  $_layout_uri = $_layout[Route::current()->uri] ?? [];
  $_layout = array_merge($_layout, $_layout_uri);
@endphp

@extends($_layout['extends'] ?? '_layout.main')
