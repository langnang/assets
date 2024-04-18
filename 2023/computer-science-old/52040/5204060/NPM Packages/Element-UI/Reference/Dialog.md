## [¶](https://element.eleme.cn/#/zh-CN/component/dialog#dialog-dui-hua-kuang) Dialog 对话框

在保留当前页面状态的情况下，告知用户并承载相关操作。

### [¶](https://element.eleme.cn/#/zh-CN/component/dialog#ji-ben-yong-fa) 基本用法

Dialog 弹出一个对话框，适合需要定制性更大的场景。

`before-close` 仅当用户通过点击关闭图标或遮罩关闭 Dialog 时起效。如果你在 `footer` 具名 slot 里添加了用于关闭 Dialog 的按钮，那么可以在按钮的点击回调函数里加入 `before-close` 的相关逻辑。

### [¶](https://element.eleme.cn/#/zh-CN/component/dialog#zi-ding-yi-nei-rong) 自定义内容

Dialog 组件的内容可以是任意的，甚至可以是表格或表单，下面是应用了 Element Table 和 Form 组件的两个样例。

### [¶](https://element.eleme.cn/#/zh-CN/component/dialog#qian-tao-de-dialog) 嵌套的 Dialog

如果需要在一个 Dialog 内部嵌套另一个 Dialog，需要使用 `append-to-body` 属性。

### [¶](https://element.eleme.cn/#/zh-CN/component/dialog#ju-zhong-bu-ju) 居中布局

标题和底部可水平居中

Dialog 的内容是懒渲染的，即在第一次被打开之前，传入的默认 slot 不会被渲染到 DOM 上。因此，如果需要执行 DOM 操作，或通过 `ref` 获取相应组件，请在 `open` 事件回调中进行。

如果 `visible` 属性绑定的变量位于 Vuex 的 store 内，那么 `.sync` 不会正常工作。此时需要去除 `.sync` 修饰符，同时监听 Dialog 的 `open` 和 `close` 事件，在事件回调中执行 Vuex 中对应的 mutation 更新 `visible` 属性绑定的变量的值。

### [¶](https://element.eleme.cn/#/zh-CN/component/dialog#attributes) Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| visible | 是否显示 Dialog，支持 .sync 修饰符 | boolean | — | false |
| title | Dialog 的标题，也可通过具名 slot （见下表）传入 | string | — | — |
| width | Dialog 的宽度 | string | — | 50% |
| fullscreen | 是否为全屏 Dialog | boolean | — | false |
| top | Dialog CSS 中的 margin-top 值 | string | — | 15vh |
| modal | 是否需要遮罩层 | boolean | — | true |
| modal-append-to-body | 遮罩层是否插入至 body 元素上，若为 false，则遮罩层会插入至 Dialog 的父元素上 | boolean | — | true |
| append-to-body | Dialog 自身是否插入至 body 元素上。嵌套的 Dialog 必须指定该属性并赋值为 true | boolean | — | false |
| lock-scroll | 是否在 Dialog 出现时将 body 滚动锁定 | boolean | — | true |
| custom-class | Dialog 的自定义类名 | string | — | — |
| close-on-click-modal | 是否可以通过点击 modal 关闭 Dialog | boolean | — | true |
| close-on-press-escape | 是否可以通过按下 ESC 关闭 Dialog | boolean | — | true |
| show-close | 是否显示关闭按钮 | boolean | — | true |
| before-close | 关闭前的回调，会暂停 Dialog 的关闭 | function(done)，done 用于关闭 Dialog | — | — |
| center | 是否对头部和底部采用居中布局 | boolean | — | false |
| destroy-on-close | 关闭时销毁 Dialog 中的元素 | boolean | — | false |

### [¶](https://element.eleme.cn/#/zh-CN/component/dialog#slot) Slot

| name | 说明 |
| --- | --- |
| — | Dialog 的内容 |
| title | Dialog 标题区的内容 |
| footer | Dialog 按钮操作区的内容 |

### [¶](https://element.eleme.cn/#/zh-CN/component/dialog#events) Events

| 事件名称 | 说明 | 回调参数 |
| --- | --- | --- |
| open | Dialog 打开的回调 | — |
| opened | Dialog 打开动画结束时的回调 | — |
| close | Dialog 关闭的回调 | — |
| closed | Dialog 关闭动画结束时的回调 | — |