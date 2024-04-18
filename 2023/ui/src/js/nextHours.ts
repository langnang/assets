import { timestamp } from './timestamp'
/**
 * 指定日期的N时后
 * @param {*} date 
 * @param {*} n 
 */
export const nextHours = (date, n = 1) => new Date(timestamp(date) + n * 60 * 60 * 1000);
export const __nextHours__ = {
  description: "指定日期的N时后",

}

