## [¶](https://element.eleme.cn/#/zh-CN/component/image#image-tu-pian) Image 图片

图片容器，在保留原生img的特性下，支持懒加载，自定义占位、加载失败等

### [¶](https://element.eleme.cn/#/zh-CN/component/image#ji-chu-yong-fa) 基础用法

fill

![](https://fuss10.elemecdn.com/e/5d/4a731a90594a4af544c0c25941171jpeg.jpeg)

contain

![](https://fuss10.elemecdn.com/e/5d/4a731a90594a4af544c0c25941171jpeg.jpeg)

cover

![](https://fuss10.elemecdn.com/e/5d/4a731a90594a4af544c0c25941171jpeg.jpeg)

none

![](https://fuss10.elemecdn.com/e/5d/4a731a90594a4af544c0c25941171jpeg.jpeg)

scale-down

![](https://fuss10.elemecdn.com/e/5d/4a731a90594a4af544c0c25941171jpeg.jpeg)

### [¶](https://element.eleme.cn/#/zh-CN/component/image#zhan-wei-nei-rong) 占位内容

### [¶](https://element.eleme.cn/#/zh-CN/component/image#jia-zai-shi-bai) 加载失败

### [¶](https://element.eleme.cn/#/zh-CN/component/image#lan-jia-zai) 懒加载

![](https://fuss10.elemecdn.com/a/3f/3302e58f9a181d2509f3dc0fa68b0jpeg.jpeg)

![](https://fuss10.elemecdn.com/1/34/19aa98b1fcb2781c4fba33d850549jpeg.jpeg)

### [¶](https://element.eleme.cn/#/zh-CN/component/image#da-tu-yu-lan) 大图预览

![](https://fuss10.elemecdn.com/e/5d/4a731a90594a4af544c0c25941171jpeg.jpeg)

### [¶](https://element.eleme.cn/#/zh-CN/component/image#attributes) Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| src | 图片源，同原生 | string | — | \- |
| fit | 确定图片如何适应容器框，同原生 [object-fit](https://developer.mozilla.org/en-US/docs/Web/CSS/object-fit) | string | fill / contain / cover / none / scale-down | \- |
| alt | 原生 alt | string | \- | \- |
| referrer-policy | 原生 referrerPolicy | string | \- | \- |
| lazy | 是否开启懒加载 | boolean | — | false |
| scroll-container | 开启懒加载后，监听 scroll 事件的容器 | string / HTMLElement | — | 最近一个 overflow 值为 auto 或 scroll 的父元素 |
| preview-src-list | 开启图片预览功能 | Array | — | \- |
| z-index | 设置图片预览的 z-index | Number | — | 2000 |

### [¶](https://element.eleme.cn/#/zh-CN/component/image#events) Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| load | 图片加载成功触发 | (e: Event) |
| error | 图片加载失败触发 | (e: Error) |

### [¶](https://element.eleme.cn/#/zh-CN/component/image#slots) Slots

| 名称 | 说明 |
| --- | --- |
| placeholder | 图片未加载的占位内容 |
| error | 加载失败的内容 |