import { splitByLength } from "./splitByLength"
/**
 * 十六机制转化为RGB
 * @param hex 
 * @returns 
 */
export const hexToRgb = hex => 'rgb(' + splitByLength(hex.substr(1), 2).map(v => parseInt(v, 16)).join(', ') + ')'
export const __hexToRgb__ = {
  description: "十六机制转化为RGB"
}