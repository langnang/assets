@php
  $_layout = $_layout ?? [];
  $_layout['header'] = [
      'data' => [
          'navs' => [
              [
                  'name' => strtoupper($prefix),
                  'url' => "/{$prefix}",
              ],
              ['name' => '对话', 'url' => "/{$prefix}/single"],
              ['name' => '群组', 'url' => "/{$prefix}/multiple"],
              // ['name' => '提交收录', 'ico' => 'bi bi-plus-lg', 'url' => "/{$prefix}/content-form/0"],
          ],
      ],
  ];
@endphp
@extends('_layout.auto')
