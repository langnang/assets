# 生命周期 - Vue

> Vue 实例有一个完整的生命周期，也就是从开始创建、初始化数据、编译模版、挂载 Dom -> 渲染、更新 -> 渲染、卸载等一系列过程，我们称这是 Vue 的生命周期。

## 阶段&作用

1. `beforeCreate` 实例初始化后，创建前
   
   ```js
   new Vue({
     beforeCreate() {
       this.$data; // undefined
       this.$el; // undefined
     },
   });
   ```
2. `created` 实例创建完成后
   
   ```js
   new Vue({
     created() {
       this.$data; // this.$data
       this.$el; // undefined
     },
   });
   ```
3. `beforeMounted` 实例挂载前
   
   ```js
   new Vue({
     beforeMounted() {
       this.$data; // this.$data
       this.$el; // undefined
     },
   });
   ```
4. `mounted` 实例挂载后
   
   ```js
   new Vue({
     mounted() {
       this.$data; // this.$data
       this.$el; // thie.$el
     },
   });
   ```
5. `beforeUpdate` 数据更新时
   
   ```js
   new Vue({});
   ```
6. `update` 数据更新后
   
   ```js
   new Vue({});
   ```
7. `actived` 被 keep-alive 缓存的组件激活时
   
   ```js
   new Vue({});
   ```
8. `deactivated` 被 keep-alive 缓存的组件停用时
   
   ```js
   new Vue({});
   ```
9. `beforeDestroy` 实例销毁之前
   
   ```js
   new Vue({});
   ```
10. `destroyed` 实例销毁后
    
    ```js
    new Vue({});
    ```
11. `errorCaptured` 捕获一个来自子孙组件的错误时
    
    ```js
    new Vue({
      errorCaptured(err: Error, vm: Component, info: String) {},
    });
    ```

## 延申

### 内部监听生命周期函数

> 在`Vue`组件中，可以用过`$on`,`$once`去监听所有的生命周期钩子函数

```js
this.$once("hook:beforeDestory",()=>{
    // ...code
})
```

### 外部监听生命周期函数

> 组件的所有生命周期钩子都可以通过@hook:钩子函数名 来监听触发

```html
<template>
  <!--通过@hook:updated监听组件的updated生命钩子函数-->
  <!--组件的所有生命周期钩子都可以通过@hook:钩子函数名 来监听触发-->
  <custom-select @hook:updated="callback" />
</template>
```

## 生命周期图示

![](https://cn.vuejs.org/images/lifecycle.png)
