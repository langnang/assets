/**
 * 取重复值
 * @param {*} arr 
 */

export const duplicate = arr => [...new Set(arr.reduce((acc, val, index) => arr.indexOf(val, index + 1) >= 0 ? acc.concat(val) : acc, []))]
export const __duplicate__ = {
  description: "取重复值",

}

