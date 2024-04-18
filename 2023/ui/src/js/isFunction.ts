import { objectType } from "./objectType"
/**
 * 检测函数
 * @param {*} obj
 * @returns {Boolean}
 */
export const isFunction = (obj: any) => objectType(obj) === 'function'
export const __isFunction__ = {
  description: "检测函数",

}