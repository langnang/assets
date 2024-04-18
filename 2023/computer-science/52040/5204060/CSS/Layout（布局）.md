# 布局 - CSS

> https://juejin.im/post/599970f4518825243a78b9d5

![](https://user-gold-cdn.xitu.io/2017/8/21/395302ae7949d78570a6102e5ded1ff0?imageslim)

## 文档流布局

display

这是最基本的布局方式，就是按照文档的顺序一个一个显示出来，块元素独占一行，行内元素共享一行

```sass
.display{
    &-none{// 隐藏元素
        display:none;
    }
    &-block{// 块级元素，此元素前后会带有换行符。
        display:block;
    }
    &-inline{// 内联元素，元素前后没有换行符。
        display:inline;
    }
    &-inline-block{// 行内块元素
        display:inline-block;
    }
}
```

## 浮动布局

float
浮动方式布局就是使用 float 属性，使元素脱离文档流，浮动起来。

```sass
.float{
    &-left{
        float:left;
    }
    &-right{
        float:right;
    }
}
```

## 定位布局

position
我们也可以通过 position 属性来进行定位

```sass
.position{
    &-static{// 默认，未定位
        position:static;
    }
    &-relative{// 相对定位
        position:relative;
    }
    &-absolute{// 绝对定位
        position:absolute;
    }
    &-fixed{// 固定定位
        position:fixed;
    }
}
```

## 响应式布局

```sass
.grid{
    @media only screen and (min-width:1280px){

    }
}
```

## 弹性布局

```sass
.flex{
    display:flex;
    display:inline-flex;
    &-container{// 容器

    }
    &-item{// 项目

    }
}
```

## 居中布局

## 圣杯布局

## 双飞翼布局

## 瀑布流布局

## Fixed Bottom - 固定底部布局

内容不足浏览器窗口高度时，底部内容需要固定在底部。当内容超出了浏览器窗口高度，就会随着内容往后推。

```sass
.fixed-bottom{
    .footer{}
}
```
