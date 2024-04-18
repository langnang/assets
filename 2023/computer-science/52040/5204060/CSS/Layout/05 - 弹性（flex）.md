# 弹性布局（flex）

- [弹性父元素属性](#弹性父元素属性)
  - [位置`flex-direction`](#位置flex-direction)
  - [换行`flex-wrap`](#换行flex-wrap)
  - [`flex-flow`](#flex-flow)
  - [横轴对齐`justify-content`](#横轴对齐justify-content)
  - [纵轴对齐`align-items`](#纵轴对齐align-items)
  - [多轴对齐`align-content`](#多轴对齐align-content)
- [弹性子元素属性](#弹性子元素属性)
  - [顺序`order`](#顺序order)
  - [放大`flex-grow`](#放大flex-grow)
  - [缩小`flex-shrink`](#缩小flex-shrink)
  - [主轴空间`flex-basic`](#主轴空间flex-basic)
  - [单独对齐方式`align-self`](#单独对齐方式align-self)
- [参考](#参考)

## 弹性父元素属性

```css
.flex {
  display: flex;
}
.flex-il {
  display: inline-flex;
}
```

### 位置`flex-direction`

> flex-direction 属性决定主轴的方向（即项目的排列方向）

- `row`（默认值）：主轴为水平方向，起点在左端
- `row-reverse`：主轴为水平方向，起点在右端
- `column`：主轴为垂直方向，起点在上沿
- `column-reverse`：主轴为垂直方向，起点在下沿

### 换行`flex-wrap`

> flex-wrap 属性定义，如果一条轴线排不下，如何换行

- `nowrap`（默认）：不换行
- `wrap`：换行，第一行在上方
- `wrap-reverse`：换行，第一行在下方

### `flex-flow`

> flex-flow 属性是 flex-direction 属性和 flex-wrap 属性的简写形式，默认值为 row nowrap

### 横轴对齐`justify-content`

> justify-content 属性定义了项目在主轴上的对齐方式

- `flex-start`（默认值）：左对齐
- `flex-end`：右对齐
- `center`： 居中
- `space-between`：两端对齐，项目之间的间隔都相等。
- `space-around`：每个项目两侧的间隔相等。所以，项目之间的间隔比项目与边框的间隔大一倍。

### 纵轴对齐`align-items`

> align-items 属性定义项目在交叉轴上如何对齐

- `flex-start`：交叉轴的起点对齐。
- `flex-end`：交叉轴的终点对齐。
- `center`：交叉轴的中点对齐。
- `baseline`: 项目的第一行文字的基线对齐。
- `stretch`（默认值）：如果项目未设置高度或设为 auto，将占满整个容器的高度。

### 多轴对齐`align-content`

> align-content 属性定义了多根轴线的对齐方式
>
> 如果项目只有一根轴线，该属性不起作用

- `flex-start`：与交叉轴的起点对齐。
- `flex-end`：与交叉轴的终点对齐。
- `center`：与交叉轴的中点对齐。
- `space-between`：与交叉轴两端对齐，轴线之间的间隔平均分布。
- `space-around`：每根轴线两侧的间隔都相等。所以，轴线之间的间隔比轴线与边框的间隔大一倍。
- `stretch`（默认值）：轴线占满整个交叉轴。

## 弹性子元素属性

### 顺序`order`

> order 属性定义项目的排列顺序。数值越小，排列越靠前，默认为 0

### 放大`flex-grow`

> flex-grow 属性定义项目的放大比例，默认为 0，即如果存在剩余空间，也不放大

### 缩小`flex-shrink`

> flex-shrink 属性定义了项目的缩小比例，默认为 1，即如果空间不足，该项目将缩小

### 主轴空间`flex-basic`

> flex-basis 属性定义了在分配多余空间之前，项目占据的主轴空间（main size）

### 单独对齐方式`align-self`

> align-self 属性允许单个项目有与其他项目不一样的对齐方式，可覆盖 align-items 属性。默认值为 auto，表示继承父元素的 align-items 属性，如果没有父元素，则等同于 stretch

<link rel="stylesheet" type="text/css" href="./../../../../ln-of-css/dist/ln.css" />

```scss
.flex {
}
```

<div class="flex">

</div>

## 参考

- [Flex 布局教程:语法篇 - 阮一峰的网络日志](http://www.ruanyifeng.com/blog/2015/07/flex-grammar.html?utm_source=tuicool)
