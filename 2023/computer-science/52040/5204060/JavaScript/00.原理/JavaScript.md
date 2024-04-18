<h1>JavaScript</h1>

- [JavaScript 简介](#JavaScript-%E7%AE%80%E4%BB%8B)
  - [JavaScript 简史](#JavaScript-%E7%AE%80%E5%8F%B2)
  - [JavaScript 实现](#JavaScript-%E5%AE%9E%E7%8E%B0)
    - [ECMAScript](#ECMAScript)
    - [文档对象模型（DOM）](#%E6%96%87%E6%A1%A3%E5%AF%B9%E8%B1%A1%E6%A8%A1%E5%9E%8BDOM)
    - [浏览器对象模型（BOM）](#%E6%B5%8F%E8%A7%88%E5%99%A8%E5%AF%B9%E8%B1%A1%E6%A8%A1%E5%9E%8BBOM)
  - [JavaScript 版本](#JavaScript-%E7%89%88%E6%9C%AC)
- [在 HTML 中使用 JavaScript](#%E5%9C%A8-HTML-%E4%B8%AD%E4%BD%BF%E7%94%A8-JavaScript)
- [基本概念](#%E5%9F%BA%E6%9C%AC%E6%A6%82%E5%BF%B5)
  - [语法](#%E8%AF%AD%E6%B3%95)
    - [区分大小写](#%E5%8C%BA%E5%88%86%E5%A4%A7%E5%B0%8F%E5%86%99)
    - [标识符](#%E6%A0%87%E8%AF%86%E7%AC%A6)
    - [注释](#%E6%B3%A8%E9%87%8A)
    - [严格模式](#%E4%B8%A5%E6%A0%BC%E6%A8%A1%E5%BC%8F)
    - [语句](#%E8%AF%AD%E5%8F%A5)
  - [关键字和保留字](#%E5%85%B3%E9%94%AE%E5%AD%97%E5%92%8C%E4%BF%9D%E7%95%99%E5%AD%97)
  - [变量](#%E5%8F%98%E9%87%8F)
  - [数据类型](#%E6%95%B0%E6%8D%AE%E7%B1%BB%E5%9E%8B)
    - [typeof 操作符](#typeof-%E6%93%8D%E4%BD%9C%E7%AC%A6)
    - [Undefined 类型](#Undefined-%E7%B1%BB%E5%9E%8B)
    - [Null 类型](#Null-%E7%B1%BB%E5%9E%8B)
    - [Boolean 类型](#Boolean-%E7%B1%BB%E5%9E%8B)
    - [Number 类型](#Number-%E7%B1%BB%E5%9E%8B)
    - [String 类型](#String-%E7%B1%BB%E5%9E%8B)
    - [Object 类型](#Object-%E7%B1%BB%E5%9E%8B)
  - [操作符](#%E6%93%8D%E4%BD%9C%E7%AC%A6)
    - [一元操作符](#%E4%B8%80%E5%85%83%E6%93%8D%E4%BD%9C%E7%AC%A6)
    - [位操作符](#%E4%BD%8D%E6%93%8D%E4%BD%9C%E7%AC%A6)
    - [布尔操作符](#%E5%B8%83%E5%B0%94%E6%93%8D%E4%BD%9C%E7%AC%A6)
    - [乘性操作符](#%E4%B9%98%E6%80%A7%E6%93%8D%E4%BD%9C%E7%AC%A6)
    - [加性操作符](#%E5%8A%A0%E6%80%A7%E6%93%8D%E4%BD%9C%E7%AC%A6)
    - [关系操作符](#%E5%85%B3%E7%B3%BB%E6%93%8D%E4%BD%9C%E7%AC%A6)
    - [相等操作符](#%E7%9B%B8%E7%AD%89%E6%93%8D%E4%BD%9C%E7%AC%A6)
    - [条件操作符](#%E6%9D%A1%E4%BB%B6%E6%93%8D%E4%BD%9C%E7%AC%A6)
    - [赋值操作符](#%E8%B5%8B%E5%80%BC%E6%93%8D%E4%BD%9C%E7%AC%A6)
    - [逗号操作符](#%E9%80%97%E5%8F%B7%E6%93%8D%E4%BD%9C%E7%AC%A6)
  - [语句](#%E8%AF%AD%E5%8F%A5-1)
  - [函数](#%E5%87%BD%E6%95%B0)
    - [理解参数](#%E7%90%86%E8%A7%A3%E5%8F%82%E6%95%B0)
    - [没有重载](#%E6%B2%A1%E6%9C%89%E9%87%8D%E8%BD%BD)
- [变量、作用域和内存问题](#%E5%8F%98%E9%87%8F%E4%BD%9C%E7%94%A8%E5%9F%9F%E5%92%8C%E5%86%85%E5%AD%98%E9%97%AE%E9%A2%98)
  - [基本类型和引用类型的值](#%E5%9F%BA%E6%9C%AC%E7%B1%BB%E5%9E%8B%E5%92%8C%E5%BC%95%E7%94%A8%E7%B1%BB%E5%9E%8B%E7%9A%84%E5%80%BC)
    - [动态的属性](#%E5%8A%A8%E6%80%81%E7%9A%84%E5%B1%9E%E6%80%A7)
    - [复制变量值](#%E5%A4%8D%E5%88%B6%E5%8F%98%E9%87%8F%E5%80%BC)
    - [传递参数](#%E4%BC%A0%E9%80%92%E5%8F%82%E6%95%B0)
    - [检测类型](#%E6%A3%80%E6%B5%8B%E7%B1%BB%E5%9E%8B)
  - [执行环境和作用域](#%E6%89%A7%E8%A1%8C%E7%8E%AF%E5%A2%83%E5%92%8C%E4%BD%9C%E7%94%A8%E5%9F%9F)
  - [垃圾收集](#%E5%9E%83%E5%9C%BE%E6%94%B6%E9%9B%86)
- [引用类型](#%E5%BC%95%E7%94%A8%E7%B1%BB%E5%9E%8B)
  - [Object](#Object)
  - [Array](#Array)
  - [Date](#Date)
  - [RegExp](#RegExp)
  - [Function](#Function)
  - [基本包装类型](#%E5%9F%BA%E6%9C%AC%E5%8C%85%E8%A3%85%E7%B1%BB%E5%9E%8B)
  - [单体内置对象](#%E5%8D%95%E4%BD%93%E5%86%85%E7%BD%AE%E5%AF%B9%E8%B1%A1)
- [面向对象的程序设计](#%E9%9D%A2%E5%90%91%E5%AF%B9%E8%B1%A1%E7%9A%84%E7%A8%8B%E5%BA%8F%E8%AE%BE%E8%AE%A1)
  - [理解对象](#%E7%90%86%E8%A7%A3%E5%AF%B9%E8%B1%A1)
  - [创建对象](#%E5%88%9B%E5%BB%BA%E5%AF%B9%E8%B1%A1)
  - [继承对象](#%E7%BB%A7%E6%89%BF%E5%AF%B9%E8%B1%A1)
- [函数表达式](#%E5%87%BD%E6%95%B0%E8%A1%A8%E8%BE%BE%E5%BC%8F)
  - [递归](#%E9%80%92%E5%BD%92)
  - [闭包](#%E9%97%AD%E5%8C%85)
  - [模仿块级作用域](#%E6%A8%A1%E4%BB%BF%E5%9D%97%E7%BA%A7%E4%BD%9C%E7%94%A8%E5%9F%9F)
  - [私有变量](#%E7%A7%81%E6%9C%89%E5%8F%98%E9%87%8F)
- [BOM](#BOM)
- [客户端检测](#%E5%AE%A2%E6%88%B7%E7%AB%AF%E6%A3%80%E6%B5%8B)
- [DOM](#DOM)
- [DOM 扩展](#DOM-%E6%89%A9%E5%B1%95)
- [DOM2 和 DOM3](#DOM2-%E5%92%8C-DOM3)
- [高级技巧](#%E9%AB%98%E7%BA%A7%E6%8A%80%E5%B7%A7)
  - [高级函数](#%E9%AB%98%E7%BA%A7%E5%87%BD%E6%95%B0)
  - [防篡改对象](#%E9%98%B2%E7%AF%A1%E6%94%B9%E5%AF%B9%E8%B1%A1)
  - [高级定时器](#%E9%AB%98%E7%BA%A7%E5%AE%9A%E6%97%B6%E5%99%A8)
  - [自定义事件](#%E8%87%AA%E5%AE%9A%E4%B9%89%E4%BA%8B%E4%BB%B6)
  - [拖放](#%E6%8B%96%E6%94%BE)
  - [离线应用和客户端存储](#%E7%A6%BB%E7%BA%BF%E5%BA%94%E7%94%A8%E5%92%8C%E5%AE%A2%E6%88%B7%E7%AB%AF%E5%AD%98%E5%82%A8)
  - [最佳实践](#%E6%9C%80%E4%BD%B3%E5%AE%9E%E8%B7%B5)
- [附录](#%E9%99%84%E5%BD%95)
  - [ECMAScript Harmony](#ECMAScript-Harmony)
  - [严格模式](#%E4%B8%A5%E6%A0%BC%E6%A8%A1%E5%BC%8F-1)
  - [JavaScript 库](#JavaScript-%E5%BA%93)
  - [JavaScript 工具](#JavaScript-%E5%B7%A5%E5%85%B7)
- [参考](#%E5%8F%82%E8%80%83)

# JavaScript 简介

## JavaScript 简史

## JavaScript 实现

### ECMAScript

> JavaScript 的核心，由 ECMA-262 定义，提供核心语言功能

- 语法
- 类型
- 语句
- 关键字
- 保留字
- 操作符

### 文档对象模型（DOM）

> 提供访问和操作网页内容的方法和接口

- DOM Level 1
  - DOM 核心（DOM Core）：规定如何映射基于 XML 的文档结构，以便简化对文档中人一部分的访问和控制
  - DOM HTML：在 DOM 核心的基础上加以扩展，添加了针对 HTML 的对象和方法
- DOM Level 2
  - DOM 视图（DOM Views）：定义了跟踪不同文档（例如，应用 CSS 之前和之后的文档）视图的接口； - DOM 事件（DOM Events）：定义了事件和事件处理的接口； - DOM 样式（DOM Style）：定义了基于 CSS 为元素应用样式的接口； - DOM 遍历和范围（DOM Traversal and Range）：定义了遍历和操作文档树的接口。
- DOM Level 3
  - 引入了以统一方式加载和保存文档的方法——在 DOM 加载和保存（DOM Load and Save）模块中定义
  - 新增了验证文档的方法——在 DOM 验证（DOM Validation）模块中定义。

### 浏览器对象模型（BOM）

> 提供与浏览器交互的方法和接口

- 弹出新浏览器窗口的功能；
- 移动、缩放和关闭浏览器窗口的功能；
- 提供浏览器详细信息的 navigator 对象；
- 提供浏览器所加载页面的详细信息的 location 对象；
- 提供用户显示器分辨率详细信息的 screen 对象；
- 对 cookies 的支持；
- 像 XMLHttpRequest 和 IE 的 ActiveXObject 这样的自定义对象。

## JavaScript 版本

# 在 HTML 中使用 JavaScript

# 基本概念

## 语法

### 区分大小写

ECMAScript 中的一切（变量、函数名和操作符）都区分大小写

### 标识符

- 第一个字符必须是一个字母、下划线（\_）或一个美元符号（\$）；
- 其他字符可以是字母、下划线、美元符号或数字。

### 注释

- 单行注释
- 块级注释

### 严格模式

`"use strict";`

### 语句

## 关键字和保留字

## 变量

## 数据类型

### typeof 操作符

> typeof 后圆括号尽管可以使用，但不是必需的

- undefined：如果这个值未定义
- boolean：如果这个值是布尔值
- string：如果这个值是字符串
- number：如果这个值是数值
- object：如果这个值是对象或 null
- function：如果这个值是函数

### Undefined 类型

> Undefined 类型只有一个值，即特殊的 undefined。在使用 var 声明变量但未对其加以初始化时，这个变量的值就是 undefined。

### Null 类型

> Null 类型是第二个只有一个值的数据类型，这个特殊的值是 null。从逻辑角度来看，null 值表示一个空对象指针，而这也正是使用 typeof 操作符检测 null 值时会返回"object"的原因

### Boolean 类型

### Number 类型

- 浮点数值
  > 所谓浮点数值，就是该数值中必须包含一个小数点，并且小数点后面必须至少有一位数字。虽然小数点前面可以没有整数，但我们不推荐这种写法。
- 数值范围
- NaN
  > 即非数值（Not a Number）是一个特殊的数值，这个数值用于表示一个本来要返回数值的操作数未返回数值的情况（这样就不会抛出错误了）。
  - 任何涉及 NaN 的操作（例如 NaN/10）都会返回 NaN
  - NaN 与任何值都不相等，包括 NaN 本身
- 数值转换
  - Number()
    - 如果是 Boolean 值，true 和 false 将分别被转换为 1 和 0。
    - 如果是数字值，只是简单的传入和返回。
    - 如果是 null 值，返回 0。
    - 如果是 undefined，返回 NaN。
    - 如果是字符串，遵循下列规则：
      - 如果字符串中只包含数字（包括前面带正号或负号的情况），则将其转换为十进制数值，即"1"会变成 1，"123"会变成 123，而"011"会变成 11（注意：前导的零被忽略了）；
      - 如果字符串中包含有效的浮点格式，如"1.1"，则将其转换为对应的浮点数值（同样，也会忽略前导零）
      - 如果字符串中包含有效的十六进制格式，例如"0xf"，则将其转换为相同大小的十进制整数值；
      - 如果字符串是空的（不包含任何字符），则将其转换为 0；
      - 如果字符串中包含除上述格式之外的字符，则将其转换为 NaN。
    - 如果是对象，则调用对象的 valueOf()方法，然后依照前面的规则转换返回的值。如果转换的结果是 NaN，则调用对象的 toString()方法，然后再次依照前面的规则转换返回的字符串值。
  - parseInt()
  - parseFloat()

### String 类型

> String 类型用于表示由零或多个 16 位 Unicode 字符组成的字符序列，即字符串。字符串可以由双引号（"）或单引号（'）表示

- 字符字面量
  > String 数据类型包含一些特殊的字符字面量，也叫转义序列，用于表示非打印字符，或者具有其他用途的字符
  - \n 换行
  - \t 制表
  - \b 空格
  - \r 回车
  - \f 进纸
  - \\\\ 斜杠
  - \\' 单引号（'），在用单引号表示的字符串中使用。例如：'He said, \\'hey.\\''
  - \\" 双引号（"），在用双引号表示的字符串中使用。例如："He said, \\"hey.\\""
  - \xnn 以十六进制代码 nn 表示的一个字符（其中 n 为 0 ～ F）。例如，\x41 表示"A"
  - \unnnn 以十六进制代码 nnnn 表示的一个 Unicode 字符（其中 n 为 0 ～ F）。例如，\u03a3 表示希腊字符 Σ
- 字符串的特点
  > CMAScript 中的字符串是不可变的，也就是说，字符串一旦创建，它们的值就不能改变。要改变某个变量保存的字符串，首先要销毁原来的字符串，然后再用另一个包含新值的字符串填充该变量
- 转换为字符串
  - toString()
    - 数值、布尔值、对象和字符串值（没错，每个字符串也都有一个 toString()方法，该方法返回字符串的一个副本）都有 toString()方法。
    - null 和 undefined 值没有这个方法。
  - String()
    - 如果值有 toString()方法，则调用该方法（没有参数）并返回相应的结果；
    - 如果值是 null，则返回"null"；
    - 如果值是 undefined，则返回"undefined"。

### Object 类型

> 对象其实就是一组数据和功能的集合。对象可以通过执行 new 操作符后跟要创建的对象类型的名称来创建。而创建 Object 类型的实例并为其添加属性和（或）方法，就可以创建自定义对象，

- constructor：保存着用于创建当前对象的函数。对于前面的例子而言，构造函数（constructor）就是 Object()。
- hasOwnProperty(propertyName)：用于检查给定的属性在当前对象实例中（而不是在实例的原型中）是否存在。其中，作为参数的属性名（propertyName）必须以字符串形式指定（例如：o.hasOwnProperty("name")）。
- isPrototypeOf(object)：用于检查传入的对象是否是传入对象的原型（第 5 章将讨论原型）。
- propertyIsEnumerable(propertyName)：用于检查给定的属性是否能够使用 for-in 语句（本章后面将会讨论）来枚举。与 hasOwnProperty()方法一样，作为参数的属性名必须以字符串形式指定。
- toLocaleString()：返回对象的字符串表示，该字符串与执行环境的地区对应。
- toString()：返回对象的字符串表示。
- valueOf()：返回对象的字符串、数值或布尔值表示。通常与 toString()方法的返回值相同。

## 操作符

### 一元操作符

> 只能操作一个值的操作符叫做一元操作符。一元操作符是 ECMAScript 中最简单的操作符。

- 递增（++）和递减（--）
  - 在应用于一个包含有效数字字符的字符串时，先将其转换为数字值，再执行加减 1 的操作。字符串变量变成数值变量。
  - 在应用于一个不包含有效数字字符的字符串时，将变量的值设置为 NaN（第 4 章将详细讨论）。字符串变量变成数值变量。
  - 在应用于布尔值 false 时，先将其转换为 0 再执行加减 1 的操作。布尔值变量变成数值变量。
  - 在应用于布尔值 true 时，先将其转换为 1 再执行加减 1 的操作。布尔值变量变成数值变量。
  - 在应用于浮点数值时，执行加减 1 的操作。
  - 在应用于对象时，先调用对象的 valueOf()方法（第 5 章将详细讨论）以取得一个可供操作的值。然后对该值应用前述规则。如果结果是 NaN，则在调用 toString()方法后再应用前述规则。对象变量变成数值变量。
- 一元加（+）和一元减（-）

### 位操作符

> 位操作符用于在最基本的层次上，即按内存中表示数值的位来操作数值。

- 按位非（~）：返回数值的反码
- 按位与（&）
- 按位或（|）
- 按位异或（^）
- 左移（<<）
- 有符号的右移（>>）
- 无符号右移（>>>）

### 布尔操作符

- 逻辑非（!）
- 逻辑与（）
- 逻辑或（）

### 乘性操作符

- 乘法（）
- 除法（）
- 求模（）

### 加性操作符

- 加法（）
- 减法（）

### 关系操作符

- 大于（）
- 小于（）
- 大于等于（）
- 小于等于（）

### 相等操作符

- 相等（）
- 不相等（）
- 全等（）
- 不全等（）

### 条件操作符

- 条件（? : ）

### 赋值操作符

- 简单/赋值（=）
- 乘/赋值（\*=）
- 除/赋值（/=）
- 模/赋值（%=）
- 加/赋值（+=）
- 减/赋值（=）
- 左移/赋值（<<=）
- 有符号右移/赋值（>>=）
- 无符号右移/赋值（>>>=）

### 逗号操作符

- 逗号（,）

## 语句

- if 语句
- do-while 语句
  > 一种后测试循环语句，即只有在循环体中的代码执行之后，才会测试出口条件。换句话说，在对条件表达式求值之前，循环体内的代码至少会被执行一次。
- while
  > while 语句属于前测试循环语句，也就是说，在循环体内的代码被执行之前，就会对出口条件求值。因此，循环体内的代码有可能永远不会被执行。
- for
  > for 语句也是一种前测试循环语句，但它具有在执行循环之前初始化变量和定义循环后要执行的代码的能力。
- for-in
  > for-in 语句是一种精准的迭代语句，可以用来枚举对象的属性。
- label
  > 使用 label 语句可以在代码中添加标签，以便将来使用。
- break 和 continue
  > break 和 continue 语句用于在循环中精确地控制代码的执行。其中，break 语句会立即退出循环，强制继续执行循环后面的语句。而 continue 语句虽然也是立即退出循环，但退出循环后会从循环的顶部继续执行。
- with
  > with 语句的作用是将代码的作用域设置到一个特定的对象中
- switch
  > switch 语句中的每一种情形（case）的含义是：“如果表达式等于这个值（value），则执行后面的语句（statement）”。而 break 关键字会导致代码执行流跳出 switch 语句。如果省略 break 关键字，就会导致执行完当前 case 后，继续执行下一个 case。最后的 default 关键字则用于在表达式不匹配前面任何一种情形的时候，执行机动代码（因此，也相当于一个 else 语句）。

## 函数

> 函数对任何语言来说都是一个核心的概念。通过函数可以封装任意多条语句，而且可以在任何地方、任何时候调用执行。ECMAScript 中的函数使用 function 关键字来声明，后跟一组参数以及函数体。

### 理解参数

- ECMAScript 函数的参数与大多数其他语言中函数的参数有所不同。ECMAScript 函数不介意传递进来多少个参数，也不在乎传进来参数是什么数据类型。
- ECMAScript 中的参数在内部是用一个数组来表示的。函数接收到的始终都是这个数组，而不关心数组中包含哪些参数（如果有参数的话）
- 在函数体内可以通过 arguments 对象来访问这个参数数组，从而获取传递给函数的每一个参数。

### 没有重载

- ECMAScript 函数不能像传统意义上那样实现重载。

# 变量、作用域和内存问题

## 基本类型和引用类型的值

> ECMAScript 变量可能包含两种不同数据类型的值：基本类型值和引用类型值。
> 基本类型值指的是简单的数据段，Undefined、Null、Boolean、Number和String。这5种基本数据类型是按值访问的，因为可以操作保存在变量中的实际的值。
> 引用类型值指那些可能由多个值构成的对象。引用类型的值是保存在内存中的对象

### 动态的属性
- 不能给基本类型的值添加属性，尽管这样做不会导致任何错误。
- 可以为应用类型的值添加属性和方法，也可以改变和删除其属性和方法。

### 复制变量值
- 复制基本类型的值，会在变量对象上创建一个新值，然后把该值复制到为新变量分配的位置上。
- 制引用类型的值时，同样也会将存储在变量对象中的值复制一份放到为新变量分配的空间中。不同的是，这个值的副本实际上是一个指针，而这个指针指向存储在堆中的一个对象。复制操作结束后，两个变量实际上将引用同一个对象。因此，改变其中一个变量，就会影响另一个变量，

### 传递参数
- ECMAScript中所有函数的参数都是按值传递的。也就是说，把函数外部的值复制给函数内部的参数，就和把值从一个变量复制到另一个变量一样。
- 基本类型值的传递如同基本类型变量的复制一样，
- 而引用类型值的传递，则如同引用类型变量的复制一样。

### 检测类型

- typeof
- instanceof

## 执行环境和作用域

> 执行环境（execution context，为简单起见，有时也称为“环境”）是 JavaScript 中最为重要的一个概念。执行环境定义了变量或函数有权访问的其他数据，决定了它们各自的行为。每个执行环境都有一个与之关联的变量对象（variable object），环境中定义的所有变量和函数都保存在这个对象中。
> 全局执行环境是最外围的一个执行环境。
> 每个函数都有自己的执行环境。

- 延长作用域链
- 没有块级作用域
  - 声明变量
  - 查询标识符

## 垃圾收集

> JavaScript 具有自动垃圾收集机制，也就是说，执行环境会负责管理代码执行过程中使用的内存。

- 标记清除
- 引用计数
- 性能问题
- 管理内存

# 引用类型
> 在ECMAScript中，引用类型是一种数据结构，用于将数据和功能组织在一起。它也常被称为类，但这种称呼并不妥当。尽管ECMAScript从技术上讲是一门面向对象的语言，但它不具备传统的面向对象语言所支持的类和接口等基本结构。引用类型有时候也被称为对象定义，因为它们描述的是一类对象所具有的属性和方法。 

## Object

## Array

- 检测数组
  - instanceof
  - Array.isArray()
- 转换方法
  - Array.toString()
- 栈方法
  - push()
  - pop()
- 队列方法
  - shift()
  - unshift()
- 重排序方法
  - reverse()
  - sort()
- 操作方法
  - concat()
  - slice()
  - splice()
- 位置方法
  - indexOf()
  - lastIndexOf()
- 迭代方法
  - every()
  - filter()
  - forEach()
  - map()
  - some()
- 归并方法
  - reduce()
  - reduceRight()

## Date

- 继承的方法
- 日期格式化方法
  - toDateString()
  - toTimeString()
  - toLocaleDateString()
  - toLocaleTimeString()
  - toUTCString()
- 日期/时间组件方法
  - getTime() 返回表示日期的毫秒数；与 valueOf()方法返回的值相同
  - setTime(毫秒) 以毫秒数设置日期，会改变整个日期
  - getFullYear() 取得 4 位数的年份（如 2007 而非仅 07）
  - ......

## RegExp

- RegExp 实例属性
  - global：布尔值，表示是否设置了 g 标志。
  - ignoreCase：布尔值，表示是否设置了 i 标志。
  - lastIndex：整数，表示开始搜索下一个匹配项的字符位置，从 0 算起。
  - multiline：布尔值，表示是否设置了 m 标志。
  - source：正则表达式的字符串表示，按照字面量形式而非传入构造函数中的字符串模式返回。
- RegExp 实例方法
- RegExp 构造函数属性
- 模式的局限性

## Function

- 没有重载
- 函数声明与函数表达式
- 作为值的函数
- 函数内部属性
- 函数属性和方法

## 基本包装类型

- Boolean
- Number
- String
  - 字符方法
  - 字符串操作方法
  - 字符串位置方法
  - trim()
  - 字符串大小写转换方法
  - 字符串的模式匹配方法
  - localeCompare()
  - fromCharCode()
  - HTML 方法

## 单体内置对象

- Global
  - URL 编码方法
  - eval()方法
  - Global 对象的属性
  - window 对象
- Math
  - Math 对象的属性
  - min()和 max()方法
  - 舍入方法
    - Math.ceil()：向上舍入
    - Math.floor()：向下舍入
    - Math.round()：标准四舍五入
  - random()
  - 其他方法

# 面向对象的程序设计

> 面向对象（Object-Oriented，OO）的语言有一个标志，那就是它们都有类的概念，而通过类可以创建任意多个具有相同属性和方法的对象。前面提到过，ECMAScript 中没有类的概念，因此它的对象也与基于类的语言中的对象有所不同。

## 理解对象

- 属性类型
  - 数据属性
  - 访问器属性
- 定义多个属性
- 读取属性的特性

## 创建对象

- 工厂模式
- 构造函数模式
- 原型模式
- 组合使用构造函数模式和原型模式
- 动态原型模式
- 寄生构造函数模式
- 稳妥构造函数模式

## 继承对象

- 原型链
- 借用构造函数
- 组合继承
- 原型链继承
- 寄生式继承
- 寄生组合式继承

# 函数表达式

## 递归

## 闭包

## 模仿块级作用域

## 私有变量

# BOM

# 客户端检测

# DOM

# DOM 扩展

# DOM2 和 DOM3

# 高级技巧

## 高级函数

## 防篡改对象

- 不可扩展对象：Object.preventExtensions()
- 密封的对象：Object.defineProperty()
- 冻结的对象：Objcet.freeze()

## 高级定时器

- 重复的定时器
- Yielding Processes
- 函数节流

## 自定义事件

## 拖放

- 修缮拖动功能
- 添加自定义事件

## 离线应用和客户端存储

## 最佳实践

##新兴的 API

# 附录

## ECMAScript Harmony

## 严格模式

## JavaScript 库

## JavaScript 工具

# 参考

- JavaScript 高级程序设计（第 3 版）【Nicholas C.Zakas 人民邮电出版社】



1、什么是 JavaScript？
　　JavaScript 是一门跨平台、面向对象的动态的弱类型的轻量级解释型语言，是一种基于对象和事件驱动并具有相对安全性的客户端脚本语言。应用于 HTML 文档能够在网站上提供动态的交互能力，他不同于 Java。简单说就是基于浏览器处理 HTML 文档，实现各种网页特效，响应用户的各种操作，为网页添加动态效果，提升用户操作体验，比如图片滚动播放效果，点击登录按钮弹出对话框，鼠标移入移出动画，表单提交数据验证等。
 
2、为什么要学习 JavaScript？
　　JavaScript 通常被称为 JS，他发明的目的，就是作为浏览器的内置脚本语言，为网页开发者提供操控浏览器的能力，他可以让网页呈现出各种特殊效果，为用户提供友好的互动体验。随着 Ajax 技术的出现，前端可以在不刷新页面的情况下和后端进行数据交换，更新页面数据，jQuery 等库的盛行让 JS 编写变得异常简单，Bootstrap 框架更让前端的成本无限降低，大大提高了前端开发的效率，JS 在前端领域前景非常广阔。
　　随着 Node 的发布，使得 JS 不仅可以运行在前端，还可以运行在服务器上。这对 JS 来说是一次质的突破，Node.js 项目使得 JS 可以用于开发服务器端的大型项目，网站的前后端都用 JS 开发已经称为了现实。
　　至此 JS 除了可以被浏览器解析，也可以作为后端语言使用，越来越多的应用程序，将 JS 作为内嵌的脚本语言，可以用来构建移动端 APP，开发 HTML 游戏，可以不依赖于浏览器，构建桌面应用程序。
　　可以预期，最终只使用 JS 这一种语言，就可以开发出适应不同平台（包括桌面端，服务器端，手持端）的程序。在 Jeef Atwood 发布的博客中，他提出了著名的“Atwood定律”，即“任何能够用 JavaScript 实现的应用程序，最终都必将用 JavaScript 实现”。
　　相比学习其他语言，JS 很容易学习。只要有浏览器，就能运行 JS 程序，只要有文本编辑器，就可以编写 JS 代码。不用安装复杂的 IED（集成开发环境）和编译器。JS 的语法相对简单一些，本身的语法不是特别多，而且语言灵活，完全可以只用简单的命令，完成大部分的操作。
　　虽然 JS 的核心语法不难学习，但是要真正学透还不是一件容易的事，JS 其实是很复杂的，随着学习，越能体会到他的强大。JS 要发挥作用，必须与其他组件配合，这些外部组件五花八门，而且数量庞大，涉及到了网络应用的各个方面，比如编辑器组件，QQ 空间提供的关注组件等，要掌握他们并非易事，必须下狠功夫。JS 语言有一些设计缺陷，在一些地方会出现怪异的运行结果，各主流浏览器对于 JS 的支持不尽相同，兼容性是最让人头疼的事情，学习 JS，很大一部分时间都是用来搞清除哪些地方有陷阱。
　　尽管如此，JS 的地位还是不可动摇的，2015年公布的世界语言使用排名，JS 排在第七位，较去年又有了提升。Ecma（通过 Ecma-262 制定脚本语言的标准）加快了语言的标准化，使得 JS 功能日益增强，而语法缺陷和怪异之处也得到了弥补，截至今年 JS 最新版本为 ECMAScript 2015，也叫 ES6，增加了许多新特性。所以，JS 还是值得学习的，不仅要掌握，而且要学精，尤其对于 Web 前端开发工程师尤为重要。
 
3、JavaScript 组成
　　JS 由三部分组成：
　　ECMAScript：也叫解释器，充当翻译角色，这是 JS 的核心部分。
　　DOM：文档对象模型（Document Object Model）。DOM 赋予了 JS 操作 HTML 的能力，即 document 操作。
　　BOM：浏览器对象模型（Browser Object Model）。BOM 赋予了 JS 操作浏览器的能力，即 window 操作。
 
4、JavaScript 用法
　　HTML 中的脚本必须位于 <script></script> 标签之间。可以在 HTML 文档中放入不限数量的脚本。脚本可位于 HTML 的 <head>或<body> 中，或者同时存在于这两个部分中。通常的做法是把函数放在 <head> 中，或者放在页面底部，这样不会干扰页面的内容。
　　也可以把脚本保存在外部文件中，文件扩展名为 .js，外部文件通常包含被多个网页使用的代码。注意：在使用外部脚本时，脚本内不能包含 <script> 标签。
 
5、编写 JavaScript 的流程
　　首先，也是最重要的，先要搞清楚网页效果的实现原理，要达到什么目的，需要对哪些属性做出修改，以及用户的哪些操作，通过用户的某种操作，一步步的构思 JS 实现的方法。
　　然后 HTML+CSS 布局页面。
　　接着选择需要修改的属性的名称（id 或 class）。
　　再根据用户的操作，选择相应的触发事件。
　　最后，在事件中，根据第一步的构思，编写 JS 代码。


1、getElememtById

/** * 获取指定id的的元素数组 */function getElements(/*ids...*/) {    var elements = {};                               for(var i = 0; i < arguments.length; i++) {          var id = arguments[i];                           var elt = document.getElementById(id);           if (elt == null)                                     thrownew Error("No element with id: " + id);         elements[id] = elt;                        }    return elements;                            }

在低于IE8以下版本的浏览器，getElementById()对匹配元素的id不区分大小写，而且也返回匹配name属性的元素！

2、getElememtsByName

在IE8下，getElementsByName()会返回id属性匹配的元素！

包含name属性的元素只有少量元素如：form，表单元素，iframe,和 img元素！

getElememtsByName //返回的是nodeList对象

3、getElememtsByTagName

选择指定标签的元素名称的元素！

var span = document.getElementsByTagName('span');

类似于getElememtsByName，getElememtsByTagName返回也是nodeList元素对象。

html标签是不区分大小写的，所以getElememtsByTagName也是不区分大小写的查找元素的！

查找元素的后代元素

var p = document.getElementsByTagName('p');//查找p元素

var p_span = p.getElementsByTagName('span');//查找p元素下span元素

获取指定name属性的表单元素

document.testFrom;//获取表单名称为testFrom的表单

document.forms.testFrom;//获取表单名称为testFrom的表单或者id为testForm的元素

getElementsByTagName和getElememtsByName，返回的都是nodeList对象

而对于document.images和document.forms,他们返回的是HTMLCollection对象，这些对象只有只读属性，他们有length属性，也可以像真正的数组进行索引

但是只是读而不是写！

如下代码

for(var i=0;i//循环所有img对象    document.images[i].style.display = 'none';//隐藏他们}

4、通过css类来调用元素

document.getElememtsByClassName();//基于class的名字来获取元素

例子：

var waring = document.getElementsByClassName('waring');//获取class为waring的元素

var p = document.getElememtById('p');

var p_ch = p.getElememtsByClassName('fat error');//在ID为p的元素下面找到类名为fat和error，参数的里面类名顺序不区分，通过空格分割。

注明：

除了IE8以下的版本的浏览器，其他浏览器都实现了getElememtsByClassName方法！

5、节点树node对象

parentNode 指定元素的父元素节点，没有父节点返回null

childNodes 只读的类数组对象，它是该节点的子节点的实时表示！

firstChild,lastChild 该节点的子节点的第一个子节点和最后一个子节点！

nextSibling，previoursSlibing 该节点的子节点的下一个和上一个兄弟节点！

nodeType 节点的类型(9)document节点（1）element节点，（3）text节点，（8）commount节点。。

nodeValue 节点的值 text节点和comment节点的内容

nodeName 节点的名称 大写

例子：

document.childNodes[0].childNodes[1];//document节点的子节点的第一个节点下的第二个子节点

document.firstChild.firstChild.nextSibling;//document节点的第一个子节点的第一个子节点的下一个兄弟节点！

6、element

element节点的children属性类似childNodes对象，不同的是children属性只包含element元素！

例子：

可移植的文档遍历函数

/*    返回元素e第n层父元素    如果不存在此类祖先或者祖先元素不是element类型，返回null    如果n为0 返回自己    如果n为1或者省略返回父元素*/function parent(e,n){    if(n == undefined) n = 1;    while(n-- && e) e = e.parentNode;    if(!e || e.nodeType != 1) returnnull;    return e;}/** * Return the nth sibling element of Element e. * If n is postive return the nth next sibling element. * If n is negative, return the -nth previous sibling element. * If n is zero, return e itself. */function sibling(e,n) {    while(e && n !== 0) {  // If e is not defined we just return itif (n > 0) {  // Find next element siblingif (e.nextElementSibling) e = e.nextElementSibling;            else {                for(e=e.nextSibling; e && e.nodeType !== 1; e=e.nextSibling)                    /* empty loop */ ;            }            n--;        }        else {        // Find the previous element siblingif (e.previousElementSibing) e = e.previousElementSibling;            else {                for(e=e.previousSibling; e&&e.nodeType!==1; e=e.previousSibling)                    /* empty loop */ ;            }            n++;        }    }    return e;}/** * Return the nth element child of e, or null if it doesn't have one. * Negative values of n count from the end. 0 means the first child, but * -1 means the last child, -2 means the second to last, and so on. */function child(e, n) {    if (e.children) {                      // If children array existsif (n < 0) n += e.children.length; // Convert negative n to array indexif (n < 0) returnnull;            // If still negative, no childreturn e.children[n];              // Return specified child    }    // If e does not have a children array, find the first child and count// forward or find the last child and count backwards from there.if (n >= 0) { // n is non-negative: count forward from the first child// Find the first child element of eif (e.firstElementChild) e = e.firstElementChild;        else {            for(e = e.firstChild; e && e.nodeType !== 1; e = e.nextSibling)                /* empty */;        }        return sibling(e, n); // Return the nth sibling of the first child    }    else { // n is negative, so count backwards from the endif (e.lastElementChild) e = e.lastElementChild;        else {            for(e = e.lastChild; e && e.nodeType !== 1; e=e.previousSibling)                /* empty */;        }        return sibling(e, n+1); // +1 to convert child -1 to sib 0 of last    }}

7、设置和获取非标准的HTML属性

getAttribute()和setAttribute()方法！查询和设置非标准的html属性。

element类型还设置了另外两个方法，hasAttribute()和removeAttribute(),用来检测属性是否存在，和删除属性。

8、获取元素的文本内容

// Return the plain-text content of element e, recursing into child elements.// This method works like the textContent propertyfunction textContent(e) {    var child, type, s = "";  // s holds the text of all childrenfor(child = e.firstChild; child != null; child = child.nextSibling) {        type = child.nodeType;        if (type === 3 || type === 4)  // Text and CDATASection nodes            s += child.nodeValue;        elseif (type === 1)           // Recurse for Element nodes            s += textContent(child);    }    return s;}

9、创建节点

创建新的element节点可以使用createElement()方法。给元素传递标签名字，对html文档来说该名字不区分大小写，对XML文档则区分大小写！

text节点的创建的方式类似

如：var newnode = document.createTextNode('dsjfhdsf sfdfhsdfsdjfh sdjhf');

9.1复制节点创建节点！

每一个节点都有cloneNode方法来返回一个该节点的一个全新的副本。给方法传递参数true也能够递归的复制所有后代的子节点，或传递一个一个false

只是进行一个浅复制。

9.2 插入节点

　　一旦有了一个节点就可以用node方法appendChild或者insertBefore()将他插入到文档中。appendChild()是在需要插入Element节点上调用的

，它插入到指定节点成为那个节点的最后一个子节点！

　　insertBefore()和appendChild()类似，它传入两个参数，第一个参数是待插入的节点，第二个参数是已经存在的节点。新节点将插入到该节点的前面。

该方法应该是在新节点的父节点上调用的！第二个参数必须是该父节点的子节点，如果第二个参数为null,则它和appendChild类似！

/*将节点插入到父节点指定的位置中*/function insertAt(parent,child,n){    if(n<0 || n > parent.childNodes.length) thrownew Error('invalid index');    elseif(n == parent.childNodes.length) parent.appendChild(child);    else{        parent.insertBefore(child,parent.childNodes[n]);    }}

9.3 表格行的排序

// 根据指定表格每行指定的第n个单元格的内容对表格内容进行排序// 如果存在比较函数则使用它如果没有则按照字母表进行排序function sortrows(table, n, comparator) {    var tbody = table.tBodies[0]; // 第一个 可能是隐式创建的var rows = tbody.getElementsByTagName("tr"); // 查找tbody下所有行    rows = Array.prototype.slice.call(rows,0);   // 真实数组中的快照// 基于第n个单元格的内容进行排序//sort() 方法用于对数组的元素进行排序。    rows.sort(function(row1,row2) {        var cell1 = row1.getElementsByTagName("td")[n];          var cell2 = row2.getElementsByTagName("td")[n];          var val1 = cell1.textContent || cell1.innerText;         var val2 = cell2.textContent || cell2.innerText;        if (comparator) return comparator(val1, val2);         if (val1 < val2) return -1;        elseif (val1 > val2) return 1;        elsereturn 0;    });    // 添加排序好的行添加到tobody的最后for(var i = 0; i < rows.length; i++) tbody.appendChild(rows[i]);}// 查找表格中的th元素(假设只有一行)// 并且使他们可以点击//以便点击该标题进行排序function makeSortable(table) {    var headers = table.getElementsByTagName("th");    for(var i = 0; i < headers.length; i++) {        (function(n) {              headers[i].onclick = function() { sortrows(table, n); };        }(i));              }}

9.4 删除和替代节点

removeChild() 是从文档树种删除一个节点。此方法只能在待删除的节点的父节点上调用；

例如：节点n的删除是这样

n.parentNode.removeChild(n);

replaceChild() 删除一个子节点并用新的子节点来替代，同样是在父节点上调用此方法！

n.parentNode.replaceChild(document.createTextNode('fgdfg'),n);

replaceChild()函数的另一个用法

//用一个元素替换元素n,并让n成为b的子元素function embe(n){    if(typeOf n == 'string'){//如果n为字符串则当做传入元素的ID使用        n = document.getElememtById(n);    }    var b = document.createElement('b');    n.parentNode.replaceChild(b,n);    b.appendChild(n);}

9.5 使用innerHTML实现outerHTML

// Implement the outerHTML property for browsers that don't support it.// Assumes that the browser does support innerHTML, has an extensible // Element.prototype, and allows getters and setters to be defined.(function() {    // If we already have outerHTML return without doing anythingif (document.createElement("div").outerHTML) return;        // Return the outer HTML of the element referred to by thisfunction outerHTMLGetter() {        var container = document.createElement("div"); // Dummy element        container.appendChild(this.cloneNode(true));   // Copy this to dummyreturn container.innerHTML;                    // Return dummy content    }        // Set the outer HTML of the this element to the specified valuefunction outerHTMLSetter(value) {        // Create a dummy element and set its content to the specified valuevar container = document.createElement("div");        container.innerHTML = value;        // Move each of the nodes from the dummy into the documentwhile(container.firstChild)  // Loop until container has no more kidsthis.parentNode.insertBefore(container.firstChild, this);        // And remove the node that has been replacedthis.parentNode.removeChild(this);    }    // Now use these two functions as getters and setters for the // outerHTML property of all Element objects. Use ES5 Object.defineProperty// if it exists and otherwise fall back on __defineGetter__ and Setter__.if (Object.defineProperty) {        Object.defineProperty(Element.prototype, "outerHTML", {                                  get: outerHTMLGetter,                                  set: outerHTMLSetter,                                  enumerable: false, configurable: true                              });    }    else {        Element.prototype.__defineGetter__("outerHTML", outerHTMLGetter);        Element.prototype.__defineSetter__("outerHTML", outerHTMLSetter);    }}());

10、浏览器窗口的滚动条的位置

除了IE8及更早的版本以外,window对象的pageXOffset 和 pageYOffset属性在所有的浏览器中指代浏览器窗口的滚动条的位置。

IE和所有现代的浏览器也可以通过scrollLeft和scrollTop属性来获得浏览器的滚动条的位置。正常情况下一般是通过

document.documentElement来获取这些值，但是在怪异模式下必须在document.body下去获取这些值

//查询窗口滚动条的位置function getScrollOffset(w){    w = w || window;    //除了IE8及更早的版本以外if(w.pageXOffset != null){        return {x:w.pageXOffset,y:w.pageYOffset};    }    //对标准模式下IE（或任何浏览器）var d = w.document;    if(document.compatMode == 'CSS1Compat'){        return {x:d.documentElement.scrollLeft,y:d.documentElement.scrollTop};    }    //如果是怪异模式下return {x:document.body.scrollLeft,y:document.body.scrollTop};}

11、浏览器视口的大小

利用滚动偏移量来查询视口的大小在IE8及更早的版本无法获取，而且在IE下还有判定当前文档是在怪异模式还是普通模式！

//获取浏览器视口的大小function getViewPortSize(w){    w = w || window;    if(w.innerWidth != null ){        return {w:w.innerWidth,h:w.innerHeight};    }    //对标准模式下IE（或任何浏览器）var d = w.document;    if(document.compatMode == 'CSS1Compat'){        return {x:d.documentElement.clientWidth,y:d.documentElement.clientHeight};    }    //如果是怪异模式下return {x:document.clientWidth.scrollLeft,y:document.body.clientHeight};}

12、查询元素的几何尺寸

查询元素几何尺寸和位置最简单的方法是就是调用getBoundingClientRect()方法，它不要参数返回一个有left,right,top和bottom属性的对象。

这个方法返回的是元素在视口坐标中的位置。

var box = e.getBoundingClientRect();//获取元素在视口中的位置var offset = getScrollOffset();//获取滚动条滚动的位置var x = box.left + offset.x;//计算出元素在文档中的x的位置var y = box.top + offset.y;//计算出元素在文档中的y的位置//很多浏览中getBoundingClientRect();返回的方法还包含width和height属性，但在原始的IE中没有实现//下面计算元素的宽度和高度var box = e.getBoundingClientRect();var w = box.width || (box.right-box.left);var h = box.height || (box.top - box.bottom);//getBoundingClientRect();返回的数据包含元素的内边距和边框，但不包含外边距。//getBoundingClientRect();它指定返回的是块级元素的数据，如果要返回的是内联元素的数据时候使用getClientRect();//注意：getBoundingClientRect()和getClientRect()返回的数据不是实时的，它只是最初的一个快照而已。

13、滚动

window.scrollTo();接受一个点的x和y坐标并作为滚动条的偏移量来设置滚动条。

window的scrollBy()和scroll()和scrollTo类似，但它的参数是相对的，是在当前滚动条的位置上进行增加。

例如：

javascript:void setInterval(function(){window.scrollBy(0,10)},500);

让浏览器滚动到指定元素的位置

box.scrollIntoView();//此方法和锚链接类似

默认情况下它与元素的上边距靠近，如果只传递false做为参数的时候，它将试图与元素的下边缘靠近！

getBoundingClientRect在所有当代的浏览器中都有定义，但在更老的浏览器中不能使用它！

这里介绍如下方法获取

任何html元素都有offsetWidth和offsetHeight属性，此方法返回元素的宽高，包括边框和内边距不包含外边距

另外offsetLeft，offsetTop返回的是元素x,y坐标,对于很多元素该值就是元素在文档中的位置。但对于已经定位的元素的后代元素和

其他的一些元素，如（表格单元），这些元素返回的都是相对于父元素的位置！

//获取元素的位置（计算元素的文档位置）function getElementPos(e){    var x = 0; var y = 0;    while(e != null){        x += e.offsetLeft;        y += e.offsetTop;        e = e.offsetParent;    }    return {x:x,y:y};}//获取元素的视口的位置function getElementViewPos(elt){    var x = 0; var y = 0;    for(var e = elt;e!=null;e = offsetParent){        x += e.offsetLeft;        y += e.offsetTop;    }    for(var e=elt.parentNode;e!=null && e.nodeType == 1;e = e.parentNode){        x -= e.scrollLeft;        y -= e.scrollTop;    }    return {x:x,y:y};}

14、表单

要明确选取一个表单元素可以索引表单对象的elements属性

document.forms.address.elements[0]

document.forms.address.street

<form name="shopping"><label><input type="radio" name="method"/>firstlabel><label><input type="radio" name="method"/>seclabel><label><input type="radio" name="method"/>thrlabel>form>

对于该表单元素数组可以采用如下的方式获取：

var methods = document.forms.shopping.elements.method;

遍历数组查询已经被选中的元素

var shopmet;for(var i=0;i < methods.length;i++){    if(methods[i].checked){        shopmet = methods[i].value;    }}

javascript方法有两个方法submit()和reset(),用来提交表单和重置表单数据！

15、可编辑的html内容

有两种方法启用html的编辑功能。

其一：设置任何html标签的 contenteditable属性；

其二：设置对应元素的javascript contenteditable

这都将使得该元素变成可编辑的状态。

例如：

<div contenteditable>    click it editdiv>

将document.designMode属性设置为字符串‘on’时候使得整个文档都是可以编辑的，设置为off将恢复为只读的模式！