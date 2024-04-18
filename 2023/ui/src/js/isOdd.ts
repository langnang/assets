/**
 * @name isOdd
 * @desc 如果给定的数字为奇数, 则返回true, 否则为false
 * @param {*} num 
 */
export const isOdd = num => num % 2 === 1;
export const __isOdd__ = {
  description: "检测是否是奇数",
  references: [
    {
      text: "IsOdd - The Algorithms",
      href: "https://the-algorithms.com/zh_Hans/algorithm/isodd"
    }
  ]
}

