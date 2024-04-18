import { isLeapYear } from './isLeapYear';
/**
 * 年份间的闰年
 * @param {Number} start 
 * @param {Number} end 
 */
export const leapYears = (start, end) => {
  if (start > end) { return []; }
  let array = [];
  for (var i = start; i <= end; i++) {
    if (isLeapYear(i)) {
      array.push(i)
    }
  }
  return array;
}
export const __leapYears__ = {
  description: "年份间的闰年",

}

