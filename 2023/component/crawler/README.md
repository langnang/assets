# Crawler - Component

## Config

**stat**

- 0 新增
- 1 继续

**mode**

- text/html
- application/json

**domains**

**scan_urls**

**list_url_regexes**

**content_url_regexes**

**content_url_regexes**

**fields**

- name: 列名
- selector_type: 抽取规则的类型 xpath, jsonpath, regex 默认 xpath
- selector: 选择器
- param: 原始参数
  - url 页面的地址
  - raw 页面的内容
  - request {Array} 请求的数据
  - ~~\*, 0, 1, 2, 3 {Array|String} 正则匹配的参数~~
- text {String} 自定义文本, 一般用于标识

## LifeCycle

## Methods
