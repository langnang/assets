import { format } from "./format";
import { timestamp } from "./timestamp";
import { isDate } from './isDate'
import { date } from "./date";
import { nextYears } from "./nextYears";
import { nextMonths } from "./nextMonths";
import { nextWeeks } from "./nextWeeks";
import { nextDays } from "./nextDays";
import { nextHours } from "./nextHours";
import { nextMinutes } from "./nextMinutes";
import { nextSeconds } from "./nextSeconds";
/**
 * 返回起止时间中单位时间的连续时间数组
 * @param {Date} start
 * @param {Date} end
 * @param {String} unit
 * @param {String} fm
 */
export const timeline = (
  start,
  end = new Date(),
  unit = "day",
  fm = "YYYY-MM-DD HH:mm:ss"
) => {
  // 检测起止时间格式
  if (!isDate(start) || !isDate(end)) {
    throw new Error("Incorrect starting and ending datetime format!");
  }
  // 起始时间必须小于截止时间
  let result = [];
  if (start > end) return result;
  // 单位时间
  const unitMap = {
    year: nextYears,
    month: nextMonths,
    week: nextWeeks,
    day: nextDays,
    halfDay: (time) => nextHours(time, 12),
    hour: nextHours,
    minute: nextMinutes,
    second: nextSeconds,
  };
  while (end >= start) {
    result.push(format(start, fm));
    start = timestamp(unitMap[unit](start));
  }
  return result;
};
export const __timeline__ = {
  description: "返回起止时间中单位时间的连续时间数组",

}

