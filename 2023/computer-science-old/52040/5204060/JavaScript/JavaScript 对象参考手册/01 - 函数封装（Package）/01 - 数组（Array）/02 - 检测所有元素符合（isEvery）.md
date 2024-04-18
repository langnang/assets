# 检测所有元素符合（isEvery）

```js
const isEvery = (array, fn = Boolean) => array.every(fn);
```

- [检测所有元素符合数值](#检测所有元素符合数值)
- [检测所有元素不符合](#检测所有元素不符合)
- [检测所有元素相等](#检测所有元素相等)

## 检测所有元素符合数值

```js
const isEveryNumber = (array, fn = isNumber) => array.every(fn);
```

## 检测所有元素不符合

```js
const isNone = (array, fn = Boolean) => !array.every(fn);
```

## 检测所有元素相等

```js
const isEveryEqual = array => array.every(val => val == array[0]);
```
