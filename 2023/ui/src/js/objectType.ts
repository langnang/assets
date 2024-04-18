/**
 * 对象数据类型
 * @param {*} obj
 * @returns {String}
 */
export const objectType = (obj: any) => Object.prototype.toString.call(obj).substring(8, Object.prototype.toString.call(obj).length - 1).toLowerCase()
export const __objectType__ = {
  description: "对象数据类型",

}