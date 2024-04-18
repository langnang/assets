## [¶](https://element.eleme.cn/#/zh-CN/component/alert#alert-jing-gao) Alert 警告

用于页面中展示重要的提示信息。

### [¶](https://element.eleme.cn/#/zh-CN/component/alert#ji-ben-yong-fa) 基本用法

页面中的非浮层元素，不会自动消失。

### [¶](https://element.eleme.cn/#/zh-CN/component/alert#zhu-ti) 主题

Alert 组件提供了两个不同的主题：`light`和`dark`。

### [¶](https://element.eleme.cn/#/zh-CN/component/alert#zi-ding-yi-guan-bi-an-niu) 自定义关闭按钮

自定义关闭按钮为文字或其他符号。

### [¶](https://element.eleme.cn/#/zh-CN/component/alert#dai-you-icon) 带有 icon

表示某种状态时提升可读性。

### [¶](https://element.eleme.cn/#/zh-CN/component/alert#wen-zi-ju-zhong) 文字居中

使用 `center` 属性让文字水平居中。

### [¶](https://element.eleme.cn/#/zh-CN/component/alert#dai-you-fu-zhu-xing-wen-zi-jie-shao) 带有辅助性文字介绍

包含标题和内容，解释更详细的警告。

### [¶](https://element.eleme.cn/#/zh-CN/component/alert#dai-you-icon-he-fu-zhu-xing-wen-zi-jie-shao) 带有 icon 和辅助性文字介绍

### [¶](https://element.eleme.cn/#/zh-CN/component/alert#attributes) Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| title | 标题 | string | — | — |
| type | 主题 | string | success/warning/info/error | info |
| description | 辅助性文字。也可通过默认 slot 传入 | string | — | — |
| closable | 是否可关闭 | boolean | — | true |
| center | 文字是否居中 | boolean | — | true |
| close-text | 关闭按钮自定义文本 | string | — | — |
| show-icon | 是否显示图标 | boolean | — | false |
| effect | 选择提供的主题 | string | light/dark | light |

### [¶](https://element.eleme.cn/#/zh-CN/component/alert#slot) Slot

| Name | Description |
| --- | --- |
| — | 描述 |
| title | 标题的内容 |

### [¶](https://element.eleme.cn/#/zh-CN/component/alert#events) Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| close | 关闭alert时触发的事件 | — |