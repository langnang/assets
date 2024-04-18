# package.json

## 意义

- 作为一个描述文件，描述了你的项目依赖那些包
- 允许我们使用“语义版本规则”，指明你项目依赖的版本
- 让你的构建更好的与其他人共享

## 创建

```bash
npm init

npm init -y
```

## 字段

- author：作者
  
  ```json
  "author":"Langnang"
  ```

- bin
  
  ```json
  "bin"
  ```

- browser：定义 npm 包在 browser 环境下的入口文件
  
  ```json
  "browser"
  ```

- browserslist：设置项目的浏览器兼容情况。
  
  ```json
  "browserslist":[
      "> 1%",
      "last 2 versions",
      "last 3 Chrome versions",
      "last 3 Firefox versions",
      "Safari >= 10",
      "Explorer >= 11",
      "Edge >= 12",
      "iOS >= 10",
      "Android >= 6"
  ]
  ```

- bugs：bug地址，填写一个bug提交地址或者一个邮箱
  
  ```json
  "bugs":{
      "url":"",
      "email":""
  }
  ```

- config：设置一些用于npm包的脚本命令会用到的配置参数
  
  ```json
  "config": {
      "commitizen": {
          "path": "./node_modules/cz-conventional-changelog"
      }
  }
  ```

- contributors：贡献者
  
  ```json
  "contributors":[
      {"name":"...","email":"...@example.com"}
  ]
  ```

- dependencies，在生产环境中需要用到的依赖
  
  ```json
  "dependencies":{}
  ```

- description：描述信息
  
  ```json
  "description":"description"
  ```

- devDependencies，在开发、测试环境中用到的依赖
  
  ```json
  "devDependencies":{}
  ```

- engines：指明了该项目所需要的node.js版本
  
  ```json
  "engines": {
      "node": ">=8.9.1",
      "npm": ">=5.5.1",
      "yarn": ">=1.3.2"
  }
  ```

- es2015：Angular 定义的未转码的 `es6` 源码。
  
  ```json
  "es2015"
  ```

- esm
  
  ```json
  "esm"
  ```

- esnext：使用 `es` 模块化规范，`stage 4` 特性的源代码。
  
  ```json
  "esnext"
  ```

- files：将软件包作为依赖项安装时要包含的条目，当你发布package时，具体那些文件会发布上去
  
  ```json
  "files":[]
  ```

- githook：代码质量检查
  
  ```json
  "githook"
  ```

- homepage：项目主页的网址
  
  ```json
  "homepage":"langnang.github.io/ln-of-docs"
  ```

- jsdelivr：jsdelivr cdn公共库
  
  ```json
  "jsdelivr":""
  ```

- keywords：一个字符串数组，方便别人搜索到本模块
  
  ```json
  "keywords":[]
  ```

- license：开源协议，默认是MIT
  
  ```json
  "license":"MIT"
  ```

- lint-staged：代码检查
  
  ```json
  "lint-staged"
  ```

- main：入口文件，一般都是index.js
  
  ```json
  "main":""
  ```

- man
  
  ```json
  "man":""
  ```

- module：定义 npm 包的 ESM 规范的入口文件，browser 环境和 node 环境均可使用
  
  ```json
  "module":""
  ```

- name：名称，全部小写，没有空格，可以使用下划线或者横线
  
  ```json
  "name":"ln-of-docs"
  ```

- peerDependencies：本node包依赖的其他依赖包
  
  ```json
  "peerDependencies": {
      "vue": "^2.5.2"
  }
  ```

- react-native：指定该模块供 `react-native` 使用的入口文件。
  
  ```json
  "react-native":""
  ```

- repository：git仓库所在位置
  
  ```json
  "repository":{}
  ```

- scripts：支持的脚本，默认的是一个空的test
  
  ```json
  "scripts":{}
  ```

- sideEffects：声明该模块是否包含 `sideEffects`（副作用），从而可以为 `tree-shaking` 提供更大的优化空间
  
  ```json
  "sideEffects":""
  ```

- typings：TypeScript 的入口文件
  
  ```json
  "typings":""
  ```

- unpkg：让 `npm` 上所有的文件都开启 `cdn` 服务。
  
  ```json
  "unpkg":""
  ```

- version：版本，x.x.x的格式，符合语义化规则
  
  ```json
  "version":"x.x.x"
  ```
