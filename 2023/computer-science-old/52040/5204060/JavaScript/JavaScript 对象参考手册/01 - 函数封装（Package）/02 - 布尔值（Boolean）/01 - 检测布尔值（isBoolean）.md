# 检测布尔值（isBoolean）

```js
const isBoolean = object =>
  Object.prototype.toString.call(object) === "[object Boolean]";
```

- [检测 True](#检测-true)
- [检测 False](#检测-false)

## 检测 True

```js
const isTrue = object => object === true;
```

## 检测 False

```js
const isFalse = object => object === false;
```
