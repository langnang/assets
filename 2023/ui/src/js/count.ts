/**
 * 统计数组中值的出现次数
 * @param {*} arr 
 * @param {*} value 
 */
export const count = (array, val = array[0]) => array.reduce((a, v) => (v === val ? a + 1 : a), 0);
export const __count__ = {
  description: "统计数组中值的出现次数",

}

