import { objectType } from "./objectType"
/**
 * 检测日期
 * @param {*} obj
 * @returns {Boolean}
 */
export const isDate = (obj: any) => objectType(obj) === 'date'
export const __isDate__ = {
  description: "检测日期",

}