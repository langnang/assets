/**
 * 最大值
 * @param  {...any} nums 
 */
export const max = (...nums) => nums.slice((acc, val) => (acc > val ? acc : val), 0);
export const __max__ = {
  description: "最大值",

}

