@php
  $data = $data ?? [];
@endphp
<script src="/public/vendor/axios/axios.min.js"></script>
<script src="/public/vendor/jquery/jquery.min.js"></script>
<script src="/public/vendor/popper.js/popper.min.js"></script>

<script src="/public/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/public/vendor/patternfly-bootstrap-treeview/bootstrap-treeview.min.js"></script>
{{-- 滚动条 --}}
<script src="/public/vendor/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
{{-- 占位图 --}}
<script src="/public/vendor/holderjs/holder.min.js"></script>
{{-- 图片懒加载 --}}
<script src="/public/vendor/lozad/lozad.min.js"></script>
<script>
  $(document).ready(function() {
    // const imgLazyLoader = lozad();
    lozad().observe();
  })
</script>
<script src="/public/vendor/animejs/anime.min.js"></script>
{{-- 代码高亮美化 --}}
<script src="/public/vendor/highlight.js/js/highlight.min.js"></script>
<script src="/public/vendor/highlightjs-copy/highlightjs-copy.min.js"></script>
{{-- 根据文章的标题和 H 标签自动生成目录 --}}
<script src="/public/vendor/tocbot/tocbot.min.js"></script>

<script>
  $(document).ready(function() {
    tocbot.init({
      ...defaultOptions.tocbot
    });
    hljs.addPlugin(
      new CopyButtonPlugin({
        hook: (text, el) => {
          let {
            replace,
            replacewith
          } = el.dataset;
          if (replace && replacewith) {
            return text.replace(replace, replacewith);
          }
          return text;
        },
        callback: (text, el) => {
          /* logs `gretel configure --key grtf32a35bbc...` */
          console.log(text);
        },
      })
    );
    hljs.highlightAll();
  })
</script>

<script src="/public/js/app.js"></script>
<script src="/public/js/default-options.js"></script>
@foreach ($data as $script)
  <script src="/public/vendor/{{ $script }}"></script>
@endforeach

<script>
  // Bootstrap中的Dropdown下拉菜单更改为悬停(hover)触发
  // $(document).ready(function() {
  //   $(document).off('click.bs.dropdown.data-api')
  //   $('.dropdown').mouseover(function() {
  //     $(this).addClass('open')
  //   }).mouseout(function() {
  //     $(this).removeClass('open')
  //   })
  // })
  $(document).ready(function() {
    // const $main = $('[data-role="main"]');
    // if ($main.length > 0) {
    //   new PerfectScrollbar($main[0]);
    // }
    // const $content = $('[data-role="content"]');
    // if ($content.length > 0) {
    // new PerfectScrollbar($content[0]);
    // }
    // const $aside = $('[data-role="aside"]');
    // if ($aside.length > 0) {
    //   new PerfectScrollbar($aside[0]);
    // }
  })
</script>
