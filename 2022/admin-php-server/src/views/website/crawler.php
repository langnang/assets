<?php
$site = new WebSiteModel(crawler_website_info($data));
?>
<? require_once __DIR__ . "/../../templates/bootstrap/header.php"; ?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">网址收录</h1>
      <form>
        <div class="form-group">
          <label>网址</label>
          <div class="input-group">
            <input type="text" class="form-control" name="url" value="<? echo $site->url; ?>" oninput="handleUrlChange(event)">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit">查询</button>
            </span>
          </div>
        </div>
        <div class="form-group">
          <label>标题</label>
          <input type="text" class="form-control" value="<? echo $site->title; ?>">
        </div>
        <div class="form-group">
          <label>关键字</label>
          <input type="text" class="form-control" value="<? echo $site->keywords; ?>">
        </div>
        <div class="form-group">
          <label>描述</label>
          <input type="text" class="form-control" value="<? echo $site->description; ?>">
        </div>
        <button type="button" class="btn btn-primary" onclick="handleSubmit()">提交收录</button>
      </form>
    </div>
  </div>
</div>
<script>
  function handleUrlChange(e) {
    $("button[type=button]").attr('disabled', true);
  }

  function handleSubmit() {
    $.ajax({
      method: "post",
      url: "/api/website/insert-draft",
      data: <? echo json_encode(array_filter((array)$site), JSON_UNESCAPED_UNICODE); ?>,
      dataType: "json",
      success: function(res) {
        if (res.status == 200) {
          alert("收录成功");
        } else {
          alert("收录失败");
        }
      }
    })
  }
</script>
<? require_once __DIR__ . "/../../templates/bootstrap/footer.php"; ?>