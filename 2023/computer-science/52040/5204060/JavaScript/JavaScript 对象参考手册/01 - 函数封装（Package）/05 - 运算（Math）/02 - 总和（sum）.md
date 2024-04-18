# 总和（sum）

```js
const sum = (...nums) => nums.reduce((acc, val) => acc + val, 0);
```

## 平均值

```js
const avg = (...nums) => sum(...nums) / nums.length;
```
