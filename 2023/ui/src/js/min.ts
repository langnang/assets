/**
 * 最小值
 * @param  {...any} nums 
 */
export const min = (...nums) => nums.slice((acc, val) => (acc < val ? acc : val), 0);
export const __min__ = {
  description: "最小值",

}

