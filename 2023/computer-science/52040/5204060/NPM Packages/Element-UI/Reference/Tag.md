## [¶](https://element.eleme.cn/#/zh-CN/component/tag#tag-biao-qian) Tag 标签

用于标记和选择。

### [¶](https://element.eleme.cn/#/zh-CN/component/tag#ji-chu-yong-fa) 基础用法

### [¶](https://element.eleme.cn/#/zh-CN/component/tag#ke-yi-chu-biao-qian) 可移除标签

### [¶](https://element.eleme.cn/#/zh-CN/component/tag#dong-tai-bian-ji-biao-qian) 动态编辑标签

动态编辑标签可以通过点击标签关闭按钮后触发的 `close` 事件来实现

### [¶](https://element.eleme.cn/#/zh-CN/component/tag#bu-tong-chi-cun) 不同尺寸

Tag 组件提供除了默认值以外的三种尺寸，可以在不同场景下选择合适的按钮尺寸。

### [¶](https://element.eleme.cn/#/zh-CN/component/tag#bu-tong-zhu-ti) 不同主题

Tag 组件提供了三个不同的主题：`dark`、`light` 和 `plain`

Dark 标签一 标签二 标签三 标签四 标签五

Plain 标签一 标签二 标签三 标签四 标签五

### [¶](https://element.eleme.cn/#/zh-CN/component/tag#attributes) Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| type | 类型 | string | success/info/warning/danger | — |
| closable | 是否可关闭 | boolean | — | false |
| disable-transitions | 是否禁用渐变动画 | boolean | — | false |
| hit | 是否有边框描边 | boolean | — | false |
| color | 背景色 | string | — | — |
| size | 尺寸 | string | medium / small / mini | — |
| effect | 主题 | string | dark / light / plain | light |

### [¶](https://element.eleme.cn/#/zh-CN/component/tag#events) Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| click | 点击 Tag 时触发的事件 | — |
| close | 关闭 Tag 时触发的事件 | — |