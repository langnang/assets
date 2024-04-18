@php
  $data = $data ?? [];
@endphp
<footer class="@if (!($data['visible'] ?? true)) sr-only @endif" data-role="footer">
  <div class="container text-center">
    <div class="row mb-3">
      <p class="col-12 text-muted">
        Langnang. All rights reserved.
        <br>
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        <br>
        最好的投资，就是投资你自己
      </p>
    </div>
    <hr>
    <div class="row">
      <div class="col-3 text-muted">
        <h6 class="text-white">页面</h6>
        <p class="mb-0"> <a class="small text-reset text-decoration-none" href="/home/about">关于我们</a> </p>
        <p class="mb-0"> <a class="small text-reset text-decoration-none" href="/home/changelog">开发日志</a> </p>
        <p class="mb-0"> <a class="small text-reset text-decoration-none" href="/home/feedback">问题反馈</a> </p>
      </div>
      <div class="col-3 text-muted">
        <h6 class="text-white">帮助</h6>
        <p class="mb-0"> <a class="small text-reset text-decoration-none" href="/help/usage">使用手册</a> </p>
        <p class="mb-0"> <a class="small text-reset text-decoration-none" href="/help/development">开发文档</a> </p>
        <p class="mb-0"> <a class="small text-reset text-decoration-none" href="/help/templates">模板文件</a> </p>
      </div>
      <div class="col-3 text-muted">
        <h6 class="text-white">渠道</h6>

        <p class="mb-0"> <a class="small text-reset text-decoration-none" href="http://www.w3school.com.cn/"
            target="_blank">W3school</a>
        </p>
        <p class="mb-0"> <a class="small text-reset text-decoration-none" href="https://developer.mozilla.org/zh-CN/"
            target="_blank">MDN 官方教程</a>
        </p>
        <p class="mb-0"> <a class="small text-reset text-decoration-none" href="https://www.freecodecamp.org/"
            target="_blank">FreeCodeCamp
          </a>
        </p>
        <p class="mb-0"> <a class="small text-reset text-decoration-none" href="http://yun.itheima.com/"
            target="_blank">黑马程序员</a>
        </p>

      </div>
      <div class="col-3 text-muted">
        <h6 class="text-white">关联</h6>
      </div>
    </div>
  </div>
</footer>
