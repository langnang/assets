# CORS

## 原理

### 中文或英文

Cross-origin resource sharing

跨域资源共享

### 用途

该技术通过在目标域名返回 CORS 响应头来达到获取该域名的数据的目的

### 核心概念或运作流程

技术核心就是设置 response header，分为简单请求和复杂请求两种

### 代码书写思路

简单请求只需要设置 Access-Control-Allow-Origin: 目标源 即可。

复杂请求则分两步走，第一步是浏览器发起 OPTIONS 请求，第二步才是真实请求。

OPTIONS 请求需要把服务器支持的操作通过响应头来表明，如 Access-Control-Allow-Methods: POST, GET, OPTIONS，另外一个重要的响应头是 Access-Control-Allow-Credentials: true 用来表明是否接受请求中的 Cookie。blablabla

### 技术优点

通过简单的配置就能跨域

### 技术缺点

某些古老浏览器不支持 CORS 或不支持 Credentials

### 弥补缺点

用 JSONP 或 P3P 等技术

## 关联

- [JSONP]
- [P3P]

## 参考链接

- [HTTP 访问控制（CORS） - HTTP | MDN](https://developer.mozilla.org/zh-CN/docs/Web/HTTP/Access_control_CORS)
