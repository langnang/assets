# vue-element-admin

> vue-element-admin 是一个后台前端解决方案，它基于 vue 和 element-ui 实现。它使用了最新的前端技术栈，内置了 i18n 国际化解决方案，动态路由，权限验证，提炼了典型的业务模型，提供了丰富的功能组件，它可以帮助你快速搭建企业级中后台产品原型。

## 介绍

### 特点

1. 基于 Vue + Element 实现
2. 后台前端解决方案
   1. i18n 国际化解决方案
   2. 动态路由
   3. 权限验证
3. 快速搭建企业级中后台产品原型

### 功能

```sh
- Login / Logout - 登录 / 注销

- Permission Authentication - 权限验证
  - Page permission - 页面权限
  - Directive permission - 指令权限
  - Permission configuration page - 权限配置
  - Two-step login - 二步登录

- Multi-environment build - 多环境发布
  - Develop (dev)
  - sit
  - Stage Test (stage)
  - Production (prod)

- Global Features - 全局功能
  - I18n - 国际化多语言
  - Multiple dynamic themes - 多种动态换肤
  - Dynamic sidebar (supports multi-level routing) - 动态侧边栏（支持多级路由嵌套）
  - Dynamic breadcrumb - 动态面包屑
  - Tags-view (Tab page Support right-click operation) - 快捷导航(标签页)
  - Svg Sprite  - Svg Sprite 图标
  - Mock data - 本地/后端 mock 数据
  - Screenfull - Screenfull全屏
  - Responsive Sidebar - 自适应收缩侧边栏

- Editor
  - Rich Text Editor
  - Markdown Editor
  - JSON Editor

- Excel
  - Export Excel
  - Upload Excel
  - Visualization Excel
  - Export zip

- Table
  - Dynamic Table
  - Drag And Drop Table
  - Inline Edit Table

- Error Page
  - 401
  - 404

- Components
  - Avatar Upload
  - Back To Top
  - Drag Dialog
  - Drag Select
  - Drag Kanban
  - Drag List
  - SplitPane
  - Dropzone
  - Sticky
  - CountTo

- Advanced Example
- Error Log
- Dashboard
- Guide Page
- ECharts
- Clipboard
- Markdown to html

-


- 多环境发布
  - dev sit stage prod



- 编辑器
  - 富文本
  - Markdown
  - JSON 等多格式

- Excel
  - 导出excel
  - 导入excel
  - 前端可视化excel
  - 导出zip

- 表格
  - 动态表格
  - 拖拽表格
  - 内联编辑

- 错误页面
  - 401
  - 404

- 組件
  - 头像上传
  - 返回顶部
  - 拖拽Dialog
  - 拖拽Select
  - 拖拽看板
  - 列表拖拽
  - SplitPane
  - Dropzone
  - Sticky
  - CountTo

- 综合实例
- 错误日志
- Dashboard
- 引导页
- ECharts 图表
- Clipboard(剪贴复制)
- Markdown2html
```

### Preparation - 前序准备

- Vue
- Vue Router
- Vuex
- Vue CLI
- axios
- element-ui
- Mock.js

### 目录结构

```sh
vue-element-admin
  ├── build                           # 构建相关
  ├── mock                            # 项目mock 模拟数据
  ├── plop-templates                  # 基本模板
  ├── public                          # 静态资源
  │   │── favicon.ico                 # favicon图标
  │   └── index.html                  # html模板
  ├── src                             # 源代码
  │   ├── api                         # 所有请求
  │   ├── assets                      # 主题 字体等静态资源
  │   ├── components                  # 全局公用组件
  │   ├── directive                   # 全局指令
  │   ├── filters                     # 全局 filter
  │   ├── icons                       # 项目所有 svg icons
  │   ├── lang                        # 国际化 language
  │   ├── layout                      # 全局 layout
  │   ├── router                      # 路由
  │   ├── store                       # 全局 store管理
  │   ├── styles                      # 全局样式
  │   │   ├── btn.scss                # 按钮样式
  │   │   ├── element-ui.scss         # 全局自定义 element-ui 样式
  │   │   ├── index.scss              # 全局通用样式
  │   │   ├── mixin.scss              # 全局mixin
  │   │   ├── sidebar.scss            # sidebar css
  │   │   ├── transition.scss         # vue transition 动画
  │   │   └── variables.scss          # 全局变量
  │   ├── utils                       # 全局公用方法
  │   ├── vendor                      # 公用vendor
  │   ├── views                       # views 所有页面
  │   ├── App.vue                     # 入口页面
  │   ├── main.js                     # 入口文件 加载组件 初始化等
  │   ├── permission.js               # 权限管理
  │   └── settings.js                 #
  ├── tests                           # 测试
  ├── .env.xxx                        # 环境变量配置
  ├── .eslintrc.js                    # eslint 配置项
  ├── .babelrc                        # babel-loader 配置
  ├── .travis.yml                     # 自动化CI配置
  ├── vue.config.js                   # vue-cli 配置
  ├── postcss.config.js               # postcss 配置
  └── package.json                    # package.json
```

### 安装

```sh
# 克隆项目
git clone https://github.com/PanJiaChen/vue-element-admin.git

# 进入项目目录
cd vue-element-admin

# 安装依赖
npm install

# 建议不要用 cnpm 安装 会有各种诡异的bug 可以通过如下操作解决 npm 下载速度慢的问题
npm install --registry=https://registry.npm.taobao.org

# 本地开发 启动项目
npm run dev
```

## 布局

## 路由和侧边栏

## 权限验证

## 快捷导航(标签栏导航)

## 新增页面

## 样式

## 和服务端进行交互

### 前端请求流程

## Mock Data

## 引入外部模块

### 引入依赖

```sh
# 加上 --save 参数会自动添加依赖到 package.json 中去。
$ npm install vue-count-to --save
```

### 使用

#### 全局注册

main.js

```js
import countTo from "vue-count-to";
Vue.component("countTo", countTo);
```

```html
<template>
  <countTo :startVal="startVal" :endVal="endVal" :duration="3000"></countTo>
</template>
```

#### 局部注册

```html
<template>
  <countTo :startVal="startVal" :endVal="endVal" :duration="3000"></countTo>
</template>

<script>
  import countTo from "vue-count-to";
  export default {
    components: { countTo },
    data() {
      return {
        startVal: 0,
        endVal: 2017,
      };
    },
  };
</script>
```

## 构建和发布

### 构建

```sh
# 打包正式环境
npm run build:prod

# 打包预发布环境
npm run build:stage
```

## 环境变量

## 跨域问题

| 开发环境 | 生产环境 |
| -------- | -------- |
| cors     | cors     |
| proxy    | nginx    |
