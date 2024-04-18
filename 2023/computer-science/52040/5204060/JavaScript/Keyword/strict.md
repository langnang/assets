# JavaScript 严格模式

## 什么是 JavaScript 的严格模式

采用具有限制性 JavaScript 变体的一种方式，从而使代码显示地 脱离“马虎模式/稀松模式/懒散模式“（sloppy）模式。

## 为什么使用严格模式

- 消除 Javascript 语法的一些不合理、不严谨之处，减少一些怪异行为;
- 消除代码运行的一些不安全之处，保证代码运行的安全；
- 提高编译器效率，增加运行速度；
- 为未来新版本的 Javascript 做好铺垫。

## 严格模式声明

严格模式通过在脚本或函数的头部添加 `use strict;` 表达式来声明。

## 严格模式的限制

- 不允许实用未声明的变量或对象

```js
'use strict';
x = 3.14; // Uncaught ReferenceError: x is not defined
```

```js
'use strict';
x = { p1: 10, p2: 20 }; // Uncaught ReferenceError: x is not defined
```

- 不允许删除变量或对象

```js
'use strict';
var x = 3.14;
delete x; // Uncaught SyntaxError: Delete of an unqualified identifier in strict mode.
```

- 不允许删除函数

```js
'use strict';
function x(p1, p2) {}
delete x; // Uncaught SyntaxError: Delete of an unqualified identifier in strict mode.
```

- 不允许变量重名

```js
'use strict';
function x(p1, p1) {} // Uncaught SyntaxError: Duplicate parameter name not allowed in this context
```

- 不允许实用八进制

```js
'use strict';
var x = 010; // Uncaught SyntaxError: Octal literals are not allowed in strict mode.
```

- 不允许使用转义字符

```js
"use strict";
var x = \010; // Uncaught SyntaxError: Invalid or unexpected token
```

- 不允许对只读属性赋值

```js
'use strict';
var obj = {};
Object.defineProperty(obj, 'x', { value: 0, writable: false });

obj.x = 3.14; // Uncaught TypeError: Cannot assign to read only property 'x' of object '#<Object>'
```

- 不允许对一个使用 `getter` 方法读取的属性进行赋值

```js
'use strict';
var obj = {
  get x() {
    return 0;
  },
};

obj.x = 3.14; // Uncaught TypeError: Cannot set property x of #<Object> which has only a getter
```

- 不允许删除一个不允许删除的属性

```js
'use strict';
delete Object.prototype; // Uncaught TypeError: Cannot delete property 'prototype' of function Object() { [native code] }
```

- 变量名不能使用 "eval" 字符串

```js
'use strict';
var eval = 3.14; // Uncaught SyntaxError: Unexpected eval or arguments in strict mode
```

- 变量名不能使用 "arguments" 字符串

```js
'use strict';
var arguments = 3.14; // Uncaught SyntaxError: Unexpected eval or arguments in strict mode
```

- 不允许使用以下这种语句

```js
'use strict';
with (Math) {
  x = cos(2);
} // Uncaught SyntaxError: Strict mode code may not include a with statement
```

- 由于一些安全原因，在作用域 eval() 创建的变量不能被调用

```js
'use strict';
eval('var x = 2');
alert(x); // Uncaught ReferenceError: x is not defined
```

- 禁止 this 关键字指向全局对象。

```js
function f() {
  return !this;
}
f(); // 返回false，因为"this"指向全局对象，"!this"就是false
```

```js
function f() {
  'use strict';
  return !this;
}
f(); // 返回true，因为严格模式下，this的值为undefined，所以"!this"为true。
```

## 保留关键字

为了向将来 Javascript 的新版本过渡，严格模式新增了一些保留关键字：

- implements
- interface
- let
- package
- private
- protected
- public
- static
- yield

## 参考

- [js 严格模式- JavaScript | MDN](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Strict_mode)
- [JavaScript 严格模式(use strict) | 菜鸟教程](https://www.runoob.com/js/js-strict.html)
