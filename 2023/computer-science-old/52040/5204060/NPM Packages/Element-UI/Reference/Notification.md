## [¶](https://element.eleme.cn/#/zh-CN/component/notification#notification-tong-zhi) Notification 通知

悬浮出现在页面角落，显示全局的通知提醒消息。

### [¶](https://element.eleme.cn/#/zh-CN/component/notification#ji-ben-yong-fa) 基本用法

适用性广泛的通知栏

### [¶](https://element.eleme.cn/#/zh-CN/component/notification#dai-you-qing-xiang-xing) 带有倾向性

带有 icon，常用来显示「成功、警告、消息、错误」类的系统消息

### [¶](https://element.eleme.cn/#/zh-CN/component/notification#zi-ding-yi-dan-chu-wei-zhi) 自定义弹出位置

可以让 Notification 从屏幕四角中的任意一角弹出

### [¶](https://element.eleme.cn/#/zh-CN/component/notification#dai-you-pian-yi) 带有偏移

让 Notification 偏移一些位置

### [¶](https://element.eleme.cn/#/zh-CN/component/notification#shi-yong-html-pian-duan) 使用 HTML 片段

`message` 属性支持传入 HTML 片段

`message` 属性虽然支持传入 HTML 片段，但是在网站上动态渲染任意 HTML 是非常危险的，因为容易导致 [XSS 攻击](https://en.wikipedia.org/wiki/Cross-site_scripting)。因此在 `dangerouslyUseHTMLString` 打开的情况下，请确保 `message` 的内容是可信的，**永远不要**将用户提交的内容赋值给 `message` 属性。

### [¶](https://element.eleme.cn/#/zh-CN/component/notification#yin-cang-guan-bi-an-niu) 隐藏关闭按钮

可以不显示关闭按钮

### [¶](https://element.eleme.cn/#/zh-CN/component/notification#quan-ju-fang-fa) 全局方法

Element 为 `Vue.prototype` 添加了全局方法 `$notify`。因此在 vue instance 中可以采用本页面中的方式调用 Notification。

### [¶](https://element.eleme.cn/#/zh-CN/component/notification#dan-du-yin-yong) 单独引用

单独引入 Notification：

```
import { Notification } from 'element-ui';
```

此时调用方法为 `Notification(options)`。我们也为每个 type 定义了各自的方法，如 `Notification.success(options)`。并且可以调用 `Notification.closeAll()` 手动关闭所有实例。

### [¶](https://element.eleme.cn/#/zh-CN/component/notification#options) Options

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| title | 标题 | string | — | — |
| message | 说明文字 | string/Vue.VNode | — | — |
| dangerouslyUseHTMLString | 是否将 message 属性作为 HTML 片段处理 | boolean | — | false |
| type | 主题样式，如果不在可选值内将被忽略 | string | success/warning/info/error | — |
| iconClass | 自定义图标的类名。若设置了 `type`，则 `iconClass` 会被覆盖 | string | — | — |
| customClass | 自定义类名 | string | — | — |
| duration | 显示时间, 毫秒。设为 0 则不会自动关闭 | number | — | 4500 |
| position | 自定义弹出位置 | string | top-right/top-left/bottom-right/bottom-left | top-right |
| showClose | 是否显示关闭按钮 | boolean | — | true |
| onClose | 关闭时的回调函数 | function | — | — |
| onClick | 点击 Notification 时的回调函数 | function | — | — |
| offset | 偏移的距离，在同一时刻，所有的 Notification 实例应当具有一个相同的偏移量 | number | — | 0 |

### [¶](https://element.eleme.cn/#/zh-CN/component/notification#fang-fa) 方法

调用 `Notification` 或 `this.$notify` 会返回当前 Notification 的实例。如果需要手动关闭实例，可以调用它的 `close` 方法。

| 方法名 | 说明 |
| --- | --- |
| close | 关闭当前的 Notification |