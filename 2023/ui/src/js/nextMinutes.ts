import { timestamp } from './timestamp'
/**
 * 指定日期的N分后
 * @param {*} date 
 * @param {*} n 
 */
export const nextMinutes = (date, n = 1) => new Date(timestamp(date) + n * 60 * 1000);
export const __nextMinutes__ = {
  description: "指定日期的N分后",

}

