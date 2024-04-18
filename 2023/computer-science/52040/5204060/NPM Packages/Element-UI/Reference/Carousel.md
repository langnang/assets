## [¶](https://element.eleme.cn/#/zh-CN/component/carousel#carousel-zou-ma-deng) Carousel 走马灯

在有限空间内，循环播放同一类型的图片、文字等内容

### [¶](https://element.eleme.cn/#/zh-CN/component/carousel#ji-chu-yong-fa) 基础用法

适用广泛的基础用法

### [¶](https://element.eleme.cn/#/zh-CN/component/carousel#zhi-shi-qi) 指示器

可以将指示器的显示位置设置在容器外部

### 1

### 2

### 3

### 4

### [¶](https://element.eleme.cn/#/zh-CN/component/carousel#qie-huan-jian-tou) 切换箭头

可以设置切换箭头的显示时机

### 1

### 2

### 3

### 4

### [¶](https://element.eleme.cn/#/zh-CN/component/carousel#qia-pian-hua) 卡片化

当页面宽度方向空间空余，但高度方向空间匮乏时，可使用卡片风格

### 1

### 2

### 3

### 4

### 5

### 6

### [¶](https://element.eleme.cn/#/zh-CN/component/carousel#fang-xiang) 方向

默认情况下，`direction` 为 `horizontal`。通过设置 `direction` 为 `vertical` 来让走马灯在垂直方向上显示。

### 1

### 2

### 3

### [¶](https://element.eleme.cn/#/zh-CN/component/carousel#carousel-attributes) Carousel Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| height | 走马灯的高度 | string | — | — |
| initial-index | 初始状态激活的幻灯片的索引，从 0 开始 | number | — | 0 |
| trigger | 指示器的触发方式 | string | click | — |
| autoplay | 是否自动切换 | boolean | — | true |
| interval | 自动切换的时间间隔，单位为毫秒 | number | — | 3000 |
| indicator-position | 指示器的位置 | string | outside/none | — |
| arrow | 切换箭头的显示时机 | string | always/hover/never | hover |
| type | 走马灯的类型 | string | card | — |
| loop | 是否循环显示 | boolean | \- | true |
| direction | 走马灯展示的方向 | string | horizontal/vertical | horizontal |

### [¶](https://element.eleme.cn/#/zh-CN/component/carousel#carousel-events) Carousel Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| change | 幻灯片切换时触发 | 目前激活的幻灯片的索引，原幻灯片的索引 |

### [¶](https://element.eleme.cn/#/zh-CN/component/carousel#carousel-methods) Carousel Methods

| 方法名 | 说明 | 参数 |
| --- | --- | --- |
| setActiveItem | 手动切换幻灯片 | 需要切换的幻灯片的索引，从 0 开始；或相应 `el-carousel-item` 的 `name` 属性值 |
| prev | 切换至上一张幻灯片 | — |
| next | 切换至下一张幻灯片 | — |

### [¶](https://element.eleme.cn/#/zh-CN/component/carousel#carousel-item-attributes) Carousel-Item Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| name | 幻灯片的名字，可用作 `setActiveItem` 的参数 | string | — | — |
| label | 该幻灯片所对应指示器的文本 | string | — | — |