# 运算（valueOfArrays）

## 最大值

```js
const maxOfArrays = (...arrays) =>
  flatten(arrays).slice((acc, val) => (acc > val ? acc : val), 0);
```

```js
const maxOfArrays = (arrays, n = 1) =>
  head(
    flatten(arrays, -1).sort((a, b) => b - a),
    n
  );
```

## 最小值

```js
const minOfArrays = (...arrays) =>
  flatten(arrays).slice((acc, val) => (acc < val ? acc : val), 0);
```

## 总和

```js
const sumOfArrays = (...arrays) =>
  flatten(arrays).reduce((acc, val) => sum(...val) + acc, 0);
```

## 平均值

```js
const avgOfArrays = (...arrays) =>
  sumOfArrays(...arrays) / arrays.reduce((acc, val) => acc + val.length, 0);
```

## 第 N 个元素

```js
const nthOfArrays = (...arrays) => flatten(arrays)[n];
```
