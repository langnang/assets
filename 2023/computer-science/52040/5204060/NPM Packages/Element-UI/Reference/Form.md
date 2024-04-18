## [¶](https://element.eleme.cn/#/zh-CN/component/form#form-biao-dan) Form 表单

由输入框、选择器、单选框、多选框等控件组成，用以收集、校验、提交数据

### [¶](https://element.eleme.cn/#/zh-CN/component/form#dian-xing-biao-dan) 典型表单

包括各种表单项，比如输入框、选择器、开关、单选框、多选框等。

W3C 标准中有如下[规定](https://www.w3.org/MarkUp/html-spec/html-spec_8.html#SEC8.2)：

> _When there is only one single-line text input field in a form, the user agent should accept Enter in that field as a request to submit the form._

即：当一个 form 元素中只有一个输入框时，在该输入框中按下回车应提交该表单。如果希望阻止这一默认行为，可以在 `<el-form>` 标签上添加 `@submit.native.prevent`。

### [¶](https://element.eleme.cn/#/zh-CN/component/form#xing-nei-biao-dan) 行内表单

当垂直方向空间受限且表单较简单时，可以在一行内放置表单。

### [¶](https://element.eleme.cn/#/zh-CN/component/form#dui-qi-fang-shi) 对齐方式

根据具体目标和制约因素，选择最佳的标签对齐方式。

### [¶](https://element.eleme.cn/#/zh-CN/component/form#biao-dan-yan-zheng) 表单验证

在防止用户犯错的前提下，尽可能让用户更早地发现并纠正错误。

### [¶](https://element.eleme.cn/#/zh-CN/component/form#zi-ding-yi-xiao-yan-gui-ze) 自定义校验规则

这个例子中展示了如何使用自定义验证规则来完成密码的二次验证。

### [¶](https://element.eleme.cn/#/zh-CN/component/form#dong-tai-zeng-jian-biao-dan-xiang) 动态增减表单项

### [¶](https://element.eleme.cn/#/zh-CN/component/form#shu-zi-lei-xing-yan-zheng) 数字类型验证

嵌套在 `el-form-item` 中的 `el-form-item` 标签宽度默认为零，不会继承 `el-form` 的 `label-width`。如果需要可以为其单独设置 `label-width` 属性。

### [¶](https://element.eleme.cn/#/zh-CN/component/form#biao-dan-nei-zu-jian-chi-cun-kong-zhi) 表单内组件尺寸控制

通过设置 Form 上的 `size` 属性可以使该表单内所有可调节大小的组件继承该尺寸。Form-Item 也具有该属性。

### [¶](https://element.eleme.cn/#/zh-CN/component/form#form-attributes) Form Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| model | 表单数据对象 | object | — | — |
| rules | 表单验证规则 | object | — | — |
| inline | 行内表单模式 | boolean | — | false |
| label-position | 表单域标签的位置，如果值为 left 或者 right 时，则需要设置 `label-width` | string | right/left/top | right |
| label-width | 表单域标签的宽度，例如 '50px'。作为 Form 直接子元素的 form-item 会继承该值。支持 `auto`。 | string | — | — |
| label-suffix | 表单域标签的后缀 | string | — | — |
| hide-required-asterisk | 是否隐藏必填字段的标签旁边的红色星号 | boolean | — | false |
| show-message | 是否显示校验错误信息 | boolean | — | true |
| inline-message | 是否以行内形式展示校验信息 | boolean | — | false |
| status-icon | 是否在输入框中显示校验结果反馈图标 | boolean | — | false |
| validate-on-rule-change | 是否在 `rules` 属性改变后立即触发一次验证 | boolean | — | true |
| size | 用于控制该表单内组件的尺寸 | string | medium / small / mini | — |
| disabled | 是否禁用该表单内的所有组件。若设置为 true，则表单内组件上的 disabled 属性不再生效 | boolean | — | false |

### [¶](https://element.eleme.cn/#/zh-CN/component/form#form-methods) Form Methods

| 方法名 | 说明 | 参数 |
| --- | --- | --- |
| validate | 对整个表单进行校验的方法，参数为一个回调函数。该回调函数会在校验结束后被调用，并传入两个参数：是否校验成功和未通过校验的字段。若不传入回调函数，则会返回一个 promise | Function(callback: Function(boolean, object)) |
| validateField | 对部分表单字段进行校验的方法 | Function(props: array | string, callback: Function(errorMessage: string)) |
| resetFields | 对整个表单进行重置，将所有字段值重置为初始值并移除校验结果 | — |
| clearValidate | 移除表单项的校验结果。传入待移除的表单项的 prop 属性或者 prop 组成的数组，如不传则移除整个表单的校验结果 | Function(props: array | string) |

### [¶](https://element.eleme.cn/#/zh-CN/component/form#form-events) Form Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| validate | 任一表单项被校验后触发 | 被校验的表单项 prop 值，校验是否通过，错误消息（如果存在） |

### [¶](https://element.eleme.cn/#/zh-CN/component/form#form-item-attributes) Form-Item Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| prop | 表单域 model 字段，在使用 validate、resetFields 方法的情况下，该属性是必填的 | string | 传入 Form 组件的 `model` 中的字段 | — |
| label | 标签文本 | string | — | — |
| label-width | 表单域标签的的宽度，例如 '50px'。支持 `auto`。 | string | — | — |
| required | 是否必填，如不设置，则会根据校验规则自动生成 | boolean | — | false |
| rules | 表单验证规则 | object | — | — |
| error | 表单域验证错误信息, 设置该值会使表单验证状态变为`error`，并显示该错误信息 | string | — | — |
| show-message | 是否显示校验错误信息 | boolean | — | true |
| inline-message | 以行内形式展示校验信息 | boolean | — | false |
| size | 用于控制该表单域下组件的尺寸 | string | medium / small / mini | \- |

### [¶](https://element.eleme.cn/#/zh-CN/component/form#form-item-slot) Form-Item Slot

| name | 说明 |
| --- | --- |
| — | Form Item 的内容 |
| label | 标签文本的内容 |

### [¶](https://element.eleme.cn/#/zh-CN/component/form#form-item-scoped-slot) Form-Item Scoped Slot

| name | 说明 |
| --- | --- |
| error | 自定义表单校验信息的显示方式，参数为 { error } |

### [¶](https://element.eleme.cn/#/zh-CN/component/form#form-item-methods) Form-Item Methods

| 方法名 | 说明 | 参数 |
| --- | --- | --- |
| resetField | 对该表单项进行重置，将其值重置为初始值并移除校验结果 | \- |
| clearValidate | 移除该表单项的校验结果 | \- |