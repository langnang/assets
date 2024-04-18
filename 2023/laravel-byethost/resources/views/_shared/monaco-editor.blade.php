@php
  $name = $name ?? 'monaco-editor';
  $id = $id ?? $name . '-' . (string) Str::uuid();
@endphp
