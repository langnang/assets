# call,apply 和 bind

- IE5 之前不支持 call 和 apply,bind 是 ES5 出来的;
- call 和 apply 可以调用函数,改变 this,实现继承和借用别的对象的方法;

## call 和 apply 定义

调用方法,用一个对象替换掉另一个对象(this)
对象.call(新 this 对象,实参 1,实参 2,实参 3.....)
对象.apply(新 this 对象,[实参 1,实参 2,实参 3.....])

## call 和 apply 用法

1. 间接调用函数,改变作用域的 this 值
2. 劫持其他对象的方法
   ```js
   var foo = {
     name: "张三",
     logName: function() {
       console.log(this.name);
     }
   };
   var bar = {
     name: "李四"
   };
   foo.logName.call(bar); //李四
   ```
   实质是 call 改变了 foo 的 this 指向为 bar,并调用该函数
3. 两个函数实现继承
   ```js
   function Animal(name) {
     this.name = name;
     this.showName = function() {
       console.log(this.name);
     };
   }
   function Cat(name) {
     Animal.call(this, name);
   }
   var cat = new Cat("Black Cat");
   cat.showName(); //Black Cat
   ```
4. 为类数组(arguments 和 nodeList)添加数组方法 push,pop
   (function(){
   Array.prototype.push.call(arguments,'王五');
   console.log(arguments);//['张三','李四','王五']
   })('张三','李四')
   复制代码 5.合并数组
   let arr1=[1,2,3];
   let arr2=[4,5,6];
   Array.prototype.push.apply(arr1,arr2); //将 arr2 合并到了 arr1 中
   复制代码 6.求数组最大值
   Math.max.apply(null,arr)
   复制代码 7.判断字符类型
   Object.prototype.toString.call({})
   复制代码
   1.4.3 bind
   bind 是 function 的一个函数扩展方法，bind 以后代码重新绑定了 func 内部的 this 指向,不会调用方法,不兼容 IE8
   var name = '李四'
   var foo = {
   name: "张三",
   logName: function(age) {
   console.log(this.name, age);
   }
   }
   var fooNew = foo.logName;
   var fooNewBind = foo.logName.bind(foo);
   fooNew(10)//李四,10
   fooNewBind(11)//张三,11 因为 bind 改变了 fooNewBind 里面的 this 指向
   1.4.4 call,apply 和 bind 原生实现
   call 实现:

```js
Function.prototype.newCall = function(context, ...parameter) {
if(context.instanceof Object) context={}
context.fn = this;
 context.fn(...parameter);
delete context.fn;
}
let person = {
name: 'Abiel'
}
function sayHi(age,sex) {
console.log(this.name, age, sex);
}
sayHi.newCall (person, 25, '男'); // Abiel 25 男
```

apply 实现:

```js
Function.prototype.newApply = function(context, parameter) {
  if (typeof context === "object") {
    context = context || window;
  } else {
    context = Object.create(null);
  }
  let fn = Symbol();
  context[fn] = this;
  context[fn](parameter);
  delete context[fn];
};
```

bind 实现:

```js
Function.prototype.bind = function(context, ...innerArgs) {
  var me = this;
  return function(...finnalyArgs) {
    return me.call(context, ...innerArgs, ...finnalyArgs);
  };
};
let person = {
  name: "Abiel"
};
function sayHi(age, sex) {
  console.log(this.name, age, sex);
}
let personSayHi = sayHi.bind(person, 25);
personSayHi("男");
```

## 三者异同

同:都是改变 this 指向,都可接收参数
异:bind 和 call 是接收单个参数,apply 是接收数组
