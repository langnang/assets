import { objectType } from "./objectType"
/**
 * 检测对象
 * @param {*} obj
 * @returns {Boolean}
 */
export const isObject = (obj: any) => objectType(obj) === 'object'
export const __isObject__ = {
  description: "检测对象",

}