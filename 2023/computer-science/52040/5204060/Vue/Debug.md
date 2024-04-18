# Debug

> 调试 Vue

## Vue Devtools

1. chrome 应用商店安装 vue devtools 扩展，并打开 vue devtools 扩展
2. 启动 vue，npm run dev
3. chrome 中访问 vue 网址，打开开发者工具，导行会多出 vue，如下图

## Visual Studio Code

1. Chrome 安装`Debugger for Chrome`;
2. Firefox 安装`Debugger for Firefox`;
3. 修改`webpack`配置文件
  1. Vue CLI 2:`config/index.js`
```js
module.exports={
    devtools:'source-map'
}
```
  2. Vue CLI 3:`vue.config.js`
```js
module.exports = {
    configureWebpack: {
      devtool: 'source-map'
    }
}
```
4. 修改`.vscode/launch.json`
```json
{
  "version": "0.2.0",
  "configurations": [
    {
      "type": "chrome",
      "request": "launch",
      "name": "vuejs: chrome",
      "url": "http://localhost:8080",
      "webRoot": "${workspaceFolder}/src",
      "breakOnLoad": true,
      "sourceMapPathOverrides": {
        "webpack:///src/*": "${webRoot}/*"
      }
    },
    {
      "type": "firefox",
      "request": "launch",
      "name": "vuejs: firefox",
      "url": "http://localhost:8080",
      "webRoot": "${workspaceFolder}/src",
      "pathMappings": [{ "url": "webpack:///src/", "path": "${webRoot}/" }]
    }
  ]
}
```
5. 启动vue项目，npm run dev
6. 点击vscode debug中的绿色三角启动debug，chrome访问网址就可以debug了

## JetBrains WebStorm

1. 在 `Chrome` 中安装插件 JetBrains IDE Support
2. 修改 `webpack` 配置文件
  1. Vue CLI 2:`config/index.js`
```js
module.exports={
    devtools:'source-map'
}
```
  2. Vue CLI 3:`vue.config.js`
```js
module.exports = {
    configureWebpack: {
      devtool: 'source-map'
    }
}
```
3. 编辑调试配置，新建JavaScript调试配置，名字起个vuedebug，并设置要访问的url，以及Remote url配置，
4. 在src的Remote url处填写: webpack:///src
5. 在URL处填写: http://localhost:63342  这里注意：端口号要和设置中调试器自带的端口号63342一直，否则不能调试，
6. 先启动配置的正常server（run），
7. 再启动配置的调试server（vuedebug）
