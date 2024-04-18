/**
 * 日期所在月的最后一天
 * @param {*} date 
 */
export const lastDayofMonth = date => new Date(new Date(date.getFullYear(), date.getMonth() + 1) - 1)
export const __lastDayofMonth__ = {
  description: "日期所在月的最后一天",

}

