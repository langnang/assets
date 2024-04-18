# 递归

## 中英文全称

Recursive

递归

## 用途

在一个函数里通过名字调身自身的函数。

## 代码思路

``` js
function factorial(num) {
    if (num < 1) {
        return 1;
    }
    return num * factorial(num - 1);
}
```

## 缺点

``` js
var anotherFactorial = factorial;
factorial = null;
anotherFactorial(4); // Error
```

在以上代码中，由于自身调用自身，将会导致错误。

## 弥补

`arguments.callee` 是一个指向正在执行的函数的指针，因此可以用它来实现对函数的递归调用。

``` js
function factorial(num) {
    if (num < 1) {
        return 1;
    }
    return num * arguments.callee(num - 1);
}
```

在严格模式下，访问 `arguments.callee` 将会导致错误。不过可以使用命名函数表达式来达成相同的效果。

``` js
var factorial = (function f(num) {
    if (num < 1) {
        return 1;
    }
    return num * f(num - 1);
})
```

以上代码创建了一个名为 `f()` 的命名函数表达式，然后将它赋值给变量 `factorial` 。即使把函数赋值给了另一个变量，函数的名字 `f` 仍然有效，所以递归调用照样能正常完成。
