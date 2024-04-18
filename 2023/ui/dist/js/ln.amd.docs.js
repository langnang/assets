define(['exports'], (function (exports) { 'use strict';

/**
 * 元素选择器
 * @param {String} el
 */
var __selector__ = {
    name: "selector(el)",
    description: "元素选择器",
    params: [
        {
            name: "el",
            description: "标签元素",
            type: "String"
        }
    ]
};
// export const $ = jQuery;

__selector__.description = __selector__.description.replace("selector", "$");
var __$__ = __selector__;

/**
 * Ajax的封装
 * @param {Object} option 配置参数
 * @return {Function} 回调函数
 */
var __ajax__ = {
    description: "AJAX 的封装"
};

/**
 * @name areaOfCircle
 * @desc 返回圆的面积
 * @param {Number} radius
 * @param {Number} pi
 */
var __areaofCircle__ = {
    description: "圆的面积"
};

var __arrayConcat__ = {
    description: "Array.prototype.concat"
};

var __arrayEvery__ = {
    description: "Array.prototype.every"
};

var __arrayFill__ = {
    description: "Array.prototype.fill"
};

var __arrayPush__ = {
    description: "Array.prototype.push"
};

var __arrayFilter__ = {
    description: "Array.prototype.filter"
};

var __arrayFind__ = {
    description: "Array.prototype.find"
};

var __arrayFindIndex__ = {
    description: "Array.prototype.findIndex"
};

/**
 * Array.prototype.foreach()
 * @param {*} array
 * @param {*} callback
 * @param {*} thisArg
 */
var __arrayForEach__ = {
    description: "Array.prototype.forEach"
};

var __arrayIndexOf__ = {
    description: "Array.prototype.indexOf"
};

var __arrayIncludes__ = {
    description: "Array.prototype.includes"
};

var __arrayJoin__ = {
    description: "Array.prototype.join"
};

var __arrayKeys__ = {
    description: "Array.prototype.keys"
};

var __arrayLastIndexOf__ = {
    description: "Array.prototype.lastIndexOf"
};

var __arrayMap__ = {
    description: "Array.prototype.map"
};

/**
 * Array.of(...elsments)
 * @param  {...any} elements
 */
var __arrayOf__ = {
    description: "Array.of."
};

var __arrayPop__ = {
    description: "Array.prototype.pop"
};

var __arrayReduce__ = {
    description: "Array.prototype.reduce"
};

var __arrayReduceRight__ = {
    description: "Array.prototype.reduceRight"
};

var __arrayReverse__ = {
    description: "Array.prototype.reverse"
};

var __arraySlice__ = {
    description: "Array.prototype.slice"
};

var __arrayShift__ = {
    description: "Array.prototype.shift"
};

var __arraySome__ = {
    description: "Array.prototype.some"
};

var __arraySort__ = {
    description: "Array.prototype.sort"
};

var __arraySplice__ = {
    description: "Array.prototype.splice"
};

var __arrayToTree__ = {
    description: "数组转树状结构"
};

var __arrayUnshift__ = {
    description: "Array.prototype.unshift"
};

var __arrayValues__ = {
    description: "Array.prototype.values"
};

/**
 * 求总和
 * @param  {...any} nums
 */
var __sum__ = {
    description: "求总和"
};

var __avg__ = {
    description: "求平均值"
};

/**
 * 冒泡排序
 */
var __bubbleSort__ = {
    description: "冒泡排序"
};

/**
 * @name bucketSort
 * @desc 桶排序
 */
var __bucketSort__ = {
    description: "桶排序"
};

/**
 * 字符串首字母大写
 * @param {String} str
 * @returns
 */
var __capitalize__ = {
    description: "字符串首字母大写"
};

/**
 * 应用 Collatz 算法
 * @param {*} n
 */
var __collatz__ = {
    description: "应用 Collatz 算法"
};

/**
 * 统计数组中值的出现次数
 * @param {*} arr
 * @param {*} value
 */
var __count__ = {
    description: "统计数组中值的出现次数"
};

/**
 * 根据给定的函数对数组的元素进行分组，并返回每个组中元素的数量
 * @param {Array} array
 * @param {Function} fn
 */
var __countBy__ = {
    description: "根据给定的函数对数组的元素进行分组，并返回每个组中元素的数量"
};

/**
 * @name countingSort
 * @desc 计数排序
 */
var __countingSort__ = {
    description: "计数排序"
};

var __date__ = {
    description: "创建 Date 对象"
};

/**
 * 月份中的第几天
 * @param {*} date
 */
var __day__ = {
    description: "月份中的第几天"
};

/**
 * 星期中的第几天
 * @param {*} date
 */
var __dayofWeek__ = {
    description: "星期中的第几天"
};

/**
 * 防抖：触发高频事件后n秒内函数只会执行一次，如果n秒内高频事件再次被触发，则重新计算时间
 * 每次触发事件时都取消之前的延时调用方法
 */
var __debounce__ = {
    description: "防抖"
};

/**
 * 深拷贝数组
 * @param {*} array
 * @param {*} mode
 */
var __deepCopyArray__ = {
    description: "深拷贝数组"
};

var __digitize__ = {
    description: "将数字转换为数字数组"
};

/**
 * 返回两点之间的距离
 */
var __distance__ = {
    description: "返回两点之间的距离"
};

/**
 * 取重复值
 * @param {*} arr
 */
var __duplicate__ = {
    description: "取重复值"
};

/**
 * 日期的23:59:59
 * @param {*} date
 */
var __endofDay__ = {
    description: "日期的23:59:59"
};

/**
 * 欧几里得算法
 * @param {number} originalA
 * @param {number} originalB
 * @return {number}
 */
var __euclideanAlgorithm__ = {
    description: "欧几里得算法"
};

/**
 * 混合属性到目标对象
 */
var __extend__ = {
    description: "混合属性到目标对象"
};

/**
 * 阶乘
 * @param {number} number
 * @return {number}
 */
var __factorial__ = {
    description: "阶乘"
};

/**
 * 过滤数组中的虚假值
 * @param {Array} array
 */
var __filterFalsy__ = {
    description: "过滤数组中的虚假值"
};

/**
 * 日期所在月的第一天
 * @param {*} date
 */
var __firstDayofMonth__ = {
    description: "日期所在月的第一天"
};

/**
 * 对象数据类型
 * @param {*} obj
 * @returns {String}
 */
var __objectType__ = {
    description: "对象数据类型"
};

var __isArray__ = {
    description: "检测数组"
};

/**
 * 将数组展平到指定的深度。
 * @param {Array} arr
 */
var __flatten__ = {
    description: "将数组展平到指定的深度"
};

/**
 * 遍历对象
 * @param {Object} obj
 * @param {Function} callback
 */
var __forEach__ = {
    description: "遍历对象",
    params: [
        {
            name: 'obj',
            description: "需要遍历的对象",
            type: 'Object',
            "default": null
        }
    ]
};

/**
 * 反向遍历
 */
var __forEachRight__ = {
    description: "反向遍历"
};

/**
 * @name forEachRight
 * @desc 从数组的最后一个元素开始，为每个数组元素执行一次提供的函数。
 * @param {*} array
 * @param {*} callback
 */
var __forEachRightArray__ = {
    description: "从数组的最后一个元素开始，为每个数组元素执行一次提供的函数。"
};

/**
 * 获取时间所在年份的周次
 * 取当前时间所在年份的第一天的下周的周一，当前日期减去所取时间，再除以86400000毫秒数
 * @param {*} date
 * @param {*} firstDayOfWeek
 */
var __weekofYear__ = {
    description: "获取时间所在年份的周次"
};

var __format__ = {
    description: "格式化时间"
};

/**
 * 计算两个数字之间最大的公共除数
 * @param {*} x
 * @param {*} y
 */
var __gcd__ = {
    description: "计算两个数字之间最大的公共除数"
};

var __getCssStyleRules__ = {
    description: "获取样式表规则"
};

var __getCssStyleSheets__ = {
    name: "getCssStyleSheets([sheetName])",
    description: "获取样式表",
    params: [
        {
            name: "sheetName",
            description: "样式表文件名",
            type: "String"
        }
    ]
};

/**
 * 获取地址栏的参数键值
 * @param {String} url 地址
 * @param {String} name 参数
 * @returns {String|JSON}
 */
var __getUrlParams__ = {
    name: "getUrlParams(url[, name])",
    description: "获取地址栏的参数键值",
    params: [
        {
            name: "url",
            description: "地址",
            type: "String"
        },
        {
            name: "name",
            description: "参数名",
            type: "String"
        }
    ]
};

/**
 * @name head
 * @description 数组的前n个元素
 * @param {Array} arr
 */
var __head__ = {
    description: "数组的前n个元素"
};

/**
 * 堆排序
 * @param array
 * @returns
 */
var __heapSort__ = {
    description: "堆排序"
};

/**
 * 按长度截取字符串
 * @param {String} str
 * @param {Number} length
 * @returns
 */
var __splitByLength__ = {
    description: "按长度截取字符串"
};

var __hexToRgb__ = {
    description: "十六机制转化为RGB"
};

/**
 * 日期的小时
 * @param {*} date
 */
var __hour__ = {
    description: "日期的小时"
};

var __iniToJSON__ = {
    description: "ini 转换为 JSON"
};

/**
 * @name insertionSort
 * @desc 插入排序
 * @param {Array} array
 * @return {Array}
 * @date 2019-07-06
 */
var __insertionSort__ = {
    description: "插入排序"
};

/**
 * 检测所有元素符合
 * @param {*} arr
 * @param {*} fn
 */
var __isArrayEvery__ = {
    description: "检测所有元素符合"
};

var __isArrayEveryEqual__ = {
    description: "检测数组内的所有值是否全等"
};

/**
 * @name none
 * @desc 如果提供的谓词函数对集合中的所有元素返回false，则返回true，否则返回false
 * @param {*} arr
 * @param {*} fn
 */
var __isArrayNone__ = {
    description: "如果提供的谓词函数对集合中的所有元素返回false，则返回true，否则返回false"
};

/**
 * @name isSome
 * @desc 如果提供的谓词函数对集合中的至少一个元素返回true，则返回true，否则返回false。
 * @param {*} arr
 * @param {*} fn
 */
var __isArraySome__ = {
    description: "如果提供的谓词函数对集合中的至少一个元素返回true，则返回true，否则返回false。"
};

/**
 * @name isSorted
 * @desc 如果数组按升序排序，则返回1;如果按降序排序，则返回-1;如果未排序，则返回0。
 * @param {*} arr
 */
var __isArraySorted__ = {
    description: "检测数据是否已排序"
};

var __isBoolean__ = {
    description: "检测布尔值"
};

/**
 * 检测页面的底部是否可见, 则返回true, 否则为false
 */
var __isBottomVisible__ = {
    description: "检测页面的底部是否可见"
};

/**
 * @desc 检测浏览器环境
 */
var __isBrowser__ = {
    description: "检测浏览器环境"
};

var __isDate__ = {
    description: "检测日期"
};

/**
 * 检测有效数据
 * @param v
 * @returns
 */
var __isDefined__ = {
    description: "检测有效数据"
};

/**
 * 检测第一个数值参数是否可被另一个数字变量整除
 * @param {*} dividend
 * @param {*} divisor
 */
var __isDivisible__ = {
    description: "检测第一个数值参数是否可被另一个数字变量整除"
};

/**
 * 检测DOM
 * @param {*} el
 */
var __isDOM__ = {
    description: "检测DOM"
};

var __isNull__ = {
    description: "检测Null"
};

var __isUndefined__ = {
    description: "检测Undefined"
};

var __isEmpty__ = {
    description: "检测为空"
};

/**
 * 如果给定的数字为偶数, 则返回true, 否则为false
 * @param {*} num
 */
var __isEven__ = {
    description: "检测是否是偶数"
};

/**
 * 检测 False
 * @param {*} obj
 * @returns {Boolean}
 */
var __isFalse__ = {
    description: "检测 False"
};

var __isFinite__ = {
    description: "检测是否是有限数值"
};

var __isFunction__ = {
    description: "检测函数"
};

/**
 * 检测是否是整数
 * @param v
 * @returns
 */
var __isInteger__ = {
    description: "检测是否是整数"
};

var __isJSONString__ = {
    description: "检测JSON字符串"
};

/**
 * 检测是否为闰年
 * @param {*} year
 */
var __isLeapYear__ = {
    description: "检测是否为闰年"
};

var __isNaN__ = {
    description: "检测NaN"
};

var __isNumber__ = {
    description: "检测数值"
};

var __isObject__ = {
    description: "检测对象"
};

/**
 * @name isOdd
 * @desc 如果给定的数字为奇数, 则返回true, 否则为false
 * @param {*} num
 */
var __isOdd__ = {
    description: "检测是否是奇数",
    references: [
        {
            text: "IsOdd - The Algorithms",
            href: "https://the-algorithms.com/zh_Hans/algorithm/isodd"
        }
    ]
};

/**
 *
 * 检测原始数据类型
 */
var __isPrimitive__ = {
    description: "检测原始数据类型"
};

var __isRegExp__ = {
    description: "检测正则"
};

/**
 * 检测根目录
 */
var __isRoot__ = {
    description: "检测根目录"
};

/**
 * 检测安全数值
 * @param v
 * @returns
 */
var __isSafeInteger__ = {
    description: "检测安全数值"
};

var __isString__ = {
    description: "检测字符串"
};

var __isSymbol__ = {
    description: "检测Symbol"
};

/**
 * 检测True
 * @param {*} obj
 * @returns {Boolean}
 */
var __isTrue__ = {
    description: "检测True"
};

/**
 * 检测指定的元素在视区中是否可见
 * @param {*} el
 * @param {*} partiallyVisible
 */
var __isVisibleinViewport__ = {
    description: "检测指定的元素在视区中是否可见"
};

/**
 * 日期所在月的最后一天
 * @param {*} date
 */
var __lastDayofMonth__ = {
    description: "日期所在月的最后一天"
};

/**
 * 日期前的n天
 * @param {*} date
 * @param {*} n
 */
var __lastNDay__ = {
    description: "日期前的n天"
};

var __leapYears__ = {
    description: "年份间的闰年"
};

/**
 * 最大值
 * @param  {...any} nums
 */
var __max__ = {
    description: "最大值"
};

/**
 * 归并排序
 * @param {Array} array
 * @return {Array}
 * @date 2019-07-06
 * @todo Maximum call stack size exceeded,堆栈溢出
 */
var __mergeSort__ = {
    description: "归并排序"
};

/**
 * 日期的毫秒
 * @param {*} date
 */
var __millisecond__ = {
    description: "日期的毫秒"
};

/**
 * 最小值
 * @param  {...any} nums
 */
var __min__ = {
    description: "最小值"
};

/**
 * 日期的分钟
 * @param {*} date
 */
var __minute__ = {
    description: "日期的分钟"
};

/**
 * 返回手机类型
 * @returns {String}
 */
var __mobileType__ = {
    description: "返回手机类型"
};

/**
 * 日期所在周的周一
 * @param {*} date
 */
var __monday__ = {
    description: "日期所在周的周一"
};

/**
 * 日期的月份
 * @param {*} date
 */
var __month__ = {
    description: "日期的月份"
};

/**
 * 获取指定时间的时间戳
 * @param {*} date
 */
var __timestamp__ = {
    description: "获取指定时间的时间戳"
};

var __nextDays__ = {
    description: "指定日期的N天后"
};

var __nextHours__ = {
    description: "指定日期的N时后"
};

var __nextMinutes__ = {
    description: "指定日期的N分后"
};

/**
 * 指定日期的N月后
 * @param {*} date
 * @param {*} n
 */
var __nextMonths__ = {
    description: "指定日期的N月后"
};

var __nextSeconds__ = {
    description: "指定日期的N秒后"
};

var __nextWeeks__ = {
    description: "指定日期的N周后"
};

/**
 * 指定日期的N年后
 * @param {*} date
 * @param {*} n
 */
var __nextYears__ = {
    description: "指定日期的N年后"
};

var __offset__ = {
    description: "将指定数量的元素移动到数组的末尾。"
};

var __PI__ = {
    description: "圆周率"
};

/**
 * DOM 选择器
 * @param {*} el
 */
var __queryAll__ = {
    description: "DOM 选择器"
};

var __quickSort__ = {
    description: "快速排序"
};

/**
 * 基数排序适用于：
 *  (1)数据范围较小，建议在小于1000
 *  (2)每个数值都要大于等于0
 * @author xiazdong
 * @param  array 待排序数组
 * @param  maxDigit 最大位数
 */
var __radixSort__ = {
    description: "基数排序"
};

/**
 * 随机布尔值
 * @returns {Boolean}
 */
var __randomBoolean__ = {
    description: "随机布尔值"
};

/**
 * 获取随机十六进制颜色
 * @returns
 */
var __randomHex__ = {
    description: "获取随机十六进制颜色"
};

/**
 * 返回指定范围内的随机整数
 * @param {*} min
 * @param {*} max
 */
var __randomInteger__ = {
    description: "返回指定范围内的随机整数"
};

/**
 * 返回指定范围内的随机数
 * @param {*} min
 * @param {*} max
 */
var __randomNumber__ = {
    description: "返回指定范围内的随机数"
};

/**
 * 随机字符串
 * @returns
 */
var __randomString__ = {
    description: "随机字符串"
};

/**
 * 日期的零点
 * @param {*} date
 */
var __startofDay__ = {
    description: "日期的零点"
};

/**
 * 日期所在周的周日
 * @param {*} date
 */
var __sunday__ = {
    description: "日期所在周的周日"
};

/**
 * 日期的年份
 * @param {*} date
 */
var __year__ = {
    description: "日期的年份"
};

var __range__ = {
    description: "根据时间生成其所在的时间区段",
    tags: ["Date"]
};

/**
 * 重定向到指定的 URL
 * @param {*} url
 * @param {*} asLink
 */
var __redirect__ = {
    description: "重定向到指定的 URL",
    tags: []
};

/**
 * 常用正则表达式
 */
var __regs__ = {
    description: "常用正则表达式"
};

/**
 * 返回数组中的所有元素, 除第一个
 * @param {*} arr
 */
var __rest__ = {
    description: "返回数组中的所有元素, 除第一个"
};

var __reverse__ = {
    description: "反转数组，字符串"
};

/**
 * RGB转化为十六机制
 * @param r
 * @param g
 * @param b
 * @returns
 */
var __rgbToHex__ = {
    description: "RGB转化为十六机制"
};

/**
 * 返回当前页的滚动位置
 * @param {*} el
 */
var __scrollPosition__ = {
    description: "返回当前页的滚动位置"
};

/**
 * 滚动至页面顶部
 */
var __scrollToTop__ = {
    description: "滚动至页面顶部"
};

/**
 * 日期的秒数
 * @param {*} date
 */
var __second__ = {
    description: "日期的秒数"
};

/**
 * 选择排序
 * @param {Array} array
 * @return {Array}
 * @date 2019-07-06
 */
var __selectionSort__ = {
    description: "选择排序"
};

/**
 * 希尔排序
 * @param {Array} array
 * @return {Array}
 * @date 2019-07-06
 */
var __shellSort__ = {
    description: "希尔排序"
};

/**
 * json转字符串
 * @param {*} object
 */
var __stringify__ = {
    description: "json转字符串"
};

/**
 * 交换元素位置
 * @param {Array} arr
 * @param {Number} i
 * @param {Number} j
 */
var __swap__ = {
    description: "交换元素位置"
};

/**
 * 千位分隔符
 * @param {*} num
 */
var __thousandsSeparator__ = {
    description: "千位分隔符"
};

/**
 * 节流：高频事件触发，但在 n 秒内只会执行一次，所以节流会稀释函数的执行频率
 * 每次触发事件时都判断当前是否有等待执行的延时函数
 */
var __throttle__ = {
    description: "节流"
};

var __timeline__ = {
    description: "返回起止时间中单位时间的连续时间数组"
};

/**
 * 测量执行函数所用的时间
 * @param {*} fn
 * @param  {...any} args
 */
var __timeTaken__ = {
    description: "测量执行函数所用的时间"
};

/**
 * 明天
 * @param {*} date
 */
var __tomorrow__ = {
    description: "明天"
};

var __unique__ = {
    description: "数组去重"
};

/**
 * 返回当前 URL
 */
var __url__ = {
    description: "返回当前 URL"
};

/**
 * 校验电子邮箱
 * @param {*} str
 */
var __verifyEmail__ = {
    description: "校验电子邮箱"
};

/**
 * 校验字符串格式数字
 * @param {String} string
 * @return {Boolean}
 * @date 2019-07-06
 */
var __verifyNumber__ = {
    description: "校验字符串格式数字"
};

/**
 * 昨天
 * @param {*} date
 */
var __yesterday__ = {
    description: "昨天"
};

exports.__$__ = __$__;
exports.__PI__ = __PI__;
exports.__ajax__ = __ajax__;
exports.__areaofCircle__ = __areaofCircle__;
exports.__arrayConcat__ = __arrayConcat__;
exports.__arrayEvery__ = __arrayEvery__;
exports.__arrayFill__ = __arrayFill__;
exports.__arrayFilter__ = __arrayFilter__;
exports.__arrayFindIndex__ = __arrayFindIndex__;
exports.__arrayFind__ = __arrayFind__;
exports.__arrayForEach__ = __arrayForEach__;
exports.__arrayIncludes__ = __arrayIncludes__;
exports.__arrayIndexOf__ = __arrayIndexOf__;
exports.__arrayJoin__ = __arrayJoin__;
exports.__arrayKeys__ = __arrayKeys__;
exports.__arrayLastIndexOf__ = __arrayLastIndexOf__;
exports.__arrayMap__ = __arrayMap__;
exports.__arrayOf__ = __arrayOf__;
exports.__arrayPop__ = __arrayPop__;
exports.__arrayPush__ = __arrayPush__;
exports.__arrayReduceRight__ = __arrayReduceRight__;
exports.__arrayReduce__ = __arrayReduce__;
exports.__arrayReverse__ = __arrayReverse__;
exports.__arrayShift__ = __arrayShift__;
exports.__arraySlice__ = __arraySlice__;
exports.__arraySome__ = __arraySome__;
exports.__arraySort__ = __arraySort__;
exports.__arraySplice__ = __arraySplice__;
exports.__arrayToTree__ = __arrayToTree__;
exports.__arrayUnshift__ = __arrayUnshift__;
exports.__arrayValues__ = __arrayValues__;
exports.__avg__ = __avg__;
exports.__bubbleSort__ = __bubbleSort__;
exports.__bucketSort__ = __bucketSort__;
exports.__capitalize__ = __capitalize__;
exports.__collatz__ = __collatz__;
exports.__countBy__ = __countBy__;
exports.__count__ = __count__;
exports.__countingSort__ = __countingSort__;
exports.__date__ = __date__;
exports.__day__ = __day__;
exports.__dayofWeek__ = __dayofWeek__;
exports.__debounce__ = __debounce__;
exports.__deepCopyArray__ = __deepCopyArray__;
exports.__digitize__ = __digitize__;
exports.__distance__ = __distance__;
exports.__duplicate__ = __duplicate__;
exports.__endofDay__ = __endofDay__;
exports.__euclideanAlgorithm__ = __euclideanAlgorithm__;
exports.__extend__ = __extend__;
exports.__factorial__ = __factorial__;
exports.__filterFalsy__ = __filterFalsy__;
exports.__firstDayofMonth__ = __firstDayofMonth__;
exports.__flatten__ = __flatten__;
exports.__forEachRightArray__ = __forEachRightArray__;
exports.__forEachRight__ = __forEachRight__;
exports.__forEach__ = __forEach__;
exports.__format__ = __format__;
exports.__gcd__ = __gcd__;
exports.__getCssStyleRules__ = __getCssStyleRules__;
exports.__getCssStyleSheets__ = __getCssStyleSheets__;
exports.__getUrlParams__ = __getUrlParams__;
exports.__head__ = __head__;
exports.__heapSort__ = __heapSort__;
exports.__hexToRgb__ = __hexToRgb__;
exports.__hour__ = __hour__;
exports.__iniToJSON__ = __iniToJSON__;
exports.__insertionSort__ = __insertionSort__;
exports.__isArrayEveryEqual__ = __isArrayEveryEqual__;
exports.__isArrayEvery__ = __isArrayEvery__;
exports.__isArrayNone__ = __isArrayNone__;
exports.__isArraySome__ = __isArraySome__;
exports.__isArraySorted__ = __isArraySorted__;
exports.__isArray__ = __isArray__;
exports.__isBoolean__ = __isBoolean__;
exports.__isBottomVisible__ = __isBottomVisible__;
exports.__isBrowser__ = __isBrowser__;
exports.__isDOM__ = __isDOM__;
exports.__isDate__ = __isDate__;
exports.__isDefined__ = __isDefined__;
exports.__isDivisible__ = __isDivisible__;
exports.__isEmpty__ = __isEmpty__;
exports.__isEven__ = __isEven__;
exports.__isFalse__ = __isFalse__;
exports.__isFinite__ = __isFinite__;
exports.__isFunction__ = __isFunction__;
exports.__isInteger__ = __isInteger__;
exports.__isJSONString__ = __isJSONString__;
exports.__isLeapYear__ = __isLeapYear__;
exports.__isNaN__ = __isNaN__;
exports.__isNull__ = __isNull__;
exports.__isNumber__ = __isNumber__;
exports.__isObject__ = __isObject__;
exports.__isOdd__ = __isOdd__;
exports.__isPrimitive__ = __isPrimitive__;
exports.__isRegExp__ = __isRegExp__;
exports.__isRoot__ = __isRoot__;
exports.__isSafeInteger__ = __isSafeInteger__;
exports.__isString__ = __isString__;
exports.__isSymbol__ = __isSymbol__;
exports.__isTrue__ = __isTrue__;
exports.__isUndefined__ = __isUndefined__;
exports.__isVisibleinViewport__ = __isVisibleinViewport__;
exports.__lastDayofMonth__ = __lastDayofMonth__;
exports.__lastNDay__ = __lastNDay__;
exports.__leapYears__ = __leapYears__;
exports.__max__ = __max__;
exports.__mergeSort__ = __mergeSort__;
exports.__millisecond__ = __millisecond__;
exports.__min__ = __min__;
exports.__minute__ = __minute__;
exports.__mobileType__ = __mobileType__;
exports.__monday__ = __monday__;
exports.__month__ = __month__;
exports.__nextDays__ = __nextDays__;
exports.__nextHours__ = __nextHours__;
exports.__nextMinutes__ = __nextMinutes__;
exports.__nextMonths__ = __nextMonths__;
exports.__nextSeconds__ = __nextSeconds__;
exports.__nextWeeks__ = __nextWeeks__;
exports.__nextYears__ = __nextYears__;
exports.__objectType__ = __objectType__;
exports.__offset__ = __offset__;
exports.__queryAll__ = __queryAll__;
exports.__quickSort__ = __quickSort__;
exports.__radixSort__ = __radixSort__;
exports.__randomBoolean__ = __randomBoolean__;
exports.__randomHex__ = __randomHex__;
exports.__randomInteger__ = __randomInteger__;
exports.__randomNumber__ = __randomNumber__;
exports.__randomString__ = __randomString__;
exports.__range__ = __range__;
exports.__redirect__ = __redirect__;
exports.__regs__ = __regs__;
exports.__rest__ = __rest__;
exports.__reverse__ = __reverse__;
exports.__rgbToHex__ = __rgbToHex__;
exports.__scrollPosition__ = __scrollPosition__;
exports.__scrollToTop__ = __scrollToTop__;
exports.__second__ = __second__;
exports.__selectionSort__ = __selectionSort__;
exports.__selector__ = __selector__;
exports.__shellSort__ = __shellSort__;
exports.__splitByLength__ = __splitByLength__;
exports.__startofDay__ = __startofDay__;
exports.__stringify__ = __stringify__;
exports.__sum__ = __sum__;
exports.__sunday__ = __sunday__;
exports.__swap__ = __swap__;
exports.__thousandsSeparator__ = __thousandsSeparator__;
exports.__throttle__ = __throttle__;
exports.__timeTaken__ = __timeTaken__;
exports.__timeline__ = __timeline__;
exports.__timestamp__ = __timestamp__;
exports.__tomorrow__ = __tomorrow__;
exports.__unique__ = __unique__;
exports.__url__ = __url__;
exports.__verifyEmail__ = __verifyEmail__;
exports.__verifyNumber__ = __verifyNumber__;
exports.__weekofYear__ = __weekofYear__;
exports.__year__ = __year__;
exports.__yesterday__ = __yesterday__;

Object.defineProperty(exports, '__esModule', { value: true });

}));
