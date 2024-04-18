/**
 * @name forEachRight
 * @desc 从数组的最后一个元素开始，为每个数组元素执行一次提供的函数。
 * @param {*} array 
 * @param {*} callback 
 */
export const forEachRightArray = (array, callback) =>
  array
    .slice(0)
    .reverse()
    .forEach(callback);
export const __forEachRightArray__ = {
  description: "从数组的最后一个元素开始，为每个数组元素执行一次提供的函数。",

}

