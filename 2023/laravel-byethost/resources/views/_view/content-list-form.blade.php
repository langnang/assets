@extends($prefix . '.layout')
@section('content')
  <div class="container">
    @include('_shared.content-header', [
        'prefix' => $prefix,
        'metas' => $metas ?? [],
        'current_page' => $current_page ?? 1,
        'content' => $content ?? [],
    ])
  </div>
  <div class="container">
    <form class="row" id="content_list_form">
      <div class="col-12 col-md-9">
        @section('content-left-prepend') @show
        <ul class="nav nav-tabs nav-fill mb-2" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="list-tab" data-toggle="tab" data-target="#list" type="button" role="tab"
              aria-controls="list" aria-selected="true">分页</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link disabled" id="section-tab" data-toggle="tab" data-target="#section" type="button"
              role="tab" aria-controls="section" aria-selected="false">分块</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="file-tab" data-toggle="tab" data-target="#file" type="button" role="tab"
              aria-controls="file" aria-selected="false">文件</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
            @section('content-left') @include('_shared.content-list', [
                'prefix' => $prefix,
                'data' => $contents ?? [],
                'current_page' => $current_page ?? 1,
                'last_page' => $last_page ?? 1,
                'query' => $query ?? [],
            ]) @show
          </div>
          <div class="tab-pane fade" id="section" role="tabpanel" aria-labelledby="section-tab">
          </div>
          <div class="tab-pane fade" id="file" role="tabpanel" aria-labelledby="file-tab">
            <div class="row">
              <div class="col">
                <button type="button" class="btn btn-secondary w-100"
                  onclick="$('#file_markdown').click()">Markdown</button>
                <input type="file" id="file_markdown" class="form-control-file d-none" accept=".md">
              </div>
              <div class="col">
                <button type="button" class="btn btn-secondary w-100">JSON</button>
                <input type="file" id="file_json" class="form-control-file d-none" accept=".json">
              </div>
              <div class="col">
                <button type="button" class="btn btn-secondary w-100">Excel</button>
                <input type="file" id="file_excel" class="form-control-file d-none" accept=".json">
              </div>
            </div>
          </div>
        </div>

        @section('content-left-append') @show
      </div>
      <div class="col-12 col-md-3">
        @section('content-right-prepend') @show
        <div class="card card-xs mb-2" data-role="category-container">
          <div class="card-header">目录</div>
          @include('_shared.list-group', [
              'name' => 'mids',
              'data' => $categories,
              'class' => 'list-group-flush list-group-xs',
              'style' => 'position: relative;max-height: 328px;',
              'itemClass' => 'list-group-item-action',
              'itemStyle' => '',
              'props' => ['label' => 'name', 'value' => 'mid'],
              'input' => 'checkbox',
              // 'checked' => $content['mids'] ?? [],
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
                <input class="form-check-input" type="checkbox" name="mids" value="{{ $item['mid'] }}">
                <label class="form-check-label badge badge-dark">{{ $item['name'] }}</label>
              </div>
            @endforeach
          </div>
        </div>
        @section('content-right-append') @show
        <div class="form-group form-group-sm mb-3" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-sm btn-primary" id="form_submit">Submit</button>
          <button type="button" class="btn btn-sm btn-warning" id="form_staging">Staging</button>
          <button type="button" class="btn btn-sm btn-warning" id="form_publish">Publish</button>
        </div>
      </div>
    </form>


  </div>
@endsection

@section('scripts')
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
  <script>
    $(document).ready(function() {
      $('#list_checkall').on('click', function(e) {
        console.log(e);
        console.log($(this).is(':checked') == true)
        if ($(this).is(':checked') == true) {
          $('[name=cids]').attr('checked', true);
        } else {
          $('[name=cids]').attr('checked', false);
        }
      })

      $('#list_type,#list_status').on('change', function() {
        const value = $(this).val()
        if (!value) return;
        const name = $(this).attr('name')
        console.log({
          value,
          name
        })
        $(`[name='${name}']`).val(value)
      })

      $('#form_submit').on('click', function() {
        const data = [];
        console.log($data.contents);
        const mids = [];
        $("[name='mids']:checked").each(function() {
          mids.push($(this).val());
        });
        $("[name='cids']:checked").each(function() {
          const cid = $(this).val();
          data.push({
            cid,
            title: $("[data-role='content-" + cid + "'] [name='title']").val(),
            slug: $("[data-role='content-" + cid + "'] [name='slug']").val(),
            ico: $("[data-role='content-" + cid + "'] [name='ico']").val(),
            type: $("[data-role='content-" + cid + "'] [name='type']").val(),
            status: $("[data-role='content-" + cid + "'] [name='status']").val(),
            mids,
          })
        });
        console.log(data);
        axios({
          url: "/api/{{ $prefix }}/update_content_list",
          method: "post",
          data: {
            data
          },
        }).then(res => {
          res = res.data;
          console.log(res);
          if (res.status === 200) {
            $toast.success("修改成功！");
          } else {
            Promise.reject(res);
          }
        }).catch(err => {
          $toast.danger("修改失败！");
        }).finally(() => {})
      })
      $('#form_staging').on('click', function() {})
      $('#form_publish').on('click', function() {})
    })
  </script>
@endsection
