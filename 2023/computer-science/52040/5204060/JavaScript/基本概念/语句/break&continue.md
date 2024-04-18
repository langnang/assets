# break & continue

## 语法

```js
break;
// ...
continue;
```

## 用途

break 和 continue 语句用于在循环中精确的控制代码的执行。

可在 for 语句中配合 label 语句，从而返回代码中特定的位置。

## 代码思路

```js
for(){
    break;
}
for(){
    continue;
}
```

## 差异

break 语句会立即退出循环，强制继续执行循环后面的语句。

continue 语句虽然也是立即退出循环，但退出循环后会从循环的顶部继续执行。
