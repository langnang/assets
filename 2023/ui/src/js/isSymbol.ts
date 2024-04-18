import { objectType } from "./objectType"
/**
 * 检测Symbol
 * @param {*} object 
 * @return {Boolean}
 */
export const isSymbol = (obj: any) => objectType(obj) === 'symbol'
export const __isSymbol__ = {
  description: "检测Symbol",

}

