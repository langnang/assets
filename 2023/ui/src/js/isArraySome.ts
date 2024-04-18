/**
 * @name isSome
 * @desc 如果提供的谓词函数对集合中的至少一个元素返回true，则返回true，否则返回false。
 * @param {*} arr 
 * @param {*} fn 
 */
export const isArraySome = (array, fn = Boolean) => array.some(fn);
export const __isArraySome__ = {
  description: "如果提供的谓词函数对集合中的至少一个元素返回true，则返回true，否则返回false。",

}

