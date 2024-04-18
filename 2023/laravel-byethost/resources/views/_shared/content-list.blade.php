@php
  $data = $data ?? [];
  Arr::forget($data, '_logs');
  $is_form = Route::current()->uri == "$prefix/content-form";
@endphp
@if ($is_form)
  <div class="list-group list-group-sm mb-3">
    <div class="list-group-item">
      <div class="row">
        <div class="col col-auto">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" value="" id="list_checkall">
            <label class="form-check-label" for="">全选/全页</label>
            {{-- <button type="button" class="btn btn-sm btn-default sr-only">全选</button> --}}
            {{-- <button type="button" class="btn btn-sm btn-default sr-only">全不选</button> --}}
          </div>
        </div>
        <div class="col col-12 mt-1">
          <div class="row">
            <div class="col-4">
              <div class="input-group input-group-sm mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">徽标</span>
                </div>
                <input type="text" class="form-control" disabled placeholder="ico" id="list_ico" name="icos"
                  value="">
              </div>
            </div>
            <div class="col-4">
              <div class="input-group input-group-sm mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">类型</span>
                </div>
                <select class="form-control" placeholder="type" id="list_type" name="type">
                  <option value="" selected></option>
                  @if ($prefix == 'question')
                    <option value="radio">单选</option>
                    <option value="checkbox">多选</option>
                    <option value="switch">判断</option>
                    <option value="input">填空</option>
                    <option value="markdown">概述</option>
                    <option value="code">编程</option>
                  @else
                    <option value="post">正文</option>
                    <option value="page">页面</option>
                    <option value="template">模板</option>
                  @endif
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="input-group input-group-sm mb-2">
                <div class="input-group-prepend">
                  <span class="input-group-text">状态</span>
                </div>
                <select class="form-control form-control-sm" id="list_status" placeholder="status" name="status">
                  <option value="" selected></option>
                  <option value="draft">草稿</option>
                  <option value="publish">公开</option>
                  <option value="private">私有</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @foreach ($data as $item)
      <div class="list-group-item list-group-item-action pb-0" data-role="content-{{ $item['cid'] }}">
        <div class="row">
          <div class="col">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="cids" value="{{ $item['cid'] }}">
              <label class="form-check-label">
                <span class="small badge badge-secondary">{{ $item['cid'] }}</span>
                <a target="_blank" href="/{{ $prefix }}/content-form/{{ $item['cid'] }}">{{ $item['title'] }}</a>
              </label>
            </div>
          </div>
          <div class="col col-auto small align-self-center">
            <span>{{ $item['updated_at'] }}</span>
          </div>
          <div class="col col-12 mt-1">
            @include('_shared.content-item-form-groups', ['data' => $item, 'prerix' => $prefix])
          </div>
        </div>
      </div>
    @endforeach
  </div>
@else
  @if (view()->exists($prefix . '._shared.content-list'))
    @include($prefix . '._shared.content-list', ['data' => $data, 'prefix' => $prefix])
  @else
    {{-- @include('_shared.content-list', ['data' => $contents, 'prefix' => $prefix]) --}}
    <div class="list-group list-group-sm mb-3">
      @foreach ($data as $item)
        <a href="/{{ $prefix }}/content/{{ $item['cid'] }}" class="list-group-item list-group-item-action">
          <div class="row">
            <div class="col">{{ $item['title'] }} </div>
            <div class="col col-auto small align-self-center">{{ $item['updated_at'] }}</div>
          </div>
        </a>
      @endforeach
    </div>
  @endif
@endif
@if (!empty($current_page) && !empty($last_page))
  @include('_shared.pagination', [
      'current_page' => $current_page ?? 1,
      'last_page' => $last_page ?? 1,
      'query' => $query ?? [],
  ])
@endif
