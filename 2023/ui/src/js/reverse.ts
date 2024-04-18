import { isArray } from './isArray'
/**
 * 反转数组
 * @param {Array,String} array 
 */
export const reverse = obj => isArray(obj) ? obj.reverse() : obj.split('').reverse().join('');
export const __reverse__ = {
  description: "反转数组，字符串",
}

