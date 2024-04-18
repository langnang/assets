# AJAX 封装（ajax）

jquery 框架的 ajax 方法固然好用，但是假如某天我们的项目不能引入 jquery 或项目需求很简单，没有很多交互功能，只需要 ajax，这时引入 jquery 库会造成资源浪费，也会显得页面臃肿。这时我们就需要用原生 JS 写一个 ajax 函数了。

```js
/* 封装 ajax 函数
 _ @param {string}opt.type http 连接的方式，包括 POST 和 GET 两种方式
 _ @param {string}opt.url 发送请求的 url
 _ @param {boolean}opt.async 是否为异步请求，true 为异步的，false 为同步的
 _ @param {object}opt.data 发送的参数，格式为对象类型
 _ @param {function}opt.success ajax 发送并接收成功调用的回调函数
 \*/
function ajax(opt) {
  opt = opt || {};
  opt.method = opt.method.toUpperCase() || "POST";
  opt.url = opt.url || "";
  opt.async = opt.async || true;
  opt.data = opt.data || null;
  opt.success = opt.success || function() {};
  var xmlHttp = null;
  if (XMLHttpRequest) {
    xmlHttp = new XMLHttpRequest();
  } else {
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  var params = [];
  for (var key in opt.data) {
    params.push(key + "=" + opt.data[key]);
  }
  var postData = params.join("&");
  if (opt.method.toUpperCase() === "POST") {
    xmlHttp.open(opt.method, opt.url, opt.async);
    xmlHttp.setRequestHeader(
      "Content-Type",
      "application/x-www-form-urlencoded;charset=utf-8"
    );
    xmlHttp.send(postData);
  } else if (opt.method.toUpperCase() === "GET") {
    xmlHttp.open(opt.method, opt.url + "?" + postData, opt.async);
    xmlHttp.send(null);
  }
  xmlHttp.onreadystatechange = function() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
      opt.success(xmlHttp.responseText);
    }
  };
}
```

使用示例：

```js
ajax({
    method: 'POST',
    url: 'test.php',
    data: {
        name1: 'value1',
        name2: 'value2'
    },
    success: function (response) {
        console.log(response)；
    }
});
```
