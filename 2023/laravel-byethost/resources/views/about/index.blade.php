@extends('_layout.auto')

@section('content')
  <div class="container" data-role="content">
    <div class="card mb-3">
      <div class="card-header">内容发布</div>
      <div class="card-body">
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-header">试题</div>
      <div class="card-body">
      </div>
    </div>
  </div>
@endsection
{{--
  暂存
  1. 存在主键
  1.true. 不更新原始内容，如果原始为存稿，则将主键更改存稿父本
  1.false. 新增非存稿且默认私密内容：
  2. 新增存稿并将父本指向主键
  发布
  1. 存在草稿？
  1.true 存在则替换内容为存稿

  --}}
