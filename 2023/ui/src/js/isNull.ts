import { objectType } from "./objectType"
/**
 * 检测Null
 * @param {*} obj 
 * @return {Boolean}
 */

export const isNull = (obj: any) => objectType(obj) === 'null'
export const __isNull__ = {
  description: "检测Null",

}