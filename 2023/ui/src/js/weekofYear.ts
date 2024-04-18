/**
 * 获取时间所在年份的周次
 * 取当前时间所在年份的第一天的下周的周一，当前日期减去所取时间，再除以86400000毫秒数
 * @param {*} date 
 * @param {*} firstDayOfWeek 
 */
export const weekofYear = (date = new Date()) => {
  // 取当前年份的第一天
  const firstDayOfYear = new Date(date.getFullYear(), 0, 1);
  // 取第一天是周几
  const firstDayOfWeekForYear = firstDayOfYear.getDay();
  // 取第二周的周一
  const fridayOfSecondWeek = new Date(date.getFullYear(), 0, 7 + 2 - firstDayOfWeekForYear);
  // （当前日期与第二周周一的毫秒差/一周的毫秒）/7
  const w = Math.ceil(Math.ceil((date.valueOf() - fridayOfSecondWeek.valueOf()) / 86400000) / 7) + 1;
  return w;
}
export const __weekofYear__ = {
  description: "获取时间所在年份的周次",

}

