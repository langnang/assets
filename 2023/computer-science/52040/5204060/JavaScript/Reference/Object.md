# Object

`Object` 是 JavaScript 的一种 数据类型 。它用于存储各种键值集合和更复杂的实体。Objects 可以通过 Object() 构造函数或者使用 对象字面量 的方式创建

## 描述

在 JavaScript 中，几乎所有的对象都是 Object 类型的实例，它们都会从 Object.prototype 继承属性和方法，虽然大部分属性都会被覆盖（shadowed）或者说被重写了（overridden）。 除此之外，Object 还可以被故意的创建，但是这个对象并不是一个“真正的对象”（例如：通过 Object.create(null)），或者通过一些手段改变对象，使其不再是一个“真正的对象”（比如说：Object.setPrototypeOf）。

通过原型链，所有的 object 都能观察到 Object 原型对象（Object prototype object）的改变，除非这些受到改变影响的属性和方法沿着原型链被进一步的重写。尽管有潜在的危险，但这为覆盖或扩展对象的行为提供了一个非常强大的机制。

`Object` 构造函数为给定的参数创建一个包装类对象（object wrapper），具体有以下情况：

- 如果给定值是 null 或 undefined，将会创建并返回一个空对象
- 如果传进去的是一个基本类型的值，则会构造其包装类型的对象
- 如果传进去的是引用类型的值，仍然会返回这个值，经他们复制的变量保有和源对象相同的引用地址

当以非构造函数形式被调用时，Object 的行为等同于 new Object()。

## 构造器

`Object()`

创建一个新的 Object 对象。该对象将会包裹（wrapper）传入的参数

## 静态方法

#### `Object.create()`

使用指定的原型对象和属性创建一个新对象。

#### `Object.defineProperty()`

给对象添加一个属性并指定该属性的配置。

#### `Object.defineProperties(obj, prop, descriptor)`

给对象添加多个属性并分别指定它们的配置。

- `obj`: 要定义属性的对象。
- `prop`: 要定义或修改的属性的名称或 `Symbol`。
- `descriptor`: 要定义或修改的属性描述符。
  - `configurable`: 当且仅当该属性的 configurable 键值为 true 时，该属性的描述符才能够被改变，同时该属性也能从对应的对象上被删除。默认为 false。
  - `enumerable`: 当且仅当该属性的 `enumerable` 键值为 true 时，该属性才会出现在对象的枚举属性中。默认为 false。
  - `value`: 可选。该属性对应的值。可以是任何有效的 JavaScript 值（数值，对象，函数等）。默认为 undefined。
  - `writable`: 可选。当且仅当该属性的 `writable` 键值为 true 时，属性的值，也就是上面的 value，才能被赋值运算符 (en-US)改变。默认为 false。
  - `get`: 属性的 `getter` 函数，如果没有 `getter，则为` undefined。当访问该属性时，会调用此函数。执行时不传入任何参数，但是会传入 this 对象（由于继承关系，这里的 this 并不一定是定义该属性的对象）。该函数的返回值会被用作属性的值。默认为 undefined。
  - `set`: 属性的 `setter` 函数，如果没有 `setter，则为` undefined。当属性值被修改时，会调用此函数。该方法接受一个参数（也就是被赋予的新值），会传入赋值时的 this 对象。默认为 undefined。
- 返回值: 被传递给函数的对象。

**使用**

```js
var info = {
  name: 'hhh',
};
Object.keys(info).forEach(function (key) {
  Object.defineProperty(info, key, {
    enumerable: true, // 是否能在for...in循环中遍历出来或在Object.keys中列举出来。
    configurable: true, // false，不可修改、删除目标属性或修改属性性以下特性
    get: function () {
      console.log('被访问了调用get');
    },
    set: function () {
      console.log('被设置了调用set');
    },
  });
});
```

#### `Object.freeze()`

冻结对象：其他代码不能删除或更改任何属性。

#### `Object.getOwnPropertyNames()`

返回一个数组，它包含了指定对象所有的可枚举或不可枚举的属性名。

#### `Object.getOwnPropertySymbols()`

返回一个数组，它包含了指定对象自身所有的符号属性。

#### `Object.isExtensible()`

判断对象是否可扩展。

#### `Object.isFrozen()`

判断对象是否已经冻结。

#### `Object.isSealed()`

判断对象是否已经密封。

#### `Object.preventExtensions()`

防止对象的任何扩展。

#### `Object.seal()`

防止其他代码删除对象的属性。

### ES6 新增静态方法

#### `Object.assign()`

通过复制一个或多个对象来创建一个新的对象。

#### `Object.entries()`

返回给定对象自身可枚举属性的 [key, value] 数组。

#### `Object.getOwnPropertyDescriptor()`

返回对象指定的属性配置。

#### `Object.getPrototypeOf()`

返回指定对象的原型对象。

#### `Object.is()`

比较两个值是否相同。所有 NaN 值都相等（这与==和===不同）。

#### `Object.keys()`

返回一个包含所有给定对象自身可枚举属性名称的数组。

#### `Object.setPrototypeOf()`

设置对象的原型（即内部 [[Prototype]] 属性）。

#### `Object.values()`

返回给定对象自身可枚举值的数组。

## 实例属性

#### `Object.prototype.constructor`: 一个引用值，指向 Object 构造函数

#### `Object.prototype.__proto__`: 指向一个对象，当一个 object 实例化时，使用该对象作为实例化对象的原型

## 实例方法

#### `Object.prototype.__defineGetter__()`

将一个属性与一个函数相关联，当该属性被访问时，执行该函数，并且返回函数的返回值。

#### `Object.prototype.__defineSetter__()`

将一个属性与一个函数相关联，当该属性被设置时，执行该函数，执行该函数去修改某个属性。

#### `Object.prototype.__lookupGetter__()`

返回一个函数，该函数通过给定属性的 `Object.prototype.__defineGetter__()` 得出。

#### `Object.prototype.__lookupSetter__()`

返回一个函数，该函数通过给定属性的 `Object.prototype.__defineSetter__()` 得出。

#### `Object.prototype.hasOwnProperty()`

返回一个布尔值，用于表示一个对象自身是否包含指定的属性，该方法并不会查找原型链上继承来的属性。

#### `Object.prototype.isPrototypeOf()`

返回一个布尔值，用于表示该方法所调用的对象是否在指定对象的原型链中。

#### `Object.prototype.propertyIsEnumerable()`

返回一个布尔值，用于表示内部属性 ECMAScript [[Enumerable]] attribute 是否被设置。

#### `Object.prototype.toLocaleString()`

调用 toString()。

#### `Object.prototype.toString()`

返回一个代表该对象的字符串。

#### `Object.prototype.valueOf()`

返回指定对象的原始值。

## 总结

## 参考文献

- https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Object

- https://es6.ruanyifeng.com/#docs/object-methods
