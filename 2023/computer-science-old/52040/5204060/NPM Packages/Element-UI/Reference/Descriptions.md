## [¶](https://element.eleme.cn/#/zh-CN/component/descriptions#descriptions-miao-shu-lie-biao) Descriptions 描述列表

列表形式展示多个字段。

### [¶](https://element.eleme.cn/#/zh-CN/component/descriptions#ji-chu-yong-fa) 基础用法

<table><tbody><tr><td colspan="1"><p><span>用户名</span><span>kooriookami</span></p></td><td colspan="1"><p><span>手机号</span><span>18100000000</span></p></td><td colspan="1"><p><span>居住地</span><span>苏州市</span></p></td></tr></tbody><tbody><tr><td colspan="1"><p><span>备注</span><span><span>学校</span></span></p></td><td colspan="2"><p><span>联系地址</span><span>江苏省苏州市吴中区吴中大道 1188 号</span></p></td></tr></tbody></table>

### [¶](https://element.eleme.cn/#/zh-CN/component/descriptions#bu-tong-chi-cun) 不同尺寸

默认 中等 小型 超小

<table><tbody><tr><th colspan="1"><i></i>用户名</th><td colspan="1">kooriookami</td><th colspan="1"><i></i>手机号</th><td colspan="1">18100000000</td><th colspan="1"><i></i>居住地</th><td colspan="1">苏州市</td></tr></tbody><tbody><tr><th colspan="1"><i></i>备注</th><td colspan="1"><span>学校</span></td><th colspan="1"><i></i>联系地址</th><td colspan="3">江苏省苏州市吴中区吴中大道 1188 号</td></tr></tbody></table>

<table><tbody><tr><td colspan="1"><p><span>用户名</span><span>kooriookami</span></p></td><td colspan="1"><p><span>手机号</span><span>18100000000</span></p></td><td colspan="1"><p><span>居住地</span><span>苏州市</span></p></td></tr></tbody><tbody><tr><td colspan="1"><p><span>备注</span><span><span>学校</span></span></p></td><td colspan="2"><p><span>联系地址</span><span>江苏省苏州市吴中区吴中大道 1188 号</span></p></td></tr></tbody></table>

### [¶](https://element.eleme.cn/#/zh-CN/component/descriptions#chui-zhi-lie-biao) 垂直列表

| 用户名 | 手机号 | 居住地 |
| --- | --- | --- |
| kooriookami | 18100000000 | 苏州市 |
| 备注 | 联系地址 |
| 学校 | 江苏省苏州市吴中区吴中大道 1188 号 |

| 用户名 | 手机号 | 居住地 |
| --- | --- | --- |
| kooriookami | 18100000000 | 苏州市 |
| 备注 | 联系地址 |
| 学校 | 江苏省苏州市吴中区吴中大道 1188 号 |

### [¶](https://element.eleme.cn/#/zh-CN/component/descriptions#zi-ding-yi-yang-shi) 自定义样式

<table><tbody><tr><th colspan="1">用户名</th><td colspan="1">kooriookami</td><th colspan="1">手机号</th><td colspan="1">18100000000</td><th colspan="1">居住地</th><td colspan="1">苏州市</td></tr></tbody><tbody><tr><th colspan="1">备注</th><td colspan="1"><span>学校</span></td><th colspan="1">联系地址</th><td colspan="3">江苏省苏州市吴中区吴中大道 1188 号</td></tr></tbody></table>

### [¶](https://element.eleme.cn/#/zh-CN/component/descriptions#descriptions-attributes) Descriptions Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| border | 是否带有边框 | boolean | — | false |
| column | 一行 `Descriptions Item` 的数量 | number | — | 3 |
| direction | 排列的方向 | string | vertical / horizontal | horizontal |
| size | 列表的尺寸 | string | medium / small / mini | — |
| title | 标题文本，显示在左上方 | string | — | — |
| extra | 操作区文本，显示在右上方 | string | — | — |
| colon | 是否显示冒号 | boolean | — | true |
| labelClassName | 自定义标签类名 | string | — | — |
| contentClassName | 自定义内容类名 | string | — | — |
| labelStyle | 自定义标签样式 | object | — | — |
| contentStyle | 自定义内容样式 | object | — | — |

### [¶](https://element.eleme.cn/#/zh-CN/component/descriptions#descriptions-slots) Descriptions Slots

| Name | 说明 |
| --- | --- |
| title | 自定义标题，显示在左上方 |
| extra | 自定义操作区，显示在右上方 |

### [¶](https://element.eleme.cn/#/zh-CN/component/descriptions#descriptions-item-attributes) Descriptions Item Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| label | 标签文本 | string | — | — |
| span | 列的数量 | number | — | 1 |
| labelClassName | 自定义标签类名 | string | — | — |
| contentClassName | 自定义内容类名 | string | — | — |
| labelStyle | 自定义标签样式 | object | — | — |
| contentStyle | 自定义内容样式 | object | — | — |

### [¶](https://element.eleme.cn/#/zh-CN/component/descriptions#descriptions-item-slots) Descriptions Item Slots

| Name | 说明 |
| --- | --- |
| label | 自定义标签文本 |