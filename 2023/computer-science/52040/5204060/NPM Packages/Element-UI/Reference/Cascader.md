## [¶](https://element.eleme.cn/#/zh-CN/component/cascader#cascader-ji-lian-xuan-ze-qi) Cascader 级联选择器

当一个数据集合有清晰的层级结构时，可通过级联选择器逐级查看并选择。

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#ji-chu-yong-fa) 基础用法

有两种触发子菜单的方式

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#jin-yong-xuan-xiang) 禁用选项

通过在数据源中设置 `disabled` 字段来声明该选项是禁用的

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#ke-qing-kong) 可清空

通过 `clearable` 设置输入框可清空

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#jin-xian-shi-zui-hou-yi-ji) 仅显示最后一级

可以仅在输入框中显示选中项最后一级的标签，而不是选中项所在的完整路径。

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#duo-xuan) 多选

可通过 `props.multiple = true` 来开启多选模式

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#xuan-ze-ren-yi-yi-ji-xuan-xiang) 选择任意一级选项

在单选模式下，你只能选择叶子节点；而在多选模式下，勾选父节点真正选中的都是叶子节点。启用该功能后，可让父子节点取消关联，选择任意一级选项。

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#dong-tai-jia-zai) 动态加载

当选中某一级时，动态加载该级下的选项。

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#ke-sou-suo) 可搜索

可以快捷地搜索选项并选择。

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#zi-ding-yi-jie-dian-nei-rong) 自定义节点内容

可以自定义备选项的节点内容

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#ji-lian-mian-ban) 级联面板

级联面板是级联选择器的核心组件，与级联选择器一样，有单选、多选、动态加载等多种功能。

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#cascader-attributes) Cascader Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| value / v-model | 选中项绑定值 | \- | — | — |
| options | 可选项数据源，键名可通过 `Props` 属性配置 | array | — | — |
| props | 配置选项，具体见下表 | object | — | — |
| size | 尺寸 | string | medium / small / mini | — |
| placeholder | 输入框占位文本 | string | — | 请选择 |
| disabled | 是否禁用 | boolean | — | false |
| clearable | 是否支持清空选项 | boolean | — | false |
| show-all-levels | 输入框中是否显示选中值的完整路径 | boolean | — | true |
| collapse-tags | 多选模式下是否折叠Tag | boolean | \- | false |
| separator | 选项分隔符 | string | — | 斜杠' / ' |
| filterable | 是否可搜索选项 | boolean | — | — |
| filter-method | 自定义搜索逻辑，第一个参数是节点`node`，第二个参数是搜索关键词`keyword`，通过返回布尔值表示是否命中 | function(node, keyword) | \- | \- |
| debounce | 搜索关键词输入的去抖延迟，毫秒 | number | — | 300 |
| before-filter | 筛选之前的钩子，参数为输入的值，若返回 false 或者返回 Promise 且被 reject，则停止筛选 | function(value) | — | — |
| popper-class | 自定义浮层类名 | string | — | — |

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#cascader-events) Cascader Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| change | 当选中节点变化时触发 | 选中节点的值 |
| expand-change | 当展开节点发生变化时触发 | 各父级选项值组成的数组 |
| blur | 当失去焦点时触发 | (event: Event) |
| focus | 当获得焦点时触发 | (event: Event) |
| visible-change | 下拉框出现/隐藏时触发 | 出现则为 true，隐藏则为 false |
| remove-tag | 在多选模式下，移除Tag时触发 | 移除的Tag对应的节点的值 |

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#cascader-methods) Cascader Methods

| 方法名 | 说明 | 参数 |
| --- | --- | --- |
| getCheckedNodes | 获取选中的节点 | (leafOnly) 是否只是叶子节点，默认值为 `false` |

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#cascader-slots) Cascader Slots

| 名称 | 说明 |
| --- | --- |
| \- | 自定义备选项的节点内容，参数为 { node, data }，分别为当前节点的 Node 对象和数据 |
| empty | 无匹配选项时的内容 |

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#cascaderpanel-attributes) CascaderPanel Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| value / v-model | 选中项绑定值 | \- | — | — |
| options | 可选项数据源，键名可通过 `Props` 属性配置 | array | — | — |
| props | 配置选项，具体见下表 | object | — | — |

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#cascaderpanel-events) CascaderPanel Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| change | 当选中节点变化时触发 | 选中节点的值 |
| expand-change | 当展开节点发生变化时触发 | 各父级选项值组成的数组 |

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#cascaderpanel-methods) CascaderPanel Methods

| 方法名 | 说明 | 参数 |
| --- | --- | --- |
| getCheckedNodes | 获取选中的节点数组 | (leafOnly) 是否只是叶子节点，默认值为 `false` |
| clearCheckedNodes | 清空选中的节点 | \- |

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#cascaderpanel-slots) CascaderPanel Slots

| 名称 | 说明 |
| --- | --- |
| \- | 自定义备选项的节点内容，参数为 { node, data }，分别为当前节点的 Node 对象和数据 |

### [¶](https://element.eleme.cn/#/zh-CN/component/cascader#props) Props

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| expandTrigger | 次级菜单的展开方式 | string | click / hover | 'click' |
| multiple | 是否多选 | boolean | \- | false |
| checkStrictly | 是否严格的遵守父子节点不互相关联 | boolean | \- | false |
| emitPath | 在选中节点改变时，是否返回由该节点所在的各级菜单的值所组成的数组，若设置 false，则只返回该节点的值 | boolean | \- | true |
| lazy | 是否动态加载子节点，需与 lazyLoad 方法结合使用 | boolean | \- | false |
| lazyLoad | 加载动态数据的方法，仅在 lazy 为 true 时有效 | function(node, resolve)，`node`为当前点击的节点，`resolve`为数据加载完成的回调(必须调用) | \- | \- |
| value | 指定选项的值为选项对象的某个属性值 | string | — | 'value' |
| label | 指定选项标签为选项对象的某个属性值 | string | — | 'label' |
| children | 指定选项的子选项为选项对象的某个属性值 | string | — | 'children' |
| disabled | 指定选项的禁用为选项对象的某个属性值 | string | — | 'disabled' |
| leaf | 指定选项的叶子节点的标志位为选项对象的某个属性值 | string | — | 'leaf' |