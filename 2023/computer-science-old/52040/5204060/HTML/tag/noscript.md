# noscript - HTML

`noscript` 用来定义在脚本未被执行时的替代内容（文本）。

此标签可被用于可识别 `<script>` 标签但无法支持其中的脚本的浏览器。

```html
<body>
  <script type="text/javascript">
    document.write("Hello World!");
  </script>
  <noscript>Your browser does not support JavaScript!</noscript>
</body>
```

以上代码，当浏览器不支持脚本，则会显示 `Your browser does not support JavaScript!`

此功能也可用于统计浏览器对脚本的支持情况。如下:

```html
<!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe
    src="https://www.googletagmanager.com/ns.html?id=GTM-******"
    height="0"
    width="0"
    style="display:none; visibility:hidden;"
  >
  </iframe>
</noscript>
```
