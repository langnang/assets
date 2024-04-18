/**
 * 日期所在周的周日
 * @param {*} date 
 */
export const sunday = date => new Date(date - (date.getDay() - 7) * 86400000)
export const __sunday__ = {
  description: "日期所在周的周日",

}

