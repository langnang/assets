<!-- @format -->

# axios

欢迎使用 axios，本文档将帮助您快速上手。(troubleshooting.html) 中的解答，

## [](http://www.axios-js.com/zh-cn/docs/#%E4%BB%80%E4%B9%88%E6%98%AF-axios%EF%BC%9F '什么是 axios？')什么是 axios？

Axios 是一个基于 promise 的 HTTP 库，可以用在浏览器和 node.js 中。

## [](http://www.axios-js.com/zh-cn/docs/#axios 'axios')axios

[![npm version](https://img.shields.io/npm/v/axios.svg?style=flat-square)](https://www.npmjs.org/package/axios)  
[![build status](https://img.shields.io/travis/axios/axios.svg?style=flat-square)](https://travis-ci.org/axios/axios)  
[![code coverage](https://img.shields.io/coveralls/mzabriskie/axios.svg?style=flat-square)](https://coveralls.io/r/mzabriskie/axios)  
[![npm downloads](https://img.shields.io/npm/dm/axios.svg?style=flat-square)](http://npm-stat.com/charts.html?package=axios)  
[![gitter chat](https://img.shields.io/gitter/room/mzabriskie/axios.svg?style=flat-square)](https://gitter.im/mzabriskie/axios)  
[![code helpers](https://www.codetriage.com/axios/axios/badges/users.svg)](https://www.codetriage.com/axios/axios)

Axios 是一个基于 promise 的 HTTP 库，可以用在浏览器和 node.js 中。

## [](http://www.axios-js.com/zh-cn/docs/#%E7%89%B9%E6%80%A7 '特性')特性

- 从浏览器中创建 [XMLHttpRequests](https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest)
- 从 node.js 创建 [http](http://nodejs.org/api/http.html) 请求
- 支持 [Promise](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise) API
- 拦截请求和响应
- 转换请求数据和响应数据
- 取消请求
- 自动转换 JSON 数据
- 客户端支持防御 [XSRF](http://en.wikipedia.org/wiki/Cross-site_request_forgery)

## [](http://www.axios-js.com/zh-cn/docs/#%E6%B5%8F%E8%A7%88%E5%99%A8%E6%94%AF%E6%8C%81 '浏览器支持')浏览器支持

| ![Chrome](https://raw.github.com/alrra/browser-logos/master/src/chrome/chrome_48x48.png) | ![Firefox](https://raw.github.com/alrra/browser-logos/master/src/firefox/firefox_48x48.png) | ![Safari](https://raw.github.com/alrra/browser-logos/master/src/safari/safari_48x48.png) | ![Opera](https://raw.github.com/alrra/browser-logos/master/src/opera/opera_48x48.png) | ![Edge](https://raw.github.com/alrra/browser-logos/master/src/edge/edge_48x48.png) | ![IE](https://raw.github.com/alrra/browser-logos/master/src/archive/internet-explorer_9-11/internet-explorer_9-11_48x48.png) |
| ---------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | --- |
| Latest ✔                                                                                 | Latest ✔                                                                                    | Latest ✔                                                                                 | Latest ✔                                                                              | Latest ✔                                                                           | 8+ ✔                                                                                                                         |     |

[![Browser Matrix](https://saucelabs.com/open_sauce/build_matrix/axios.svg)](https://saucelabs.com/u/axios)

## [](http://www.axios-js.com/zh-cn/docs/#%E5%AE%89%E8%A3%85 '安装')安装

使用 npm:

```sh
$ npm install axios
```

使用 bower:

```sh
$ bower install axios
```

使用 cdn:

```html
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
```

## [](http://www.axios-js.com/zh-cn/docs/#%E6%A1%88%E4%BE%8B '案例')案例

执行 `GET` 请求

```js
axios
  .get('/user?ID=12345')
  .then(function (response) {
    console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  });
axios
  .get('/user', {params: {ID: 12345}})
  .then(function (response) {
    console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  });
```

执行 `POST` 请求

```js
axios
  .post('/user', {firstName: 'Fred', lastName: 'Flintstone'})
  .then(function (response) {
    console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  });
```

执行多个并发请求

```js
function getUserAccount() {
  return axios.get('/user/12345');
}
function getUserPermissions() {
  return axios.get('/user/12345/permissions');
}
axios.all([getUserAccount(), getUserPermissions()]).then(axios.spread(function (acct, perms) {}));
```

## [](http://www.axios-js.com/zh-cn/docs/#axios-API 'axios API')axios API

可以通过向 `axios` 传递相关配置来创建请求

##### [](http://www.axios-js.com/zh-cn/docs/#axios-config 'axios(config)')axios(config)

```js
axios({method: 'post', url: '/user/12345', data: {firstName: 'Fred', lastName: 'Flintstone'}});
```

axios({  
 method:'get',  
 url:'http://bit.ly/2mTM3nY',  
 responseType:'stream'
}).then(function(response) {  
 response.data.pipe(fs.createWriteStream('ada_lovelace.jpg'))
});

##### [](http://www.axios-js.com/zh-cn/docs/#axios-url-config 'axios(url[, config])')axios(url\[, config\])

```
axios('/user/12345');
```

### [](http://www.axios-js.com/zh-cn/docs/#%E8%AF%B7%E6%B1%82%E6%96%B9%E6%B3%95%E7%9A%84%E5%88%AB%E5%90%8D '请求方法的别名')请求方法的别名

为方便起见，为所有支持的请求方法提供了别名

##### [](http://www.axios-js.com/zh-cn/docs/#axios-request-config 'axios.request(config)')axios.request(config)

##### [](http://www.axios-js.com/zh-cn/docs/#axios-get-url-config 'axios.get(url[, config])')axios.get(url\[, config\])

##### [](http://www.axios-js.com/zh-cn/docs/#axios-delete-url-config 'axios.delete(url[, config])')axios.delete(url\[, config\])

##### [](http://www.axios-js.com/zh-cn/docs/#axios-head-url-config 'axios.head(url[, config])')axios.head(url\[, config\])

##### [](http://www.axios-js.com/zh-cn/docs/#axios-options-url-config 'axios.options(url[, config])')axios.options(url\[, config\])

##### [](http://www.axios-js.com/zh-cn/docs/#axios-post-url-data-config 'axios.post(url[, data[, config]])')axios.post(url\[, data\[, config\]\])

##### [](http://www.axios-js.com/zh-cn/docs/#axios-put-url-data-config 'axios.put(url[, data[, config]])')axios.put(url\[, data\[, config\]\])

##### [](http://www.axios-js.com/zh-cn/docs/#axios-patch-url-data-config 'axios.patch(url[, data[, config]])')axios.patch(url\[, data\[, config\]\])

###### [](http://www.axios-js.com/zh-cn/docs/#%E6%B3%A8%E6%84%8F '注意')注意

在使用别名方法时， `url`、`method`、`data` 这些属性都不必在配置中指定。

### [](http://www.axios-js.com/zh-cn/docs/#%E5%B9%B6%E5%8F%91 '并发')并发

处理并发请求的助手函数

##### [](http://www.axios-js.com/zh-cn/docs/#axios-all-iterable 'axios.all(iterable)')axios.all(iterable)

##### [](http://www.axios-js.com/zh-cn/docs/#axios-spread-callback 'axios.spread(callback)')axios.spread(callback)

### [](http://www.axios-js.com/zh-cn/docs/#%E5%88%9B%E5%BB%BA%E5%AE%9E%E4%BE%8B '创建实例')创建实例

可以使用自定义配置新建一个 axios 实例

##### [](http://www.axios-js.com/zh-cn/docs/#axios-create-config 'axios.create([config])')axios.create(\[config\])

```
const instance = axios.create({  baseURL: 'https://some-domain.com/api/',  timeout: 1000,  headers: {'X-Custom-Header': 'foobar'}});
```

### [](http://www.axios-js.com/zh-cn/docs/#%E5%AE%9E%E4%BE%8B%E6%96%B9%E6%B3%95 '实例方法')实例方法

以下是可用的实例方法。指定的配置将与实例的配置合并。

##### [](http://www.axios-js.com/zh-cn/docs/#axios-request-config-1 'axios#request(config)')axios#request(config)

##### [](http://www.axios-js.com/zh-cn/docs/#axios-get-url-config-1 'axios#get(url[, config])')axios#get(url\[, config\])

##### [](http://www.axios-js.com/zh-cn/docs/#axios-delete-url-config-1 'axios#delete(url[, config])')axios#delete(url\[, config\])

##### [](http://www.axios-js.com/zh-cn/docs/#axios-head-url-config-1 'axios#head(url[, config])')axios#head(url\[, config\])

##### [](http://www.axios-js.com/zh-cn/docs/#axios-options-url-config-1 'axios#options(url[, config])')axios#options(url\[, config\])

##### [](http://www.axios-js.com/zh-cn/docs/#axios-post-url-data-config-1 'axios#post(url[, data[, config]])')axios#post(url\[, data\[, config\]\])

##### [](http://www.axios-js.com/zh-cn/docs/#axios-put-url-data-config-1 'axios#put(url[, data[, config]])')axios#put(url\[, data\[, config\]\])

##### [](http://www.axios-js.com/zh-cn/docs/#axios-patch-url-data-config-1 'axios#patch(url[, data[, config]])')axios#patch(url\[, data\[, config\]\])

## [](http://www.axios-js.com/zh-cn/docs/#%E8%AF%B7%E6%B1%82%E9%85%8D%E7%BD%AE '请求配置')请求配置

这些是创建请求时可以用的配置选项。只有 `url` 是必需的。如果没有指定 `method`，请求将默认使用 `get` 方法。

```
{     url: '/user',    method: 'get',       baseURL: 'https://some-domain.com/api/',        transformRequest: [function (data, headers) {        return data;  }],    transformResponse: [function (data) {        return data;  }],    headers: {'X-Requested-With': 'XMLHttpRequest'},      params: {    ID: 12345  },       paramsSerializer: function(params) {    return Qs.stringify(params, {arrayFormat: 'brackets'})  },              data: {    firstName: 'Fred'  },      timeout: 1000,     withCredentials: false,       adapter: function (config) {      },     auth: {    username: 'janedoe',    password: 's00pers3cret'  },     responseType: 'json',       responseEncoding: 'utf8',      xsrfCookieName: 'XSRF-TOKEN',     xsrfHeaderName: 'X-XSRF-TOKEN',      onUploadProgress: function (progressEvent) {      },    onDownloadProgress: function (progressEvent) {      },     maxContentLength: 2000,    validateStatus: function (status) {    return status >= 200 && status < 300;   },      maxRedirects: 5,           socketPath: null,       httpAgent: new http.Agent({ keepAlive: true }),  httpsAgent: new https.Agent({ keepAlive: true }),        proxy: {    host: '127.0.0.1',    port: 9000,    auth: {      username: 'mikeymike',      password: 'rapunz3l'    }  },      cancelToken: new CancelToken(function (cancel) {  })}
```

## [](http://www.axios-js.com/zh-cn/docs/#%E5%93%8D%E5%BA%94%E7%BB%93%E6%9E%84 '响应结构')响应结构

某个请求的响应包含以下信息

```
{    data: {},    status: 200,    statusText: 'OK',    headers: {},     config: {},         request: {}}
```

使用 `then` 时，你将接收下面这样的响应 :

```
axios.get('/user/12345')  .then(function(response) {    console.log(response.data);    console.log(response.status);    console.log(response.statusText);    console.log(response.headers);    console.log(response.config);  });
```

在使用 `catch` 时，或传递 [rejection callback](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise/then) 作为 `then` 的第二个参数时，响应可以通过 `error` 对象可被使用，正如在[错误处理](https://www.kancloud.cn/yunye/axios/234845#handling-errors)这一节所讲。

## [](http://www.axios-js.com/zh-cn/docs/#%E9%85%8D%E7%BD%AE%E9%BB%98%E8%AE%A4%E5%80%BC '配置默认值')配置默认值

你可以指定将被用在各个请求的配置默认值

### [](http://www.axios-js.com/zh-cn/docs/#%E5%85%A8%E5%B1%80%E7%9A%84-axios-%E9%BB%98%E8%AE%A4%E5%80%BC '全局的 axios 默认值')全局的 axios 默认值

```
axios.defaults.baseURL = 'https://api.example.com';axios.defaults.headers.common['Authorization'] = AUTH_TOKEN;axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
```

### [](http://www.axios-js.com/zh-cn/docs/#%E8%87%AA%E5%AE%9A%E4%B9%89%E5%AE%9E%E4%BE%8B%E9%BB%98%E8%AE%A4%E5%80%BC '自定义实例默认值')自定义实例默认值

```
const instance = axios.create({  baseURL: 'https://api.example.com'});instance.defaults.headers.common['Authorization'] = AUTH_TOKEN;
```

### [](http://www.axios-js.com/zh-cn/docs/#%E9%85%8D%E7%BD%AE%E7%9A%84%E4%BC%98%E5%85%88%E9%A1%BA%E5%BA%8F '配置的优先顺序')配置的优先顺序

配置会以一个优先顺序进行合并。这个顺序是：在 `lib/defaults.js` 找到的库的默认值，然后是实例的 `defaults` 属性，最后是请求的 `config` 参数。后者将优先于前者。这里是一个例子：

```
var instance = axios.create();instance.defaults.timeout = 2500;instance.get('/longRequest', {  timeout: 5000});
```

## [](http://www.axios-js.com/zh-cn/docs/#%E6%8B%A6%E6%88%AA%E5%99%A8 '拦截器')拦截器

在请求或响应被 `then` 或 `catch` 处理前拦截它们。

```
axios.interceptors.request.use(function (config) {        return config;  }, function (error) {        return Promise.reject(error);  });axios.interceptors.response.use(function (response) {        return response;  }, function (error) {        return Promise.reject(error);  });
```

如果你想在稍后移除拦截器，可以这样：

```
const myInterceptor = axios.interceptors.request.use(function () {});axios.interceptors.request.eject(myInterceptor);
```

可以为自定义 axios 实例添加拦截器

```
const instance = axios.create();instance.interceptors.request.use(function () {});
```

## [](http://www.axios-js.com/zh-cn/docs/#%E9%94%99%E8%AF%AF%E5%A4%84%E7%90%86 '错误处理')错误处理

```
axios.get('/user/12345')  .catch(function (error) {    if (error.response) {                  console.log(error.response.data);      console.log(error.response.status);      console.log(error.response.headers);    } else if (error.request) {                        console.log(error.request);    } else {            console.log('Error', error.message);    }    console.log(error.config);  });
```

Y 可以使用 `validateStatus` 配置选项定义一个自定义 HTTP 状态码的错误范围。

```
axios.get('/user/12345', {  validateStatus: function (status) {    return status < 500;   }})
```

## [](http://www.axios-js.com/zh-cn/docs/#%E5%8F%96%E6%B6%88 '取消')取消

使用 _cancel token_ 取消请求

> Axios 的 cancel token API 基于[cancelable promises proposal](https://github.com/tc39/proposal-cancelable-promises)，它还处于第一阶段。

可以使用 `CancelToken.source` 工厂方法创建 cancel token，像这样：

```
const CancelToken = axios.CancelToken;const source = CancelToken.source();axios.get('/user/12345', {  cancelToken: source.token}).catch(function(thrown) {  if (axios.isCancel(thrown)) {    console.log('Request canceled', thrown.message);  } else {       }});axios.post('/user/12345', {  name: 'new name'}, {  cancelToken: source.token})source.cancel('Operation canceled by the user.');
```

还可以通过传递一个 executor 函数到 `CancelToken` 的构造函数来创建 cancel token：

```
const CancelToken = axios.CancelToken;let cancel;axios.get('/user/12345', {  cancelToken: new CancelToken(function executor(c) {        cancel = c;  })});cancel();
```

> 注意: 可以使用同一个 cancel token 取消多个请求

## [](http://www.axios-js.com/zh-cn/docs/#%E4%BD%BF%E7%94%A8-application-x-www-form-urlencoded-format '使用 application/x-www-form-urlencoded format')使用 application/x-www-form-urlencoded format

默认情况下，axios 将 JavaScript 对象序列化为 JSON。 要以 application / x-www-form-urlencoded 格式发送数据，您可以使用以下选项之一。

### [](http://www.axios-js.com/zh-cn/docs/#%E6%B5%8F%E8%A7%88%E5%99%A8 '浏览器')浏览器

在浏览器中，您可以使用 URLSearchParams API，如下所示：

```
const params = new URLSearchParams();params.append('param1', 'value1');params.append('param2', 'value2');axios.post('/foo', params);
```

> 请注意，所有浏览器都不支持 URLSearchParams（请参阅 caniuse.com），但可以使用 polyfill（确保填充全局环境）。

或者，您可以使用 qs 库编码数据：

```
const qs = require('qs');axios.post('/foo', qs.stringify({ 'bar': 123 }));
```

或者以另一种方式（ES6），

```
import qs from 'qs';const data = { 'bar': 123 };const options = {  method: 'POST',  headers: { 'content-type': 'application/x-www-form-urlencoded' },  data: qs.stringify(data),  url,};axios(options);
```

### [](http://www.axios-js.com/zh-cn/docs/#Node-js 'Node.js')Node.js

在 node.js 中，您可以使用 querystring 模块，如下所示：

```
const querystring = require('querystring');axios.post('http://something.com/', querystring.stringify({ foo: 'bar' }));
```

您也可以使用 qs 库。

## [](http://www.axios-js.com/zh-cn/docs/#Semver 'Semver')Semver

在 axios 达到 1.0 版本之前，破坏性更改将以新的次要版本发布。 例如 0.5.1 和 0.5.4 将具有相同的 API，但 0.6.0 将具有重大变化。

## [](http://www.axios-js.com/zh-cn/docs/#Promises 'Promises')Promises

axios 依赖原生的 ES6 Promise 实现而[被支持](http://caniuse.com/promises). 如果你的环境不支持 ES6 Promise，你可以使用 [polyfill](https://github.com/jakearchibald/es6-promise).

## [](http://www.axios-js.com/zh-cn/docs/#TypeScript 'TypeScript')TypeScript

axios 包括 TypeScript 定义。

```
import axios from 'axios';axios.get('/user?ID=12345');
```

## [](http://www.axios-js.com/zh-cn/docs/#%E8%B5%84%E6%BA%90 '资源')资源

- [Changelog](https://github.com/axios/axios/blob/master/CHANGELOG.md)
- [Upgrade Guide](https://github.com/axios/axios/blob/master/UPGRADE_GUIDE.md)
- [Ecosystem](https://github.com/axios/axios/blob/master/ECOSYSTEM.md)
- [Contributing Guide](https://github.com/axios/axios/blob/master/CONTRIBUTING.md)
- [Code of Conduct](https://github.com/axios/axios/blob/master/CODE_OF_CONDUCT.md)

## Credits

axios 深受 Angular 提供的、\\$http服务的启发。 最终，axios是为了在Angular之外使用而提供独立的类似\\$http 服的务。

## 协议

MIT
