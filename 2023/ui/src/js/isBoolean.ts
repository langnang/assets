import { objectType } from "./objectType"
/**
 * 检测布尔值
 * @param {*} obj
 * @returns {Boolean}
 */
export const isBoolean = (obj: any) => objectType(obj) === 'boolean'
export const __isBoolean__ = {
  description: "检测布尔值",

}