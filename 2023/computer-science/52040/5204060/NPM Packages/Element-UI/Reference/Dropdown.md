## [¶](https://element.eleme.cn/#/zh-CN/component/dropdown#dropdown-xia-la-cai-dan) Dropdown 下拉菜单

将动作或菜单折叠到下拉菜单中。

### [¶](https://element.eleme.cn/#/zh-CN/component/dropdown#ji-chu-yong-fa) 基础用法

移动到下拉菜单上，展开更多操作。

### [¶](https://element.eleme.cn/#/zh-CN/component/dropdown#hong-fa-dui-xiang) 触发对象

可使用按钮触发下拉菜单。

### [¶](https://element.eleme.cn/#/zh-CN/component/dropdown#hong-fa-fang-shi) 触发方式

可以配置 click 激活或者 hover 激活。

### [¶](https://element.eleme.cn/#/zh-CN/component/dropdown#cai-dan-yin-cang-fang-shi) 菜单隐藏方式

可以`hide-on-click`属性来配置。

### [¶](https://element.eleme.cn/#/zh-CN/component/dropdown#zhi-ling-shi-jian) 指令事件

点击菜单项后会触发事件，用户可以通过相应的菜单项 key 进行不同的操作

### [¶](https://element.eleme.cn/#/zh-CN/component/dropdown#bu-tong-chi-cun) 不同尺寸

Dropdown 组件提供除了默认值以外的三种尺寸，可以在不同场景下选择合适的尺寸。

### [¶](https://element.eleme.cn/#/zh-CN/component/dropdown#dropdown-attributes) Dropdown Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| type | 菜单按钮类型，同 Button 组件(只在`split-button`为 true 的情况下有效) | string | — | — |
| size | 菜单尺寸，在`split-button`为 true 的情况下也对触发按钮生效 | string | medium / small / mini | — |
| split-button | 下拉触发元素呈现为按钮组 | boolean | — | false |
| placement | 菜单弹出位置 | string | top/top-start/top-end/bottom/bottom-start/bottom-end | bottom-end |
| trigger | 触发下拉的行为 | string | hover, click | hover |
| hide-on-click | 是否在点击菜单项后隐藏菜单 | boolean | — | true |
| show-timeout | 展开下拉菜单的延时（仅在 trigger 为 hover 时有效） | number | — | 250 |
| hide-timeout | 收起下拉菜单的延时（仅在 trigger 为 hover 时有效） | number | — | 150 |
| tabindex | Dropdown 组件的 [tabindex](https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/tabindex) | number | — | 0 |
| disabled | 是否禁用 | boolean | — | false |

### [¶](https://element.eleme.cn/#/zh-CN/component/dropdown#dropdown-slots) Dropdown Slots

| Name | 说明 |
| --- | --- |
| — | 触发下拉列表显示的元素。 注意： 必须是一个元素或者或者组件 |
| dropdown | 下拉列表，通常是 `<el-dropdown-menu>` 组件 |

### [¶](https://element.eleme.cn/#/zh-CN/component/dropdown#dropdown-events) Dropdown Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| click | `split-button` 为 true 时，点击左侧按钮的回调 | — |
| command | 点击菜单项触发的事件回调 | dropdown-item 的指令 |
| visible-change | 下拉框出现/隐藏时触发 | 出现则为 true，隐藏则为 false |

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| command | 指令 | string/number/object | — | — |
| disabled | 禁用 | boolean | — | false |
| divided | 显示分割线 | boolean | — | false |
| icon | 图标类名 | string | — | — |