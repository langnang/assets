(function (global, factory) {
typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
typeof define === 'function' && define.amd ? define(['exports'], factory) :
(global = typeof globalThis !== 'undefined' ? globalThis : global || self, factory(global.ln = {}));
})(this, (function (exports) { 'use strict';

/**
 * 元素选择器
 * @param {String} el
 */
var selector = function (el) { return document.querySelector(el); };
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

var $ = selector;
__selector__.description = __selector__.description.replace("selector", "$");

/**
 * Ajax的封装
 * @param {Object} option 配置参数
 * @return {Function} 回调函数
 */
var ajax = function (option) {
    /**
     * 配置参数
     * @param {string} option.mode 请求的实现方式：native,promise
     * @param {string} option.url 发送请求的url
     * @param {string} option.method http连接的方式，包括POST和GET两种方式
     * @param {boolean} option.async 是否为异步，true为异步，false为同步
     * @param {object} option.data 发送的参数，格式为对象类型
     * @param {function} option.success ajax成功的回调函数
     * @param {function} option.error ajax失败的回调函数
     */
    var mode = option.mode || "native";
    // 初始化参数
    option.url = option.url || "";
    option.method = option.method || "GET";
    option.async = option.async || true;
    option.data = option.data || {};
    // 整理参数
    var params = [];
    for (var key in option.data) {
        params.push(key + "=" + option.data[key]);
    }
    var postData = params.join("&");
    // 创建XMLHttpRequest对象
    var xmlHttp = null;
    if (XMLHttpRequest) {
        xmlHttp = new XMLHttpRequest();
    }
    else {
        xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    // 发送请求
    if (option.method.toUpperCase() === "POST") {
        xmlHttp.open("POST", option.url, option.async);
        xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;charset=utf-8');
        xmlHttp.send(postData);
    }
    else if (option.method.toUpperCase() === "GET") {
        xmlHttp.open("GET", option.url + '?' + postData, option.async);
        xmlHttp.send(null);
    }
    var map = new Map();
    map.set("native", function (option) {
        // 初始化参数
        option.success = option.success || function (res) { };
        option.error = option.error || function (err) { };
        // 服务器响应
        xmlHttp.onreadystatechange = function () {
            // 请求未初始化 xmlHttp.readyState==0
            // 服务器连接已建立 xmlHttp.readyState==1
            // 请求已连接 xmlHttp.readyState==2
            // 请求处理中 xmlHttp.readyState==3
            // 请求已完成且响应已就绪
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                option.success(xmlHttp.responseText);
            }
            // 未找到页面
            else if (xmlHttp.readyState == 4 && xmlHttp.status == 404) {
                option.error(xmlHttp.responseText);
            }
        };
    });
    map.set("promise", function (option) {
        return new Promise(function (resolve, reject) {
            xmlHttp.onreadystatechange = function () {
                if (xmlHttp.readyState !== 4) {
                    return;
                }
                if (xmlHttp.status === 200) {
                    resolve(xmlHttp.responseText);
                }
                else {
                    reject(new Error(xmlHttp.statusText));
                }
            };
        });
    });
    if (!map.has(mode))
        mode = "native";
    return map.get(mode)(option);
};

/**
 * @name areaOfCircle
 * @desc 返回圆的面积
 * @param {Number} radius
 * @param {Number} pi
 */
var areaofCircle = function (radius, pi) {
    if (pi === void 0) { pi = Math.PI; }
    return radius * radius * pi;
};

/*! *****************************************************************************
Copyright (c) Microsoft Corporation.
Permission to use, copy, modify, and/or distribute this software for any
purpose with or without fee is hereby granted.
THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH
REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY
AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT,
INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM
LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR
OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR
PERFORMANCE OF THIS SOFTWARE.
***************************************************************************** */
var __assign = function() {
    __assign = Object.assign || function __assign(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p)) t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};
function __spreadArray(to, from, pack) {
    if (pack || arguments.length === 2) for (var i = 0, l = from.length, ar; i < l; i++) {
        if (ar || !(i in from)) {
            if (!ar) ar = Array.prototype.slice.call(from, 0, i);
            ar[i] = from[i];
        }
    }
    return to.concat(ar || Array.prototype.slice.call(from));
}

var arrayConcat = function (array) {
    var arrays = [];
    for (var _i = 1; _i < arguments.length; _i++) {
        arrays[_i - 1] = arguments[_i];
    }
    for (var i = 0; i <= arrays.length - 1; i++) {
        array = __spreadArray(__spreadArray([], array, true), arrays[i], true);
    }
    return array;
};

var arrayEvery = function (array, callback, thisArg) {
    var truth = true;
    for (var key in array) {
        truth = callback(array[key], key, array);
        if (!truth) {
            return truth;
        }
    }
    return truth;
};

var arrayFill = function (array, value, start, end) {
    if (start === void 0) { start = 0; }
    if (end === void 0) { end = array.length - 1; }
    for (var i = start; i <= end; i++) {
        array[i] = value;
    }
    return array;
};

var arrayPush = function (array) {
    var values = [];
    for (var _i = 1; _i < arguments.length; _i++) {
        values[_i - 1] = arguments[_i];
    }
    for (var i in values) {
        array[array.length] = values[i];
    }
    return array.length;
};

var arrayFilter = function (array, callback, thisArg) {
    var res = [];
    for (var key in array) {
        if (callback(array[key], key, array)) {
            arrayPush(res, array[key]);
        }
    }
    return res;
};

var arrayFind = function (array, callback, thisArg) {
    for (var key in array) {
        if (callback(array[key], key, array)) {
            return array[key];
        }
    }
    return undefined;
};

var arrayFindIndex = function (array, callback, thisArg) {
    for (var key in array) {
        if (callback(array[key], key, array)) {
            return key;
        }
    }
    return -1;
};

/**
 * Array.prototype.foreach()
 * @param {*} array
 * @param {*} callback
 * @param {*} thisArg
 */
var arrayForEach = function (array, callback, thisArg) {
    for (var key in array) {
        callback(array[key], key, array);
    }
};

var arrayIndexOf = function (array, searchElement, fromIndex) {
    if (fromIndex === void 0) { fromIndex = 0; }
    for (var i = fromIndex; i <= array.length - 1; i++) {
        if (array[i] === searchElement) {
            return i;
        }
    }
    return -1;
};

var arrayIncludes = function (array, valueToFind, fromIndex) {
    if (fromIndex === void 0) { fromIndex = 0; }
    return arrayIndexOf(array, valueToFind, fromIndex) > -1;
};

var arrayJoin = function (array, separator) {
    if (separator === void 0) { separator = ","; }
    var prefix = "[", suffix = "]";
    for (var i = 0; i <= array.length - 1; i++) {
        prefix += array[i];
        if (i < array.length - 1) {
            prefix += separator;
        }
    }
    return prefix + suffix;
};

var arrayKeys = function (array) {
    var res = [];
    for (var key in array) {
        arrayPush(res, key);
    }
    return res;
};

var arrayLastIndexOf = function (array, searchElement, fromIndex) {
    if (fromIndex === void 0) { fromIndex = array.length - 1; }
    for (var i = fromIndex; i >= 0; i--) {
        if (array[i] === searchElement) {
            return i;
        }
    }
    return -1;
};

var arrayMap = function (array, callback, thisArg) {
    var res = [];
    for (var key in array) {
        arrayPush(res, callback(array[key], key, array));
    }
    return res;
};

/**
 * Array.of(...elsments)
 * @param  {...any} elements
 */
var arrayOf = function () {
    var elements = [];
    for (var _i = 0; _i < arguments.length; _i++) {
        elements[_i] = arguments[_i];
    }
    return elements;
};

var arrayPop = function (array) {
    var value = array[array.length - 1];
    array.length = array.length - 1;
    return value;
};

var arrayReduce = function (array, callback, initialValue) {
    if (initialValue === void 0) { initialValue = array[0]; }
    for (var key in array) {
        initialValue = callback(initialValue, array[key], key, array);
    }
    return initialValue;
};

var arrayReduceRight = function (array, callback, initialValue) {
    if (initialValue === void 0) { initialValue = array[0]; }
    for (var i = array.length - 1; i >= 0; i--) {
        initialValue = callback(initialValue, array[i], i, array);
    }
    return initialValue;
};

var arrayReverse = function (array) {
    var _array = [];
    var index = 0;
    var indexOfSource = array.length - 1;
    while (indexOfSource >= 0) {
        _array[index] = array[indexOfSource];
        index++;
        indexOfSource--;
    }
    return _array;
};

var arraySlice = function (array, begin, end) {
    if (begin === void 0) { begin = 0; }
    if (end === void 0) { end = array.length; }
    // 如果提取起始处索引为负数，则表示从原数组中倒数第几个元素开始提起
    if (begin < 0) {
        begin = array.length + begin;
    }
    // 如果 begin 大于原数组的长度，则会返回空数组
    if (begin > array.length - 1) {
        return [];
    }
    // 如果提取终止处索引为负数， 则它表示在原数组中的倒数第几个元素结束抽取。
    if (end < 0) {
        end = array.length + end;
    }
    // 如果 end 大于数组的长度，slice 也会一直提取到原数组末尾。
    if (end > array.length) {
        end = array.length;
    }
    var _arr = [];
    var index = 0;
    while (end - begin > 0) {
        _arr[index] = array[begin];
        index++;
        begin++;
    }
    return _arr;
};

var arrayShift = function (array) {
    var shift = array[0];
    array = arraySlice(array, 1 - array.length);
    return shift;
};

var arraySome = function (array, callback, thisArg) {
    var falsy = false;
    for (var key in array) {
        falsy = callback(array[key], key, array);
        if (falsy) {
            return falsy;
        }
    }
    return falsy;
};

var arraySort = function (array, compareFunction) {
    var _a;
    if (compareFunction === void 0) { compareFunction = function (a, b) { return a - b; }; }
    // in-place 原地算法
    var index = 0;
    while (index < array.length) {
        for (var i = index; i <= array.length - 1; i++) {
            var compare = compareFunction(array[index], array[i]);
            if (compare > 0) {
                _a = [array[i], array[index]], array[index] = _a[0], array[i] = _a[1];
            }
        }
        index++;
    }
    return array;
};

var arraySplice = function (array, start, deleteCount) {
    if (start === void 0) { start = 0; }
    if (deleteCount === void 0) { deleteCount = 0; }
    var items = [];
    for (var _i = 3; _i < arguments.length; _i++) {
        items[_i - 3] = arguments[_i];
    }
    /**
     * array =
     *      [0, start - 1]
     *      + [start, start + deleteCount)
     *      + [start + deleteCount, array.length - 1]
     * return =
     *      [0, start)
     *      + [start, start + items.length - 1)
     *      + [start + deleteCount, array.length - 1]
     */
    var _array = [];
    var index = 0;
    var delArray = [];
    var delIndex = 0;
    for (var i = 0; i <= array.length - 1; i++) {
        // 提取索引小于start的元素
        if (i <= start - 1) {
            _array[index] = array[i];
            index++;
        }
        // 插入元素
        else if (i == start) {
            for (var j = 0; j <= items.length - 1; j++) {
                _array[index] = items[j];
                index++;
            }
            // 当删除的元素数为0时，将索引为start的值插入数组
            if (deleteCount == 0) {
                _array[index] = array[start];
                index++;
            }
            // 当删除的元素数不为0时，将索引为start的值插入删除元素的数组
            else {
                delArray[delIndex] = array[start];
                delIndex++;
            }
        }
        else if (i <= start + deleteCount) {
            delArray[delIndex] = array[i];
            delIndex++;
        }
        // 过滤掉索引介于start与start+deleteCount之间的元素
        // 提取索引大于start+deleteCount的元素
        else if (i > start + deleteCount) {
            _array[index] = array[i];
            index++;
        }
    }
    array = _array;
    return delArray;
};

/**
 * 将数组转换为树状数组
 * @param array {Array}
 * @param key {String}
 * @param options {Object}
 */
var arrayToTree = function (array) {
    var _array = __spreadArray([], array, true);
    return tree(__spreadArray([], array, true), maxDepth(_array))[0].children;
};
/**
 * 最大深度
 * @param array
 */
var maxDepth = function (array) {
    return array.reduce(function (total, value) { return (value.depth > total ? value.depth : total); }, 0);
};
/**
 *
 * @param array 当前数组
 * @param depth 当前深度
 * @param origin 原始数组
 */
var tree = function (origin, depth, array) {
    if (array === void 0) { array = []; }
    // 深度到达最小值时返回
    if (depth == 0) {
        return array;
    }
    // 过滤当前深度下的所有元素
    var result = origin.filter(function (v) { return v.depth == depth; });
    // 根据过滤的元素生成父类，检测原型中是否存在该父类，存在就合并元素
    result = result.reduce(function (total, value) {
        // 查找其父元素所在位置
        var index = total.findIndex(function (item) { return item.name == value.parent; });
        // 判断父元素是否存在?(存在):(不存在)
        if (index == -1) {
            // 父元素不存在
            // 初始化父元素
            var parent_1 = {
                name: value.parent,
                parent: value.parent.substr(0, value.parent.lastIndexOf(">>")),
                depth: value.depth - 1,
                children: []
            };
            // 查找原始数据中的父元素
            var parentOrigin = origin.find(function (item) { return item.name == parent_1.name && item.depth == parent_1.depth; });
            // 如果原始数据中不存在该父元素，将该父元素填充至原始数据中，以便于下一深度的查询/过滤
            if (!parentOrigin) {
                origin.push({
                    name: value.parent,
                    parent: value.parent.substr(0, value.parent.lastIndexOf(">>")),
                    depth: value.depth - 1
                });
            }
            total.push(__assign(__assign({}, parentOrigin), parent_1));
            index = total.length - 1;
        }
        // 查找前一深度生成中的父元素
        var parentPre = array.find(function (item) { return item.name == value.name && item.depth == value.depth; });
        if (parentPre) {
            total[index].children.push(__assign(__assign({}, value), parentPre));
        }
        else {
            total[index].children.push(value);
        }
        return total;
    }, []);
    depth--;
    return tree(origin, depth, result);
};

var arrayUnshift = function (array) {
    var values = [];
    for (var _i = 1; _i < arguments.length; _i++) {
        values[_i - 1] = arguments[_i];
    }
    var _arr = [];
    for (var i = 0; i <= values.length + array.length - 1; i++) {
        if (i >= values.length) {
            _arr[i] = array[i - values.length];
        }
        else {
            _arr[i] = values[i];
        }
    }
    array = _arr;
    return array.length;
};

var arrayValues = function (array) {
    var res = [];
    for (var key in array) {
        arrayPush(res, array[key]);
    }
    return res;
};

/**
 * 求总和
 * @param  {...any} nums
 */
var sum = function () {
    var nums = [];
    for (var _i = 0; _i < arguments.length; _i++) {
        nums[_i] = arguments[_i];
    }
    return nums.reduce(function (acc, val) { return acc + val; }, 0);
};

/**
 * 求平均值
 * @param  {...any} nums
 */
var avg = function () {
    var nums = [];
    for (var _i = 0; _i < arguments.length; _i++) {
        nums[_i] = arguments[_i];
    }
    return sum.apply(void 0, nums) / nums.length;
};

/**
 * 冒泡排序
 */
var bubbleSort = function (array) {
    // 冒泡：将比较数组内的最大值移至末尾
    var bubble = function (array, length) {
        var _a;
        for (var i_1 = 0; i_1 < length - 1; i_1++) {
            // 比较相邻元素，检测是否需要交换位置
            if (array[i_1] > array[i_1 + 1]) {
                // 交换元素位置
                _a = [array[i_1 + 1], array[i_1]], array[i_1] = _a[0], array[i_1 + 1] = _a[1];
            }
        }
    };
    var i = array.length;
    // 由于每次遍历将最大值移至末尾，因此逐渐减少比较长度
    while (i > 0) {
        bubble(array, i);
        i--;
    }
    return array;
};

/**
 * @name bucketSort
 * @desc 桶排序
 */
var bucketSort = function (array) {
    // 声明一个空桶, 将数据压入桶中
    var bucket = new Array(Math.max.apply(Math, array) + 1);
    bucket.fill(0);
    array.forEach(function (one) {
        bucket[one]++;
    });
    // 声明一个新数组, 当做排序后的数组
    var newArr = [];
    bucket.forEach(function (one, index) {
        for (var i = 0; i < one; i++) {
            newArr.push(index);
        }
    });
    return newArr;
};

/**
 * 字符串首字母大写
 * @param {String} str
 * @returns
 */
var capitalize = function (str) { return str.charAt(0).toUpperCase() + str.slice(1); };

/**
 * 应用 Collatz 算法
 * @param {*} n
 */
var collatz = function (n) { return (n % 2 === 0) ? (n / 2) : (3 * n + 1); };

/**
 * 统计数组中值的出现次数
 * @param {*} arr
 * @param {*} value
 */
var count = function (array, val) {
    if (val === void 0) { val = array[0]; }
    return array.reduce(function (a, v) { return (v === val ? a + 1 : a); }, 0);
};

/**
 * 根据给定的函数对数组的元素进行分组，并返回每个组中元素的数量
 * @param {Array} array
 * @param {Function} fn
 */
var countBy = function (array, fn) {
    return array.map(typeof fn === 'function' ? fn : function (val) { return val; }).reduce(function (acc, val) {
        acc["" + val] = (acc["" + val] || 0) + 1;
        return acc;
    }, {});
};

/**
 * @name countingSort
 * @desc 计数排序
 */
var countingSort = function (array) {
    var min = Math.min.apply(Math, array);
    var max = Math.max.apply(Math, array);
    var B = Array();
    var countArray = Array();
    for (var i = 0; i < array.length; i++) {
        countArray[array[i]] = countArray[array[i]] ? countArray[array[i]] + 1 : 1;
    }
    for (var j = min; j < max; j++) {
        countArray[j + 1] = (countArray[j + 1] || 0) + (countArray[j] || 0);
    }
    for (var k = array.length - 1; k >= 0; k--) {
        B[countArray[array[k]] - 1] = array[k];
        countArray[array[k]]--;
    }
    return B;
};

/**
 * 创建 Date 对象
 * @param {*} args
 */
var date = function () {
    var args = [];
    for (var _i = 0; _i < arguments.length; _i++) {
        args[_i] = arguments[_i];
    }
    return new (Date.bind.apply(Date, __spreadArray([void 0], args, false)))();
};

/**
 * 月份中的第几天
 * @param {*} date
 */
var day = function (date) { return date.getDate(); };

/**
 * 星期中的第几天
 * @param {*} date
 */
var dayofWeek = function (date) { return date.getDay(); };

/**
 * 防抖：触发高频事件后n秒内函数只会执行一次，如果n秒内高频事件再次被触发，则重新计算时间
 * 每次触发事件时都取消之前的延时调用方法
 */
var debounce = function (fn) {
    var timeout = null; // 创建一个标记用来存放定时器的返回值
    return function () {
        var _this = this;
        clearTimeout(timeout); // 每当用户输入的时候把前一个 setTimeout clear 掉
        timeout = setTimeout(function () {
            // 然后又创建一个新的 setTimeout, 这样就能保证输入字符后的 interval 间隔内如果还有字符输入的话，就不会执行 fn 函数
            fn.apply(_this, arguments);
        }, 500);
    };
};

/**
 * 深拷贝数组
 * @param {*} array
 * @param {*} mode
 */
var deepCopyArrayBySlice = function (array) { return array.slice(0); };
var deepCopyArray = deepCopyArrayBySlice;

/**
 * 将数字转换为数字数组
 * @param {Number} num
 */
var digitize = function (num) { return __spreadArray([], '' + num, true).map(function (i) { return parseInt(i); }); };

/**
 * 返回两点之间的距离
 */
var distance = function (x0, y0, x1, y1) { return Math.hypot(x1 - x0, y1 - y0); };

/**
 * 取重复值
 * @param {*} arr
 */
var duplicate = function (arr) { return __spreadArray([], new Set(arr.reduce(function (acc, val, index) { return arr.indexOf(val, index + 1) >= 0 ? acc.concat(val) : acc; }, [])), true); };

/**
 * 日期的23:59:59
 * @param {*} date
 */
var endofDay = function (date) { return new Date(new Date(date.toLocaleDateString()).getTime() + 24 * 60 * 60 * 1000 - 1); };

/**
 * 欧几里得算法
 * @param {number} originalA
 * @param {number} originalB
 * @return {number}
 */
var euclideanAlgorithm = function (originalA, originalB) {
    var a = Math.abs(originalA);
    var b = Math.abs(originalB);
    return (b === 0) ? a : euclideanAlgorithm(b, a % b);
};

/**
 * 混合属性到目标对象
 */
var extend = function (to, _from) {
    for (var key in _from) {
        to[key] = _from[key];
    }
    return to;
};

/**
 * 阶乘
 * @param {number} number
 * @return {number}
 */
var factorial = function (number) { return number > 1 ? number * factorial(number - 1) : 1; };

/**
 * 过滤数组中的虚假值
 * @param {Array} array
 */
var filterFalsy = function (array) { return array.filter(Boolean); };

/**
 * 日期所在月的第一天
 * @param {*} date
 */
var firstDayofMonth = function (date) { return new Date(date.getFullYear(), date.getMonth()); };

/**
 * 对象数据类型
 * @param {*} obj
 * @returns {String}
 */
var objectType = function (obj) { return Object.prototype.toString.call(obj).substring(8, Object.prototype.toString.call(obj).length - 1).toLowerCase(); };

/**
 * 检测数组
 * @param {*} obj
 * @returns {Boolean}
 */
var isArray = function (obj) { return objectType(obj) === 'array'; };

/**
 * 将数组展平到指定的深度。
 * @param {Array} arr
 */
var flatten = function (arr, depth) {
    if (depth === void 0) { depth = 1; }
    if (depth >= 1) {
        return arr.reduce(function (a, v) { return a.concat(isArray(v) ? flatten(v, depth - 1) : v); }, []);
    }
    if (depth === 0) {
        return arr;
    }
    if (depth === -1) {
        return arr.reduce(function (a, v) { return a.concat(isArray(v) ? flatten(v, -1) : v); }, []);
    }
};

/**
 * 遍历对象
 * @param {Object} obj
 * @param {Function} callback
 */
var forEach = function (obj, callback) {
    for (var key in obj) {
        callback(obj[key], key);
    }
};

/**
 * 反向遍历
 */
var forEachRight = function (object, callback) {
    var array = [];
    for (var k in object) {
        array.unshift(k);
    }
    for (var k in array) {
        callback(object[array[k]], array[k]);
    }
};

/**
 * @name forEachRight
 * @desc 从数组的最后一个元素开始，为每个数组元素执行一次提供的函数。
 * @param {*} array
 * @param {*} callback
 */
var forEachRightArray = function (array, callback) {
    return array
        .slice(0)
        .reverse()
        .forEach(callback);
};

/**
 * 获取时间所在年份的周次
 * 取当前时间所在年份的第一天的下周的周一，当前日期减去所取时间，再除以86400000毫秒数
 * @param {*} date
 * @param {*} firstDayOfWeek
 */
var weekofYear = function (date) {
    if (date === void 0) { date = new Date(); }
    // 取当前年份的第一天
    var firstDayOfYear = new Date(date.getFullYear(), 0, 1);
    // 取第一天是周几
    var firstDayOfWeekForYear = firstDayOfYear.getDay();
    // 取第二周的周一
    var fridayOfSecondWeek = new Date(date.getFullYear(), 0, 7 + 2 - firstDayOfWeekForYear);
    // （当前日期与第二周周一的毫秒差/一周的毫秒）/7
    var w = Math.ceil(Math.ceil((date.valueOf() - fridayOfSecondWeek.valueOf()) / 86400000) / 7) + 1;
    return w;
};

/**
 * 格式化时间
 * @param {*} date
 * @param {*} fm
 */
var format = function (date, fm) {
    date = new Date(date);
    if (!fm) {
        return date;
    }
    fm = fm.replace("YYYY", date.getFullYear());
    fm = fm.replace("YY", ('' + date.getFullYear()).slice(-2));
    fm = fm.replace("MM", ('0' + (date.getMonth() + 1)).slice(-2));
    fm = fm.replace("M", date.getMonth() + 1);
    fm = fm.replace("WW", ('0' + weekofYear(date)).slice(-2));
    fm = fm.replace("W", weekofYear(date));
    fm = fm.replace("DD", ('0' + date.getDate()).slice(-2));
    fm = fm.replace("D", date.getDate());
    fm = fm.replace("dd", '0' + (date.getDay() == 0 ? 7 : date.getDay()));
    fm = fm.replace("d", date.getDay() == 0 ? 7 : date.getDay());
    fm = fm.replace("HH", ('0' + date.getHours()).slice(-2));
    fm = fm.replace("H", date.getHours());
    fm = fm.replace("hh", date.getHours() < 12 ? ('0' + date.getHours()).slice(-2) : ('0' + (date.getHours() - 12)).slice(-2));
    fm = fm.replace("h", date.getHours() < 11 ? date.getHours() : date.getHours() - 12);
    fm = fm.replace("mm", ('0' + date.getMinutes()).slice(-2));
    fm = fm.replace("m", date.getMinutes());
    fm = fm.replace("ss", ('0' + date.getSeconds()).slice(-2));
    fm = fm.replace("s", date.getSeconds());
    return fm;
};

/**
 * 计算两个数字之间最大的公共除数
 * @param {*} x
 * @param {*} y
 */
var gcd = function (x, y) { return !y ? x : gcd(y, x % y); };

/**
 * 获取样式表规则
 * @param {*} styleSheet 样式表
 * @param {String} selectorText 选择器
 * @param {String} ignore 过滤：伪类，子类
 * @return {Array}
 */
var getCssStyleRules = function (styleSheet, selectorText, ignore) {
    if (styleSheet === void 0) { styleSheet = {}; }
    if (selectorText === void 0) { selectorText = ""; }
    if (ignore === void 0) { ignore = ":| "; }
    return __spreadArray([], styleSheet === null || styleSheet === void 0 ? void 0 : styleSheet.cssRules, true).filter(function (rule) { return new RegExp(selectorText).test(rule.selectorText) && !new RegExp(ignore).test(rule.selectorText); });
};

/**
 * 获取样式表
 * @param {String} sheetName
 * @returns
 */
var getCssStyleSheets = function (sheetName) {
    if (sheetName === void 0) { sheetName = ''; }
    return __spreadArray([], document.styleSheets, true).filter(function (sheet) { return new RegExp(sheetName).test(sheet.href); });
};

/**
 * 获取地址栏的参数键值
 * @param {String} url 地址
 * @param {String} name 参数
 * @returns {String|JSON}
 */
var getUrlParams = function (url, name) {
    var query = url.substring(url.indexOf("?"));
    var vars = query.split("&");
    var params = {};
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        params[pair[0]] = pair[1];
        if (name && pair[0] === name)
            return pair[1];
    }
    return params;
};

/**
 * @name head
 * @description 数组的前n个元素
 * @param {Array} arr
 */
var head = function (array, n, mode) {
    if (n === void 0) { n = 1; }
    if (mode === void 0) { mode = "prototype"; }
    if (n == 1)
        return array[0];
    var _map = new Map();
    _map.set("prototype", function (array, n) { return array.slice(0, n); });
    _map.set("_prototype", function (array, n) { return arraySlice(array, 0, n); });
    _map.set("for", function (array, n) {
        var _head = [];
        for (var i = 0; i <= n - 1; i++) {
            _head[i] = array[i];
        }
        return _head;
    });
    if (!_map.has(mode))
        mode = "prototype";
    return _map.get(mode)(array, n);
};

/**
 * 堆排序
 * @param array
 * @returns
 */
var heapSort = function (array) {
    var _a;
    function maxHeapify(array, index, heapSize) {
        var _a;
        var iMax, iLeft, iRight;
        while (true) {
            iMax = index;
            iLeft = 2 * index + 1;
            iRight = 2 * (index + 1);
            // 如果有左子树,且左子树大于父节点,则将最大指针指向左子树
            if (iLeft < heapSize && array[index] < array[iLeft]) {
                iMax = iLeft;
            }
            // 如果有右子树,且右子树大于父节点,则将最大指针指向右子树
            if (iRight < heapSize && array[iMax] < array[iRight]) {
                iMax = iRight;
            }
            // 如果父节点不是最大值,则将父节点与最大值交换,并且递归调整与父节点交换的位置
            if (iMax != index) {
                _a = [array[index], array[iMax]], array[iMax] = _a[0], array[index] = _a[1];
                index = iMax;
            }
            else {
                break;
            }
        }
    }
    function buildMaxHeap(array) {
        // 从最后一个非叶子节点开始向上构造最大堆
        for (var i_1 = Math.floor(array.length / 2) - 1; i_1 >= 0; i_1--) {
            maxHeapify(array, i_1, array.length);
        }
    }
    buildMaxHeap(array);
    for (var i = array.length - 1; i > 0; i--) {
        // 堆顶元素与最后一项元素交换位置
        _a = [array[i], array[0]], array[0] = _a[0], array[i] = _a[1];
        // 调整新堆
        maxHeapify(array, 0, i);
    }
    return array;
};

/**
 * 按长度截取字符串
 * @param {String} str
 * @param {Number} length
 * @returns
 */
var splitByLength = function (str, length) {
    if (length === void 0) { length = 1; }
    var array = [];
    for (var i = 0; i < str.length; i += length) {
        array.push(str.substr(i, length));
    }
    return array;
};

/**
 * 十六机制转化为RGB
 * @param hex
 * @returns
 */
var hexToRgb = function (hex) { return 'rgb(' + splitByLength(hex.substr(1), 2).map(function (v) { return parseInt(v, 16); }).join(', ') + ')'; };

/**
 * 日期的小时
 * @param {*} date
 */
var hour = function (date) { return date.getHours(); };

/**
 * ini 转换为 JSON
 * @param {String} iniString
 */
var iniToJSON = function (iniString) {
    var nodeArray = iniString.split("[");
    return nodeArray.reduce(function (total, value) {
        var node = getNode(value);
        var key_value = getKeyValue(value);
        if (node == "") {
            return __assign(__assign({}, total), key_value);
        }
        else {
            total[node] = key_value;
            return total;
        }
    }, {});
};
// 节点
var getNode = function (str) {
    var node = str.substring(str.indexOf("["), str.indexOf("]"));
    return node;
};
// 键值对
var getKeyValue = function (str) {
    var array = str.substring(str.indexOf("]") + 1).split(/[\r\n]/g);
    return array.reduce(function (total, value) {
        var spt = value.split("=");
        if (spt.length == 1) {
            return total;
        }
        total[spt[0].replace(/(^\s*)|(\s*$)/g, "")] = spt[1].replace(/(^\s*)|(\s*$)/g, "");
        return total;
    }, {});
};

/**
 * @name insertionSort
 * @desc 插入排序
 * @param {Array} array
 * @return {Array}
 * @date 2019-07-06
 */
var insertionSort = function (array) {
    var insertion = function (array, index) {
        var _a;
        // 从后向前遍历
        for (var i = index - 1; i >= 0; i--) {
            // 如果后一个元素小于前一个元素
            if (array[i] > array[i + 1]) {
                // 交换元素位置
                _a = [array[i + 1], array[i]], array[i] = _a[0], array[i + 1] = _a[1];
            }
            else {
                // 停止循环
                break;
            }
        }
    };
    for (var i = 1; i < array.length; i++) {
        insertion(array, i);
    }
    return array;
};

/**
 * 检测所有元素符合
 * @param {*} arr
 * @param {*} fn
 */
var isArrayEvery = function (array, fn) {
    if (fn === void 0) { fn = Boolean; }
    return array.every(fn);
};

var isArrayEveryEqual = function (array) { return array.every(function (val) { return val === array[0]; }); };

/**
 * @name none
 * @desc 如果提供的谓词函数对集合中的所有元素返回false，则返回true，否则返回false
 * @param {*} arr
 * @param {*} fn
 */
var isArrayNone = function (array, fn) {
    if (fn === void 0) { fn = Boolean; }
    return !array.every(fn);
};

/**
 * @name isSome
 * @desc 如果提供的谓词函数对集合中的至少一个元素返回true，则返回true，否则返回false。
 * @param {*} arr
 * @param {*} fn
 */
var isArraySome = function (array, fn) {
    if (fn === void 0) { fn = Boolean; }
    return array.some(fn);
};

/**
 * @name isSorted
 * @desc 如果数组按升序排序，则返回1;如果按降序排序，则返回-1;如果未排序，则返回0。
 * @param {*} arr
 */
// module.exports = arr => arr.reduce((acc, val) => acc > val, arr[0])
var isArraySorted = function (arr) {
    var direction = -(arr[0] - arr[1]);
    for (var _i = 0, _a = arr.entries(); _i < _a.length; _i++) {
        var _b = _a[_i], i = _b[0], val = _b[1];
        direction = !direction ? -(arr[i - 1] - arr[i]) : direction;
        if (i === arr.length - 1)
            return !direction ? 0 : direction;
        else if ((val - arr[i + 1]) * direction > 0)
            return 0;
    }
};

/**
 * 检测布尔值
 * @param {*} obj
 * @returns {Boolean}
 */
var isBoolean = function (obj) { return objectType(obj) === 'boolean'; };

/**
 * 检测页面的底部是否可见, 则返回true, 否则为false
 */
var isBottomVisible = function () {
    return document.documentElement.clientHeight + window.scrollY >= document.documentElement.scrollHeight || document.documentElement.clientHeight;
};

/**
 * @desc 检测浏览器环境
 */
var isBrowser = function () { return ![typeof window, typeof document].includes('undefined'); };

/**
 * 检测日期
 * @param {*} obj
 * @returns {Boolean}
 */
var isDate = function (obj) { return objectType(obj) === 'date'; };

/**
 * 检测有效数据
 * @param v
 * @returns
 */
var isDefined = function (v) { return v !== undefined && v !== null; };

/**
 * 检测第一个数值参数是否可被另一个数字变量整除
 * @param {*} dividend
 * @param {*} divisor
 */
var isDivisible = function (dividend, divisor) { return dividend % divisor === 0; };

/**
 * 检测DOM
 * @param {*} el
 */
var isDOM = function (obj) {
    return objectType(HTMLElement) === "object"
        ? obj instanceof HTMLElement
        : obj &&
            objectType(obj) === "object" &&
            obj.nodetypeOf === 1 &&
            objectType(obj.nodeName) === "string";
};

/**
 * 检测Null
 * @param {*} obj
 * @return {Boolean}
 */
var isNull = function (obj) { return objectType(obj) === 'null'; };

/**
 * 检测Undefined
 * @param {*} obj
 * @return {Boolean}
 */
var isUndefined = function (obj) { return objectType(obj) === 'undefined'; };

/**
 * 检测为空
 * @param {*} object
 */
var isEmpty = function (object) { return isNull(object) || isUndefined(object); };

/**
 * 如果给定的数字为偶数, 则返回true, 否则为false
 * @param {*} num
 */
var isEven = function (num) { return num % 2 === 0; };

/**
 * 检测 False
 * @param {*} obj
 * @returns {Boolean}
 */
var isFalse = function (obj) { return obj === false; };

var isFinite$1 = function (v) { return Number.isFinite(v); };

/**
 * 检测函数
 * @param {*} obj
 * @returns {Boolean}
 */
var isFunction = function (obj) { return objectType(obj) === 'function'; };

/**
 * 检测是否是整数
 * @param v
 * @returns
 */
var isInteger = function (v) { return Number.isInteger(v); };

/**
 * 检测JSON字符串
 * @param {String} str
 */
var isJSONString = function (jsonString) {
    try {
        if (objectType(JSON.parse(jsonString)) == "object") {
            return true;
        }
    }
    catch (e) {
    }
    return false;
};

/**
 * 检测是否为闰年
 * @param {*} year
 */
var isLeapYear = function (year) { return !(year % (year % 100 ? 4 : 400)); };

var isNaN$1 = function (v) { return Number.isNaN(v); };

/**
 * 检测数值
 * @param {*} obj
 * @returns {Boolean}
 */
var isNumber = function (obj) { return objectType(obj) === 'number'; };

/**
 * 检测对象
 * @param {*} obj
 * @returns {Boolean}
 */
var isObject = function (obj) { return objectType(obj) === 'object'; };

/**
 * @name isOdd
 * @desc 如果给定的数字为奇数, 则返回true, 否则为false
 * @param {*} num
 */
var isOdd = function (num) { return num % 2 === 1; };

/**
 *
 * 检测原始数据类型
 */
var isPrimitive = function (object) {
    return typeof object === 'string' ||
        typeof object === 'number' ||
        typeof object === 'symbol' ||
        typeof object === 'boolean';
};

/**
 * 检测正则
 * @param {*} object
 */
var isRegExp = function (obj) { return objectType(obj) === 'regexp'; };

/**
 * 检测根目录
 */
var isRoot = function (el) { return el === document.body || el === document.documentElement; };

/**
 * 检测安全数值
 * @param v
 * @returns
 */
var isSafeInteger = function (v) { return Number.isSafeInteger(v); };

/**
 * 检测字符串
 * @param {*} obj
 * @returns {Boolean}
 */
var isString = function (obj) { return objectType(obj) === 'string'; };

/**
 * 检测Symbol
 * @param {*} object
 * @return {Boolean}
 */
var isSymbol = function (obj) { return objectType(obj) === 'symbol'; };

/**
 * 检测True
 * @param {*} obj
 * @returns {Boolean}
 */
var isTrue = function (obj) { return obj === true; };

/**
 * 检测指定的元素在视区中是否可见
 * @param {*} el
 * @param {*} partiallyVisible
 */
var isVisibleinViewport = function (el, partiallyVisible) {
    if (partiallyVisible === void 0) { partiallyVisible = false; }
    var _a = el.getBoundingClientRect(), top = _a.top, left = _a.left, bottom = _a.bottom, right = _a.right;
    return partiallyVisible ?
        ((top > 0 && top < innerHeight) || (bottom > 0 && bottom < innerHeight)) &&
            ((left > 0 && left < innerWidth) || (right > 0 && right < innerWidth)) :
        top >= 0 && left >= 0 && bottom <= innerHeight && right <= innerWidth;
};

/**
 * 日期所在月的最后一天
 * @param {*} date
 */
var lastDayofMonth = function (date) { return new Date(new Date(date.getFullYear(), date.getMonth() + 1) - 1); };

/**
 * 日期前的n天
 * @param {*} date
 * @param {*} n
 */
var lastNDay = function (date, n) {
    if (n === void 0) { n = 1; }
    return new Date(date.getTime() - n * 24 * 60 * 60 * 1000);
};

/**
 * 年份间的闰年
 * @param {Number} start
 * @param {Number} end
 */
var leapYears = function (start, end) {
    if (start > end) {
        return [];
    }
    var array = [];
    for (var i = start; i <= end; i++) {
        if (isLeapYear(i)) {
            array.push(i);
        }
    }
    return array;
};

/**
 * 最大值
 * @param  {...any} nums
 */
var max = function () {
    var nums = [];
    for (var _i = 0; _i < arguments.length; _i++) {
        nums[_i] = arguments[_i];
    }
    return nums.slice(function (acc, val) { return (acc > val ? acc : val); }, 0);
};

/**
 * 归并排序
 * @param {Array} array
 * @return {Array}
 * @date 2019-07-06
 * @todo Maximum call stack size exceeded,堆栈溢出
 */
var mergeSort = function (array) {
    if (array.length < 2)
        return array;
    var merge = function (left, right) {
        var result = [];
        while (left.length > 0 && right.length > 0) {
            if (left[0] <= right[0]) {
                result.push(left.shift());
            }
            else {
                result.push(right.shift());
            }
        }
        while (left.length > 0) {
            result.push(left.shift());
        }
        while (right.length > 0) {
            result.push(right.shift());
        }
        return result;
    };
    return merge(mergeSort(array.slice(0, Math.floor(array.length / 2))), mergeSort(array.slice(Math.floor(array.length / 2))));
};

/**
 * 日期的毫秒
 * @param {*} date
 */
var millisecond = function (date) { return date.getMilliseconds(); };

/**
 * 最小值
 * @param  {...any} nums
 */
var min = function () {
    var nums = [];
    for (var _i = 0; _i < arguments.length; _i++) {
        nums[_i] = arguments[_i];
    }
    return nums.slice(function (acc, val) { return (acc < val ? acc : val); }, 0);
};

/**
 * 日期的分钟
 * @param {*} date
 */
var minute = function (date) { return date.getMinutes(); };

/**
 * 返回手机类型
 * @returns {String}
 */
var mobileType = function () {
    var u = navigator.userAgent;
    var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; // g
    var isIOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); // ios终端
    if (isAndroid) {
        return 'Android';
    }
    if (isIOS) {
        return 'IOS';
    }
    return 'No Mobile';
};

/**
 * 日期所在周的周一
 * @param {*} date
 */
var monday = function (date) { return new Date(date - (date.getDay() - 1) * 86400000); };

/**
 * 日期的月份
 * @param {*} date
 */
var month = function (date) { return date.getMonth(); };

/**
 * 获取指定时间的时间戳
 * @param {*} date
 */
var timestamp = function (date) { return new Date(date).getTime(); };

/**
 * 指定日期的N天后
 * @param {*} date
 * @param {*} n
 */
var nextDays = function (date, n) {
    if (n === void 0) { n = 1; }
    return new Date(timestamp(date) + n * 24 * 60 * 60 * 1000);
};

/**
 * 指定日期的N时后
 * @param {*} date
 * @param {*} n
 */
var nextHours = function (date, n) {
    if (n === void 0) { n = 1; }
    return new Date(timestamp(date) + n * 60 * 60 * 1000);
};

/**
 * 指定日期的N分后
 * @param {*} date
 * @param {*} n
 */
var nextMinutes = function (date, n) {
    if (n === void 0) { n = 1; }
    return new Date(timestamp(date) + n * 60 * 1000);
};

/**
 * 指定日期的N月后
 * @param {*} date
 * @param {*} n
 */
var nextMonths = function (date, n) {
    if (date === void 0) { date = new Date(); }
    if (n === void 0) { n = 1; }
    date = new Date(date);
    var year = date.getFullYear();
    var month = date.getMonth();
    month += n;
    if (month > 11) {
        year += parseInt(month / 12);
        date.setFullYear(year);
        month = month % 12;
    }
    date.setMonth(month);
    return date;
};

/**
 * 指定日期的N秒后
 * @param {*} date
 * @param {*} n
 */
var nextSeconds = function (date, n) {
    if (n === void 0) { n = 1; }
    return new Date(timestamp(date) + n * 1000);
};

/**
 * 指定日期的N周后
 * @param {*} date
 * @param {*} n
 */
var nextWeeks = function (date, n) {
    if (n === void 0) { n = 1; }
    return new Date(timestamp(date) + n * 7 * 24 * 60 * 60 * 1000);
};

/**
 * 指定日期的N年后
 * @param {*} date
 * @param {*} n
 */
var nextYears = function (date, n) {
    if (n === void 0) { n = 1; }
    date = new Date(date);
    var year = date.getFullYear();
    year += n;
    date.setFullYear(year);
    return date;
};

/**
 * 将指定数量的元素移动到数组的末尾。
 * @param {*} arr
 * @param {*} offset
 */
var offset = function (array, offset) { return __spreadArray(__spreadArray([], array.slice(offset), true), array.slice(0, offset), true); };

var PI = function (mode) {
    if (mode === void 0) { mode = "api"; }
    var map = new Map();
    map.set("api", function () { return Math.PI; });
    if (!map.has(mode))
        mode = "api";
    return map.get(mode)();
};

/**
 * DOM 选择器
 * @param {*} el
 */
var queryAll = function (el) { return document.querySelectorAll(el); };

/**
 * 快速排序
 * @param {Array} arr
 * @returns {Array}
 */
var quickSort = function (arr) {
    var _a;
    // 引用传递
    var _arr = arr.slice(0);
    // 内存溢出
    if (_arr.length <= 1)
        return _arr;
    // 初始化基值，左侧（小于基值）数组，右侧（大于基值）数组
    var _b = [
        _arr.splice(Math.floor(_arr.length / 2), 1)[0],
        [],
        []
    ], pivot = _b[0], left = _b[1], right = _b[2];
    // 遍历比较每个元素值与基值，分类push至左右数组
    for (var i = 0; i < _arr.length; i++) {
        _arr[i] <= pivot ? left.push(_arr[i]) : right.push(_arr[i]);
    }
    // 递归
    return (_a = quickSort(left)).concat.apply(_a, __spreadArray([pivot], quickSort(right), false));
};

/**
 * 基数排序适用于：
 *  (1)数据范围较小，建议在小于1000
 *  (2)每个数值都要大于等于0
 * @author xiazdong
 * @param  array 待排序数组
 * @param  maxDigit 最大位数
 */
var radixSort = function (array) {
    var maxDigit = function (num, digit) {
        if (digit === void 0) { digit = 1; }
        if (num <= -10 || num >= 10) {
            digit = maxDigit(num / 10, ++digit);
        }
        return digit;
    };
    var digit = maxDigit(Math.max.apply(Math, array));
    var mod = 10;
    var dev = 1;
    var counter = [];
    for (var i = 0; i < digit; i++, dev *= 10, mod *= 10) {
        for (var j = 0; j < array.length; j++) {
            var bucket = parseInt((array[j] % mod) / dev);
            if (counter[bucket] == null) {
                counter[bucket] = [];
            }
            counter[bucket].push(array[j]);
        }
        var pos = 0;
        for (var j = 0; j < counter.length; j++) {
            var value = null;
            if (counter[j] != null) {
                while ((value = counter[j].shift()) != null) {
                    array[pos++] = value;
                }
            }
        }
    }
    return array;
};

/**
 * 随机布尔值
 * @returns {Boolean}
 */
var randomBoolean = function () { return Math.random() >= 0.5; };

/**
 * 获取随机十六进制颜色
 * @returns
 */
var randomHex = function () { return "#" + Math.floor(Math.random() * 0xffffff).toString(16).padEnd(6, "0"); };

/**
 * 返回指定范围内的随机整数
 * @param {*} min
 * @param {*} max
 */
var randomInteger = function (min, max) {
    if (max === void 0) { max = min + 1; }
    return Math.floor(Math.random() * (max - min + 1)) + min;
};

/**
 * 返回指定范围内的随机数
 * @param {*} min
 * @param {*} max
 */
var randomNumber = function (min, max) {
    if (max === void 0) { max = min + 1; }
    return Math.random() * (max - min) + min;
};

/**
 * 随机字符串
 * @returns
 */
var randomString = function () { return Math.random().toString(36).slice(2); };

/**
 * 日期的零点
 * @param {*} date
 */
var startofDay = function (date) { return new Date(date.toLocaleDateString()); };

/**
 * 日期所在周的周日
 * @param {*} date
 */
var sunday = function (date) { return new Date(date - (date.getDay() - 7) * 86400000); };

/**
 * 日期的年份
 * @param {*} date
 */
var year = function (date) { return date.getFullYear(); };

/**
 * 根据时间生成其所在的时间区段
 * @param {Data} date
 * @param {String} type
 */
var range = function (date, type, options) {
    // TODO type:year,month,week,day,hour,minute
    // TODO opts.start: if(type===year){(0,11)}
    // TODO opts.end:if(type==year){(0,11)}
    if (type === "year") {
        return [
            new Date(year(date), 0),
            new Date(new Date(year(date) + 1, 0).getTime() - 1),
        ];
    }
    if (type === "month")
        return [firstDayofMonth(date), lastDayofMonth(date)];
    if (type === "week")
        return [startofDay(monday(date)), endofDay(sunday(date))];
    if (type === "day")
        return [startofDay(date), endofDay(date)];
    return [];
};

/**
 * 重定向到指定的 URL
 * @param {*} url
 * @param {*} asLink
 */
var redirect = function (url, asLink) {
    if (asLink === void 0) { asLink = true; }
    return asLink ? window.location.href = url : window.location.replace(url);
};

/**
 * 常用正则表达式
 */
var regs = function () {
    return {
        // 密码强度正则，最少6位，包括至少1个大写字母，1个小写字母，1个数字，1个特殊字符
        passwordStrength: /^.*(?=.{6,})(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*? ]).*$/,
        // 正整数
        positiveInteger: /^\d+$/,
        // 负浮点数
        negativeFloate: /^\d*\.?\d+$/,
        // 正数
        positiveNumber: /^\d*\.?\d+$/,
        // 数字
        number: /^-?\d*\.?\d+$/,
        // 通用日期
        generalDate: /^\d{4}-\d{1,2}-\d{1,2}$/,
        // 基本Email正则
        Email: /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/,
        // 手机号码
        phoneNumber: /^((13[0-9])|(14[5|7])|(15([0-3]|[5-9]))|(18[0,5-9]))\d{8}$/,
        // 身份证号（15位）
        idNumber_15: /^[1-9]\\d{7}((0\\d)|(1[0-2]))(([0|1|2]\\d)|3[0-1])\\d{3}$/,
        // 身份证号（18位）
        idNumber_18: /^[1-9]\d{5}(18|19|([23]\d))\d{2}((0[1-9])|(10|11|12))(([0-2][1-9])|10|20|30|31)\d{3}[0-9Xx]$/,
        // URL正则
        URL: /^((https?|ftp|file):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/,
        // IPv4地址正则
        IPv4: /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/,
        // IPv6地址正则
        IPv6: /(([0-9a-fA-F]{1,4}:){7,7}[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,7}:|([0-9a-fA-F]{1,4}:){1,6}:[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,5}(:[0-9a-fA-F]{1,4}){1,2}|([0-9a-fA-F]{1,4}:){1,4}(:[0-9a-fA-F]{1,4}){1,3}|([0-9a-fA-F]{1,4}:){1,3}(:[0-9a-fA-F]{1,4}){1,4}|([0-9a-fA-F]{1,4}:){1,2}(:[0-9a-fA-F]{1,4}){1,5}|[0-9a-fA-F]{1,4}:((:[0-9a-fA-F]{1,4}){1,6})|:((:[0-9a-fA-F]{1,4}){1,7}|:)|fe80:(:[0-9a-fA-F]{0,4}){0,4}%[0-9a-zA-Z]{1,}|::(ffff(:0{1,4}){0,1}:){0,1}((25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])\.){3,3}(25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])|([0-9a-fA-F]{1,4}:){1,4}:((25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])\.){3,3}(25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9]))/,
        "十六进制颜色/RGB Hex颜色": /^#?([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/,
        // QQ号正则，5至11位
        QQ: /^[1-9][0-9]{4,10}$/,
        // 微信号正则，6至20位，以字母开头，字母，数字，减号，下划线
        WeChat: /^[a-zA-Z]([-_a-zA-Z0-9]{5,19})+$/,
        "车牌号": /^[京津沪渝冀豫云辽黑湘皖鲁新苏浙赣鄂桂甘晋蒙陕吉闽贵粤青藏川宁琼使领A-Z]{1}[A-Z]{1}[A-Z0-9]{4}[A-Z0-9挂学警港澳]{1}$/,
        "包含中文": /[\u4E00-\u9FA5]/,
        // 中国邮政编码为6位数字
        "中国邮编": /^[1-9]\d{5}(?!\d)$/,
        // 空白行
        blankLine: /\n\s*\r/,
        // 迅雷链接
        Thunder: /^thunder:\/\/[a-zA-Z0-9]+=$/,
        // ed2k链接(宽松匹配)
        ed2k: /^ed2k:\/\/|file|.+|\/$/,
        // 磁力链接(宽松匹配)
        magnet: /^magnet:\?xt=urn:btih:[0-9a-fA-F]{40,}.*$/,
        // 子网掩码
        subnetMask: /^(?:\d{1,2}|1\d\d|2[0-4]\d|25[0-5])(?:\.(?:\d{1,2}|1\d\d|2[0-4]\d|25[0-5])){3}$/
    };
};

/**
 * 返回数组中的所有元素, 除第一个
 * @param {*} arr
 */
var rest = function (array, n, mode) {
    if (n === void 0) { n = 1; }
    if (mode === void 0) { mode = "prototype"; }
    if (n == 1)
        return array[array.length - 1];
    var _map = new Map();
    _map.set("prototype", function (array, n) { return array.slice(array.length - n); });
    _map.set("_prototype", function (array, n) { return arraySlice(array, array.length - n); });
    if (!_map.has(mode))
        mode = "prototype";
    return _map.get(mode)(array, n);
};

/**
 * 反转数组
 * @param {Array,String} array
 */
var reverse = function (obj) { return isArray(obj) ? obj.reverse() : obj.split('').reverse().join(''); };

/**
 * RGB转化为十六机制
 * @param r
 * @param g
 * @param b
 * @returns
 */
var rgbToHex = function (r, g, b) { return "#" + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1); };

/**
 * 返回当前页的滚动位置
 * @param {*} el
 */
var scrollPosition = function (el) {
    if (el === void 0) { el = window; }
    return ({
        x: (el.pageXOffset !== undefined) ? el.pageXOffset : el.scrollLeft,
        y: (el.pageYOffset !== undefined) ? el.pageYOffset : el.scrollTop
    });
};

/**
 * 滚动至页面顶部
 */
var scrollToTop = function () {
    var c = document.documentElement.scrollTop || document.body.scrollTop;
    if (c > 0) {
        window.requestAnimationFrame(scrollToTop);
        window.scrollTo(0, c - c / 8);
    }
};

/**
 * 日期的秒数
 * @param {*} date
 */
var second = function (date) { return date.getSeconds(); };

/**
 * 选择排序
 * @param {Array} array
 * @return {Array}
 * @date 2019-07-06
 */
var selectionSort = function (array) {
    // 选择:将未排序部分中最小值移至已排序部分末尾
    var selection = function (array, start) {
        var _a;
        // 取未排序首个元素位置
        var minIndex = start;
        // 遍历未排序部分
        for (var i = start + 1; i < array.length; i++) {
            // 寻找最小的数
            if (array[minIndex] > array[i]) {
                //将最小数的索引保存
                minIndex = i;
            }
        }
        // 交换元素位置
        _a = [array[minIndex], array[start]], array[start] = _a[0], array[minIndex] = _a[1];
    };
    for (var i = 0; i < array.length - 1; i++) {
        selection(array, i);
    }
    return array;
};

/**
 * 希尔排序
 * @param {Array} array
 * @return {Array}
 * @date 2019-07-06
 */
var shellSort = function (array) {
    var shell = function (array, gap) {
        var _a;
        // 插入排序默认第一个元素为已排序,因此跳过gap长度
        for (var i = gap; i < array.length; i++) {
            // 从后向前插入排序
            for (var j = i - gap; j >= 0; j -= gap) {
                // 检测是否需要交换位置
                if (array[j] > array[j + gap]) {
                    _a = [array[j + gap], array[j]], array[j] = _a[0], array[j + gap] = _a[1];
                }
                else {
                    // 停止循环
                    break;
                }
            }
        }
    };
    for (var gap = array.length / 2; gap > 0; gap = Math.floor(gap / 2)) {
        shell(array, gap);
    }
    return array;
};

/**
 * json转字符串
 * @param {*} object
 */
var stringify = function (obj) { return JSON.stringify(obj); };

/**
 * 交换元素位置
 * @param {Array} arr
 * @param {Number} i
 * @param {Number} j
 */
var swap = function (a, b) {
    var _a;
    return _a = [b, a], a = _a[0], b = _a[1], _a;
};

/**
 * 千位分隔符
 * @param {*} num
 */
var thousandsSeparator = function (num) { return num.toLocaleString("en"); };

/**
 * 节流：高频事件触发，但在 n 秒内只会执行一次，所以节流会稀释函数的执行频率
 * 每次触发事件时都判断当前是否有等待执行的延时函数
 */
var throttle = function (fn) {
    var canRun = true; // 通过闭包保存一个标记
    return function () {
        var _this = this;
        if (!canRun)
            return; // 在函数开头判断标记是否为true，不为true则return
        canRun = false; // 立即设置为false
        setTimeout(function () {
            // 将外部传入的函数的执行放在setTimeout中
            fn.apply(_this, arguments);
            // 最后在setTimeout执行完毕后再把标记设置为true(关键)表示可以执行下一次循环了。当定时器没有执行的时候标记永远是false，在开头被return掉
            canRun = true;
        }, 500);
    };
};

/**
 * 返回起止时间中单位时间的连续时间数组
 * @param {Date} start
 * @param {Date} end
 * @param {String} unit
 * @param {String} fm
 */
var timeline = function (start, end, unit, fm) {
    if (end === void 0) { end = new Date(); }
    if (unit === void 0) { unit = "day"; }
    if (fm === void 0) { fm = "YYYY-MM-DD HH:mm:ss"; }
    // 检测起止时间格式
    if (!isDate(start) || !isDate(end)) {
        throw new Error("Incorrect starting and ending datetime format!");
    }
    // 起始时间必须小于截止时间
    var result = [];
    if (start > end)
        return result;
    // 单位时间
    var unitMap = {
        year: nextYears,
        month: nextMonths,
        week: nextWeeks,
        day: nextDays,
        halfDay: function (time) { return nextHours(time, 12); },
        hour: nextHours,
        minute: nextMinutes,
        second: nextSeconds
    };
    while (end >= start) {
        result.push(format(start, fm));
        start = timestamp(unitMap[unit](start));
    }
    return result;
};

/**
 * 测量执行函数所用的时间
 * @param {*} fn
 * @param  {...any} args
 */
var timeTaken = function (fn) {
    var args = [];
    for (var _i = 1; _i < arguments.length; _i++) {
        args[_i - 1] = arguments[_i];
    }
    console.time('timeTaken');
    var result = fn.apply(void 0, args);
    console.timeEnd('timeTaken');
    return result;
};

/**
 * 明天
 * @param {*} date
 */
var tomorrow = function (date) { return new Date(date.getTime() + 24 * 60 * 60 * 1000); };

/**
 * 数组去重
 * @param {Array} arr
 */
var unique = function (arr) { return __spreadArray([], new Set(arr), true); };

/**
 * 返回当前 URL
 */
var url = function () { return window.location.href; };

/**
 * 校验电子邮箱
 * @param {*} str
 */
var verifyEmail = function (string) {
    return string
        ? /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(string)
        : /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
};

/**
 * 校验字符串格式数字
 * @param {String} string
 * @return {Boolean}
 * @date 2019-07-06
 */
var verifyNumber = function (num) {
    return !isNaN(parseFloat(num)) && isFinite(num) && Number(num) == num;
};

/**
 * 昨天
 * @param {*} date
 */
var yesterday = function (date) { return new Date(date.getTime() - 24 * 60 * 60 * 1000); };

exports.$ = $;
exports.PI = PI;
exports.ajax = ajax;
exports.areaofCircle = areaofCircle;
exports.arrayConcat = arrayConcat;
exports.arrayEvery = arrayEvery;
exports.arrayFill = arrayFill;
exports.arrayFilter = arrayFilter;
exports.arrayFind = arrayFind;
exports.arrayFindIndex = arrayFindIndex;
exports.arrayForEach = arrayForEach;
exports.arrayIncludes = arrayIncludes;
exports.arrayIndexOf = arrayIndexOf;
exports.arrayJoin = arrayJoin;
exports.arrayKeys = arrayKeys;
exports.arrayLastIndexOf = arrayLastIndexOf;
exports.arrayMap = arrayMap;
exports.arrayOf = arrayOf;
exports.arrayPop = arrayPop;
exports.arrayPush = arrayPush;
exports.arrayReduce = arrayReduce;
exports.arrayReduceRight = arrayReduceRight;
exports.arrayReverse = arrayReverse;
exports.arrayShift = arrayShift;
exports.arraySlice = arraySlice;
exports.arraySome = arraySome;
exports.arraySort = arraySort;
exports.arraySplice = arraySplice;
exports.arrayToTree = arrayToTree;
exports.arrayUnshift = arrayUnshift;
exports.arrayValues = arrayValues;
exports.avg = avg;
exports.bubbleSort = bubbleSort;
exports.bucketSort = bucketSort;
exports.capitalize = capitalize;
exports.collatz = collatz;
exports.count = count;
exports.countBy = countBy;
exports.countingSort = countingSort;
exports.date = date;
exports.day = day;
exports.dayofWeek = dayofWeek;
exports.debounce = debounce;
exports.deepCopyArray = deepCopyArray;
exports.digitize = digitize;
exports.distance = distance;
exports.duplicate = duplicate;
exports.endofDay = endofDay;
exports.euclideanAlgorithm = euclideanAlgorithm;
exports.extend = extend;
exports.factorial = factorial;
exports.filterFalsy = filterFalsy;
exports.firstDayofMonth = firstDayofMonth;
exports.flatten = flatten;
exports.forEach = forEach;
exports.forEachRight = forEachRight;
exports.forEachRightArray = forEachRightArray;
exports.format = format;
exports.gcd = gcd;
exports.getCssStyleRules = getCssStyleRules;
exports.getCssStyleSheets = getCssStyleSheets;
exports.getUrlParams = getUrlParams;
exports.head = head;
exports.heapSort = heapSort;
exports.hexToRgb = hexToRgb;
exports.hour = hour;
exports.iniToJSON = iniToJSON;
exports.insertionSort = insertionSort;
exports.isArray = isArray;
exports.isArrayEvery = isArrayEvery;
exports.isArrayEveryEqual = isArrayEveryEqual;
exports.isArrayNone = isArrayNone;
exports.isArraySome = isArraySome;
exports.isArraySorted = isArraySorted;
exports.isBoolean = isBoolean;
exports.isBottomVisible = isBottomVisible;
exports.isBrowser = isBrowser;
exports.isDOM = isDOM;
exports.isDate = isDate;
exports.isDefined = isDefined;
exports.isDivisible = isDivisible;
exports.isEmpty = isEmpty;
exports.isEven = isEven;
exports.isFalse = isFalse;
exports.isFinite = isFinite$1;
exports.isFunction = isFunction;
exports.isInteger = isInteger;
exports.isJSONString = isJSONString;
exports.isLeapYear = isLeapYear;
exports.isNaN = isNaN$1;
exports.isNull = isNull;
exports.isNumber = isNumber;
exports.isObject = isObject;
exports.isOdd = isOdd;
exports.isPrimitive = isPrimitive;
exports.isRegExp = isRegExp;
exports.isRoot = isRoot;
exports.isSafeInteger = isSafeInteger;
exports.isString = isString;
exports.isSymbol = isSymbol;
exports.isTrue = isTrue;
exports.isUndefined = isUndefined;
exports.isVisibleinViewport = isVisibleinViewport;
exports.lastDayofMonth = lastDayofMonth;
exports.lastNDay = lastNDay;
exports.leapYears = leapYears;
exports.max = max;
exports.mergeSort = mergeSort;
exports.millisecond = millisecond;
exports.min = min;
exports.minute = minute;
exports.mobileType = mobileType;
exports.monday = monday;
exports.month = month;
exports.nextDays = nextDays;
exports.nextHours = nextHours;
exports.nextMinutes = nextMinutes;
exports.nextMonths = nextMonths;
exports.nextSeconds = nextSeconds;
exports.nextWeeks = nextWeeks;
exports.nextYears = nextYears;
exports.objectType = objectType;
exports.offset = offset;
exports.queryAll = queryAll;
exports.quickSort = quickSort;
exports.radixSort = radixSort;
exports.randomBoolean = randomBoolean;
exports.randomHex = randomHex;
exports.randomInteger = randomInteger;
exports.randomNumber = randomNumber;
exports.randomString = randomString;
exports.range = range;
exports.redirect = redirect;
exports.regs = regs;
exports.rest = rest;
exports.reverse = reverse;
exports.rgbToHex = rgbToHex;
exports.scrollPosition = scrollPosition;
exports.scrollToTop = scrollToTop;
exports.second = second;
exports.selectionSort = selectionSort;
exports.selector = selector;
exports.shellSort = shellSort;
exports.splitByLength = splitByLength;
exports.startofDay = startofDay;
exports.stringify = stringify;
exports.sum = sum;
exports.sunday = sunday;
exports.swap = swap;
exports.thousandsSeparator = thousandsSeparator;
exports.throttle = throttle;
exports.timeTaken = timeTaken;
exports.timeline = timeline;
exports.timestamp = timestamp;
exports.tomorrow = tomorrow;
exports.unique = unique;
exports.url = url;
exports.verifyEmail = verifyEmail;
exports.verifyNumber = verifyNumber;
exports.weekofYear = weekofYear;
exports.year = year;
exports.yesterday = yesterday;

Object.defineProperty(exports, '__esModule', { value: true });

}));
