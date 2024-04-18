/**
 * 深拷贝数组
 * @param {*} array
 * @param {*} mode
 */

const deepCopyArrayBySlice = (array) => array.slice(0);
const deepCopyArrayByConcat = (array) => [].concat(array);
const deepCopyArrayByString = (array) => JSON.parse(JSON.stringify(array));

export const deepCopyArray = deepCopyArrayBySlice;
export const __deepCopyArray__ = {
  description: "深拷贝数组",

}

