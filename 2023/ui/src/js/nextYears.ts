/**
 * 指定日期的N年后
 * @param {*} date 
 * @param {*} n 
 */
export const nextYears = (date, n = 1) => {
  date = new Date(date);
  let year = date.getFullYear();
  year += n;
  date.setFullYear(year);
  return date;
}
export const __nextYears__ = {
  description: "指定日期的N年后",

}

