## [¶](https://element.eleme.cn/#/zh-CN/component/message-box#messagebox-dan-kuang) MessageBox 弹框

模拟系统的消息提示框而实现的一套模态对话框组件，用于消息提示、确认消息和提交内容。

从场景上说，MessageBox 的作用是美化系统自带的 `alert`、`confirm` 和 `prompt`，因此适合展示较为简单的内容。如果需要弹出较为复杂的内容，请使用 Dialog。

### [¶](https://element.eleme.cn/#/zh-CN/component/message-box#xiao-xi-ti-shi) 消息提示

当用户进行操作时会被触发，该对话框中断用户操作，直到用户确认知晓后才可关闭。

### [¶](https://element.eleme.cn/#/zh-CN/component/message-box#que-ren-xiao-xi) 确认消息

提示用户确认其已经触发的动作，并询问是否进行此操作时会用到此对话框。

### [¶](https://element.eleme.cn/#/zh-CN/component/message-box#ti-jiao-nei-rong) 提交内容

当用户进行操作时会被触发，中断用户操作，提示用户进行输入的对话框。

### [¶](https://element.eleme.cn/#/zh-CN/component/message-box#zi-ding-yi) 自定义

可自定义配置不同内容。

弹出层的内容可以是 `VNode`，所以我们能把一些自定义组件传入其中。每次弹出层打开后，Vue 会对新老 `VNode` 节点进行比对，然后将根据比较结果进行最小单位地修改视图。这也许会造成弹出层内容区域的组件没有重新渲染，例如 [#8931](https://github.com/ElemeFE/element/issues/8931)。当这类问题出现时，解决方案是给 `VNode` 加上一个不相同的 key，参考[这里](https://jsfiddle.net/zhiyang/ezmhq2ef/)。

### [¶](https://element.eleme.cn/#/zh-CN/component/message-box#shi-yong-html-pian-duan) 使用 HTML 片段

`message` 属性支持传入 HTML 片段。

`message` 属性虽然支持传入 HTML 片段，但是在网站上动态渲染任意 HTML 是非常危险的，因为容易导致 [XSS 攻击](https://en.wikipedia.org/wiki/Cross-site_scripting)。因此在 `dangerouslyUseHTMLString` 打开的情况下，请确保 `message` 的内容是可信的，**永远不要**将用户提交的内容赋值给 `message` 属性。

### [¶](https://element.eleme.cn/#/zh-CN/component/message-box#qu-fen-qu-xiao-yu-guan-bi) 区分取消与关闭

有些场景下，点击取消按钮与点击关闭按钮有着不同的含义。

### [¶](https://element.eleme.cn/#/zh-CN/component/message-box#ju-zhong-bu-ju) 居中布局

内容支持居中布局

### [¶](https://element.eleme.cn/#/zh-CN/component/message-box#quan-ju-fang-fa) 全局方法

如果你完整引入了 Element，它会为 Vue.prototype 添加如下全局方法：$msgbox, $alert, $confirm 和 $prompt。因此在 Vue instance 中可以采用本页面中的方式调用 `MessageBox`。调用参数为：

-   `$msgbox(options)`
-   `$alert(message, title, options)` 或 `$alert(message, options)`
-   `$confirm(message, title, options)` 或 `$confirm(message, options)`
-   `$prompt(message, title, options)` 或 `$prompt(message, options)`

### [¶](https://element.eleme.cn/#/zh-CN/component/message-box#dan-du-yin-yong) 单独引用

如果单独引入 `MessageBox`：

```
import { MessageBox } from 'element-ui';
```

那么对应于上述四个全局方法的调用方法依次为：MessageBox, MessageBox.alert, MessageBox.confirm 和 MessageBox.prompt，调用参数与全局方法相同。

### [¶](https://element.eleme.cn/#/zh-CN/component/message-box#options) Options

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| title | MessageBox 标题 | string | — | — |
| message | MessageBox 消息正文内容 | string / VNode | — | — |
| dangerouslyUseHTMLString | 是否将 message 属性作为 HTML 片段处理 | boolean | — | false |
| type | 消息类型，用于显示图标 | string | success / info / warning / error | — |
| iconClass | 自定义图标的类名，会覆盖 `type` | string | — | — |
| customClass | MessageBox 的自定义类名 | string | — | — |
| callback | 若不使用 Promise，可以使用此参数指定 MessageBox 关闭后的回调 | function(action, instance)，action 的值为'confirm', 'cancel'或'close', instance 为 MessageBox 实例，可以通过它访问实例上的属性和方法 | — | — |
| showClose | MessageBox 是否显示右上角关闭按钮 | boolean | — | true |
| beforeClose | MessageBox 关闭前的回调，会暂停实例的关闭 | function(action, instance, done)，action 的值为'confirm', 'cancel'或'close'；instance 为 MessageBox 实例，可以通过它访问实例上的属性和方法；done 用于关闭 MessageBox 实例 | — | — |
| distinguishCancelAndClose | 是否将取消（点击取消按钮）与关闭（点击关闭按钮或遮罩层、按下 ESC 键）进行区分 | boolean | — | false |
| lockScroll | 是否在 MessageBox 出现时将 body 滚动锁定 | boolean | — | true |
| showCancelButton | 是否显示取消按钮 | boolean | — | false（以 confirm 和 prompt 方式调用时为 true） |
| showConfirmButton | 是否显示确定按钮 | boolean | — | true |
| cancelButtonText | 取消按钮的文本内容 | string | — | 取消 |
| confirmButtonText | 确定按钮的文本内容 | string | — | 确定 |
| cancelButtonClass | 取消按钮的自定义类名 | string | — | — |
| confirmButtonClass | 确定按钮的自定义类名 | string | — | — |
| closeOnClickModal | 是否可通过点击遮罩关闭 MessageBox | boolean | — | true（以 alert 方式调用时为 false） |
| closeOnPressEscape | 是否可通过按下 ESC 键关闭 MessageBox | boolean | — | true（以 alert 方式调用时为 false） |
| closeOnHashChange | 是否在 hashchange 时关闭 MessageBox | boolean | — | true |
| showInput | 是否显示输入框 | boolean | — | false（以 prompt 方式调用时为 true） |
| inputPlaceholder | 输入框的占位符 | string | — | — |
| inputType | 输入框的类型 | string | — | text |
| inputValue | 输入框的初始文本 | string | — | — |
| inputPattern | 输入框的校验表达式 | regexp | — | — |
| inputValidator | 输入框的校验函数。可以返回布尔值或字符串，若返回一个字符串, 则返回结果会被赋值给 inputErrorMessage | function | — | — |
| inputErrorMessage | 校验未通过时的提示文本 | string | — | 输入的数据不合法! |
| center | 是否居中布局 | boolean | — | false |
| roundButton | 是否使用圆角按钮 | boolean | — | false |