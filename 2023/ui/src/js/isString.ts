import { objectType } from "./objectType"
/**
 * 检测字符串
 * @param {*} obj
 * @returns {Boolean}
 */
export const isString = (obj: any) => objectType(obj) === 'string'
export const __isString__ = {
  description: "检测字符串",

}