# 后 n 个元素

```js
const rest = (array, n = 1) =>
  n === 1 ? array[array.length - 1] : array.slice(array.length - n);
```
