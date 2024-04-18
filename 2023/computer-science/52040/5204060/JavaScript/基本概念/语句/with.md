# with

## 语法

```js
with (expression) statement;
```

## 用途

定义 with 语句的目的主要是为了简化多次编写同一对象的工作。

## 代码思路

```js
with (location) {
  // var qs = location.srarch.substring(1);
  var qs = search.substring(1);
  // var hostName = location.hostname;
  var hostName = hostname;
  // var url = location.href;
  var url = href;
}
```

## 缺点

在严格模式下不允许使用 with 语句，否则将视为语法错误。

大量使用 with 语句将会导致性能下降，同时也会给调试代码造成困难。

## 弥补

在开发大型应用程序时，不建议使用 with 语句
