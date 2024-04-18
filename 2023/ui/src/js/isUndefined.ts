import { objectType } from "./objectType"
/**
 * 检测Undefined
 * @param {*} obj 
 * @return {Boolean}
 */

export const isUndefined = (obj: any) => objectType(obj) === 'undefined'
export const __isUndefined__ = {
  description: "检测Undefined",

}