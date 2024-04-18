## [¶](https://element.eleme.cn/#/zh-CN/component/select#select-xuan-ze-qi) Select 选择器

当选项过多时，使用下拉菜单展示并选择内容。

### [¶](https://element.eleme.cn/#/zh-CN/component/select#ji-chu-yong-fa) 基础用法

适用广泛的基础单选

### [¶](https://element.eleme.cn/#/zh-CN/component/select#you-jin-yong-xuan-xiang) 有禁用选项

### [¶](https://element.eleme.cn/#/zh-CN/component/select#jin-yong-zhuang-tai) 禁用状态

选择器不可用状态

### [¶](https://element.eleme.cn/#/zh-CN/component/select#ke-qing-kong-dan-xuan) 可清空单选

包含清空按钮，可将选择器清空为初始状态

### [¶](https://element.eleme.cn/#/zh-CN/component/select#ji-chu-duo-xuan) 基础多选

适用性较广的基础多选，用 Tag 展示已选项

### [¶](https://element.eleme.cn/#/zh-CN/component/select#zi-ding-yi-mo-ban) 自定义模板

可以自定义备选项

### [¶](https://element.eleme.cn/#/zh-CN/component/select#fen-zu) 分组

备选项进行分组展示

### [¶](https://element.eleme.cn/#/zh-CN/component/select#ke-sou-suo) 可搜索

可以利用搜索功能快速查找选项

### [¶](https://element.eleme.cn/#/zh-CN/component/select#yuan-cheng-sou-suo) 远程搜索

从服务器搜索数据，输入关键字进行查找

### [¶](https://element.eleme.cn/#/zh-CN/component/select#chuang-jian-tiao-mu) 创建条目

可以创建并选中选项中不存在的条目

如果 Select 的绑定值为对象类型，请务必指定 `value-key` 作为它的唯一性标识。

### [¶](https://element.eleme.cn/#/zh-CN/component/select#select-attributes) Select Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| value / v-model | 绑定值 | boolean / string / number | — | — |
| multiple | 是否多选 | boolean | — | false |
| disabled | 是否禁用 | boolean | — | false |
| value-key | 作为 value 唯一标识的键名，绑定值为对象类型时必填 | string | — | value |
| size | 输入框尺寸 | string | medium/small/mini | — |
| clearable | 是否可以清空选项 | boolean | — | false |
| collapse-tags | 多选时是否将选中值按文字的形式展示 | boolean | — | false |
| multiple-limit | 多选时用户最多可以选择的项目数，为 0 则不限制 | number | — | 0 |
| name | select input 的 name 属性 | string | — | — |
| autocomplete | select input 的 autocomplete 属性 | string | — | off |
| auto-complete | 下个主版本弃用 | string | — | off |
| placeholder | 占位符 | string | — | 请选择 |
| filterable | 是否可搜索 | boolean | — | false |
| allow-create | 是否允许用户创建新条目，需配合 `filterable` 使用 | boolean | — | false |
| filter-method | 自定义搜索方法 | function | — | — |
| remote | 是否为远程搜索 | boolean | — | false |
| remote-method | 远程搜索方法 | function | — | — |
| loading | 是否正在从远程获取数据 | boolean | — | false |
| loading-text | 远程加载时显示的文字 | string | — | 加载中 |
| no-match-text | 搜索条件无匹配时显示的文字，也可以使用`slot="empty"`设置 | string | — | 无匹配数据 |
| no-data-text | 选项为空时显示的文字，也可以使用`slot="empty"`设置 | string | — | 无数据 |
| popper-class | Select 下拉框的类名 | string | — | — |
| reserve-keyword | 多选且可搜索时，是否在选中一个选项后保留当前的搜索关键词 | boolean | — | false |
| default-first-option | 在输入框按下回车，选择第一个匹配项。需配合 `filterable` 或 `remote` 使用 | boolean | \- | false |
| popper-append-to-body | 是否将弹出框插入至 body 元素。在弹出框的定位出现问题时，可将该属性设置为 false | boolean | \- | true |
| automatic-dropdown | 对于不可搜索的 Select，是否在输入框获得焦点后自动弹出选项菜单 | boolean | \- | false |

### [¶](https://element.eleme.cn/#/zh-CN/component/select#select-events) Select Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| change | 选中值发生变化时触发 | 目前的选中值 |
| visible-change | 下拉框出现/隐藏时触发 | 出现则为 true，隐藏则为 false |
| remove-tag | 多选模式下移除tag时触发 | 移除的tag值 |
| clear | 可清空的单选模式下用户点击清空按钮时触发 | — |
| blur | 当 input 失去焦点时触发 | (event: Event) |
| focus | 当 input 获得焦点时触发 | (event: Event) |

### [¶](https://element.eleme.cn/#/zh-CN/component/select#select-slots) Select Slots

| name | 说明 |
| --- | --- |
| — | Option 组件列表 |
| prefix | Select 组件头部内容 |
| empty | 无选项时的列表 |

### [¶](https://element.eleme.cn/#/zh-CN/component/select#option-group-attributes) Option Group Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| label | 分组的组名 | string | — | — |
| disabled | 是否将该分组下所有选项置为禁用 | boolean | — | false |

### [¶](https://element.eleme.cn/#/zh-CN/component/select#option-attributes) Option Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| value | 选项的值 | string/number/object | — | — |
| label | 选项的标签，若不设置则默认与 `value` 相同 | string/number | — | — |
| disabled | 是否禁用该选项 | boolean | — | false |

### [¶](https://element.eleme.cn/#/zh-CN/component/select#methods) Methods

| 方法名 | 说明 | 参数 |
| --- | --- | --- |
| focus | 使 input 获取焦点 | \- |
| blur | 使 input 失去焦点，并隐藏下拉框 | \- |