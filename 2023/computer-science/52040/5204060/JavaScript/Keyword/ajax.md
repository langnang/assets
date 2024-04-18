# AJAX

> `Asynchronous JavaScript and XML`: 异步的 JavaScript 和 XML

## 用途

在不刷新页面的情况下向浏览器发起请求并接受响应，最后局部更新页面。

## 核心概念或运作流程

核心概念时 `XMLHttpRequest` 对象，该对象可发起 `HTTP` 请求，可以监听 `readyState` 的变化获得响应。

## 代码思路

```js
function ajax() {
  // 声明变量
  let xmlhttp;
  // 检测浏览器环境，并赋值变量
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
  }
  // 检测XMLHttpRequest状态
  if (xmlhttp.readyState == 4) {
    if (xmlhttp.status == 200) {
      // success
    } else {
      // error
    }
  }
  // 设置请求类型，地址，是否异步
  xmlhttp.open('GET', '', true);
  // 发送请求
  xmlhttp.send();
}
```

## 优点

无需刷新页面

## 缺点

被浏览器限制不能跨域

## 弥补

使用 JSONP 或者 CORS 解决跨域

## 关联

- [XMLHttpRequest](./../11-XML/XMLHttpRequest.md)
- [JSONP](./JSONP.md)
- [CORS](./../13-HTTP/CORS.md)

## 参考链接

- [AJAX 教程 | W3school](https://www.w3school.com.cn/ajax/index.asp)
