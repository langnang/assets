<link rel="stylesheet" href="/public/vendor/bootstrap/css/bootstrap.min.css">
<div class="container" data-role="content">
  <div class="jumbotron text-center">
    <h1>{{ $content->title }}</h1>
  </div>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Collect</th>
        <th>Collected</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">入口页</th>
        <td id="collect_scan_urls_num">0</td>
        <td id="collected_scan_urls_num">0</td>
      </tr>
      <tr>
        <th scope="row">列表页</th>
        <td id="collect_list_urls_num">0</td>
        <td id="collected_list_urls_num">0</td>
      </tr>
      <tr>
        <th scope="row">内容页</th>
        <td id="collect_content_urls_num">0</td>
        <td id="collected_content_urls_num">0</td>
      </tr>
      <tr>
        <th scope="row">汇总</th>
        <td id="collect_urls_num">0</td>
        <td id="collected_urls_num">0</td>
      </tr>
    </tbody>
  </table>
  <script>
    function updateNumTable(...args) {
      document.getElementById("collect_scan_urls_num").innerHTML = args[0];
      document.getElementById("collected_scan_urls_num").innerHTML = args[1];
      document.getElementById("collect_list_urls_num").innerHTML = args[2];
      document.getElementById("collected_list_urls_num").innerHTML = args[3];
      document.getElementById("collect_content_urls_num").innerHTML = args[4];
      document.getElementById("collected_content_urls_num").innerHTML = args[5];
      document.getElementById("collect_urls_num").innerHTML = args[6];
      document.getElementById("collected_urls_num").innerHTML = args[7];
    }
  </script>
  <table id="extract_page_table" class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        @foreach ($content->fields as $field)
          <th>{{ $field->name }}</th>
        @endforeach
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
  <script>
    function prependExtractTable(...args) {
      var table = document.getElementById("extract_page_table");
      var newRow = table.insertRow(); //创建新行
      args.forEach((element, index) => {
        var newCell1 = newRow.insertCell(index); //创建新单元格
        newCell1.innerHTML = `<td>${element}</td>`; //单元格内的内容
      });
    }

    function prependTableRow(row) {
      row = JSON.parse(row);
      let columns = [
        @php
          foreach ($content->fields as $field) {
              echo '"' . $field->name . '",';
          }
        @endphp
      ];
      // console.log("🚀 ~ file: index.blade.php:100 ~ prependTableRow ~ row:", row, columns);
      let html = "<tr>";
      columns.forEach((name) => {
        html += `<td>${row[name]}</td>`
      })
      html += "</tr>";
      $('#extract_page_table tbody').prepend(html)
    }
  </script>
  <div class="accordion" id="accordion">
    @foreach ([
        'on_start' => '爬虫初始化时调用, 用来指定一些爬取前的操作',
        'is_anti_spider' => '判断当前网页是否被反爬虫了',
        'on_download_page' => '在一个网页下载完成之后调用. 主要用来对下载的网页进行处理.',
        'on_download_attached_page' => '在一个网页下载完成之后调用. 主要用来对下载的网页进行处理.',
        'on_fetch_url' => '在一个网页获取到URL之后调用. 主要用来对获取到的URL进行处理.',
        'on_add_url' => '在添加URL到待爬虫队列之前调用',
        'on_scan_page' => '在爬取到入口url的内容之后, 添加新的url到待爬队列之前调用',
        'on_list_page' => '在爬取到入口url的内容之后, 添加新的url到待爬队列之前调用.',
        'on_content_page' => '在爬取到入口url的内容之后, 添加新的url到待爬队列之前调用. ',
        'on_extract_page' => '在一个网页的所有field抽取完成之后, 可能需要对field进一步处理, 以发布到自己的网站',
    ] as $id => $description)
      <div class="card">
        <div class="card-header" id="heading_{{ $id }}">
          <a class="" data-toggle="collapse" data-target="#collapse_{{ $id }}" aria-expanded="true"
            aria-controls="collapse_{{ $id }}">
            {{ $id }}
          </a>
          <small> // {{ $description }}</small>
        </div>
        <div id="collapse_{{ $id }}" class="collapse show" aria-labelledby="heading_{{ $id }}"
          data-parent="#accordion">
          <div class="card-body">
            Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the
            <code>.show</code> class.
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@php
  // 由于laravel blade @extends 会设置页面header
  // 会造成下面代码报错
  // 因此只能复制布局的页面结构
  set_time_limit(0); //设置程序执行时间
  ignore_user_abort(true); //设置断开连接继续执行
  header('X-Accel-Buffering: no'); //关闭buffer
  ob_start(); //打开输出缓冲控制
  $content->spider->start();
  ob_end_flush();
@endphp
