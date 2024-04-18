# 瀑布流布局 - CSS Layout

瀑布流一般来说都是宽度一致，但是高度是根据图片自适应的。并且图片的位置也是根据在上方图片的位置而定的。

其实最好实现瀑布流布局的办法就是用 CSS 的列属性套件，这套属性大多数都是用于排版杂志中的文本列。但是用于布局瀑布流也是特别实用哦。因为以前需要实现瀑布流，就必须有 JavaScript 的辅助来计算图片高度然后决定每张图片的定位和位置，所以现在有了列属性就可以使用纯 CSS 实现了。

**实现原理：**
实现这个布局，首选我们需要把所有的内容先包裹在一个 div 元素里面，然后给这个元素 column-width 和 column-gap 属性。
然后，为了防止任何元素被分割到两个列之间，将 column-break-inside: avoid 添加到各个元素中。

```html
<body>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    .columns {
      column-width: 320px;
      column-gap: 15px;
      width: 90%;
      max-width: 1100px;
      margin: 50px auto;
    }

    .columns figure {
      display: inline-block;
      box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
      column-break-inside: avoid;
      border-radius: 8px;
    }

    .columns figure img {
      width: 100%;
      height: auto;
      margin-bottom: 15px;
      border-radius: 8px;
    }
  </style>
  <header></header>
  <main>
    <div class="columns">
      <figure>
        <img src="https://source.unsplash.com/random?city" alt="" />
      </figure>
      <figure>
        <img src="https://source.unsplash.com/random?night" alt="" />
      </figure>
      <figure>
        <img src="https://source.unsplash.com/random?developer" alt="" />
      </figure>
      <figure>
        <img src="https://source.unsplash.com/random?building" alt="" />
      </figure>
      <figure>
        <img src="https://source.unsplash.com/random?water" alt="" />
      </figure>
      <figure>
        <img src="https://source.unsplash.com/random?coding" alt="" />
      </figure>
      <figure>
        <img src="https://source.unsplash.com/random?stars" alt="" />
      </figure>
      <figure>
        <img src="https://source.unsplash.com/random?forest" alt="" />
      </figure>
      <figure>
        <img src="https://source.unsplash.com/random?girls" alt="" />
      </figure>
      <figure>
        <img src="https://source.unsplash.com/random?working" alt="" />
      </figure>
    </div>
  </main>
  <footer></footer>
</body>
```
