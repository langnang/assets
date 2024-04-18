import { objectType } from "./objectType"
/**
 * 检测数值
 * @param {*} obj
 * @returns {Boolean}
 */
export const isNumber = (obj: any) => objectType(obj) === 'number'
export const __isNumber__ = {
  description: "检测数值",

}