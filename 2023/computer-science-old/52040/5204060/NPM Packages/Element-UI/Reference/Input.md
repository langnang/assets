## [¶](https://element.eleme.cn/#/zh-CN/component/input#input-shu-ru-kuang) Input 输入框

通过鼠标或键盘输入字符

Input 为受控组件，它**总会显示 Vue 绑定值**。

通常情况下，应当处理 `input` 事件，并更新组件的绑定值（或使用`v-model`）。否则，输入框内显示的值将不会改变。

不支持 `v-model` 修饰符。

### [¶](https://element.eleme.cn/#/zh-CN/component/input#ji-chu-yong-fa) 基础用法

### [¶](https://element.eleme.cn/#/zh-CN/component/input#jin-yong-zhuang-tai) 禁用状态

### [¶](https://element.eleme.cn/#/zh-CN/component/input#ke-qing-kong) 可清空

### [¶](https://element.eleme.cn/#/zh-CN/component/input#mi-ma-kuang) 密码框

### [¶](https://element.eleme.cn/#/zh-CN/component/input#dai-icon-de-shu-ru-kuang) 带 icon 的输入框

带有图标标记输入类型

### [¶](https://element.eleme.cn/#/zh-CN/component/input#wen-ben-yu) 文本域

用于输入多行文本信息，通过将 `type` 属性的值指定为 textarea。

### [¶](https://element.eleme.cn/#/zh-CN/component/input#ke-zi-gua-ying-wen-ben-gao-du-de-wen-ben-yu) 可自适应文本高度的文本域

通过设置 `autosize` 属性可以使得文本域的高度能够根据文本内容自动进行调整，并且 `autosize` 还可以设定为一个对象，指定最小行数和最大行数。

### [¶](https://element.eleme.cn/#/zh-CN/component/input#fu-he-xing-shu-ru-kuang) 复合型输入框

可前置或后置元素，一般为标签或按钮

### [¶](https://element.eleme.cn/#/zh-CN/component/input#chi-cun) 尺寸

### [¶](https://element.eleme.cn/#/zh-CN/component/input#dai-shu-ru-jian-yi) 带输入建议

根据输入内容提供对应的输入建议

### [¶](https://element.eleme.cn/#/zh-CN/component/input#zi-ding-yi-mo-ban) 自定义模板

可自定义输入建议的显示

### [¶](https://element.eleme.cn/#/zh-CN/component/input#yuan-cheng-sou-suo) 远程搜索

从服务端搜索数据

### [¶](https://element.eleme.cn/#/zh-CN/component/input#shu-ru-chang-du-xian-zhi) 输入长度限制

### [¶](https://element.eleme.cn/#/zh-CN/component/input#input-attributes) Input Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| type | 类型 | string | text，textarea 和其他 [原生 input 的 type 值](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input#Form_%3Cinput%3E_types) | text |
| value / v-model | 绑定值 | string / number | — | — |
| maxlength | 原生属性，最大输入长度 | number | — | — |
| minlength | 原生属性，最小输入长度 | number | — | — |
| show-word-limit | 是否显示输入字数统计，只在 `type = "text"` 或 `type = "textarea"` 时有效 | boolean | — | false |
| placeholder | 输入框占位文本 | string | — | — |
| clearable | 是否可清空 | boolean | — | false |
| show-password | 是否显示切换密码图标 | boolean | — | false |
| disabled | 禁用 | boolean | — | false |
| size | 输入框尺寸，只在 `type!="textarea"` 时有效 | string | medium / small / mini | — |
| prefix-icon | 输入框头部图标 | string | — | — |
| suffix-icon | 输入框尾部图标 | string | — | — |
| rows | 输入框行数，只对 `type="textarea"` 有效 | number | — | 2 |
| autosize | 自适应内容高度，只对 `type="textarea"` 有效，可传入对象，如，{ minRows: 2, maxRows: 6 } | boolean / object | — | false |
| autocomplete | 原生属性，自动补全 | string | on, off | off |
| auto-complete | 下个主版本弃用 | string | on, off | off |
| name | 原生属性 | string | — | — |
| readonly | 原生属性，是否只读 | boolean | — | false |
| max | 原生属性，设置最大值 | — | — | — |
| min | 原生属性，设置最小值 | — | — | — |
| step | 原生属性，设置输入字段的合法数字间隔 | — | — | — |
| resize | 控制是否能被用户缩放 | string | none, both, horizontal, vertical | — |
| autofocus | 原生属性，自动获取焦点 | boolean | true, false | false |
| form | 原生属性 | string | — | — |
| label | 输入框关联的label文字 | string | — | — |
| tabindex | 输入框的tabindex | string | \- | \- |
| validate-event | 输入时是否触发表单的校验 | boolean | \- | true |

### [¶](https://element.eleme.cn/#/zh-CN/component/input#input-slots) Input Slots

| name | 说明 |
| --- | --- |
| prefix | 输入框头部内容，只对 `type="text"` 有效 |
| suffix | 输入框尾部内容，只对 `type="text"` 有效 |
| prepend | 输入框前置内容，只对 `type="text"` 有效 |
| append | 输入框后置内容，只对 `type="text"` 有效 |

### [¶](https://element.eleme.cn/#/zh-CN/component/input#input-events) Input Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| blur | 在 Input 失去焦点时触发 | (event: Event) |
| focus | 在 Input 获得焦点时触发 | (event: Event) |
| change | 仅在输入框失去焦点或用户按下回车时触发 | (value: string | number) |
| input | 在 Input 值改变时触发 | (value: string | number) |
| clear | 在点击由 `clearable` 属性生成的清空按钮时触发 | — |

### [¶](https://element.eleme.cn/#/zh-CN/component/input#input-methods) Input Methods

| 方法名 | 说明 | 参数 |
| --- | --- | --- |
| focus | 使 input 获取焦点 | — |
| blur | 使 input 失去焦点 | — |
| select | 选中 input 中的文字 | — |

### [¶](https://element.eleme.cn/#/zh-CN/component/input#autocomplete-attributes) Autocomplete Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| placeholder | 输入框占位文本 | string | — | — |
| disabled | 禁用 | boolean | — | false |
| value-key | 输入建议对象中用于显示的键名 | string | — | value |
| value | 必填值，输入绑定值 | string | — | — |
| debounce | 获取输入建议的去抖延时 | number | — | 300 |
| placement | 菜单弹出位置 | string | top / top-start / top-end / bottom / bottom-start / bottom-end | bottom-start |
| fetch-suggestions | 返回输入建议的方法，仅当你的输入建议数据 resolve 时，通过调用 callback(data:\[\]) 来返回它 | Function(queryString, callback) | — | — |
| popper-class | Autocomplete 下拉列表的类名 | string | — | — |
| trigger-on-focus | 是否在输入框 focus 时显示建议列表 | boolean | — | true |
| name | 原生属性 | string | — | — |
| select-when-unmatched | 在输入没有任何匹配建议的情况下，按下回车是否触发 `select` 事件 | boolean | — | false |
| label | 输入框关联的label文字 | string | — | — |
| prefix-icon | 输入框头部图标 | string | — | — |
| suffix-icon | 输入框尾部图标 | string | — | — |
| hide-loading | 是否隐藏远程加载时的加载图标 | boolean | — | false |
| popper-append-to-body | 是否将下拉列表插入至 body 元素。在下拉列表的定位出现问题时，可将该属性设置为 false | boolean | \- | true |
| highlight-first-item | 是否默认突出显示远程搜索建议中的第一项 | boolean | — | false |

### [¶](https://element.eleme.cn/#/zh-CN/component/input#autocomplete-slots) Autocomplete Slots

| name | 说明 |
| --- | --- |
| prefix | 输入框头部内容 |
| suffix | 输入框尾部内容 |
| prepend | 输入框前置内容 |
| append | 输入框后置内容 |

### [¶](https://element.eleme.cn/#/zh-CN/component/input#autocomplete-scoped-slot) Autocomplete Scoped Slot

| name | 说明 |
| --- | --- |
| — | 自定义输入建议，参数为 { item } |

### [¶](https://element.eleme.cn/#/zh-CN/component/input#autocomplete-events) Autocomplete Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| select | 点击选中建议项时触发 | 选中建议项 |
| change | 在 Input 值改变时触发 | (value: string | number) |

### [¶](https://element.eleme.cn/#/zh-CN/component/input#autocomplete-methods) Autocomplete Methods

| 方法名 | 说明 | 参数 |
| --- | --- | --- |
| focus | 使 input 获取焦点 | \- |