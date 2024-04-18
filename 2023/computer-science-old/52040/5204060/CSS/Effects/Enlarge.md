# 放大特效 - CSS Effects

## transform:scale

```html
<body>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    .img-wrapper img {
      transition: 0.3s linear;
      -webkit-transition: 0.3s linear;
    }

    .img-wrapper img:hover {
      transform: scale(1.1);
    }
  </style>
  <header></header>
  <main>
    <div class="img-wrapper">
      <img
        src="https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=1627279935,1855750361&fm=26&gp=0.jpg"
        alt=""
      />
    </div>
  </main>
  <footer></footer>
</body>
```
