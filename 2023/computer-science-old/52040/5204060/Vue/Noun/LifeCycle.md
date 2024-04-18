# 生命周期 - Vue

> Vue 实例有一个完整的生命周期，也就是从开始创建、初始化数据、编译模版、挂载 Dom -> 渲染、更新 -> 渲染、卸载等一系列过程，我们称这是 Vue 的生命周期。

## 阶段&作用

### `beforeCreate`

实例创建前，在数据观测和初始化事件还未开始

```js
new Vue({
  beforeCreate() {
    this.$data; // undefined
    this.$el; // undefined
  },
});
```

### `created`

实例创建完成后，完成数据观测，属性和方法的运算，初始化事件，$el 属性还没有显示出来

```js
new Vue({
  created() {
    this.$data; // this.$data
    this.$el; // undefined
  },
});
```

### `beforeMounted`

实例挂载前，在挂载开始之前被调用，相关的 render 函数首次被调用。实例已完成以下的配置：编译模板，把 data 里面的数据和模板生成 html。注意此时还没有挂载 html 到页面上。

```js
new Vue({
  beforeMounted() {
    this.$data; // this.$data
    this.$el; // undefined
  },
});
```

### `mounted`

实例挂载后，在 el 被新创建的 vm.\$el 替换，并挂载到实例上去之后调用。实例已完成以下的配置：用上面编译好的 html 内容替换 el 属性指向的 DOM 对象。完成模板中的 html 渲染到 html 页面中。此过程中进行 ajax 交互。

```js
new Vue({
  mounted() {
    this.$data; // this.$data
    this.$el; // thie.$el
  },
});
```

### `beforeUpdate`

在数据更新之前调用，发生在虚拟 DOM 重新渲染和打补丁之前。可以在该钩子中进一步地更改状态，不会触发附加的重渲染过程。

```js
new Vue({});
```

### `update`

数据更新后，在由于数据更改导致的虚拟 DOM 重新渲染和打补丁之后调用。调用时，组件 DOM 已经更新，所以可以执行依赖于 DOM 的操作。然而在大多数情况下，应该避免在此期间更改状态，因为这可能会导致更新无限循环。该钩子在服务器端渲染期间不被调用。

```js
new Vue({
    update(){
        this.$data;
        this.$el;
    }
});
```

### `actived`

被 keep-alive 缓存的组件激活时

```js
new Vue({});
```

### `deactivated`

被 keep-alive 缓存的组件停用时

```js
new Vue({});
```

### `beforeDestroy`

在实例销毁之前调用。实例仍然完全可用。

```js
new Vue({});
```

### `destroyed`

在实例销毁之后调用。调用后，所有的事件监听器会被移除，所有的子实例也会被销毁。该钩子在服务器端渲染期间不被调用。

```js
new Vue({});
```

### `errorCaptured`

捕获一个来自子孙组件的错误时

```js
new Vue({
  errorCaptured(err: Error, vm: Component, info: String) {},
});
```

## 延申

### 内部监听生命周期函数

在`Vue`组件中，可以用过 `$on`, `$once` 去监听所有的生命周期钩子函数

```js
this.$once('hook:beforeDestory', () => {
  // ...code
});
```

### 外部监听生命周期函数

> 组件的所有生命周期钩子都可以通过 `@hook:钩子函数名`  来监听触发

```html
<template>
  <!--通过@hook:updated监听组件的updated生命钩子函数-->
  <!--组件的所有生命周期钩子都可以通过@hook:钩子函数名 来监听触发-->
  <custom-select @hook:updated="callback" />
</template>
```

## 生命周期图示

![](https://cn.vuejs.org/images/lifecycle.png)
