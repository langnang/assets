@php
  $_layout = $_layout ?? [];
  $_layout['header'] = [
      'data' => [
          'navs' => [
              [
                  'name' => strtoupper($prefix),
                  'url' => "/{$prefix}",
              ],
              [
                  'name' => '发现',
                  'url' => "/{$prefix}/discover",
              ],
              [
                  'name' => '稿件',
                  'url' => "/{$prefix}?status=draft",
              ],
              ['name' => '提交收录', 'ico' => 'bi bi-plus-lg', 'url' => "/{$prefix}/content-form/0"],
          ],
      ],
  ];
@endphp
@extends('_layout.auto')
