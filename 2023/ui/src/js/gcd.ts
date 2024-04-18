/**
 * 计算两个数字之间最大的公共除数
 * @param {*} x 
 * @param {*} y 
 */
export const gcd = (x, y) => !y ? x : gcd(y, x % y);
export const __gcd__ = {
  description: "计算两个数字之间最大的公共除数",

}

