# try-catch

## 语法

```js
try {
  // ...
} catch (err) {
  // ...
}
```

## 用途

在易于发生错误的区域，利用报错信息来区分错误。

## 代码思路

```js
try {
  throw new Error("");
} catch (err) {
  // ...
}
```
