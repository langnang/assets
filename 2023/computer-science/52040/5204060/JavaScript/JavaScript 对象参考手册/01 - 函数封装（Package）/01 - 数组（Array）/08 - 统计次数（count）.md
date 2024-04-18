# 统计次数（count）

```js
const count = (array, val = 0) =>
  array.reduce((a, v) => (v === val ? a + 1 : a), 0);
```

## 函数统计次数

```js
const countBy = (arr, fn) =>
  arr.map(typeof fn === "function" ? fn : val => val[fn]).reduce((acc, val) => {
    acc[val] = (acc[val] || 0) + 1;
    return acc;
  }, {});
```
