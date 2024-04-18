# 数据类型（typeOf）

> 检测数据类型

```js
const typeOf = object =>
  Object.prototype.toString
    .call(object)
    .substring(8, Object.prototype.toString.call(object).length - 1)
    .toLowerCase();
```

- [检测数值](#检测数值)
- [检测布尔值](#检测布尔值)
- [检测字符串](#检测字符串)
- [检测数组](#检测数组)
- [检测时间](#检测时间)
- [检测函数](#检测函数)
- [检测正则](#检测正则)
- [检测对象](#检测对象)
- [检测 Undefined](#检测-undefined)
- [检测 Null](#检测-null)
- [检测为空](#检测为空)

## 检测数值

```js
const isNumber = object => typeOf(object) === "number";
```

## 检测布尔值

```js
const isBoolean = object => typeOf(object) === "boolean";
```

## 检测字符串

```js
const isString = object => typeOf(object) === "string";
```

## 检测数组

```js
const isArray = object => typeOf(object) === "array";
```

## 检测时间

```js
const isDate = object => typeOf(object) === "date";
```

## 检测函数

```js
const isFunction = object => typeOf(object) === "function";
```

## 检测正则

```js
const isReg = object => typeOf(object) === "regexp";
```

## 检测对象

```js
const isObject = object => typeOf(object) === "object";
```

## 检测 Undefined

```js
const isUndefined = object => typeOf(object) === "undefined";
```

## 检测 Null

```js
const isNull = object => typeOf(object) === "null";
```

## 检测为空

```js
const isEmpty = object =>
  typeOf(object) === "null" || typeOf(object) === "undefined";
```
