## [¶](https://element.eleme.cn/#/zh-CN/component/avatar#avatar-tou-xiang) Avatar 头像

用图标、图片或者字符的形式展示用户或事物信息。

### [¶](https://element.eleme.cn/#/zh-CN/component/avatar#ji-ben-yong-fa) 基本用法

通过 `shape` 和 `size` 设置头像的形状和大小。

### [¶](https://element.eleme.cn/#/zh-CN/component/avatar#zhan-shi-lei-xing) 展示类型

支持三种类型：图标、图片和字符

![](https://cube.elemecdn.com/0/88/03b0d39583f48206768a7534e55bcpng.png)

user

### [¶](https://element.eleme.cn/#/zh-CN/component/avatar#tu-pian-jia-zai-shi-bai-de-fallback-xing-wei) 图片加载失败的 fallback 行为

当展示类型为图片的时候，图片加载失败的 fallback 行为

![](https://empty/)

### [¶](https://element.eleme.cn/#/zh-CN/component/avatar#tu-pian-ru-he-gua-ying-rong-qi-kuang) 图片如何适应容器框

当展示类型为图片的时候，使用 `fit` 属性定义图片如何适应容器框，同原生 [object-fit](https://developer.mozilla.org/en-US/docs/Web/CSS/object-fit)。

fill ![](https://fuss10.elemecdn.com/e/5d/4a731a90594a4af544c0c25941171jpeg.jpeg)

contain ![](https://fuss10.elemecdn.com/e/5d/4a731a90594a4af544c0c25941171jpeg.jpeg)

cover ![](https://fuss10.elemecdn.com/e/5d/4a731a90594a4af544c0c25941171jpeg.jpeg)

none ![](https://fuss10.elemecdn.com/e/5d/4a731a90594a4af544c0c25941171jpeg.jpeg)

scale-down ![](https://fuss10.elemecdn.com/e/5d/4a731a90594a4af544c0c25941171jpeg.jpeg)

### [¶](https://element.eleme.cn/#/zh-CN/component/avatar#attributes) Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| icon | 设置头像的图标类型，参考 Icon 组件 | string |  |  |
| size | 设置头像的大小 | number/string | number / large / medium / small | large |
| shape | 设置头像的形状 | string | circle / square | circle |
| src | 图片头像的资源地址 | string |  |  |
| srcSet | 以逗号分隔的一个或多个字符串列表表明一系列用户代理使用的可能的图像 | string |  |  |
| alt | 描述图像的替换文本 | string |  |  |
| fit | 当展示类型为图片的时候，设置图片如何适应容器框 | string | fill / contain / cover / none / scale-down | cover |

### [¶](https://element.eleme.cn/#/zh-CN/component/avatar#events) Events

| 事件名 | 说明 | 回调参数 |
| --- | --- | --- |
| error | 图片类头像加载失败的回调， 返回 false 会关闭组件默认的 fallback 行为 | (e: Event) |

### [¶](https://element.eleme.cn/#/zh-CN/component/avatar#slot) Slot

| 名称 | 说明 |
| --- | --- |
| default | 自定义头像展示内容 |