# JavaScript Console 对象

> Console 对象用于 JavaScript 调试。
>
> JavaScript 原生中默认是没有 Console 对象,这是宿主对象（也就是游览器）提供的内置对象。 用于访问调试控制台, 在不同的浏览器里效果可能不同。

Console 对象常见的两个用途：

显示网页代码运行时的错误信息。
提供了一个命令行接口，用来与网页代码互动。

众所周知，console.log() 可以将值输出到浏览器控制台，便于前端调试。而 console 除了 .log() 外还有哪些方法呢？

1. console.assert()

接受至少两个参数，第一个参数的值或者返回值为 false 时，将会在控制台输出后续参数的值。例如

console.assert()

2. console.count()

用于输出代码执行到该行的次数。例如
console.count()

3. console.error()

用于输出错误信息，用法和 console.log() 一样，不同点在于输出内容会标记为错误的样式，便于分辨。例如
console.error()

4. console.group()

用于让控制台输出的语句产生不同的层级嵌套关系，每一个 console.group() 会增加一层嵌套，相反，使用 console.groupEnd() ,会减少一层嵌套。例如
console.group()

5. console.info()

此方法与 console.log() 一样，用于输出信息。例如

console.info()

6. console.table()

可将传入的对象，或数组以表格形式输出，相比传统树形输出，这种输出方案更适合内部元素排列整齐的对象或数组，不然可能会出现很多的 undefined。类似方法有 console.groupCollapsed() ，与 console.table() 的区别在于 console.groupCollapsed() 嵌套的输出内容是折叠状态。例如
console.table()

7. console.dir(object)

将传入的对象的属性，包括子对象的属性以列表形式输出，例如
console.dir()

8. console.profile()

这是个非常不错的东西，可用于性能分析。在 JS 开发中我们常常要测试一段代码或者某个函数的性能。借助 console.profile() 方法我们可以很方便地监控运行性能。例如
console.profile()

9. console.time()

用做计时器，可以同时使用 console.time() 和 console.timeEnd() ，并将二者之间的代码运行时间输出到控制台。例如
console.time()

10.console.trace()

用来追踪函数的调用过程。console.trace() 方法可以将函数的被调用过程清楚地输出到控制台上。例如
console.trace()

以上就是我总结的 console 方法，如果有什么不对或者疏漏的地方，欢迎在评论区里提出来，大家一起学习讨论。
