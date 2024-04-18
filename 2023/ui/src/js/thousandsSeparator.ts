/**
 * 千位分隔符
 * @param {*} num
 */
export const thousandsSeparator = (num) => num.toLocaleString("en");

const thousandsSeparator_1 = (num) => num.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
const thousandsSeparator_2 = (num) => num.replace(/(\d)(?=(\d{3})+\b)/g, "$1.");
export const __thousandsSeparator__ = {
  description: "千位分隔符",

}

