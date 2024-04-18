@php
  $_layout = $_layout ?? [];
  $_layout['header'] = [
      'data' => [
          'navs' => [
              [
                  'name' => strtoupper($prefix),
                  'url' => "/{$prefix}",
              ],
          ],
      ],
  ];
  $_layout["$prefix/content/{cid}"] = ['header' => ['visible' => false], 'footer' => ['visible' => false]];
@endphp
@extends('_layout.auto')
