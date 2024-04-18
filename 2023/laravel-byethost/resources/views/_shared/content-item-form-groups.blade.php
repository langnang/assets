{{-- 单条正文编辑页：右侧上部表单组 --}}
@php
  $name = 'content-item-form-groups';
  $data = $data ?? [];
  $primaryKey = $data->getKeyName();
  $fillable = $data->getFillable() ?? [];
@endphp


@if (view()->exists($prefix . '._shared.' . $name))
  @include($prefix . '._shared.' . $name, ['data' => $data, 'prefix' => $prefix])
@else
  <div class="row">
    @if (in_array('title', $fillable))
      <div class="col-8">
        <div class="input-group input-group-sm mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text">标题</span>
          </div>
          <input type="text" class="form-control" placeholder="title" name="title" value="{{ $data['title'] }}">
        </div>
      </div>
    @endif
    @if (in_array('name', $fillable))
      <div class="col-8">
        <div class="input-group input-group-sm mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text">名称</span>
          </div>
          <input type="text" class="form-control" placeholder="name" name="name" value="{{ $data['name'] }}">
        </div>
      </div>
    @endif
    @if (in_array('slug', $fillable))
      <div class="col-4">
        <div class="input-group input-group-sm mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text">标识</span>
          </div>
          <input type="text" class="form-control" placeholder="slug" name="slug" value="{{ $data['slug'] }}">
        </div>
      </div>
    @endif
    @if (in_array('ico', $fillable))
      <div class="col-4">
        <div class="input-group input-group-sm mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text">徽标</span>
          </div>
          <input type="text" class="form-control" placeholder="ico" name="ico" value="{{ $data['ico'] }}">
        </div>
      </div>
    @endif
    @if (in_array('type', $fillable))
      <div class="col-4">
        <div class="input-group input-group-sm mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text">类型</span>
          </div>
          @php
            if (empty($data['type'])) {
                $data['type'] = $prefix == 'question' ? 'markdown' : 'post';
            }
          @endphp
          <select class="form-control" placeholder="type" name="type">
            @if ($prefix == 'question')
              <option value="radio" @if (in_array($data['type'], ['radio', '单选', '单选题'])) selected @endif>单选</option>
              <option value="checkbox" @if (in_array($data['type'], ['checkbox', '多选', '多选题'])) selected @endif>多选</option>
              <option value="switch" @if (in_array($data['type'], ['switch', '判断', '判断题'])) selected @endif>判断</option>
              <option value="input" @if (in_array($data['type'], ['input', '填空', '填空题'])) selected @endif>填空</option>
              <option value="markdown" @if (in_array($data['type'], ['markdown', '概述', '概述题', '简述', '简述题'])) selected @endif>概述</option>
              <option value="code" @if (in_array($data['type'], ['code', '编程', '编程题', '代码', '代码题'])) selected @endif>编程</option>
            @else
              <option value="post" @if ($data['type'] == 'post') selected @endif>正文</option>
              <option value="page" @if ($data['type'] == 'page') selected @endif>页面</option>
              <option value="template" @if ($data['type'] == 'template') selected @endif>模板</option>
            @endif
          </select>
        </div>
      </div>
    @endif
    @if (in_array('status', $fillable))
      <div class="col-4">
        <div class="input-group input-group-sm mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text">状态</span>
          </div>
          @php
            if (empty($data['status'])) {
                $data['status'] = 'draft';
            }
          @endphp
          <select class="form-control form-control-sm" placeholder="status" name="status">
            <option value="draft" @if ($data['status'] == 'draft') selected @endif>草稿</option>
            <option value="publish" @if ($data['status'] == 'publish') selected @endif>公开</option>
            <option value="private" @if ($data['status'] == 'private') selected @endif>私有</option>
          </select>
        </div>
      </div>
    @endif
    <div class="col-4"></div>
  </div>
@endif
