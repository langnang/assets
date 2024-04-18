import { objectType } from "./objectType"
/**
 * 检测数组
 * @param {*} obj
 * @returns {Boolean}
 */
export const isArray = (obj: any) => objectType(obj) === 'array'
export const __isArray__ = {
  description: "检测数组",

}