## [¶](https://element.eleme.cn/#/zh-CN/component/date-picker#datepicker-ri-qi-xuan-ze-qi) DatePicker 日期选择器

用于选择或输入日期

### [¶](https://element.eleme.cn/#/zh-CN/component/date-picker#xuan-ze-ri) 选择日

以「日」为基本单位，基础的日期选择控件

### [¶](https://element.eleme.cn/#/zh-CN/component/date-picker#qi-ta-ri-qi-dan-wei) 其他日期单位

通过扩展基础的日期选择，可以选择周、月、年或多个日期

### [¶](https://element.eleme.cn/#/zh-CN/component/date-picker#xuan-ze-ri-qi-fan-wei) 选择日期范围

可在一个选择器中便捷地选择一个时间范围

### [¶](https://element.eleme.cn/#/zh-CN/component/date-picker#xuan-ze-yue-fen-fan-wei) 选择月份范围

可在一个选择器中便捷地选择一个月份范围

### [¶](https://element.eleme.cn/#/zh-CN/component/date-picker#ri-qi-ge-shi) 日期格式

使用`format`指定输入框的格式；使用`value-format`指定绑定值的格式。

默认情况下，组件接受并返回`Date`对象。以下为可用的格式化字串，以 UTC 2017年1月2日 03:04:05 为例：

请注意大小写

| 格式 | 含义 | 备注 | 举例 |
| --- | --- | --- | --- |
| `yyyy` | 年 |  | 2017 |
| `M` | 月 | 不补0 | 1 |
| `MM` | 月 |  | 01 |
| `W` | 周 | 仅周选择器的 `format` 可用；不补0 | 1 |
| `WW` | 周 | 仅周选择器的 `format` 可用 | 01 |
| `d` | 日 | 不补0 | 2 |
| `dd` | 日 |  | 02 |
| `H` | 小时 | 24小时制；不补0 | 3 |
| `HH` | 小时 | 24小时制 | 03 |
| `h` | 小时 | 12小时制，须和 `A` 或 `a` 使用；不补0 | 3 |
| `hh` | 小时 | 12小时制，须和 `A` 或 `a` 使用 | 03 |
| `m` | 分钟 | 不补0 | 4 |
| `mm` | 分钟 |  | 04 |
| `s` | 秒 | 不补0 | 5 |
| `ss` | 秒 |  | 05 |
| `A` | AM/PM | 仅 `format` 可用，大写 | AM |
| `a` | am/pm | 仅 `format` 可用，小写 | am |
| `timestamp` | JS时间戳 | 仅 `value-format` 可用；组件绑定值为`number`类型 | 1483326245000 |
| `[MM]` | 不需要格式化字符 | 使用方括号标识不需要格式化的字符 (如 \[A\] \[MM\]) | MM |

### [¶](https://element.eleme.cn/#/zh-CN/component/date-picker#mo-ren-xian-shi-ri-qi) 默认显示日期

在选择日期范围时，指定起始日期和结束日期的默认时刻。

### [¶](https://element.eleme.cn/#/zh-CN/component/date-picker#attributes) Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| value / v-model | 绑定值 | date(DatePicker) / array(DateRangePicker) | — | — |
| readonly | 完全只读 | boolean | — | false |
| disabled | 禁用 | boolean | — | false |
| editable | 文本框可输入 | boolean | — | true |
| clearable | 是否显示清除按钮 | boolean | — | true |
| size | 输入框尺寸 | string | large, small, mini | — |
| placeholder | 非范围选择时的占位内容 | string | — | — |
| start-placeholder | 范围选择时开始日期的占位内容 | string | — | — |
| end-placeholder | 范围选择时结束日期的占位内容 | string | — | — |
| type | 显示类型 | string | year/month/date/dates/ week/datetime/datetimerange/ daterange/monthrange | date |
| format | 显示在输入框中的格式 | string | 见[日期格式](https://element.eleme.cn/#/zh-CN/component/date-picker#ri-qi-ge-shi) | yyyy-MM-dd |
| align | 对齐方式 | string | left, center, right | left |
| popper-class | DatePicker 下拉框的类名 | string | — | — |
| picker-options | 当前时间日期选择器特有的选项参考下表 | object | — | {} |
| range-separator | 选择范围时的分隔符 | string | — | '-' |
| default-value | 可选，选择器打开时默认显示的时间 | Date | 可被`new Date()`解析 | — |
| default-time | 范围选择时选中日期所使用的当日内具体时刻 | string\[\] | 数组，长度为 2，每项值为字符串，形如`12:00:00`，第一项指定开始日期的时刻，第二项指定结束日期的时刻，不指定会使用时刻 `00:00:00` | — |
| value-format | 可选，绑定值的格式。不指定则绑定值为 Date 对象 | string | 见[日期格式](https://element.eleme.cn/#/zh-CN/component/date-picker#ri-qi-ge-shi) | — |
| name | 原生属性 | string | — | — |
| unlink-panels | 在范围选择器里取消两个日期面板之间的联动 | boolean | — | false |
| prefix-icon | 自定义头部图标的类名 | string | — | el-icon-date |
| clear-icon | 自定义清空图标的类名 | string | — | el-icon-circle-close |
| validate-event | 输入时是否触发表单的校验 | boolean | \- | true |

### [¶](https://element.eleme.cn/#/zh-CN/component/date-picker#picker-options) Picker Options

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| shortcuts | 设置快捷选项，需要传入 { text, onClick } 对象用法参考 demo 或下表 | Object\[\] | — | — |
| disabledDate | 设置禁用状态，参数为当前日期，要求返回 Boolean | Function | — | — |
| cellClassName | 设置日期的 className | Function(Date) | — | — |
| firstDayOfWeek | 周起始日 | Number | 1 到 7 | 7 |
| onPick | 选中日期后会执行的回调，只有当 `daterange` 或 `datetimerange` 才生效 | Function({ maxDate, minDate }) | — | — |

### [¶](https://element.eleme.cn/#/zh-CN/component/date-picker#shortcuts) Shortcuts

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| text | 标题文本 | string | — | — |
| onClick | 选中后的回调函数，参数是 vm，可通过触发 'pick' 事件设置选择器的值。例如 vm.$emit('pick', new Date()) | function | — | — |

### [¶](https://element.eleme.cn/#/zh-CN/component/date-picker#events) Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| change | 用户确认选定的值时触发 | 组件绑定值。格式与绑定值一致，可受 `value-format` 控制 |
| blur | 当 input 失去焦点时触发 | 组件实例 |
| focus | 当 input 获得焦点时触发 | 组件实例 |

### [¶](https://element.eleme.cn/#/zh-CN/component/date-picker#methods) Methods

| 方法名 | 说明 | 参数 |
| --- | --- | --- |
| focus | 使 input 获取焦点 | — |