## [¶](https://element.eleme.cn/#/zh-CN/component/transfer#transfer-chuan-suo-kuang) Transfer 穿梭框

### [¶](https://element.eleme.cn/#/zh-CN/component/transfer#ji-chu-yong-fa) 基础用法

备选项 2备选项 3备选项 5备选项 6备选项 7备选项 8备选项 9备选项 10备选项 11备选项 12备选项 13备选项 14备选项 15

### [¶](https://element.eleme.cn/#/zh-CN/component/transfer#ke-sou-suo) 可搜索

在数据很多的情况下，可以对数据进行搜索和过滤。

### [¶](https://element.eleme.cn/#/zh-CN/component/transfer#ke-zi-ding-yi) 可自定义

可以对列表标题文案、按钮文案、数据项的渲染函数、列表底部的勾选状态文案、列表底部的内容区等进行自定义。

使用 render-content 自定义数据项

2 - 备选项 23 - 备选项 34 - 备选项 45 - 备选项 56 - 备选项 67 - 备选项 78 - 备选项 89 - 备选项 910 - 备选项 1011 - 备选项 1112 - 备选项 1213 - 备选项 1314 - 备选项 1415 - 备选项 15

使用 scoped-slot 自定义数据项

2 - 备选项 23 - 备选项 34 - 备选项 45 - 备选项 56 - 备选项 67 - 备选项 78 - 备选项 89 - 备选项 910 - 备选项 1011 - 备选项 1112 - 备选项 1213 - 备选项 1314 - 备选项 1415 - 备选项 15

### [¶](https://element.eleme.cn/#/zh-CN/component/transfer#shu-ju-xiang-shu-xing-bie-ming) 数据项属性别名

默认情况下，Transfer 仅能识别数据项中的 `key`、`label` 和 `disabled` 字段。如果你的数据的字段名不同，可以使用 `props` 属性为它们设置别名。

备选项 1备选项 2备选项 3备选项 4备选项 5备选项 6备选项 7备选项 8备选项 9备选项 10备选项 11备选项 12备选项 13备选项 14备选项 15

### [¶](https://element.eleme.cn/#/zh-CN/component/transfer#attributes) Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| value / v-model | 绑定值 | array | — | — |
| data | Transfer 的数据源 | array\[{ key, label, disabled }\] | — | \[ \] |
| filterable | 是否可搜索 | boolean | — | false |
| filter-placeholder | 搜索框占位符 | string | — | 请输入搜索内容 |
| filter-method | 自定义搜索方法 | function | — | — |
| target-order | 右侧列表元素的排序策略：若为 `original`，则保持与数据源相同的顺序；若为 `push`，则新加入的元素排在最后；若为 `unshift`，则新加入的元素排在最前 | string | original / push / unshift | original |
| titles | 自定义列表标题 | array | — | \['列表 1', '列表 2'\] |
| button-texts | 自定义按钮文案 | array | — | \[ \] |
| render-content | 自定义数据项渲染函数 | function(h, option) | — | — |
| format | 列表顶部勾选状态文案 | object{noChecked, hasChecked} | — | { noChecked: '${checked}/${total}', hasChecked: '${checked}/${total}' } |
| props | 数据源的字段别名 | object{key, label, disabled} | — | — |
| left-default-checked | 初始状态下左侧列表的已勾选项的 key 数组 | array | — | \[ \] |
| right-default-checked | 初始状态下右侧列表的已勾选项的 key 数组 | array | — | \[ \] |

### [¶](https://element.eleme.cn/#/zh-CN/component/transfer#slot) Slot

| name | 说明 |
| --- | --- |
| left-footer | 左侧列表底部的内容 |
| right-footer | 右侧列表底部的内容 |

### [¶](https://element.eleme.cn/#/zh-CN/component/transfer#scoped-slot) Scoped Slot

| name | 说明 |
| --- | --- |
| — | 自定义数据项的内容，参数为 { option } |

### [¶](https://element.eleme.cn/#/zh-CN/component/transfer#methods) Methods

| 方法名 | 说明 | 参数 |
| --- | --- | --- |
| clearQuery | 清空某个面板的搜索关键词 | 'left' / 'right'，指定需要清空的面板 |

### [¶](https://element.eleme.cn/#/zh-CN/component/transfer#events) Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| change | 右侧列表元素变化时触发 | 当前值、数据移动的方向（'left' / 'right'）、发生移动的数据 key 数组 |
| left-check-change | 左侧列表元素被用户选中 / 取消选中时触发 | 当前被选中的元素的 key 数组、选中状态发生变化的元素的 key 数组 |
| right-check-change | 右侧列表元素被用户选中 / 取消选中时触发 | 当前被选中的元素的 key 数组、选中状态发生变化的元素的 key 数组 |