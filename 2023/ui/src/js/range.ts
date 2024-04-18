import { startofDay } from "./startofDay";
import { endofDay } from "./endofDay";
import { monday } from "./monday";
import { sunday } from "./sunday";
import { firstDayofMonth } from "./firstDayofMonth";
import { lastDayofMonth } from "./lastDayofMonth";
import { year } from "./year";
/**
 * 根据时间生成其所在的时间区段
 * @param {Data} date
 * @param {String} type
 */
export const range = (date, type, options) => {
  // TODO type:year,month,week,day,hour,minute
  // TODO opts.start: if(type===year){(0,11)}
  // TODO opts.end:if(type==year){(0,11)}
  if (type === "year") {
    return [
      new Date(year(date), 0),
      new Date(new Date(year(date) + 1, 0).getTime() - 1),
    ];
  }
  if (type === "month")
    return [firstDayofMonth(date), lastDayofMonth(date)];
  if (type === "week") return [startofDay(monday(date)), endofDay(sunday(date))];
  if (type === "day") return [startofDay(date), endofDay(date)];
  return [];
};
export const __range__ = {
  description: "根据时间生成其所在的时间区段",
  tags: ["Date"],
}


