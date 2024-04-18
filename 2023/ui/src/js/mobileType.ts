/**
 * 返回手机类型
 * @returns {String}
 */
export const mobileType = () => {
  var u = navigator.userAgent
  var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1 // g
  var isIOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/) // ios终端
  if (isAndroid) {
    return 'Android'
  }
  if (isIOS) {
    return 'IOS'
  }

  return 'No Mobile';
}
export const __mobileType__ = {
  description: "返回手机类型",

}

