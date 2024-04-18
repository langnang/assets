/**
 * 按长度截取字符串
 * @param {String} str 
 * @param {Number} length 
 * @returns 
 */
export const splitByLength = (str: string, length: number = 1) => {
  let array = []
  for (let i = 0; i < str.length; i += length) {
    array.push(str.substr(i, length))
  }
  return array;
}

export const __splitByLength__ = {
  description: "按长度截取字符串"
}