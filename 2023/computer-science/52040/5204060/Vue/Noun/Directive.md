# 指令

Vue 的指令是指 `v-` 开头，作用于 html 标签，提供一些特殊的特性，当指令被绑定到 html 元素的时候，指令会为被绑定的元素添加一些特殊的行为，可以将指令看成 html 的一种属性；

## 内置指令

### `v-text`

数据绑定标签，将 vue 对象 data 中的属性绑定给对应的标签作为内容显示出来，类似 js 的 text 属性

```html
<span v-text="text"></span>
```

### `v-html`

似 v-text 标签，他是将 data 的属性作为 html 语法输出，类似 js 中的 innerHtml 属性；

```html
<span v-html="innerHTML"></span>
```

### `v-show`

根据表达式的真假来切换所绑定的 dom 的 display 属性

```html
<span v-show="true"></span>
```

### `v-if`

v-if 和 v-show 功能差不多，都是用来控制 dom 的显隐，用法也一样，只是原理不同，当 v-if="false"时，dom 被直接删除掉；为 true 时，又重新渲染此 dom；

```html
<span v-if="true"></span>
```

### `v-else`

v-else 用来表示 v-if=""的 else 情况

```html
<span v-if="true"></span>
<span v-else></span>
```

### `v-else-if`

```html
<span v-if="true"></span>
<span v-else-if="true"></span>
<span v-else></span>
```

### `v-for`

列表渲染

### `v-on`

给 dom 添加一个事件监听

### `v-bind`

用于将 vue 的值绑定给对应 dom 的属性值

### `v-model`

建立双向数据绑定；

### `v-slot`

### `v-pre`

### `v-cloak`

### `v-once`

## 自定义指令
