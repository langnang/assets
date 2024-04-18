@php
  $_layout = $_layout ?? [];
  $_layout['scripts'] = ['data' => ['monaco-editor/min/vs/loader.js']];
  $primaryKey = $content->getKeyName();
  $fillable = $content->getFillable() ?? [];
@endphp
@extends($prefix . '.layout')

@section('content')
  <div class="container-fluid">
    <form class="row" id="content_item_form">
      <div class="col-12 col-md-9">
        @section('content-item-left-prepend') @show
        <div id="monaco_container" data-role="content"></div>
        @section('content-item-left-append') @show
      </div>
      <div class="col-12 col-md-3">
        @section('content-item-right-prepend') @show

        @if (in_array('title', $fillable))
          <div class="input-group input-group-sm mb-2">
            <div class="input-group-prepend">
              <span class="input-group-text">标题</span>
            </div>
            <input type="text" class="form-control text-right" placeholder="title" name="title"
              value="{{ $content['title'] }}">
          </div>
        @endif
        @if (in_array('name', $fillable))
          <div class="input-group input-group-sm mb-2">
            <div class="input-group-prepend">
              <span class="input-group-text">名称</span>
            </div>
            <input type="text" class="form-control text-right" placeholder="name" name="name"
              value="{{ $content['name'] }}">
          </div>
        @endif
        @if (in_array('slug', $fillable))
          <div class="input-group input-group-sm mb-2">
            <div class="input-group-prepend">
              <span class="input-group-text">标识</span>
            </div>
            <input type="text" class="form-control text-right" placeholder="slug" name="slug"
              value="{{ $content['slug'] }}">
          </div>
        @endif
        @if (in_array('ico', $fillable))
          <div class="input-group input-group-sm mb-2">
            <div class="input-group-prepend">
              <span class="input-group-text">徽标</span>
            </div>
            <input type="text" class="form-control text-right" placeholder="ico" name="ico"
              value="{{ $content['ico'] }}">
          </div>
        @endif
        @if (in_array('email', $fillable))
          <div class="input-group input-group-sm mb-2">
            <div class="input-group-prepend">
              <span class="input-group-text">邮箱</span>
            </div>
            <input type="email" class="form-control text-right" placeholder="email" name="email"
              value="{{ $content['email'] }}">
          </div>
        @endif
        @if (in_array('type', $fillable))
          <div class="input-group input-group-sm mb-2">
            <div class="input-group-prepend">
              <span class="input-group-text">类型</span>
            </div>
            @php
              if (empty($content['type'])) {
                  $content['type'] = $prefix == 'question' ? 'markdown' : 'post';
              }
            @endphp
            <select class="form-control text-right" placeholder="type" name="type">
              @foreach ($options['content.type.options.' . $prefix] ?? ($options['content.type.options.default'] ?? []) as $item)
                <option value="{{ $item['value'] }}" @if ($content['type'] == $item['value'] || in_array($content['type'], $item['values'] ?? [])) selected @endif>
                  {{ $item['label'] }} </option>
              @endforeach
            </select>
          </div>
        @endif
        @if (in_array('status', $fillable))
          <div class="input-group input-group-sm mb-2">
            <div class="input-group-prepend">
              <span class="input-group-text">状态</span>
            </div>
            @php
              if (empty($content['status'])) {
                  $content['status'] = 'draft';
              }
            @endphp
            <select class="form-control text-right" placeholder="status" name="status">
              @foreach ($options['content.status.options.' . $prefix] ?? ($options['content.status.options.default'] ?? []) as $item)
                <option value="{{ $item['value'] }}" @if ($content['status'] == $item['value'] || in_array($content['status'], $item['values'] ?? [])) selected @endif>
                  {{ $item['label'] }} </option>
              @endforeach
            </select>
          </div>
        @endif
        @if (in_array('parent', $fillable))
          <div class="input-group input-group-sm mb-2">
            <div class="input-group-prepend">
              <span class="input-group-text">父本</span>
            </div>
            <input type="number" class="form-control text-right" placeholder="parent" name="parent"
              value="{{ $content['parent'] ?? 0 }}">
          </div>
        @endif
        @if (in_array('order', $fillable))
          <div class="input-group input-group-sm mb-2">
            <div class="input-group-prepend">
              <span class="input-group-text">排序</span>
            </div>
            <input type="number" class="form-control text-right" placeholder="parent" name="parent"
              value="{{ $content['order'] ?? 0 }}">
          </div>
        @endif
        @foreach ($options['content.form.' . $prefix] ?? [] as $item)
          {{ $item['label'] }}
        @endforeach
        @section('content-item-right-append') @show
        <div class="card card-xs mb-2" data-role="category-container">
          <div class="card-header">目录</div>
          @include('_shared.list-group', [
              'name' => 'mids',
              'data' => $categories,
              'class' => 'list-group-flush list-group-xs',
              'style' => 'position: relative;max-height: 260px;',
              'itemClass' => 'list-group-item-action',
              'itemStyle' => '',
              'props' => ['label' => 'name', 'value' => 'mid'],
              'input' => 'checkbox',
              'checked' => $content['mids'] ?? [],
          ])
        </div>
        <div class="card card-xs mb-2">
          <div class="card-header">
            标签
          </div>
          <div class="input-group input-group-sm mb-0">
            <input type="text" class="form-control">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button">Submit</button>
            </div>
          </div>
          <div class="card-body">
            @foreach ($tags as $index => $item)
              @if ($index === '_logs')
                @php unset($item); @endphp
                @continue
              @endif
              <div class="form-check form-check-inline" title="{{ $item['name'] }}">
                <input class="form-check-input" type="checkbox" name="mids" value="{{ $item['mid'] }}"
                  @if (in_array($item['mid'], $content['mids'] ?? [])) checked @endif>
                <label class="form-check-label badge badge-dark">{{ $item['name'] }}</label>
              </div>
            @endforeach
          </div>
        </div>
        <div class="input-group input-group-sm mb-2">
          <div class="input-group-prepend" onclick="$('#file_upload').click()">
            <button class="btn btn-outline-secondary" type="button">
              <span>上传</span>
            </button>
          </div>
          <input type="text" class="form-control text-right" disabled>
          <input type="file" id="file_upload" class="form-control-file d-none" accept=".json,.md">
          <div class="input-group-append">
            <span class="input-group-text"><i class="fa-solid fa-cloud-arrow-up"></i></span>
          </div>
        </div>
        <div class="btn-group btn-group-sm w-100 mb-2" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-sm mb-1 btn-primary" id="form_submit">Submit</button>
          <button type="button" class="btn btn-sm mb-1 btn-success" id="form_staging">Staging</button>
          <button type="button" class="btn btn-sm mb-1 btn-warning" id="form_publish">Publish</button>
        </div>
      </div>
    </form>
  </div>
@endsection
@section('scripts')
  <script>
    require.config({
      paths: {
        vs: '/public/vendor/monaco-editor/min/vs'
      }
    });
    require(['vs/editor/editor.main'], function() {
      const default_value = $data.options['content.text.{{ $prefix }}'] || $data.options[
        'content.text.default'];
      console.log(default_value)
      const isStringText = typeof default_value == 'string';
      const options = {};
      if (!isStringText) {
        const text = JSON.stringify($data.content.text || default_value, null, '\t');
        const modelUri = monaco.Uri.parse("json://grid/settings.json");
        const jsonModel = monaco.editor.createModel(text, "json");
        options.model = jsonModel;
        options.language = 'json';
      } else {
        options.language = 'markdown';
        options.value = $data.content.text || default_value;
      }
      console.log('_view.content-form ~ options', options);
      var editor = monaco.editor.create(document.getElementById('monaco_container'), {
        // value: JSON.stringify($data.content),
        ...defaultOptions.monacoEditor,
        ...options,
        theme: 'vs-dark',
        // automaticLayout: true,
        // lineNumbers: "off",
        // roundedSelection: false,
        // scrollBeyondLastLine: false,
        // readOnly: false,
      });
      // TODO monaco-editor 打开大纲窗口
      var myCondition1 = editor.createContextKey(
        /*key name*/
        "myCondition1",
        /*default value*/
        false
      );
      var myCondition2 = editor.createContextKey(
        /*key name*/
        "myCondition2",
        /*default value*/
        false
      );
      editor.addCommand(
        monaco.KeyCode.Enter,
        function() {
          // services available in `ctx`
          console.log("my command is executing!");
        },
        "myCondition1 && myCondition2"
      );


      $("#form_submit").on('click', function(e) {
        const postData = {
          ...$data.content,
          mids: [],
        };
        try {
          postData.text = JSON.parse(editor.getValue());
        } catch (err) {
          postData.text = editor.getValue();
        }
        // console.log(postData);
        // if (['json'].includes(options.language)) {
        //   postData.text = JSON.parse(editor.getValue());
        // } else {
        //   postData.text = editor.getValue();
        // }
        $('#content_item_form').serializeArray().forEach(item => {
          if (item.name == 'mids') postData.mids.push(item.value);
          else postData[item.name] = item.value
        });
        // console.log(postData);
        axios({
          url: "/api/{{ $prefix }}/{{ empty($content[$primaryKey]) ? 'insert_content_item' : 'update_content_item' }}",
          method: "post",
          data: postData,
        }).then(res => {
          res = res.data;
          console.log(res);
          if (res.status === 200) {
            $toast.success("{{ empty($content[$primaryKey]) ? '新增' : '修改' }}成功！");
            if (!postData['{{ $primaryKey }}']) {
              window.location.href = "/{{ $prefix }}/content-form/" +
                res.data['{{ $primaryKey }}'];
            }
          } else {
            Promise.reject(res);
          }
        }).catch(err => {
          $toast.danger("{{ empty($content[$primaryKey]) ? '新增' : '修改' }}失败！");
        }).finally(() => {})
      })
      $("#form_staging").on('click', function(e) {
        console.log($('#content_item_form').serializeArray())
      })
      $("#form_publish").on('click', function(e) {
        console.log($('#content_item_form').serializeArray())
      })
      $('#file_upload').on('change', function(e) {
        const file = $(this)[0].files[0];
        $(this).prev().val(file.name)
        file.extension = file.name.substring(file.name.lastIndexOf(".") + 1);
        // console.log(file);
        $("#content_item_form [name=title]").val(file.name.substring(0, file.name.length - file.extension.length -
          1))
        var reader = new FileReader(); //新建一个FileReader
        reader.readAsText(file, "UTF-8"); //读取文件
        reader.onload = function(evt) { //读取完文件之后会回来这里
          let fileString = evt.target.result; // 读取文件内容
          if (!file.type) {
            if (file.extension === 'md') {
              fileString = editor.getValue() + fileString
            }
          }
          editor.setValue(fileString);
        }
      })
    });
  </script>
  <script>
    $(document).ready(function() {
      $("[data-role='category-container'] .list-group-flush").each(function(index, element) {
        new PerfectScrollbar(element, {
          wheelSpeed: 2,
          wheelPropagation: true,
          minScrollbarLenghth: 20,
        });
      })

    })
  </script>
@endsection
