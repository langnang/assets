import { timestamp } from './timestamp'
/**
 * 指定日期的N秒后
 * @param {*} date 
 * @param {*} n 
 */
export const nextSeconds = (date, n = 1) => new Date(timestamp(date) + n * 1000);
export const __nextSeconds__ = {
  description: "指定日期的N秒后",

}

