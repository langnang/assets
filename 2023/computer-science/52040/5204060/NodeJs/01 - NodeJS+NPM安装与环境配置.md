<h1>Node</h1>

- [Example](#Example)
- [API](#API)
- [DOCS](#DOCS)
- [node.msi 安装](#nodemsi-%E5%AE%89%E8%A3%85)
  - [NPM 常用命令](#NPM-%E5%B8%B8%E7%94%A8%E5%91%BD%E4%BB%A4)
    - [配置](#%E9%85%8D%E7%BD%AE)
    - [查看模块相关信息](#%E6%9F%A5%E7%9C%8B%E6%A8%A1%E5%9D%97%E7%9B%B8%E5%85%B3%E4%BF%A1%E6%81%AF)
    - [模块安装，以 express 模块为例](#%E6%A8%A1%E5%9D%97%E5%AE%89%E8%A3%85%E4%BB%A5-express-%E6%A8%A1%E5%9D%97%E4%B8%BA%E4%BE%8B)
    - [npm 初始化构建项目](#npm-%E5%88%9D%E5%A7%8B%E5%8C%96%E6%9E%84%E5%BB%BA%E9%A1%B9%E7%9B%AE)

# Example

# API

# DOCS

# node.msi 安装

1.  修改安装位置：D:\Program Files (x86)\nodejs 即可正常安装
2.  安装完成后
    - 生成文件/文件夹`D:\Program Files (x86)\nodejs`,`C:\Users\Administrator\AppData\Roaming\npm`
    - 生成变量`path-->C:\Users\Administrator\AppData\Roaming\npm`
3.  检查是否安装成功
    - 检查 NodeJS

```
$ node -v
v10.8.0
```

- 检查 NPM

```
$ npm -v
$ npm -version
6.2.0
```

NPM 配置
检查 NPM 配置信息

```
$ npm config ls
; cli configs
metrics-registry = "https://registry.npmjs.org/"
scope = ""
user-agent = "npm/6.2.0 node/v10.8.0 win32 x64"

; builtin config undefined prefix = "C:\Users\Administrator\AppData\Roaming\npm"

; node bin location = D:\Program Files (x86)\nodejs\node.exe
; cwd = C:\Users\Administrator
; HOME = C:\Users\Administrator
; "npm config ls -l" to show all defaults.
```

修改 NPM 配置信息
在 node 主目录下新建 node_global（全局模块安装）、node_cache(cache 缓存)文件夹
配置 全局模块安装、cache 缓存 路径

```
npm config set prefix "D:\Program Files (x86)\nodejs\node_global"
npm config set cache "D:\Program Files (x86)\nodejs\node_cache"
```

配置 全局模块 环境变量：我的电脑-属性-高级系统设置-高级-环境变量
在系统变量下新建"NODE_PATH"，"D:\Program Files (x86)\nodejs\node_global\node_modules"，这种方法用来指定 NODE_PATH 环境变量，并且用 ; 分割多个不同的目录

`NODE_PATH` 是 NODE 中用来 寻找模块所提供的路径注册环境变量 ，NODE_PATH 实现 多个项目 模块复用 的最佳实践方案。node 的包加载机制，从项目的根位置递归搜寻 node_modules 目录，直到文件系统根目录的 node_modules ，如果还没有查找到指定模块的话，就会去 NODE_PATH 中注册的路径中查找 。基于 nodejs 的包加载路径搜索算法，我们可以 采用全局安装的方式，将我们的包安装到全局，这样，多个项目可以共享全局中的依赖包。

检查 NODE_PATH 是否配置成功：win+r，输入 cmd 回车，进入 Windows 命令窗口，执行 npm install express -g，安装 express 模块成功后，输入 node，进入 node 的 REPL 环境，输入 require('express')，如果出现 express 模块相关信息即配置成功

`express@4.16.3 added 50 packages from 47 contributors in 13.127s`

在用户变量"PATH"末尾追加，"D:\Program Files (x86)\nodejs\node_global\"

操作系统 PATH 环境变量作用，当系统调用一个命令的时候，就会在 PATH 变量中注册的路径中寻找，如果注册的路径中有就调用，否则提示命令没找到，“xxx 不是内部或外部命令，也不是可运行的程序或批处理文件”，原因是没有配环境变量 PATH

检查 PATH 是否配置成功：win+r，输入 cmd 回车，进入 Windows 命令窗口，对于已经安装成功的模块，执行相应的命令，如：npm、cnpm、vue、webpack，出现相关输出信息即配置成功

重置 npm 模块的注册、管理、发布地址为 cnpm

```
 npm install cnpm -g
```

cnpmjs.org: Private npm registry and web for Company，cnpm 是一个网站，同时 cnpm 也是一个命令行工具，面向企业级的私有 npm 包的注册地、管理、发布
第一次安装可能会出现问题

```
npm WARN deprecated socks@1.1.10: If using 2.x branch, please upgrade to at least 2.1.6 to avoid a serious bug with socket data flow and an import issue introduced in 2.1.0
D:\Program Files (x86)\nodejs\node_global\cnpm -> D:\Program Files (x86)\nodejs\node_global\node_modules\cnpm\bin\cnpm
cnpm@6.0.0 added 630 packages from 837 contributors in 99.51s
```

解决方法 ：倒数第二行可能就是给你推荐的版本 换个命令：`cnpm install cnpm@6.0.0`换个版本即可
重置模块的镜像地址： `npm config set registry https://registry.npm.taobao.org`
官方地址为`registry.npmjs.org`
重置设置代理 `npm config set proxy http://server:port`

## NPM 常用命令

### 配置

`npm config;`管理 npm 的配置路径
`npm config ls -l;`查看配置详情信息
`npm config get prefix;`查看全局模块安装路径，prefix 字段就是全局 base path
`npm config set prefix D:\develop\nodejs\node_global;`重置全局模块安装路径
`npm config set cache D:\develop\nodejs\node_cache;`重置全局模块缓存路径

### 查看模块相关信息

`npm root;`查看当前项目包（模块）的安装路径
`npm root -g;`查看系统中 node 全局包（模块）的安装路径
`npm ls/list/la/li;`查看当前路径下安装的模块
`npm ls -g;`查看全局安装的模块
`npm init;`在项目中引导创建一个 package.json 文件,安装包的信息可保持到项目的 package.json 文件中，以便后续的其它的项目开发或者他人合作使用。
`npm help;`查看某条命令的详细帮助
`npm help install;`系统在默认的浏览器或者默认的编辑器中打开本地 nodejs 安装包的文件（/nodejs/node_modules/npm/html/doc/cli/npm-install.html）
`npm packageName -v;`查看本地是否安装过某个包
`npm list;`查看当前目录下的包
`npm list -g;`查看全局目录下的包

### 模块安装，以 express 模块为例

`npm install;`在项目根路径下执行该命令，会在项目根路径下的 node_modules 中安装配置在 package.json 中的所有依赖包
`npm install express;`安装 express 包在命令窗口的当前目录下，默认安装最新版本，并将信息保持到项目的 package.json 文件中
`npm install express@3.2.0;`安装 express 包的 3.2.0 版本在命令窗口的当前目录下，并将信息保持到项目的 package.json 文件中
`npm install express --global/-g;`安装 express 模块在全局目录下
`npm install express --save/-S;`安装包加入到生产阶段的依赖,package.json 文件的 dependencies 字段内容增加
`npm install express --save-dev/-D;`安装包加入到开发阶段的依赖,package.json 文件的 devDependencies 字段内容增加
`npm install express --save-optional/-O;`安装包加入到可选阶段的依赖,package.json 文件的 optionalDependencies 字段内容增加
模块卸载关键字为`uninstall`，模块更新关键字为`update`，检查模块是否已经过时关键字为`outdated`

### npm 初始化构建项目

例如，构建一个基于 webpack 模板的 vue 项目
`$ npm instll vue;`
`$ npm install --global vue-cli;`vue 的命令行工具
`$ vue init webpack demo;`核心命令
`$ cd demo`
`$ npm instll;`安装所有依赖包
`$ npm run dev;`运行开发阶段的项目

`package.json`文件可以手工编写，也可以使用 npm init 命令自动生成。npm 的 init 命令之后，会在工程目录文件夹的根目录生成 package.json 文件，该 JSON 文件字段详解：
npm 将该整个工程项目定义为一个 package（包），该文件定义了项目所需要的模块和配置信息，npm install 后，项目根据这个文件的配置字段下载需要的模块 以及 配置需要的运行和开发环境。

```json
{
  "name": "demo01",//项目名字
  "version": "0.0.1",//项目版本号，大版本.次要版本.小版本
  "author": "wan",//
  "description": "The first react-native demo",//
  "keywords": ["react-native","javascript"],//

  "repository": {
    "type": "git",
    "url": "https://path/to/url"
  },
  "license":"MIT",
  "engines": {"node": "0.10.x"},
  "bugs":{"url":"http://path/to/bug","email":"bug@example.com"},
  "contributors":[{"name":"李四","email":"lisi@example.com"}],
  "private": true,//
  "scripts": {//
    "start": "node node_modules/react-native/local-cli/cli.js start",
    "test": "jest"
  },
  //dependencies 和 devDependencies 字段都指向一个对象。该对象的各个成员，分别由模块名和对应的版本要求组成，表示依赖的模块及其版本范围。
  "dependencies": {//指定了项目运行所依赖的模块
    "react": "16.0.0-alpha.6",
    "react-native": "0.44.3",
    "react-native-deprecated-custom-components": "^0.1.0"
  },
  "devDependencies": {//指定项目开发所需要的模块。
    "babel-jest": "20.0.3",
    "babel-preset-react-native": "1.9.2",
    "jest": "20.0.4",
    "react-test-renderer": "16.0.0-alpha.6"
  },
  "jest": {//
    "preset": "react-native"
}

```

```
graph LR
B1[基础知识]---A((Node.js))
模块与类库---A
数据库交互---A
文件操作---A
A---异常处理
A---网络操作
A---设计模式
A---性能分析
A---框架介绍
A---项目实践



```
