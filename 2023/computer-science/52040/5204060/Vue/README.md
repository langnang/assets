# Vue

<p align="center">
    <img title="" width="100" src="https://vuejs.org/images/logo.png" alt="" data-align="center">
</p>

<p align="center">
    <span><a href="https://cn.vuejs.org">中文网</a></span>
    <span> | </span>
    <span><a href="https://github.com/vuejs/vue">GitHub</a></span>
</p>

> Reactive, component-oriented view layer for modern web interfaces.

一套用于构建用户界面的渐进式框架

[Vue 2](https://cn.vuejs.org/) \| [Vue 3](https://v3.cn.vuejs.org/) \| [Awesome]

与其它大型框架不同的是，Vue 被设计为可以自底向上逐层应用。

Vue 的核心库只关注视图层，不仅易于上手，还便于与第三方库或既有项目整合。

## Tree

```
├─.circleci
├─.github
│  └─ISSUE_TEMPLATE
├─benchmarks
│  ├─big-table
│  ├─dbmon
│  │  └─lib
│  ├─reorder-list
│  ├─ssr
│  ├─svg
│  └─uptime
├─dist
├─examples
│  ├─commits
│  ├─elastic-header
│  ├─firebase
│  ├─grid
│  ├─markdown
│  ├─modal
│  ├─move-animations
│  ├─select2
│  ├─svg
│  ├─todomvc
│  └─tree
├─flow
├─packages
│  ├─vue-server-renderer
│  │  └─types
│  ├─vue-template-compiler
│  │  └─types
│  ├─weex-template-compiler
│  └─weex-vue-framework
├─scripts                                        # 脚本
│  └─git-hooks
├─src
│  ├─compiler                                    # 编译
│  │  ├─codegen
│  │  ├─directives
│  │  └─parser
│  ├─core                                        # 核心代码
│  │  ├─components                               # 组件
│  │  ├─global-api                               # 全局API
│  │  ├─instance                                 # 实例代码
│  │  │  └─render-helpers
│  │  ├─observer
│  │  ├─util                                     # 工具
│  │  ├─vdom                                     # 虚拟DOM
│  │  │  ├─helpers
│  │  │  └─modules
│  │  ├─config.js                                # 配置文件
│  │  └─index.js                                 # 代码入口
│  ├─platforms                                   # 平台
│  │  ├─web
│  │  │  ├─compiler
│  │  │  │  ├─directives
│  │  │  │  └─modules
│  │  │  ├─runtime
│  │  │  │  ├─components
│  │  │  │  ├─directives
│  │  │  │  └─modules
│  │  │  ├─server
│  │  │  │  ├─directives
│  │  │  │  └─modules
│  │  │  └─util
│  │  └─weex
│  │      ├─compiler
│  │      │  ├─directives
│  │      │  └─modules
│  │      │      └─recycle-list
│  │      ├─runtime
│  │      │  ├─components
│  │      │  ├─directives
│  │      │  ├─modules
│  │      │  └─recycle-list
│  │      └─util
│  ├─server                                           # 服务端
│  │  ├─bundle-renderer
│  │  ├─optimizing-compiler
│  │  ├─template-renderer
│  │  └─webpack-plugin
│  ├─sfc
│  └─shared
├─test
│  ├─e2e
│  │  └─specs
│  ├─helpers
│  ├─ssr
│  │  └─fixtures
│  ├─unit
│  │  ├─features
│  │  │  ├─component
│  │  │  ├─directives
│  │  │  ├─filter
│  │  │  ├─global-api
│  │  │  ├─instance
│  │  │  ├─options
│  │  │  └─transition
│  │  └─modules
│  │      ├─compiler
│  │      ├─observer
│  │      ├─server-compiler
│  │      ├─sfc
│  │      ├─util
│  │      └─vdom
│  │          ├─modules
│  │          └─patch
│  └─weex
│      ├─cases
│      │  ├─event
│      │  ├─recycle-list
│      │  │  └─components
│      │  └─render
│      ├─compiler
│      ├─helpers
│      └─runtime
│          └─components
└─types
    └─test
```

## Entry

> `vue\src\core\instance\index.js`

```js
import { initMixin } from "./init";
import { stateMixin } from "./state";
import { renderMixin } from "./render";
import { eventsMixin } from "./events";
import { lifecycleMixin } from "./lifecycle";
import { warn } from "../util/index";

function Vue(options) {
  // 判断是否用new关键词调用
  if (process.env.NODE_ENV !== "production" && !(this instanceof Vue)) {
    warn("Vue is a constructor and should be called with the `new` keyword");
  }
  // 使用initMixin中绑定的初始化函数，初始化Vue实例
  this._init(options);
}

initMixin(Vue);
stateMixin(Vue);
eventsMixin(Vue);
lifecycleMixin(Vue);
renderMixin(Vue);

export default Vue;
```

- [init](./init.md)

## Build

|                               | UMD                | CommonJS              | ES Module          |
| ----------------------------- | ------------------ | --------------------- | ------------------ |
| **Full**                      | vue.js             | vue.common.js         | vue.esm.js         |
| **Runtime-only**              | vue.runtime.js     | vue.runtime.common.js | vue.runtime.esm.js |
| **Full (production)**         | vue.min.js         |                       |                    |
| **Runtime-only (production)** | vue.runtime.min.js |                       |                    |

### Terms

- **Full**: builds that contain both the compiler and the runtime.

- **Compiler**: code that is responsible for compiling template strings into JavaScript render functions.

- **Runtime**: code that is responsible for creating Vue instances, rendering and patching virtual DOM, etc. Basically everything minus the compiler.

- **[UMD](https://github.com/umdjs/umd)**: UMD builds can be used directly in the browser via a `&lt;script&gt;` tag. The default file from Unpkg CDN at https://unpkg.com/vue is the Runtime + Compiler UMD build (`vue.js`).

- **[CommonJS](http://wiki.commonjs.org/wiki/Modules/1.1)**: CommonJS builds are intended for use with older bundlers like [browserify](http://browserify.org/) or [webpack 1](https://webpack.github.io). The default file for these bundlers (`pkg.main`) is the Runtime only CommonJS build (`vue.runtime.common.js`).

- **[ES Module](http://exploringjs.com/es6/ch_modules.html)**: ES module builds are intended for use with modern bundlers like [webpack 2](https://webpack.js.org) or [rollup](http://rollupjs.org/). The default file for these bundlers (`pkg.module`) is the Runtime only ES Module build (`vue.runtime.esm.js`).

### Runtime + Compiler vs. Runtime-only

If you need to compile templates on the fly (e.g. passing a string to the `template` option, or mounting to an element using its in-DOM HTML as the template), you will need the compiler and thus the full build.

When using `vue-loader` or `vueify`, templates inside `*.vue` files are compiled into JavaScript at build time. You don't really need the compiler in the final bundle, and can therefore, use the runtime-only build.

Since the runtime-only builds are roughly 30% lighter-weight than their full-build counterparts, you should use it whenever you can. If you wish to use the full build instead, you need to configure an alias in your bundler.

## Keyword

## Noun 名称

- [Mixin 混入]
- [Directive 指令]
- [Filter 过滤器]
- [LifeCycle 生命周期](./Noun/LifeCycle.md)
- [Component 组件]
- [Slot 插槽]
- [Visual DOM 虚拟 DOM]
- [diff 算法]
- SPA 单页应用
- SSR 服务器端渲染
- $nextTick
- 修饰符
- MVVM
- [Two-way Binding 双向绑定](./Noun/Two-way_Binding.md)

## Principle 原理

## Interview


## API

生命周期
指令
数据
DOM
全局配置
全局 API

## Advanced

- [Warning](Warning.md)
- [Error](Error.md)
- [Awesome](Awesome/README.md)

## 参考文献
