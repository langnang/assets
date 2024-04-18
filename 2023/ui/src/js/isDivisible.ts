/**
 * 检测第一个数值参数是否可被另一个数字变量整除
 * @param {*} dividend 
 * @param {*} divisor 
 */
export const isDivisible = (dividend, divisor) => dividend % divisor === 0;
export const __isDivisible__ = {
  description: "检测第一个数值参数是否可被另一个数字变量整除",

}

