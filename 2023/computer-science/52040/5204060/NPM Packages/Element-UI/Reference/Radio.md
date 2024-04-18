## [¶](https://element.eleme.cn/#/zh-CN/component/radio#radio-dan-xuan-kuang) Radio 单选框

在一组备选项中进行单选

### [¶](https://element.eleme.cn/#/zh-CN/component/radio#ji-chu-yong-fa) 基础用法

由于选项默认可见，不宜过多，若选项过多，建议使用 Select 选择器。

### [¶](https://element.eleme.cn/#/zh-CN/component/radio#jin-yong-zhuang-tai) 禁用状态

单选框不可用的状态。

### [¶](https://element.eleme.cn/#/zh-CN/component/radio#dan-xuan-kuang-zu) 单选框组

适用于在多个互斥的选项中选择的场景

### [¶](https://element.eleme.cn/#/zh-CN/component/radio#an-niu-yang-shi) 按钮样式

按钮样式的单选组合。

### [¶](https://element.eleme.cn/#/zh-CN/component/radio#dai-you-bian-kuang) 带有边框

### [¶](https://element.eleme.cn/#/zh-CN/component/radio#radio-attributes) Radio Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| value / v-model | 绑定值 | string / number / boolean | — | — |
| label | Radio 的 value | string / number / boolean | — | — |
| disabled | 是否禁用 | boolean | — | false |
| border | 是否显示边框 | boolean | — | false |
| size | Radio 的尺寸，仅在 border 为真时有效 | string | medium / small / mini | — |
| name | 原生 name 属性 | string | — | — |

### [¶](https://element.eleme.cn/#/zh-CN/component/radio#radio-events) Radio Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| change | 绑定值变化时触发的事件 | 选中的 Radio label 值 |

### [¶](https://element.eleme.cn/#/zh-CN/component/radio#radio-group-attributes) Radio-group Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| value / v-model | 绑定值 | string / number / boolean | — | — |
| size | 单选框组尺寸，仅对按钮形式的 Radio 或带有边框的 Radio 有效 | string | medium / small / mini | — |
| disabled | 是否禁用 | boolean | — | false |
| text-color | 按钮形式的 Radio 激活时的文本颜色 | string | — | #ffffff |
| fill | 按钮形式的 Radio 激活时的填充色和边框色 | string | — | #409EFF |

### [¶](https://element.eleme.cn/#/zh-CN/component/radio#radio-group-events) Radio-group Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| change | 绑定值变化时触发的事件 | 选中的 Radio label 值 |

### [¶](https://element.eleme.cn/#/zh-CN/component/radio#radio-button-attributes) Radio-button Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| label | Radio 的 value | string / number | — | — |
| disabled | 是否禁用 | boolean | — | false |
| name | 原生 name 属性 | string | — | — |