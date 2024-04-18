/**
 * 校验字符串格式数字
 * @param {String} string
 * @return {Boolean}
 * @date 2019-07-06
 */
export const verifyNumber = (num) =>
  !isNaN(parseFloat(num)) && isFinite(num) && Number(num) == num;
export const __verifyNumber__ = {
  description: "校验字符串格式数字"
}