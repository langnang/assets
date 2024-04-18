import { timestamp } from './timestamp'
/**
 * 指定日期的N周后
 * @param {*} date 
 * @param {*} n 
 */
export const nextWeeks = (date, n = 1) => new Date(timestamp(date) + n * 7 * 24 * 60 * 60 * 1000);
export const __nextWeeks__ = {
  description: "指定日期的N周后",

}

