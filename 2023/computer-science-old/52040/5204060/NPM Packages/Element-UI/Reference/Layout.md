## [¶](https://element.eleme.cn/#/zh-CN/component/layout#layout-bu-ju) Layout 布局

通过基础的 24 分栏，迅速简便地创建布局。

### [¶](https://element.eleme.cn/#/zh-CN/component/layout#ji-chu-bu-ju) 基础布局

使用单一分栏创建基础的栅格布局。

### [¶](https://element.eleme.cn/#/zh-CN/component/layout#fen-lan-jian-ge) 分栏间隔

分栏之间存在间隔。

### [¶](https://element.eleme.cn/#/zh-CN/component/layout#hun-he-bu-ju) 混合布局

通过基础的 1/24 分栏任意扩展组合形成较为复杂的混合布局。

### [¶](https://element.eleme.cn/#/zh-CN/component/layout#fen-lan-pian-yi) 分栏偏移

支持偏移指定的栏数。

### [¶](https://element.eleme.cn/#/zh-CN/component/layout#dui-qi-fang-shi) 对齐方式

通过 `flex` 布局来对分栏进行灵活的对齐。

### [¶](https://element.eleme.cn/#/zh-CN/component/layout#xiang-ying-shi-bu-ju) 响应式布局

参照了 Bootstrap 的 响应式设计，预设了五个响应尺寸：`xs`、`sm`、`md`、`lg` 和 `xl`。

### [¶](https://element.eleme.cn/#/zh-CN/component/layout#ji-yu-duan-dian-de-yin-cang-lei) 基于断点的隐藏类

Element 额外提供了一系列类名，用于在某些条件下隐藏元素。这些类名可以添加在任何 DOM 元素或自定义组件上。如果需要，请自行引入以下文件：

```
import 'element-ui/lib/theme-chalk/display.css';
```

包含的类名及其含义为：

-   `hidden-xs-only` - 当视口在 `xs` 尺寸时隐藏
-   `hidden-sm-only` - 当视口在 `sm` 尺寸时隐藏
-   `hidden-sm-and-down` - 当视口在 `sm` 及以下尺寸时隐藏
-   `hidden-sm-and-up` - 当视口在 `sm` 及以上尺寸时隐藏
-   `hidden-md-only` - 当视口在 `md` 尺寸时隐藏
-   `hidden-md-and-down` - 当视口在 `md` 及以下尺寸时隐藏
-   `hidden-md-and-up` - 当视口在 `md` 及以上尺寸时隐藏
-   `hidden-lg-only` - 当视口在 `lg` 尺寸时隐藏
-   `hidden-lg-and-down` - 当视口在 `lg` 及以下尺寸时隐藏
-   `hidden-lg-and-up` - 当视口在 `lg` 及以上尺寸时隐藏
-   `hidden-xl-only` - 当视口在 `xl` 尺寸时隐藏

### [¶](https://element.eleme.cn/#/zh-CN/component/layout#row-attributes) Row Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| gutter | 栅格间隔 | number | — | 0 |
| type | 布局模式，可选 flex，现代浏览器下有效 | string | — | — |
| justify | flex 布局下的水平排列方式 | string | start/end/center/space-around/space-between | start |
| align | flex 布局下的垂直排列方式 | string | top/middle/bottom | — |
| tag | 自定义元素标签 | string | \* | div |

### [¶](https://element.eleme.cn/#/zh-CN/component/layout#col-attributes) Col Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| span | 栅格占据的列数 | number | — | 24 |
| offset | 栅格左侧的间隔格数 | number | — | 0 |
| push | 栅格向右移动格数 | number | — | 0 |
| pull | 栅格向左移动格数 | number | — | 0 |
| xs | `<768px` 响应式栅格数或者栅格属性对象 | number/object (例如： {span: 4, offset: 4}) | — | — |
| sm | `≥768px` 响应式栅格数或者栅格属性对象 | number/object (例如： {span: 4, offset: 4}) | — | — |
| md | `≥992px` 响应式栅格数或者栅格属性对象 | number/object (例如： {span: 4, offset: 4}) | — | — |
| lg | `≥1200px` 响应式栅格数或者栅格属性对象 | number/object (例如： {span: 4, offset: 4}) | — | — |
| xl | `≥1920px` 响应式栅格数或者栅格属性对象 | number/object (例如： {span: 4, offset: 4}) | — | — |
| tag | 自定义元素标签 | string | \* | div |