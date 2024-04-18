<h1>call&&apply&&bind</h1>

**作用**
改变函数执行时的 this 指向

区别：
**call 与 apply 的唯一区别**
传给 fun 的参数写法不同：

apply 是第 2 个参数，这个参数是一个数组：传给 fun 参数都写在数组中。
call 从第 2~n 的参数都是传给 fun 的。

**call/apply 与 bind 的区别**
执行：

call/apply 改变了函数的 this 上下文后马上执行该函数
bind 则是返回改变了上下文后的函数,不执行该函数

返回值:

call/apply 返回 fun 的执行结果
bind 返回 fun 的拷贝，并指定了 fun 的 this 指向，保存了 fun 的参数。
