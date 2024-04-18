/**
 * 将指定数量的元素移动到数组的末尾。
 * @param {*} arr 
 * @param {*} offset 
 */
export const offset = (array, offset) => [...array.slice(offset), ...array.slice(0, offset)];
export const __offset__ = {
  description: "将指定数量的元素移动到数组的末尾。",

}

