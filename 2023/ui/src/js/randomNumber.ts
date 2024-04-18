/**
 * 返回指定范围内的随机数
 * @param {*} min 
 * @param {*} max 
 */
export const randomNumber = (min, max = min + 1) => Math.random() * (max - min) + min;
export const __randomNumber__ = {
  description: "返回指定范围内的随机数",

}

