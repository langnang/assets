/**
 * Ajax的封装
 * @param {Object} option 配置参数
 * @return {Function} 回调函数
 */
export const ajax = (option) => {
  /**
   * 配置参数
   * @param {string} option.mode 请求的实现方式：native,promise
   * @param {string} option.url 发送请求的url
   * @param {string} option.method http连接的方式，包括POST和GET两种方式
   * @param {boolean} option.async 是否为异步，true为异步，false为同步
   * @param {object} option.data 发送的参数，格式为对象类型
   * @param {function} option.success ajax成功的回调函数
   * @param {function} option.error ajax失败的回调函数
   */
  let mode = option.mode || "native";
  // 初始化参数
  option.url = option.url || "";
  option.method = option.method || "GET";
  option.async = option.async || true;
  option.data = option.data || {};
  // 整理参数
  let params = [];
  for (let key in option.data) {
    params.push(key + "=" + option.data[key]);
  }
  const postData = params.join("&");

  // 创建XMLHttpRequest对象
  let xmlHttp = null;
  if (XMLHttpRequest) {
    xmlHttp = new XMLHttpRequest();
  } else {
    xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
  }
  // 发送请求
  if (option.method.toUpperCase() === "POST") {
    xmlHttp.open("POST", option.url, option.async);
    xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;charset=utf-8');
    xmlHttp.send(postData);
  } else if (option.method.toUpperCase() === "GET") {
    xmlHttp.open("GET", option.url + '?' + postData, option.async);
    xmlHttp.send(null);
  }
  let map = new Map();
  map.set("native", function (option) {
    // 初始化参数
    option.success = option.success || function (res) { };
    option.error = option.error || function (err) { };
    // 服务器响应
    xmlHttp.onreadystatechange = () => {
      // 请求未初始化 xmlHttp.readyState==0
      // 服务器连接已建立 xmlHttp.readyState==1
      // 请求已连接 xmlHttp.readyState==2
      // 请求处理中 xmlHttp.readyState==3
      // 请求已完成且响应已就绪
      if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        option.success(xmlHttp.responseText);
      }
      // 未找到页面
      else if (xmlHttp.readyState == 4 && xmlHttp.status == 404) {
        option.error(xmlHttp.responseText);
      }

    }
  })
  map.set("promise", function (option) {
    return new Promise(function (resolve, reject) {
      xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState !== 4) {
          return;
        }
        if (xmlHttp.status === 200) {
          resolve(xmlHttp.responseText);
        } else {
          reject(new Error(xmlHttp.statusText));
        }
      };
    });
  })
  if (!map.has(mode)) mode = "native";
  return map.get(mode)(option);
};

export const __ajax__ = {
  description: "AJAX 的封装"
}