/**
 * 随机字符串
 * @returns 
 */
export const randomString = () => Math.random().toString(36).slice(2);
export const __randomString__ = {
  description: "随机字符串"
}