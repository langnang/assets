{{-- 缩略图 --}}
{{-- 通过缩略图组件扩展 Bootstrap 的 栅格系统，可以很容易地以网格的方式展示图像、视频、文本等内容。 --}}
<div class="thumbnail">
  @isset($thumbnail['img'])
    <img src="..." alt="...">
  @endisset
  <div class="caption">
    <h3>Thumbnail label</h3>
    <p>...</p>
    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" </div>
  </div>
</div>
