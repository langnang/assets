

# JavaScript

```mermaid
graph LR
Root([JavaScript])
Root --> Reference[参考手册]
	Reference --> JavaScript[JavaScript 对象参考手册]
	Reference --> BOM[BOM 浏览器对象模型]
	Reference --> DOM[HTML DOM 参考手册]
	Reference --> Element[HTML Element 对象参考手册]
	Reference --> WebAPI[Web API]
		WebAPI --> Storage[客户端存储]
		WebAPI --> Console[控制台]
			click Console "Web API/Console.md"
Root --> Theory[原理] 
	Theory --> Closure[闭包]
		click Closure "Theory/Closure.md"
	Theory --> EventLoop[事件循环机制]
Root --> ECMASript
	ECMASript --> ES2015/ES6
	ECMASript --> ES2016/ES7
	ECMASript --> ES2017/ES8
	ECMASript --> ES2018/ES9
Root --> Expand[拓展]
	Expand --> Rule[编码规范]
		click Rule "Expand/Rule.md"
Root --> Book[推荐书籍] 
	Book --> Book_01["JavaScript 高级程序设计（第 4 版）"]
	Book --> Book_02["JavaScript 忍者秘籍（第 2 版）"]
	Book --> Book_03["你不知道的 JS 三卷"]
	Book --> Book_04["JavaScript 悟道"]
	Book --> Book_05["JavaScript 语言精髓与编程实践（第 3 版）"]
	Book --> Book_06["ES6 入门教程"]
		click Book_06 "https://es6.ruanyifeng.com/"

```





- Event Loop
- Web Workers API

<!-- - 继承
- 原型链
- this 指向
- 设计模式
- call, apply, bind
- new 实现
- 防抖节流
- let, var, const 区别
- 暂时性死区
- event loop
- promise 使用及实现
- promise 并行执行和顺序执行；
- async/await 的优缺点
- 闭包
- 垃圾回收和内存泄漏
- 数组方法
- 数组乱序
- 数组扁平化

- [作用域与作用域链]() -->

## 01 什么是 JavaScript

- JavaScript 历史回顾
- JavaScript 是什么
- JavaScript 与 ECMAScript 的关系
- JavaScript 的不同版本

## 02 HTML 中的 JavaScript

## 03 语言基础

- 0301 语法
- 数据类型：原始值与引用值
- 流控制语句
- 理解函数
- [0305 操作符](./03/05.md)

## 04 变量、作用域与内存

- 变量
  - 变量声明
  - 变量提升
  - 暂时性死区
- 执行上下文、作用域、作用域链
- 垃圾回收

## 03 迭代器与生成器

- 理解迭代
- 迭代器模式
- 生成器

## 对象、类与面向对象编程

- 理解对象
- 理解对象创建过程
- 理解继承
- 理解类

## 函数

- 函数表达式、函数声明及箭头函数
- 默认参数及扩展操作符
- 使用函数实现递归
- 使用闭包实现私有变量

## 期约与异步函数

- 异步编程
- 期约（Promise）
- 异步函数（async, await）

## BOM

## 客户端检测

## DOM

## 动画与 Canvas 图形

## JavaScript API

- Atomics 与 SharedArrayBuffer
- 跨上下文消息（cross-document messaging，XDM）
- Encoding API
- File API 与 Blob API
- 拖放
- Notifications API
- Page Visibility API
- Streams API
- 计时 API
- Web 组件
- Web Cryptography API

## 网络请求与远程资源

- Web Socket

## 25 客户端存储

- cookie
- 浏览器存储 API（Web Storage）
- IndexDB

## 26 模块

- 理解模块模式
- 凑合的模块系统
- 使用前 ES6 模块加载器
- 使用 ES6 模块

## 最佳实践

- 编写可维护的代码
- 保证代码性能
- 部署代码到线上环境

## 参考

- [JavaScript | MDN](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript)
- [JavaScript 教程 | W3school](https://www.w3school.com.cn/js/index.asp)
- [JavaScript 教程 | 菜鸟教程](https://www.runoob.com/js/js-tutorial.html)
- 
