/**
 * 日期所在周的周一
 * @param {*} date 
 */
export const monday = date => new Date(date - (date.getDay() - 1) * 86400000)
export const __monday__ = {
  description: "日期所在周的周一",

}

