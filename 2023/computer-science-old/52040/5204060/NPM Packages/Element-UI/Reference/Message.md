## [¶](https://element.eleme.cn/#/zh-CN/component/message#message-xiao-xi-ti-shi) Message 消息提示

常用于主动操作后的反馈提示。与 Notification 的区别是后者更多用于系统级通知的被动提醒。

### [¶](https://element.eleme.cn/#/zh-CN/component/message#ji-chu-yong-fa) 基础用法

从顶部出现，3 秒后自动消失。

### [¶](https://element.eleme.cn/#/zh-CN/component/message#bu-tong-zhuang-tai) 不同状态

用来显示「成功、警告、消息、错误」类的操作反馈。

### [¶](https://element.eleme.cn/#/zh-CN/component/message#ke-guan-bi) 可关闭

可以添加关闭按钮。

### [¶](https://element.eleme.cn/#/zh-CN/component/message#wen-zi-ju-zhong) 文字居中

使用 `center` 属性让文字水平居中。

### [¶](https://element.eleme.cn/#/zh-CN/component/message#shi-yong-html-pian-duan) 使用 HTML 片段

`message` 属性支持传入 HTML 片段

`message` 属性虽然支持传入 HTML 片段，但是在网站上动态渲染任意 HTML 是非常危险的，因为容易导致 [XSS 攻击](https://en.wikipedia.org/wiki/Cross-site_scripting)。因此在 `dangerouslyUseHTMLString` 打开的情况下，请确保 `message` 的内容是可信的，**永远不要**将用户提交的内容赋值给 `message` 属性。

### [¶](https://element.eleme.cn/#/zh-CN/component/message#quan-ju-fang-fa) 全局方法

Element 为 Vue.prototype 添加了全局方法 $message。因此在 vue instance 中可以采用本页面中的方式调用 `Message`。

### [¶](https://element.eleme.cn/#/zh-CN/component/message#dan-du-yin-yong) 单独引用

单独引入 `Message`：

```
import { Message } from 'element-ui';
```

此时调用方法为 `Message(options)`。我们也为每个 type 定义了各自的方法，如 `Message.success(options)`。并且可以调用 `Message.closeAll()` 手动关闭所有实例。

### [¶](https://element.eleme.cn/#/zh-CN/component/message#options) Options

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| message | 消息文字 | string / VNode | — | — |
| type | 主题 | string | success/warning/info/error | info |
| iconClass | 自定义图标的类名，会覆盖 `type` | string | — | — |
| dangerouslyUseHTMLString | 是否将 message 属性作为 HTML 片段处理 | boolean | — | false |
| customClass | 自定义类名 | string | — | — |
| duration | 显示时间, 毫秒。设为 0 则不会自动关闭 | number | — | 3000 |
| showClose | 是否显示关闭按钮 | boolean | — | false |
| center | 文字是否居中 | boolean | — | false |
| onClose | 关闭时的回调函数, 参数为被关闭的 message 实例 | function | — | — |
| offset | Message 距离窗口顶部的偏移量 | number | — | 20 |

### [¶](https://element.eleme.cn/#/zh-CN/component/message#fang-fa) 方法

调用 `Message` 或 `this.$message` 会返回当前 Message 的实例。如果需要手动关闭实例，可以调用它的 `close` 方法。

| 方法名 | 说明 |
| --- | --- |
| close | 关闭当前的 Message |