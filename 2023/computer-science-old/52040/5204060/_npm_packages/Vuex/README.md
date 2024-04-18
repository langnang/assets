# Vuex

Vuex 是一个专为 Vue.js 应用程序开发的状态管理模式。
它采用集中式存储管理应用的所有组件的状态，并以相应的规则保证状态以一种可预测的方式发生变化。
Vuex 也集成到 Vue 的官方调试工具 devtools extension，提供了诸如零配置的 time-travel 调试、状态快照导入导出等高级调试功能。

![](https://vuex.vuejs.org/vuex.png)

1. 创建 Vue 实例，添加状态`State`的计算属性
2. 组件中调用 dispatch 调用 Actions
3. 提交 Commit 至 Mutations
4. Mutate 更新 State

## State

### mapState

```js
computed: mapState({
  count: (state) => state.count,
  count_0: "count", // count:state => state.count
  count_2(state) {
    return state.count;
  },
});
```

```js
computed:mapState([
    // count:state => state.count
    'count'
    ]),
```

```js
computed:{
    other(){},
    ...mapState([
    // count:state => state.count
    'count'
    ]),
}
```

## Getter

### mapGetters

## Mutation

## Action

## Module

## 项目结构

Vuex 并不限制你的代码结构。但是，它规定了一些需要遵守的规则：

应用层级的状态应该集中到单个 store 对象中。

提交 mutation 是更改状态的唯一方法，并且这个过程是同步的。

异步逻辑都应该封装到 action 里面。

只要你遵守以上规则，如何组织代码随你便。如果你的 store 文件太大，只需将 action、mutation 和 getter 分割到单独的文件。

对于大型应用，我们会希望把 Vuex 相关代码分割到模块中。下面是项目结构示例：

```bat
├── index.html
├── main.js
├── api
│   └── ... # 抽取出API请求
├── components
│   ├── App.vue
│   └── ...
└── store
    ├── index.js          # 我们组装模块并导出 store 的地方
    ├── actions.js        # 根级别的 action
    ├── mutations.js      # 根级别的 mutation
    ├── getters.js        # 根级别的 getter
    └── modules
        ├── cart.js       # 模块
        └── products.js   # 模块
```

## 严格模式

开启严格模式，仅需在创建 store 的时候传入 strict: true：

```js
const store = new Vuex.Store({
  // ...
  strict: true,
});
```

在严格模式下，无论何时发生了状态变更且不是由 mutation 函数引起的，将会抛出错误。这能保证所有的状态变更都能被调试工具跟踪到。

## 数据绑定
