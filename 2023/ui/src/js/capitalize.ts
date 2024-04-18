/**
 * 字符串首字母大写
 * @param {String} str 
 * @returns 
 */
export const capitalize = str => str.charAt(0).toUpperCase() + str.slice(1)
export const __capitalize__ = {
  description: "字符串首字母大写"
}