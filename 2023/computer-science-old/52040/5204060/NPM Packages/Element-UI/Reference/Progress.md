## [¶](https://element.eleme.cn/#/zh-CN/component/progress#progress-jin-du-tiao) Progress 进度条

用于展示操作进度，告知用户当前状态和预期。

### [¶](https://element.eleme.cn/#/zh-CN/component/progress#xian-xing-jin-du-tiao) 线形进度条

### [¶](https://element.eleme.cn/#/zh-CN/component/progress#bai-fen-bi-nei-xian) 百分比内显

百分比不占用额外控件，适用于文件上传等场景。

### [¶](https://element.eleme.cn/#/zh-CN/component/progress#zi-ding-yi-yan-se) 自定义颜色

可以通过 `color` 设置进度条的颜色，`color` 可以接受颜色字符串，函数和数组。

### [¶](https://element.eleme.cn/#/zh-CN/component/progress#huan-xing-jin-du-tiao) 环形进度条

Progress 组件可通过 `type` 属性来指定使用环形进度条，在环形进度条中，还可以通过 `width` 属性来设置其大小。

### [¶](https://element.eleme.cn/#/zh-CN/component/progress#yi-biao-pan-xing-jin-du-tiao) 仪表盘形进度条

### [¶](https://element.eleme.cn/#/zh-CN/component/progress#attributes) Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| **percentage** | **百分比（必填）** | number | 0-100 | 0 |
| type | 进度条类型 | string | line/circle/dashboard | line |
| stroke-width | 进度条的宽度，单位 px | number | — | 6 |
| text-inside | 进度条显示文字内置在进度条内（只在 type=line 时可用） | boolean | — | false |
| status | 进度条当前状态 | string | success/exception/warning | — |
| color | 进度条背景色（会覆盖 status 状态颜色） | string/function/array | — | '' |
| width | 环形进度条画布宽度（只在 type 为 circle 或 dashboard 时可用） | number |  | 126 |
| show-text | 是否显示进度条文字内容 | boolean | — | true |
| stroke-linecap | circle/dashboard 类型路径两端的形状 | string | butt/round/square | round |
| format | 指定进度条文字内容 | function(percentage) | — | — |