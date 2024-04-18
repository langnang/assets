## [¶](https://element.eleme.cn/#/zh-CN/component/input-number#inputnumber-ji-shu-qi) InputNumber 计数器

仅允许输入标准的数字值，可定义范围

### [¶](https://element.eleme.cn/#/zh-CN/component/input-number#ji-chu-yong-fa) 基础用法

### [¶](https://element.eleme.cn/#/zh-CN/component/input-number#jin-yong-zhuang-tai) 禁用状态

### [¶](https://element.eleme.cn/#/zh-CN/component/input-number#bu-shu) 步数

允许定义递增递减的步数控制

### [¶](https://element.eleme.cn/#/zh-CN/component/input-number#yan-ge-bu-shu) 严格步数

### [¶](https://element.eleme.cn/#/zh-CN/component/input-number#jing-du) 精度

`precision` 的值必须是一个非负整数，并且不能小于 `step` 的小数位数。

### [¶](https://element.eleme.cn/#/zh-CN/component/input-number#chi-cun) 尺寸

额外提供了 `medium`、`small`、`mini` 三种尺寸的数字输入框

### [¶](https://element.eleme.cn/#/zh-CN/component/input-number#an-niu-wei-zhi) 按钮位置

### [¶](https://element.eleme.cn/#/zh-CN/component/input-number#attributes) Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| value / v-model | 绑定值 | number | — | 0 |
| min | 设置计数器允许的最小值 | number | — | \-Infinity |
| max | 设置计数器允许的最大值 | number | — | Infinity |
| step | 计数器步长 | number | — | 1 |
| step-strictly | 是否只能输入 step 的倍数 | boolean | — | false |
| precision | 数值精度 | number | — | — |
| size | 计数器尺寸 | string | large, small | — |
| disabled | 是否禁用计数器 | boolean | — | false |
| controls | 是否使用控制按钮 | boolean | — | true |
| controls-position | 控制按钮位置 | string | right | \- |
| name | 原生属性 | string | — | — |
| label | 输入框关联的label文字 | string | — | — |
| placeholder | 输入框默认 placeholder | string | \- | \- |

### [¶](https://element.eleme.cn/#/zh-CN/component/input-number#events) Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| change | 绑定值被改变时触发 | currentValue, oldValue |
| blur | 在组件 Input 失去焦点时触发 | (event: Event) |
| focus | 在组件 Input 获得焦点时触发 | (event: Event) |

### [¶](https://element.eleme.cn/#/zh-CN/component/input-number#methods) Methods

| 方法名 | 说明 | 参数 |
| --- | --- | --- |
| focus | 使 input 获取焦点 | \- |
| select | 选中 input 中的文字 | — |