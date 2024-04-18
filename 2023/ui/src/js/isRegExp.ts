import { objectType } from "./objectType"
/**
 * 检测正则
 * @param {*} object 
 */
export const isRegExp = (obj: any) => objectType(obj) === 'regexp'
export const __isRegExp__ = {
  description: "检测正则",

}