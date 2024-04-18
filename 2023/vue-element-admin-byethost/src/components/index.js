import Vue from "vue";
// 自动注册,不必一个个导入导出
const requireComponent = require.context(
  // 其组件目录的相对路径
  './',
  // 是否查询其子目录,递归查询
  true,
  // 匹配基础组件文件名的正则表达式
  /.(vue)$/
)
var fileArr = [] // 导出路由对象
requireComponent.keys().forEach((fileName) => {
  // 获取组件配置
  const componentConfig = requireComponent(fileName)
  const compName = fileName.split("/")[fileName.split("/").length - 1].split(".")[0];
  if (componentConfig.default) {
    fileArr.push({
      name: compName,
      compnent: componentConfig.default
    })
  }
})
fileArr.forEach(item => {
  Vue.component(item.name, item.compnent); // 全局注册了
})
