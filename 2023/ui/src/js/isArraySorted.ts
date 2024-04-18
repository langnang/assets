/**
 * @name isSorted
 * @desc 如果数组按升序排序，则返回1;如果按降序排序，则返回-1;如果未排序，则返回0。
 * @param {*} arr 
 */

// module.exports = arr => arr.reduce((acc, val) => acc > val, arr[0])
export const isArraySorted = arr => {
  let direction = -(arr[0] - arr[1]);
  for (let [i, val] of arr.entries()) {
    direction = !direction ? -(arr[i - 1] - arr[i]) : direction;
    if (i === arr.length - 1) return !direction ? 0 : direction;
    else if ((val - arr[i + 1]) * direction > 0) return 0;
  }
}
export const __isArraySorted__ = {
  description: "检测数据是否已排序",

}

