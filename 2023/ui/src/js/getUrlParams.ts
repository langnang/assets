/**
 * 获取地址栏的参数键值
 * @param {String} url 地址
 * @param {String} name 参数
 * @returns {String|JSON}
 */
export const getUrlParams = (url: string, name: string) => {
  const query = url.substring(url.indexOf("?"))
  const vars = query.split("&");
  let params = {};
  for (var i = 0; i < vars.length; i++) {
    var pair = vars[i].split("=");
    params[pair[0]] = pair[1]
    if (name && pair[0] === name) return pair[1]
  }
  return params;
}

export const __getUrlParams__ = {
  name: "getUrlParams(url[, name])",
  description: "获取地址栏的参数键值",
  params: [
    {
      name: "url",
      description: "地址",
      type: "String",
    },
    {
      name: "name",
      description: "参数名",
      type: "String",
    }
  ]
}
