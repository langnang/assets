# 用`Vue.observable`手写一个状态管理

在前端项目中，有许多数据需要在各个组件之间进行传递共享，这时候就需要有一个状态管理工具，一般情况下，我们都会使用`Vuex`，但对于小型项目来说，就像`Vuex`官网所说：“如果您不打算开发大型单页应用，使用 Vuex 可能是繁琐冗余的。确实是如此——如果您的应用够简单，您最好不要使用 Vuex”。这时候我们就可以使用`Vue2.6`提供的新API `Vue.observable`手动打造一个`Vuex`

#### 创建 `store`

```js
import Vue from 'vue'

// 通过Vue.observable创建一个可响应的对象
export const store = Vue.observable({
  userInfo: {},
  roleIds: []
})

// 定义 mutations, 修改属性
export const mutations = {
  setUserInfo(userInfo) {
    store.userInfo = userInfo
  },
  setRoleIds(roleIds) {
    store.roleIds = roleIds
  }
}

复制代码
```

#### 在组件中引用

```jsx
<template>
  <div>
    {{ userInfo.name }}
  </div>
</template>
<script>
import { store, mutations } from '../store'
export default {
  computed: {
    userInfo() {
      return store.userInfo
    }
  },
  created() {
    mutations.setUserInfo({
      name: '子君'
    })
  }
}
</script>
```


