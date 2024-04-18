/**
 * 根据给定的函数对数组的元素进行分组，并返回每个组中元素的数量
 * @param {Array} array 
 * @param {Function} fn 
 */
export const countBy = (array, fn) =>
  array.map(typeof fn === 'function' ? fn : val => val).reduce((acc, val) => {
    acc[`${val}`] = (acc[`${val}`] || 0) + 1;
    return acc;
  }, {});
export const __countBy__ = {
  description: "根据给定的函数对数组的元素进行分组，并返回每个组中元素的数量",

}
