/**
 * 将数字转换为数字数组
 * @param {Number} num 
 */
export const digitize = num => [...'' + num].map(i => parseInt(i));
export const __digitize__ = {
  description: "将数字转换为数字数组",

}
