/**
 * 获取随机十六进制颜色
 * @returns 
 */
export const randomHex = () => `#${Math.floor(Math.random() * 0xffffff).toString(16).padEnd(6, "0")}`;
export const __randomHex__ = {
  description: "获取随机十六进制颜色"
}