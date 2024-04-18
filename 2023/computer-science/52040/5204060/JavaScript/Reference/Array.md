# Array

Array 对象是用于构造数组的全局对象，数组是类似于列表的高阶对象。

## 构造器

`Array()`

创建一个新的 `Array` 对象

## 静态属性

`get Array[@@species]`

返回 Array 的构造函数

## 静态方法

#### `Array.isArray(obj)`

用来判断某个变量是否是一个数组对象

- `obj`: 需要检测的值。
- 返回值: 如果值是 Array，则为 true；否则为 false。

### ES6 新增静态方法

#### `Array.from(arrayLike[, mapFn[, thisArg]])`

从类数组对象或者可迭代对象中创建一个新的数组实例

- `arrayLike`: 想要转换成数组的伪数组对象或可迭代对象。
- `mapFn`: 可选，如果指定了该参数，新数组中的每个元素会执行该回调函数。
- `thisArg`: 可选，可选参数，执行回调函数 mapFn 时 this 对象。
- 返回值: 一个新的数组实例。

#### `Array.of(element0[, element1[, ...[, elementN]]])`

根据一组参数来创建新的数组实例，支持任意的参数数量和类型

- `elementN`: 任意个参数，将按顺序成为返回数组中的元素。
- 返回值: 新的 Array 实例。

## 实例属性

#### `Array.prototype.length`

数组中的元素个数

#### `Array.prototype[@@unscopables]`

包含了所有 ES2015 (ES6) 中新定义的、且并未被更早的 ECMAScript 标准收纳的属性名。这些属性被排除在由 with 语句绑定的环境中

## 实例方法

#### `Array.prototype.concat(value1[, value2[, ...[, valueN]]])`

用于合并两个或多个数组。此方法不会更改现有数组，而是返回一个新数组
valueN: 可选，数组和/或值，将被合并到一个新的数组中。如果省略了所有 valueN 参数，则 concat 会返回调用此方法的现存数组的一个浅拷贝。详情请参阅下文描述。

- 返回值: 新的 Array 实例。

#### `Array.prototype.every(callback(element[, index[, array]])[, thisArg])`

测试一个数组内的所有元素是否都能通过某个指定函数的测试。它返回一个布尔值

- `callback`: 用来测试每个元素的函数，它可以接收三个参数：
  - `element`: 用于测试的当前值。
  - `index`: 可选，用于测试的当前值的索引。
  - `array`: 可选，调用 every 的当前数组。
- `thisArg`: 执行 callback 时使用的 this 值。
- 返回值: 如果回调函数的每一次返回都为 truthy 值，返回 true，否则返回 false。

#### `Array.prototype.filter(callback(element[, index[, array]])[, thisArg])`

创建一个新数组，其包含通过所提供函数实现的测试的所有元素

- `callback`: 用来测试数组的每个元素的函数。返回 true 表示该元素通过测试，保留该元素，false 则不保留。它接受以下三个参数：
  - `element`: 数组中当前正在处理的元素。
  - `index`: 可选，正在处理的元素在数组中的索引。
  - `array`: 可选，调用了 filter 的数组本身。
- `thisArg`: 可选，执行 callback 时，用于 this 的值。
- 返回值: 一个新的、由通过测试的元素组成的数组，如果没有任何数组元素通过测试，则返回空数组。

#### `Array.prototype.forEach(callback(currentValue [, index [, array]])[, thisArg])`

对数组的每个元素执行一次给定的函数

- `callback`: 为数组中每个元素执行的函数，该函数接收一至三个参数：
  - `currentValue`: 数组中正在处理的当前元素。
  - `index`: 可选，数组中正在处理的当前元素的索引。
  - `array`: 可选，forEach() 方法正在操作的数组。
- `thisArg`: 可选，可选参数。当执行回调函数 callback 时，用作 this 的值。
- 返回值: undefined。

#### `Array.prototype.indexOf(searchElement[, fromIndex])`

返回在数组中可以找到一个给定元素的第一个索引，如果不存在，则返回 -1

- `searchElement`: 要查找的元素
- `fromIndex`: 可选，开始查找的位置。如果该索引值大于或等于数组长度，意味着不会在数组里查找，返回 -1。如果参数中提供的索引值是一个负值，则将其作为数组末尾的一个抵消，即 -1 表示从最后一个元素开始查找，-2 表示从倒数第二个元素开始查找 ，以此类推。 注意：如果参数中提供的索引值是一个负值，并不改变其查找顺序，查找顺序仍然是从前向后查询数组。如果抵消后的索引值仍小于 0，则整个数组都将会被查询。其默认值为 0。
- 返回值: 首个被找到的元素在数组中的索引位置; 若没有找到则返回 -1

#### `Array.prototype.join([separator = ','])`

将一个数组的所有元素连接成一个字符串并返回这个字符串

- separator: 可选，指定一个字符串来分隔数组的每个元素。如果需要，将分隔符转换为字符串。如果缺省该值，数组元素用逗号（,）分隔。如果 separator 是空字符串 ("")，则所有元素之间都没有任何字符。
- 返回值: 一个所有数组元素连接的字符串。如果 arr.length 为 0，则返回空字符串。

#### `Array.prototype.lastIndexOf(searchElement[, fromIndex])`

返回指定元素在数组中的最后一个的索引，如果不存在则返回 -1

- `searchElement`: 被查找的元素。
- `fromIndex`: 可选，从此位置开始逆向查找。默认为数组的长度减 1(arr.length - 1)，即整个数组都被查找。如果该值大于或等于数组的长度，则整个数组会被查找。如果为负值，将其视为从数组末尾向前的偏移。即使该值为负，数组仍然会被从后向前查找。如果该值为负时，其绝对值大于数组长度，则方法返回 -1，即数组不会被查找。
- 返回值: 数组中该元素最后一次出现的索引，如未找到返回-1。

#### `Array.prototype.map(callback(currentValue[, index[, array]])[, thisArg])`

返回一个新数组，其结果是该数组中的每个元素是调用一次提供的函数后的返回值

- `callback`: 生成新数组元素的函数，使用三个参数：
  - `currentValue`:
  - `callback`: 数组中正在处理的当前元素。
  - `index`: 可选，callback 数组中正在处理的当前元素的索引。
  - `array`: 可选，map 方法调用的数组。
- `thisArg`: 可选，执行 callback 函数时值被用作 this。
- 返回值: 一个由原数组每个元素执行回调函数的结果组成的新数组。

#### `Array.prototype.pop()`

从数组中删除最后一个元素，并返回该元素的值

- 返回值: 从数组中删除的元素（当数组为空时返回 undefined）。

#### `Array.prototype.push(element1, ..., elementN)`

将一个或多个元素添加到数组的末尾，并返回该数组的新长度

- `elementN`: 被添加到数组末尾的元素。
- 返回值: 当调用该方法时，新的 length 属性值将被返回。

#### `Array.prototype.reduce(callback(accumulator, currentValue[, index[, array]])[, initialValue])`

对数组中的每个元素执行一个由您提供的 reducer 函数（升序执行），将其结果汇总为单个返回值

- `callbackFn`: 一个 “reducer” 函数，包含四个参数：
  - `previousValue`: 上一次调用 callbackFn 时的返回值。在第一次调用时，若指定了初始值 initialValue，其值则为 initialValue，否则为数组索引为 0 的元素 array[0]。
  - `currentValue`: 数组中正在处理的元素。在第一次调用时，若指定了初始值 initialValue，其值则为数组索引为 0 的元素 array[0]，否则为 array[1]。
  - `currentIndex`: 数组中正在处理的元素的索引。若指定了初始值 initialValue，则起始索引号为 0，否则从索引 1 起始。
  - `array`: 用于遍历的数组。
  - `initialValue`: 可选，作为第一次调用 callback 函数时参数 previousValue 的值。若指定了初始值 initialValue，则 currentValue 则将使用数组第一个元素；否则 previousValue 将使用数组第一个元素，而 currentValue 将使用数组第二个元素。
- 返回值: 使用 “reducer” 回调函数遍历整个数组后的结果。

#### `Array.prototype.reduceRight(callback(accumulator, currentValue[, index[, array]])[, initialValue])`

接受一个函数作为累加器（accumulator）和数组的每个值（从右到左）将其减少为单个值

- `callback`: 一个回调函数，用于操作数组中的每个元素，它可接受四个参数：
  - `accumulator`:: 累加器：上一次调用回调函数时，回调函数返回的值。首次调用回调函数时，如果 initialValue 存在，累加器即为 initialValue，否则须为数组中的最后一个元素（详见下方 initialValue 处相关说明）。
  - `currentValue`:: 当前元素：当前被处理的元素。
  - `index`: 可选，数组中当前被处理的元素的索引。
  - `array`: 可选，调用 reduceRight() 的数组。
- `initialValue`: 可选，首次调用 callback 函数时，累加器 accumulator 的值。如果未提供该初始值，则将使用数组中的最后一个元素，并跳过该元素。如果不给出初始值，则需保证数组不为空。否则，在空数组上调用 reduce 或 reduceRight 且未提供初始值（例如 [].reduce( (acc, cur, idx, arr) => {} ) ）的话，会导致类型错误 TypeError: reduce of empty array with no initial value。
- 返回值: 执行之后的返回值。

#### `Array.prototype.reverse()`

将数组中元素的位置颠倒，并返回该数组。该方法会改变原数组

- 返回值: 颠倒后的数组。

#### `Array.prototype.shift()`

从数组中删除第一个元素，并返回该元素的值

- 返回值: 从数组中删除的元素; 如果数组为空则返回 undefined 。

#### `Array.prototype.slice([begin[, end]])`

提取源数组的一部分并返回一个新数组

- `begin`: 可选，提取起始处的索引（从 0 开始），从该索引开始提取原数组元素。如果该参数为负数，则表示从原数组中的倒数第几个元素开始提取，slice(-2) 表示提取原数组中的倒数第二个元素到最后一个元素（包含最后一个元素）。如果省略 begin，则 slice 从索引 0 开始。如果 begin 超出原数组的索引范围，则会返回空数组。
- `end`: 可选，提取终止处的索引（从 0 开始），在该索引处结束提取原数组元素。slice 会提取原数组中索引从 begin 到 end 的所有元素（包含 begin，但不包含 end）。slice(1,4) 会提取原数组中从第二个元素开始一直到第四个元素的所有元素（索引为 1, 2, 3 的元素）。如果该参数为负数， 则它表示在原数组中的倒数第几个元素结束抽取。 slice(-2,-1) 表示抽取了原数组中的倒数第二个元素到最后一个元素（不包含最后一个元素，也就是只有倒数第二个元素）。如果 end 被省略，则 slice 会一直提取到原数组末尾。如果 end 大于数组的长度，slice 也会一直提取到原数组末尾。
- 返回值: 一个含有被提取元素的新数组。

#### `Array.prototype.some(callback(element[, index[, array]])[, thisArg])`

测试数组中是不是至少有一个元素通过了被提供的函数测试

- `callback`: 用来测试每个元素的函数，接受三个参数：
  - `element`: 数组中正在处理的元素。
  - `index`: 可选，数组中正在处理的元素的索引值。
  - `array`: 可选，some()被调用的数组。
- `thisArg`: 可选，执行 callback 时使用的 this 值。
- 返回值: 数组中有至少一个元素通过回调函数的测试就会返回 true；所有元素都没有通过回调函数的测试返回值才会为 false。

#### `Array.prototype.sort([compareFunction])`

对数组元素进行原地排序并返回此数组

- `compareFunction`: 可选，用来指定按某种顺序进行排列的函数。如果省略，元素按照转换为的字符串的各个字符的 Unicode 位点进行排序。
  - `firstEl`: 第一个用于比较的元素。
  - `secondEl`: 第二个用于比较的元素。
- 返回值: 排序后的数组。请注意，数组已原地排序，并且不进行复制。

#### `Array.prototype.splice(start[, deleteCount[, item1[, item2[, ...]]]])`

通过删除或替换现有元素或者原地添加新的元素来修改数组，并以数组形式返回被修改的内容

- `start`: 指定修改的开始位置（从 0 计数）。如果超出了数组的长度，则从数组末尾开始添加内容；如果是负值，则表示从数组末位开始的第几位（从 -1 计数，这意味着 -n 是倒数第 n 个元素并且等价于 array.length-n）；如果负数的绝对值大于数组的长度，则表示开始位置为第 0 位。
- `deleteCount`: 可选，整数，表示要移除的数组元素的个数。如果 deleteCount 大于 start 之后的元素的总数，则从 start 后面的元素都将被删除（含第 start 位）。如果 deleteCount 被省略了，或者它的值大于等于 array.length - start(也就是说，如果它大于或者等于 start 之后的所有元素的数量)，那么 start 之后数组的所有元素都会被删除。如果 deleteCount 是 0 或者负数，则不移除元素。这种情况下，至少应添加一个新元素。
- `item1, item2, ...`: 可选，要添加进数组的元素，从 start 位置开始。如果不指定，则 splice() 将只删除数组元素。
- 返回值: 由被删除的元素组成的一个数组。如果只删除了一个元素，则返回只包含一个元素的数组。如果没有删除元素，则返回空数组。

#### `Array.prototype.toLocaleString([locales[,options]])`

返回一个字符串表示数组中的元素。数组中的元素将使用各自的 `Object.prototype.toLocaleString()` 方法转成字符串

- `locales`: 可选，带有 BCP 47 语言标记的字符串或字符串数组，关于 locales 参数的形式与解释，请看 Intl 页面。
- options: 可选，一个可配置属性的对象，对于数字 Number.prototype.toLocaleString()，对于日期 Date.prototype.toLocaleString().
- 返回值: 表示数组元素的字符串。

#### `Array.prototype.toString()`

返回一个字符串表示指定的数组及其元素。数组中的元素将使用各自的 `Object.prototype.toString()` 方法转成字符串

- 返回值: 一个表示指定的数组及其元素的字符串。

#### `Array.prototype.unshift(element1, ..., elementN)`

将一个或多个元素添加到数组的头部，并返回该数组的新长度

- `elementN`: 要添加到数组开头的元素或多个元素。
- 返回值: 当一个对象调用该方法时，返回其 length 属性值。

#### `Array.prototype[@@iterator]()`

返回一个新的 Array Iterator 对象，该对象包含数组每个索引的值

### ES6 新增实例方法

#### `Array.prototype.at(index)`

- `index`: 要返回的数组元素的索引（位置）。当传递负数时，支持从数组末端开始的相对索引；也就是说，如果使用负数，返回的元素将从数组的末端开始倒数。
- 返回值: 匹配给定索引的数组中的元素。如果找不到指定的索引，则返回 undefined。

  > 返回处于 index 位置的元素

#### `Array.prototype.copyWithin(target[, start[, end]])`

浅复制数组的一部分到同一数组中的另一个位置，并返回它，不会改变原数组的长度

- `target`: 0 为基底的索引，复制序列到该位置。如果是负数，target 将从末尾开始计算。如果 target 大于等于 arr.length，将不会发生拷贝。如果 target 在 start 之后，复制的序列将被修改以符合 arr.length。
- `start`: 0 为基底的索引，开始复制元素的起始位置。如果是负数，start 将从末尾开始计算。如果 start 被忽略，copyWithin 将会从 0 开始复制。
- `end`: 0 为基底的索引，开始复制元素的结束位置。copyWithin 将会拷贝到该位置，但不包括 end 这个位置的元素。如果是负数， end 将从末尾开始计算。如果 end 被忽略，copyWithin 方法将会一直复制至数组结尾（默认为 arr.length）。
- 返回值: 改变后的数组。

#### `Array.prototype.entries()`

返回一个新的 Array Iterator 对象，该对象包含数组中每个索引的键/值对

- 返回值: 一个新的 Array 迭代器对象。Array Iterator 是对象，它的原型（**proto**:Array Iterator）上有一个 next 方法，可用用于遍历迭代器取得原数组的 [key,value]。

#### `Array.prototype.find(callback(element[, index[, array]])[, thisArg])`

返回数组中满足提供的测试函数的第一个元素的值。否则返回 undefined

- `callback`: 在数组每一项上执行的函数，接收 3 个参数：
  - `element`: 当前遍历到的元素。
  - `index`: 可选，当前遍历到的索引。
  - `array`: 可选，数组本身。
  - `thisArg`: 可选，执行回调时用作 this 的对象。
- 返回值: 数组中第一个满足所提供测试函数的元素的值，否则返回 undefined。

#### `Array.prototype.findIndex(callback[, thisArg])`

返回数组中满足提供的测试函数的第一个元素的索引。若没有找到对应元素则返回 -1

- `callback`: 针对数组中的每个元素，都会执行该回调函数，执行时会自动传入下面三个参数：
  - `element`: 当前元素。
  - `index`: 当前元素的索引。
  - `array`: 调用 findIndex 的数组。
- `thisArg`: 可选。执行 callback 时作为 this 对象的值。
- 返回值: 数组中通过提供测试函数的第一个元素的索引。否则，返回-1

#### `Array.prototype.fill(value[, start = 0[, end = this.length]])`

用一个固定值填充一个数组中从起始索引到终止索引内的全部元素

- `value`: 用来填充数组元素的值。
- `start`: 可选，起始索引，默认值为 0。
- `end`: 可选，终止索引，默认值为 this.length。
- 返回值: 修改后的数组。

#### `Array.prototype.flat([depth = 1])`

按照一个可指定的深度递归遍历数组，并将所有元素与遍历到的子数组中的元素合并为一个新数组返回

- `depth`: 可选，指定要提取嵌套数组的结构深度，默认值为 1。
- 返回值: 一个包含将数组与子数组中所有元素的新数组。

#### `Array.prototype.flatMap(callback(currentValue[, index[, array]])[, thisArg])`

使用映射函数映射每个元素，然后将结果压缩成一个新数组

- `callback`: 可以生成一个新数组中的元素的函数，可以传入三个参数：
  - `currentValue`: 当前正在数组中处理的元素
  - `index`: 可选，可选的。数组中正在处理的当前元素的索引。
  - `array`: 可选，可选的。被调用的 map 数组
- `thisArg`: 可选，可选的。执行 callback 函数时 使用的 this 值。
- 返回值: 一个新的数组，其中每个元素都是回调函数的结果，并且结构深度 depth 值为 1。

#### `Array.prototype.keys()`

返回一个包含数组中每个索引键的 Array Iterator 对象

- 返回值: 一个新的 Array 迭代器对象。

#### `Array.prototype.includes(valueToFind[, fromIndex])`

判断一个数组是否包含一个指定的值，如果包含则返回 true，否则返回 false

- `valueToFind`: 需要查找的元素值。
- `fromIndex`: 可选，从 fromIndex 索引处开始查找 valueToFind。如果为负值，则按升序从 array.length + fromIndex 的索引开始搜（即使从末尾开始往前跳 fromIndex 的绝对值个索引，然后往后搜寻）。默认为 0。
- 返回值: 返回一个布尔值 Boolean 。如果在数组中（或 fromIndex 指定的范围中）找到了 valueToFind，则返回 true，否则返回 false。

#### `Array.prototype.values()`

返回一个新的 Array Iterator 对象，该对象包含数组每个索引的值

- 返回值: 一个新的 Array 迭代对象。

## 总结

### Array 对象属性

| 属性        | 描述                            |
| ----------- | ------------------------------- |
| constructor | 返回创建 Array 对象原型的函数。 |
| length      | 设置或返回数组中元素的数量。    |
| prototype   | 允许您向数组添加属性和方法。    |

### Array 对象方法

| 方法          | 描述                                               |
| ------------- | -------------------------------------------------- |
| concat()      | 连接两个或多个数组，并返回已连接数组的副本。       |
| copyWithin()  | 将数组中的数组元素复制到指定位置或从指定位置复制。 |
| entries()     | 返回键/值对数组迭代对象。                          |
| every()       | 检查数组中的每个元素是否通过测试。                 |
| fill()        | 用静态值填充数组中的元素。                         |
| filter()      | 使用数组中通过测试的每个元素创建新数组。           |
| find()        | 返回数组中第一个通过测试的元素的值。               |
| findIndex()   | 返回数组中通过测试的第一个元素的索引。             |
| forEach()     | 为每个数组元素调用函数。                           |
| from()        | 从对象创建数组。                                   |
| includes()    | 检查数组是否包含指定的元素。                       |
| indexOf()     | 在数组中搜索元素并返回其位置。                     |
| isArray()     | 检查对象是否为数组。                               |
| join()        | 将数组的所有元素连接成一个字符串。                 |
| keys()        | 返回 Array Iteration 对象，包含原始数组的键.       |
| lastIndexOf() | 在数组中搜索元素，从末尾开始，并返回其位置。       |
| map()         | 使用为每个数组元素调用函数的结果创建新数组。       |
| pop()         | 删除数组的最后一个元素，并返回该元素。             |
| push()        | 将新元素添加到数组的末尾，并返回新的长度。         |
| reduce()      | 将数组的值减为单个值（从左到右）。                 |
| reduceRight() | 将数组的值减为单个值（从右到左）。                 |
| reverse()     | 反转数组中元素的顺序。                             |
| shift()       | 删除数组的第一个元素，并返回该元素。               |
| slice()       | 选择数组的一部分，并返回新数组。                   |
| some()        | 检查数组中的任何元素是否通过测试。                 |
| sort()        | 对数组的元素进行排序。                             |
| splice()      | 从数组中添加/删除元素。                            |
| toString()    | 将数组转换为字符串，并返回结果。                   |
| unshift()     | 将新元素添加到数组的开头，并返回新的长度。         |
| valueOf()     | 返回数组的原始值。                                 |

## 参考文献

- https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Reference/Global_Objects/Array
- https://www.w3school.com.cn/jsref/jsref_obj_array.asp
- https://es6.ruanyifeng.com/#docs/array
