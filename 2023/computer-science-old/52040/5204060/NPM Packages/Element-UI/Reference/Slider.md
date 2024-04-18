## [¶](https://element.eleme.cn/#/zh-CN/component/slider#slider-hua-kuai) Slider 滑块

通过拖动滑块在一个固定区间内进行选择

### [¶](https://element.eleme.cn/#/zh-CN/component/slider#ji-chu-yong-fa) 基础用法

在拖动滑块时，显示当前值

### [¶](https://element.eleme.cn/#/zh-CN/component/slider#chi-san-zhi) 离散值

选项可以是离散的

### [¶](https://element.eleme.cn/#/zh-CN/component/slider#dai-you-shu-ru-kuang) 带有输入框

通过输入框设置精确数值

### [¶](https://element.eleme.cn/#/zh-CN/component/slider#fan-wei-xuan-ze) 范围选择

支持选择某一数值范围

### [¶](https://element.eleme.cn/#/zh-CN/component/slider#shu-xiang-mo-shi) 竖向模式

### [¶](https://element.eleme.cn/#/zh-CN/component/slider#zhan-shi-biao-ji) 展示标记

### [¶](https://element.eleme.cn/#/zh-CN/component/slider#attributes) Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| value / v-model | 绑定值 | number | — | 0 |
| min | 最小值 | number | — | 0 |
| max | 最大值 | number | — | 100 |
| disabled | 是否禁用 | boolean | — | false |
| step | 步长 | number | — | 1 |
| show-input | 是否显示输入框，仅在非范围选择时有效 | boolean | — | false |
| show-input-controls | 在显示输入框的情况下，是否显示输入框的控制按钮 | boolean | — | true |
| input-size | 输入框的尺寸 | string | large / medium / small / mini | small |
| show-stops | 是否显示间断点 | boolean | — | false |
| show-tooltip | 是否显示 tooltip | boolean | — | true |
| format-tooltip | 格式化 tooltip message | function(value) | — | — |
| range | 是否为范围选择 | boolean | — | false |
| vertical | 是否竖向模式 | boolean | — | false |
| height | Slider 高度，竖向模式时必填 | string | — | — |
| label | 屏幕阅读器标签 | string | — | — |
| debounce | 输入时的去抖延迟，毫秒，仅在`show-input`等于true时有效 | number | — | 300 |
| tooltip-class | tooltip 的自定义类名 | string | — | — |
| marks | 标记， key 的类型必须为 number 且取值在闭区间 `[min, max]` 内，每个标记可以单独设置样式 | object | — | — |

### [¶](https://element.eleme.cn/#/zh-CN/component/slider#events) Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| change | 值改变时触发（使用鼠标拖曳时，只在松开鼠标后触发） | 改变后的值 |
| input | 数据改变时触发（使用鼠标拖曳时，活动过程实时触发） | 改变后的值 |