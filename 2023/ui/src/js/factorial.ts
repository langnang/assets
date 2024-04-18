/**
 * 阶乘
 * @param {number} number
 * @return {number}
 */
export const factorial = (number) => number > 1 ? number * factorial(number - 1) : 1
export const __factorial__ = {
  description: "阶乘",

}

