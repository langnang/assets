# JavaScript

## 目录

### Algorithm

#### Sort

1. [`bubbleSort(numberArray)`](./packages/algorithm/bubbleSort.js): 冒泡排序
2. [`bucketSort(numberArray)`](./packages/algorithm/bucketSort.js): 桶排序
3. [`countingSort(numberArray)`](./packages/algorithm/countingSort.js): 技术排序
4. [`heapSort(numberArray)`](./packages/algorithm/heapSort.js): 堆排序
5. [`insertionSort(numberArray)`](./packages/algorithm/insertionSort.js): 插入排序
6. [`mergeSort(numberArray)`](./packages/algorithm/mergeSort.js): 归并排序
7. [`quickSort(numberArray)`](./packages/algorithm/quickSort.js): 快速排序
8. [`radixSort(numberArray)`](./packages/algorithm/radixSort.js): 基数排序
9. [`selectionSort(numberArray)`](./packages/algorithm/selectionSort.js): 选择排序
10. [`shellSort(numberArray)`](./packages/algorithm/shellSort.js): 希尔排序

#### Math

1. [`factorial(number)`](./packages/algorithm/factorial.js): 阶乘。所有小于及等于该数的正整数的积，并且 1 的阶乘为 1。自然数 n 的阶乘写作 n!。
2. [`euclideanAlgorithm(a, b)`](./packages/algorithm/euclideanAlgorithm.js): 欧几里得算法。指用于计算两个非负整数 a，b 的最大公约数

### Array

- [ ] : `Array.prototype.copyWithin()`
- [ ] : `Array.prototype.entries()`
- [ ] : `Array.prototype.flat()`
- [ ] : `Array.prototype.flatMap()`

<details>
  <summary>
    <b>propotype</b>
  </summary>

1. [`ArrayFrom()`](./packages/array/ArrayFrom.js): `Array.from()`
2. [`ArrayIs()`](./packages/array/ArrayIs.js): `Array.isArray()`
3. [`ArrayOf()`](./packages/array/ArrayOf.js): `Array.of()`
4. [`arrayConcat()`](./packages/array/arrayConcat.js): `Array.prototype.concat()`
5. [`arrayEvery()`](./packages/array/arrayEvery.js): `Array.prototype.every()`
6. [`arrayFill()`](./packages/array/arrayFill.js): `Array.prototype.fill()`
7. [`arrayFilter()`](./packages/array/arrayFilter.js): `Array.prototype.filter()`
8. [`arrayFind()`](./packages/array/arrayFind.js): `Array.prototype.find()`
9. [`arrayFindIndex()`](./packages/array/arrayFindIndex.js): `Array.prototype.findIndex()`
10. [`arrayForEach()`](./packages/array/arrayForEach.js): `Array.prototype.forEach(callback(currentValue , index, array), thisArg)`
11. [`arrayIncludes()`](./packages/array/arrayIncludes.js): `Array.prototype.includes()`
12. [`arrayIndexOf()`](./packages/array/arrayIndexOf.js): `Array.prototype.indexOf()`
13. [`arrayJoin()`](./packages/array/arrayJoin.js): `Array.prototype.join()`
14. [`arrayKeys()`](./packages/array/arrayKeys.js): `Array.prototype.keys()`
15. [`arrayLastIndexOf`](./packages/array/arrayLastIndexOf.js): `Array.prototype.lastIndexOf()`
16. [`arrayMap()`](./packages/array/arrayMap.js): `Array.prototype.map()`
17. [`arrayPop()`](./packages/array/arrayPop.js): `Array.prototype.pop()`
18. [`arrayPush()`](./packages/array/arrayPush.js): `Array.prototype.push()`
19. [`arrayReduce()`](./packages/array/arrayReduce.js): `Array.prototype.reduce()`
20. [`arrayReduceRight()`](./packages/array/arrayReduceRight.js): `Array.prototype.reduceRight()`
21. [`arrayReverse()`](./packages/array/arrayReverse.js): `Array.prototype.reverse()`
22. [`arrayShift()`](./packages/array/arrayShift.js): `Array.prototype.shift()`
23. [`arraySlice()`](./packages/array/arraySlice.js): `Array.prototype.slice()`
24. [`arraySome()`](./packages/array/arraySome.js): `Array.prototype.some()`
25. [`arraySort()`](./packages/array/arraySort.js): `Array.prototype.sort()`
26. [`arraySplice()`](./packages/array/arraySplice.js): `Array.prototype.splice()`
27. [`arrayUnshift()`](./packages/array/arrayUnshift.js): `Array.prototype.unshift()`
28. [`arrayValues`](./packages/array/arrayValues.js): `Array.prototype.values()`

</details>

1. [`count(array, val = array[0])`](./packages/array/count.js): 统计数组中值出现的次数
2. [`countBy(array, fn)`](./packages/array/countBy.js): 根据函数统计数组中值出现的次数
3. [`deepCopyArray`](./packages/array/deepCopyArray.js): 深拷贝数组
4. [`duplicate(array)`](./packages/array/duplicate.js): 返回数组中的重复值
5. [`filterFalsy(array)`](./packages/array/filterFalsy.js): 过滤虚假值
6. [`flatten(array, depth = 1)`](./packages/array/flatten.js): 展平数组到指定深度
7. [`head(array, n = 1)`](./packages/array/head.js): 返回数组的前 n 个元素
8. [`isArrayEvery(array, fn)`](./packages/array/isArrayEvery.js): 检测数组的所有元素是否都符合
9. [`isArrayEveryEqual(array)`](./packages/array/isArrayEveryEqual.js): 检测数组的所有元素是否相等
10. [`isArrayNone(array, fn)`](./packages/array/isArrayNone.js): 检测数组的所有元素是否都不符合
11. [`isArraySome(array, fn)`](./packages/array/isArraySome.js): 检测数组的部分元素是否符合
12. [`isArraySorted(array)`](./packages/array/isArraySorted.js): 检测数组是否已排序。若为升序，返回 1；降序，返回-1；未排序，返回 0；
13. [`offset(array, offset)`](./packages/array/offset.js): 将指定数量的元素移动到数组的末尾。
14. [`rest(array, n = 1)`](./packages/array/rest.js): 返回数组的后 n 个元素
15. [`reverse(array)`](./packages/array/reverse.js): 反转数组
16. [`unique(array)`](./packages/array/unique.js): 返回数组中的所有不同值。去重；

### Boolean

1. [`isFalse(boolean)`](./packages/boolean/isFalse.js): 检测 false
2. [`isTrue(boolean)`](./packages/boolean/isTrue.js): 检测 true

### Date

1. [`date(...args)`](./packages/date/date.js): 创建 Date 对象
2. [`day(date)`](./packages/date/day.js): 月份中的第几天
3. [`dayOfWeek`](./packages/date/dayofWeek.js): 周中的第几天
4. [`endofDay(date)`](./packages/date/endofDay.js): 日期的最后一秒。23:59:59
5. [`firstDayofMonth(date)`](./packages/date/firstDayofMonth.js): 日期所在月的第一天
6. [`format(date, fm)`](./packages/date/format.js): 格式化日期世界
7. [`hour(date)`](./packages/date/hour.js): 日期的小时
8. [`lastDayofMonth(date)`](./packages/date/lastDayofMonth.js): 日期所在月的最后一天
9. [`lastNDay(date)`](./packages/date/lastNDay.js): 日期前 N 天
10. [`millisecond(date)`](./packages/date/millisecond.js): 日期的毫秒
11. [`minute(date)`](./packages/date/minute.js): 日期的分钟
12. [`monday(date)`](./packages/date/monday.js): 日期所在周的周一
13. [`month(date)`](./packages/date/month.js): 日期的月份
14. [`nextDays(date, n = 1)`](./packages/date/nextDays.js): 指定日期后 N 天后
15. [`nextHours(date, n = 1)`](./packages/date/nextHours.js): 指定日期的 N 时后
16. [`nextMinutes(date, n = 1)`](./packages/date/nextMinutes.js): 指定日期的 N 分后
17. [`nextMonths(date, n = 1)`](./packages/date/nextMonths.js): 指定日期的 N 月后
18. [`nextSeconds(date, n = 1)`](./packages/date/nextSeconds.js): 指定日期的 N 秒后
19. [`nextWeeks(date, n = 1)`](./packages/date/nextWeeks.js): 指定日期的 N 周后
20. [`nextYears(date, n = 1)`](./packages/date/nextYears.js): 指定日期的 N 年后
21. [`range`](./packages/date/range.js): 时间区段
22. [`second(date)`](./packages/date/second.js): 日期的秒
23. [`startofDay(date)`](./packages/date/startofDay.js): 日期的第一秒。00:00:00
24. [`sunday(date)`](./packages/date/sunday.js): 日期所在周的周日
25. [`timeline(start, end)`](./packages/date/timeline.js): 返回起止时间中单位时间的连续时间数组
26. [`timestamp(date)`](./packages/date/timestamp.js): 时间戳
27. [`tomorrow(date)`](./packages/date/tomorrow.js): 日期的后一天
28. [`weekofYear(date)`](./packages/date/weekofYear.js): 日期所在年份的周次
29. [`year(date)`](./packages/date/year.js): 日期的年份
30. [`yesterday(date)`](./packages/date/yesterday.js): 日期的前一天

### DOM

1. [`isBottomVisible()`](./packages/dom/isBottomVisible.js): 检测页面的底部是否可见
2. [`isRoot()`](./packages/dom/isRoot.js): 检测文档根节点
3. [`isVisibleinViewport(el)`](./packages/dom/isVisibleinViewport.js): 检测元素在视区中是否可见
4. [`redirect(url)`](./packages/dom/redirect.js): 重定向到指定 URL
5. [`scrollPosition`](./packages/dom/scrollPosition.js): 返回当前页的滚动位置
6. [`scrollToTop()`](./packages/dom/scrollToTop.js): 滚动至页面顶部
7. [`url()`](./packages/dom/url.js): 返回当前 URL

### Function

- [ ] `apply(thisArg, [argsArray])`: `Function.prototype.apply(thisArg, [argsArray])`
- [ ] `bind(thisArg, ...args)`: `Function.prototype.bind(thisArg, ...args)`
- [ ] `call(thisArg, ...args)`: `Function.prototype.call(thisArg, ...args)`

1. [`ajax(option)`](./packages/function/ajax.js): 异步 JavaScript 和 XML
2. [`debounce()`](./packages/function/debounce.js): 防抖：触发高频事件后 n 秒内函数只会执行一次，如果 n 秒内高频事件再次被触发，则重新计算时间
3. [`forEach(object, callback)`](./packages/function/forEach.js): 从左向右遍历对象
4. [`forEachRight(object, callback)`](./packages/function/forEachRight.js): 从右向左遍历对象
5. [`forEachRightArray(object, callback)`](./packages/function/forEachRightArray.js): 从右向左遍历数组
6. [`query()`](./packages/function/query.js): 元素选择器
7. [`queryAll()`](./packages/function/queryAll.js): 元素选择器
8. [`swap(a, b)`](./packages/function/swap.js): 交换两个元素的值
9. [`throttle()`](./packages/function/throttle.js): 节流：高频事件触发，但在 n 秒内只会执行一次，所以节流会稀释函数的执行频率
10. [`timeTaken(fn, ...args)`](./packages/function/timeTaken.js): 测量执行函数所用的时间

### Mobile

1. [`mobileType()`](./packages/mobile/mobileType.js): 返回手机系统类型。Android，IOS；

### Number

1. [`areaofCircle(radius)`](./packages/number/areaofCircle.js): 圆的面积
2. [`avg(...nums)`](./packages/number/avg.js): 平均值
3. [`collatz(number)`](./packages/number/collatz.js): Collatz 算法
4. [`digitize(num)`](./packages/number/digitize.js): 将数字转换为数字数组
5. [`distance(x0, y0, x1, y1)`](./packages/number/distance.js): 两点间的距离
6. [`gcd(a, b)`](./packages/number/gcd.js): 计算两个数字之间最大的公共除数
7. [`isDivisible(dividend, divisor)`](./packages/number/isDivisible.js): 检测第一个数值是否可被另一个数值整除
8. [`isEven(number)`](./packages/number/isEven.js): 检测偶数
9. [`isFinite(number)`](./packages/number/isFinite.js): 检测无穷大
10. [`isInteger(number)`](./packages/number/isInteger.js): 检测整数
11. [`isLeapYear(number)`](./packages/number/isLeapYear.js): 检测闰年
12. [`isNaN(number)`](./packages/number/isNaN.js): 检测非数值
13. [`isOdd(number)`](./packages/number/isOdd.js): 检测奇数
14. [`isSafeInteger(number)`](./packages/number/isSafeInteger.js): 检测安全整数
15. [`LeapYears(startYear, endYear)`](./packages/number/leapYears.js): 返回范围内的所有闰年
16. [`max(...nums)`](./packages/number/max.js): 最大值
17. [`min(...nums)`](./packages/number/min.js): 最小值
18. [`PI()`](./packages/number/PI.js): 圆周率
19. [`randomInteger(min, max = min + 1)`](./packages/number/randomInteger.js): 随机整数
20. [`randomNumber(min, max = min + 1)`](./packages/number/randomNumber.js): 随机数值
21. [`sum(...nums)`](./packages/number/sum.js): 总值
22. [`thousandsSeparator(num)`](./packages/number/thousandsSeparator.js): 千位分隔符

### Object

1. [`extend(target, parent)`](./packages/object/extend.js): 混合属性到目标对象
2. [`isArray(obj)`](./packages/object/isArray.js): 检测对象是否为数组
3. [`isBoolean(obj)`](./packages/object/isBoolean.js): 检测对象是否为布尔值
4. [`isBrowser`](./packages/object/isBrowser.js): 检测浏览器环境
5. [`isDate(obj)`](./packages/object/isDate.js): 检测对象是否为日期时间
6. [`isDefined(obj)`](./packages/object/isDefined.js): 检测已定义
7. [`isDOM()`](./packages/object/isDOM.js): 检测 DOM
8. [`isEmpty(obj)`](./packages/object/isEmpty.js): 检测为空
9. [`isFunction(obj)`](./packages/object/isFunction.js): 检测函数
10. [`isNull(obj)`](./packages/number/isNaN.js): 检测 Null
11. [`isNumber(obj)`](./packages/object/isNumber.js): 检测数值
12. [`isObject(obj)`](./packages/object/isObject.js): 检测对象
13. [`isPrimitive(obj)`](./packages/object/isPrimitive.js): 检测原始数据类型。字符串、数值、布尔值、Symbol。
14. [`isRegExp(obj)`](./packages/object/isRegExp.js): 检测正则表达式
15. [`isString(obj)`](./packages/object/isString.js): 检测字符串
16. [`isSymbol(obj)`](./packages/object/isSymbol.js): 检测 Symbol
17. [`isUndefined(obj)`](./packages/object/isUndefined.js): 检测 Undefined
18. [`stringify(json)`](./packages/object/stringify.js): JSON 转字符串
19. [`typeOf(obj)`](./packages/object/typeOf.js): 检测对象的数据类型

### RegExp

1. [`regs()`](./packages/regexp/regs.js): 常用正则表达式
2. [`verifyEmail()`](./packages/regexp/verifyEmail.js): 验证邮箱
3. [`verifyNumber()`](./packages/regexp/verifyNumber.js): 验证数值

### String

1. [`capitalize()`](./packages/string/capitalize.js): 将字符串的第一个字母大写
2. [`capitalizeEveryWord()`](./packages/string/capitalizeEveryWord.js): 将字符串中每个单词的首字母大写
3. [`hexToRgba()`](./packages/string/hexToRgba.js): hex 十六进制颜色转 rgb 颜色。
4. [`isPalindrome(string)`](./packages/string/isPalindrome.js): 检测回文字符串
5. [`isStringOfArray(string)`](./packages/string/isStringforArray.js): 检测字符串数组
6. [`isStringOfBoolean(string)`](./packages/string/isStringforBoolean.js): 检测字符串布尔值
7. [`isStringOfNumber(string)`](./packages/string/isStringforNumber.js): 检测字符串数值
8. [`isValidParenthess()`](./packages/string/isValidParenthess.js): 检测是否是成对出现的括号。有效的括号；
9. [`longestWord(text)`](./packages/string/longestWord.js): 返回一段话中最长的单词
10. [`nb()`](./packages/string/nb.js): NB
11. [`randomString(length = 1, array = 0)`](./packages/string/randomString.js): 随机字符串
12. [`rate()`](./packages/string/rate.js): 评分字符串星星
13. [`removeDuplicates(string)`](./packages/string/removeDuplicates.js): 移除字符串中所有相邻重复项
14. [`reverseString(string)`](./packages/string/reverseString.js): 翻转字符串
15. [`rgbToHex()`](./packages/string/rgbToHex.js): rgb 颜色转 hex 十六进制颜色。
16. [`sb()`](./packages/string/sb.js): SB
17. [`toJson(string)`](./packages/string/toJson.js): 字符串转 JSON
18. [`urlParams([url = window.location.href)`](./packages/string/urlParams.js): 返回当前 URL 中的参数对象
19. [`uuid()`](./packages/string/uuid.js): 通用唯一识别码（Universally Unique Identifier）

## 参考

- [30 seconds of code](https://www.30secondsofcode.org/list)
- [Lodash](https://www.lodashjs.com/docs/latest)
- [Underscore](https://underscorejs.org)
- [ChanceJS]()
- [CollectJS]()
- [Date-fns]()
- [Lazy]()
- [Licia]()
- [MathJS]()
- [Moment]()
- [Mout]()
- [Ramda]()
- [Sugar]()
- [Voca]()
- [33 个非常实用的 JavaScript 一行代码，建议收藏！](https://juejin.cn/post/7025771605422768159)
