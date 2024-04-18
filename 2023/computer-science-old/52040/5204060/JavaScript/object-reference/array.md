---
sidebar: auto
---

# Array - JavaScript

JavaScript 的 Array 对象是用于构造数组的全局对象，数组是类似于列表的高阶对象。

## 数组

### 语法

```js
[element0, element1, ..., elementN]
new Array()
new Array(arrayLength)
new Array(element0, element1[, ...[, elementN]])
```

**参数**

- elementN - Array 构造器会根据给定的元素创建一个 JavaScript 数组，但是当仅有一个参数且为数字时除外（详见下面的 arrayLength 参数）。注意，后面这种情况仅适用于用 Array 构造器创建数
  组，而不适

  > 用于用方括号创建的数组字面量。

- arrayLength - 一个范围在 0 到 232-1 之间的整数，此时将返回一个 length 的值等于 arrayLength 的数组对象（言外之意就是该数组此时并没有包含任何实际的元素，不能理所当然地认为它包含
  arrayLength 个
  > 值为 undefined 的元素）。如果传入的参数不是有效值，则会抛出 RangeError 异常。

### 描述

数组是一种类列表对象，它的原型中提供了遍历和修改元素的相关操作。JavaScript 数组的长度和元素类型都是非固定的。因为数组的长度可随时改变，并且其数据在内存中也可以不连续，所以
JavaScript 数组不一定是密集型的，这取决于它的使用方式。一般来说，数组的这些特性会给使用带来方便，但如果这些特性不适用于你的特定使用场景的话，可以考虑使用类型数组 `TypedArray`。

只能用整数作为数组元素的索引，而不能用字符串。后者称为**关联数组**。使用非整数并通过方括号或点号来访问或设置数组元素时，所操作的并不是数组列表中的元素，而是数组对象的属性集合上的变
量。数组对象的属性和数组元素列表是分开存储的，并且数组的遍历和修改操作也不能作用于这些命名属性。

**访问数组元素**

JavaScript 数组的索引是从 0 开始的，第一个元素的索引为 0，最后一个元素的索引等于该数组的长度减 1。如果指定的索引是一个无效值，JavaScript 数组并不会报错，而是会返回 undefined。

**length 和数字下标之间的关系**

JavaScript 数组的 `length` 属性和其数字下标之间有着紧密的联系。数组内置的几个方法（例如 `join`、`slice`、`indexOf` 等）都会考虑 `length` 的值。另外还有一些方法（例如
`push`、`splice` 等）还会改变 `length` 的值。

**正则匹配结果所返回的数组**

使用正则表达式匹配字符串可以得到一个数组。这个数组中包含本次匹配的相关信息和匹配结果。`RegExp.exec`、`String.match`、`String.replace` 都会返回这样的数组。看下面的例子和例子下面的表
格：

### 属性

- `Array.length`] - Array 构造函数的 length 属性，其值为 1（注意该属性为静态属性，不是数组实例的 length 属性）。

- `get Array[@@species]` - 返回 Array 构造函数。

- `Array.prototype` - 通过数组的原型对象可以为所有数组对象添加属性。

### 方法

- `Array.from(arrayLike[, mapFn[, thisArg]])` - 从类数组对象或者可迭代对象中创建一个新的，浅拷贝的数组实例。

- `Array.isArray(obj)` - 用来判断某个变量是否是一个数组对象。

- `Array.of(element0[, element1[, ...[, elementN]]])` - 根据一组参数来创建新的数组实例，支持任意的参数数量和类型。

## 实例

> 所有数组实例都会从 Array.prototype 继承属性和方法。修改 Array 的原型会影响到所有的数组实例。

### 实例属性

- `Array.prototype.constructor` - 所有的数组实例都继承了这个属性，它的值就是 Array，表明了所有的数组都是由 Array 构造出来的。

- `Array.prototype.length` - 上面说了，因为 Array.prototype 也是个数组，所以它也有 length 属性，这个值为 0，因为它是个空数组。

### 实例方法

**修改器方法**：会改变调用它们的对象自身的值

- `Array.prototype.copyWithin(target[, start[, end]])` - 在数组内部，将一段元素序列拷贝到另一段元素序列上，覆盖原有的值。

- `Array.prototype.fill(value[, start[, end]])` - 将数组中指定区间的所有元素的值，都替换成某个固定的值。

<<< @/scripts/js/array/arrayFill.js

- `Array.prototype.pop()` - 删除数组的最后一个元素，并返回这个元素。

<<< @/scripts/js/array/arrayPop.js

- `Array.prototype.push(element1, ..., elementN)` - 在数组的末尾增加一个或多个元素，并返回数组的新长度。

<<< @/scripts/js/array/arrayPush.js

- `Array.prototype.reverse()` - 颠倒数组中元素的排列顺序，即原先的第一个变为最后一个，原先的最后一个变为第一个。

<<< @/scripts/js/array/arrayReverse.js

- `Array.prototype.shift()` - 删除数组的第一个元素，并返回这个元素。

<<< @/scripts/js/array/arrayShift.js

- `Array.prototype.sort([compareFunction(firstEl,secondEl)])` - 对数组元素进行排序，并返回当前数组。

<<< @/scripts/js/array/arraySort.js

- `Array.prototype.splice(start[, deleteCount[, item1[, item2[, ...]]]])` - 在任意的位置给数组添加或删除任意个元素。

<<< @/scripts/js/array/arraySplice.js

- `Array.prototype.unshift(element1, ..., elementN)` - 在数组的开头增加一个或多个元素，并返回数组的新长度。

<<< @/scripts/js/array/arrayUnshift.js

**访问方法**：绝对不会改变调用它们的对象的值，只会返回一个新的数组或者返回一个其它的期望值。

- `Array.prototype.concat(value1[, value2[, ...[, valueN]]])` - 返回一个由当前数组和其它若干个数组或者若干个非数组值组合而成的新数组。

<<< @/scripts/js/array/arrayConcat.js

- `Array.prototype.includes(valueToFind[, fromIndex])` - 判断当前数组是否包含某指定的值，如果是返回 true，否则返回 false。

<<< @/scripts/js/array/arrayIncludes.js

- `Array.prototype.join([separator])` - 连接所有数组元素组成一个字符串。

<<< @/scripts/js/array/arrayJoin.js

- `Array.prototype.slice([begin[, end]])` - 抽取当前数组中的一段元素组合成一个新数组。

<<< @/scripts/js/array/arraySlice.js

- `Array.prototype.toSource()` - 返回一个表示当前数组字面量的字符串。遮蔽了原型链上的 Object.prototype.toSource() 方法。

- `Array.prototype.toString()` - 返回一个由所有数组元素组合而成的字符串。遮蔽了原型链上的 Object.prototype.toString() 方法。

- `Array.prototype.toLocaleString([locales[,options]])` - 返回一个由所有数组元素组合而成的本地化后的字符串。遮蔽了原型链上的 Object.prototype.toLocaleString() 方法。

- `Array.prototype.indexOf(searchElement[, fromIndex = 0])` - 返回数组中第一个与指定值相等的元素的索引，如果找不到这样的元素，则返回 -1。

<<< @/scripts/js/array/arrayIndexOf.js

- `Array.prototype.lastIndexOf(searchElement[, fromIndex = arr.length - 1])` - 返回数组中最后一个（从右边数第一个）与指定值相等的元素的索引，如果找不到这样的元素，则返回 -1。

<<< @/scripts/js/array/arrayLastIndexOf.js

**迭代方法**：遍历

- `Array.prototype.forEach(callback(element[, index[, array]])[, thisArg])` - 为数组中的每个元素执行一次回调函数。

<<< @/scripts/js/array/arrayForEach.js

- `Array.prototype.entries()` - 返回一个数组迭代器对象，该迭代器会包含所有数组元素的键值对。

- `Array.prototype.every(callback(element[, index[, array]])[, thisArg])` - 如果数组中的每个元素都满足测试函数，则返回 true，否则返回 false。

<<< @/scripts/js/array/arrayEvery.js

- `Array.prototype.some(callback(element[, index[, array]])[, thisArg])` - 如果数组中至少有一个元素满足测试函数，则返回 true，否则返回 false。

<<< @/scripts/js/array/arraySome.js

- `Array.prototype.filter(callback(element[, index[, array]])[, thisArg])` - 将所有在过滤函数中返回 true 的数组元素放进一个新数组中并返回。

<<< @/scripts/js/array/arrayFilter.js

- `Array.prototype.find(callback(element[, index[, array]])[, thisArg])` - 找到第一个满足测试函数的元素并返回那个元素的值，如果找不到，则返回 undefined。

<<< @/scripts/js/array/arrayFind.js

- `Array.prototype.findIndex(callback(element[, index[, array]])[, thisArg])` - 找到第一个满足测试函数的元素并返回那个元素的索引，如果找不到，则返回 -1。

<<< @/scripts/js/array/arrayFindIndex.js

- `Array.prototype.keys()` - 返回一个数组迭代器对象，该迭代器会包含所有数组元素的键。

<<< @/scripts/js/array/arrayKeys.js

- `Array.prototype.map(callback(element[, index[, array]])[, thisArg])` - 返回一个由回调函数的返回值组成的新数组。

<<< @/scripts/js/array/arrayMap.js

- `Array.prototype.reduce(callback(accumulator, currentValue[, index[, array]])[, initialValue])` - 从左到右为每个数组元素执行一次回调函数，并把上次回调函数的返回值放在一个暂存器中
  传给下次回调函数，并返回最后一次回调函数的返回值。

<<< @/scripts/js/array/arrayReduce.js

- `Array.prototype.reduceRight(callback(accumulator, currentValue[, index[, array]])[, initialValue])` - 从右到左为每个数组元素执行一次回调函数，并把上次回调函数的返回值放在一个暂
  存器中传给下次回调函数，并返回最后一次回调函数的返回值。

<<< @/scripts/js/array/arrayReduceRight.js

- `Array.prototype.values()` - 返回一个数组迭代器对象，该迭代器会包含所有数组元素的值。

<<< @/scripts/js/array/arrayValues.js

## [封装](https://langnang.github.io/ln-of-js/#)

- [ ] `flatten`：展平数组](https://langnang.github.io/ln-of-js/#)
- [ ] `count`：统计值的次数](https://langnang.github.io/ln-of-js/#)
- [ ] `countBy`：函数统计次数](https://langnang.github.io/ln-of-js/#)
- [ ] `convert`：转换](https://langnang.github.io/ln-of-js/#)
- [ ] `group`：分组](https://langnang.github.io/ln-of-js/#)
- [ ] `rebuild`：重建](https://langnang.github.io/ln-of-js/#)
- [ ] `get`：取值](https://langnang.github.io/ln-of-js/#)
- [ ] `diference`：比较差异](https://langnang.github.io/ln-of-js/#)
- [ ] `unique`：去重](https://langnang.github.io/ln-of-js/#)
- [ ] `duplicate`：重复值](https://langnang.github.io/ln-of-js/#)
- [ ] `intersection`：交集](https://langnang.github.io/ln-of-js/#)
- [ ] `union`：并集](https://langnang.github.io/ln-of-js/#)
- [ ] `offset`：移动元素至末尾](https://langnang.github.io/ln-of-js/#)
- [ ] `reverse`：反转](https://langnang.github.io/ln-of-js/#)
- [ ] `bifurcate`](https://langnang.github.io/ln-of-js/#)
- [ ] `init`](https://langnang.github.io/ln-of-js/#)
- [ ] `mapObject`](https://langnang.github.io/ln-of-js/#)
- [ ] `partition`](https://langnang.github.io/ln-of-js/#)
- [ ] `permutation`](https://langnang.github.io/ln-of-js/#)
- [ ] `pick`](https://langnang.github.io/ln-of-js/#)
- [ ] `pull`](https://langnang.github.io/ln-of-js/#)
- [ ] `range`](https://langnang.github.io/ln-of-js/#)
- [ ] `reduce`](https://langnang.github.io/ln-of-js/#)
- [ ] `reject`](https://langnang.github.io/ln-of-js/#)
- [ ] `zip`：压缩](https://langnang.github.io/ln-of-js/#)

### Prototype 原型

### is - 检测

- [x] `isArray`：检测数组](https://langnang.github.io/ln-of-js/#isArray)
- [x] `isEvery`：检测所有元素符合](https://langnang.github.io/ln-of-js/#isEvery)
- [x] `isSome`：检测存在元素符合](https://langnang.github.io/ln-of-js/#isSome)
- [x] `isNone`：检测所有元素不符合](https://langnang.github.io/ln-of-js/#isNone)
- [ ] `isEveryEqual`：检测所有元素相等](https://langnang.github.io/ln-of-js/#)
- [ ] `isSorted`：检测排序](https://langnang.github.io/ln-of-js/#)

### Group 分组

### Filter 过滤

### To 转换

### Index 索引

- [ ] `head`：前 n 个元素](https://langnang.github.io/ln-of-js/#)
- [ ] `rest`：后 n 个元素](https://langnang.github.io/ln-of-js/#)
- [ ] `nthOfArrays`：第 n 个元素](https://langnang.github.io/ln-of-js/#)
- [ ] `indexOf`：索引](https://langnang.github.io/ln-of-js/#)

### 转换 - to

- [ ] `toArray`：转换为数组](https://langnang.github.io/ln-of-js/#)

### 过滤 - filter

- [ ] `filter(array,fn,target=1)`：过滤](https://langnang.github.io/ln-of-js/#)
- [ ] `filterFalsy(array)`：过滤虚假值](https://langnang.github.io/ln-of-js/#)

### 分组 - group

### 比较 - diff

- [ ] `maxOfArrays`：最大值](https://langnang.github.io/ln-of-js/#)
- [ ] `minOfArrays`：最小值](https://langnang.github.io/ln-of-js/#)
- [ ] `sumOfArrays`：总和](https://langnang.github.io/ln-of-js/#)
- [ ] `avgOfArrays`：平均值](https://langnang.github.io/ln-of-js/#)

## 参考链接

- [Array - JavaScript \| MDN](https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Array)
