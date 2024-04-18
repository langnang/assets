import { weekofYear } from "./weekofYear";
/**
 * 格式化时间
 * @param {*} date 
 * @param {*} fm 
 */
export const format = (date, fm) => {
  date = new Date(date);
  if (!fm) { return date; }
  fm = fm.replace("YYYY", date.getFullYear());
  fm = fm.replace("YY", ('' + date.getFullYear()).slice(-2));

  fm = fm.replace("MM", ('0' + (date.getMonth() + 1)).slice(-2));
  fm = fm.replace("M", date.getMonth() + 1);

  fm = fm.replace("WW", ('0' + weekofYear(date)).slice(-2));
  fm = fm.replace("W", weekofYear(date));

  fm = fm.replace("DD", ('0' + date.getDate()).slice(-2));
  fm = fm.replace("D", date.getDate());

  fm = fm.replace("dd", '0' + (date.getDay() == 0 ? 7 : date.getDay()));
  fm = fm.replace("d", date.getDay() == 0 ? 7 : date.getDay());

  fm = fm.replace("HH", ('0' + date.getHours()).slice(-2));
  fm = fm.replace("H", date.getHours());

  fm = fm.replace("hh", date.getHours() < 12 ? ('0' + date.getHours()).slice(-2) : ('0' + (date.getHours() - 12)).slice(-2));
  fm = fm.replace("h", date.getHours() < 11 ? date.getHours() : date.getHours() - 12);

  fm = fm.replace("mm", ('0' + date.getMinutes()).slice(-2));
  fm = fm.replace("m", date.getMinutes());

  fm = fm.replace("ss", ('0' + date.getSeconds()).slice(-2));
  fm = fm.replace("s", date.getSeconds());

  return fm;
}
export const __format__ = {
  description: "格式化时间",

}

