# 黑暗主题 - CSS Theme

## invert + hue-rotate

`filter: invert()` — 是从 `0` 到 `1` 的刻度，`1` 是从白变黑。
`filter: hue-rotate()` — 用于改变你元素的颜色，同时或多或少保持原本相同的色系。这个属性的值可以从 `0deg` 到 `360deg`。
在我们页面的 `body` 标签上添加这两个属性，我们就可以快速尝试把我们的网站变成"黑暗模式"。这里需要注意的是，如果 `body` 和 `html` 上没有设置 `background` 背景颜色，这个过滤就会不起效了哦。

```html
<body>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      height: 100vh;
      background: #fff;
    }

    body:hover {
      background: #232425;
      filter: invert(1) hue-rotate(270deg);
    }
  </style>
  <header></header>
  <main></main>
  <footer></footer>
</body>
```

**注意：** 使用 css 过滤器是无法完美切换黑暗模式的。不过使用 JavaScript 辅助就可以完美的切换黑暗模式。
