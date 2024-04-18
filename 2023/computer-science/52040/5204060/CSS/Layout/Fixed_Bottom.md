# 底部固定布局 - CSS Layout

这种布局方式在后台管理系统中比较常见。
当我们内容不足浏览器窗口高度时，底部内容需要固定在底部。
当内容超出了浏览器窗口高度，就会随着内容往后推。

一般来说，应为页面底部是一个公用的组件，且内容基本固定，不会轻易修改，因此我们可假设其高度一定

## position + min-height

`min-height`设置页面的最低高度为$height(body) - height(footer)$，这样当页面高度小于`min-height`时，页面高度`height = min-height`

`position:absolute`绝对定位，相对于 static 定位以外的第一个父元素定位。设置`footer`其父元素`body{position:relative;}`以及`footer{bottom:-200px}`

```html
<body>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    body {
      position: relative;
      min-height: calc(100vh - 200px);
    }
    footer {
      position: absolute;
      bottom: -200px;
      height: 200px;
      width: 100%;
      background-color: #232425;
    }
  </style>
  <header></header>
  <main></main>
  <footer></footer>
</body>
```

**注意**：若页面存在水平滚动条，慎用

## flex

flexbox 中的`flex-grow`属性定义项目的放大比例，默认为 0，即如果存在剩余空间，也不放大。如果所有项目的`flex-grow`属性都为 1，则它们将等分剩余空间（如果有的话）。如果一个项目的`flex-grow`属性为 2，其他项目都为 1，则前者占据的剩余空间将比其他项多一倍。

因此，我们只需设置`main{flex-grow:1}`，那么它则会自动放大至剩余空间的大小

```html
<body>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      /* flex布局 */
      display: flex;
      /* 主轴方向：垂直方向 */
      flex-direction: column;
      /* 最小高度 */
      min-height: 100vh;
    }

    main {
      /* 存在剩余空间时的放大比例 */
      flex-grow: 1;
    }

    footer {
      height: 200px;
      width: 100%;
      background-color: #232425;
    }
  </style>
  <header></header>
  <main></main>
  <footer></footer>
</body>
```
