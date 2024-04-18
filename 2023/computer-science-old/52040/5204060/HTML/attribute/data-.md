# data-\* - HTML Attribute

data-\* 属性用于存储页面或应用程序的私有自定义数据。

data-\* 属性赋予我们在所有 HTML 元素上嵌入自定义 data 属性的能力。

存储的（自定义）数据能够被页面的 JavaScript 中利用，以创建更好的用户体验（不进行 Ajax 调用或服务器端数据库查询）。

data-\* 属性包括两部分：

1. 属性名不应该包含任何大写字母，并且在前缀 "data-" 之后必须有至少一个字符
2. 属性值可以是任意字符串

注释：用户代理会完全忽略前缀为 "data-" 的自定义属性。

```html
<element data-*="somevalue"></element>
```

## 设置方法

1. 直接在标签内书写
   ```html
   <div id="test" data-age="24">
     Click Here
   </div>
   ```
2. 用 js 设置
   ```js
   // 方法一;
   var test = document.getElementById("test");
   test.dataset.my = "fruit";
   // 方法二
   test.setAttribute("data-name", "bro");
   ```
   推荐使用 dataset
   貌似 setAttribute 性能更好，但在处理少量 data 数据时，基本没有区别。切 dataset 更具有可读性。因此 dataset 操作是上选。

## 获取方法

```js
var test = document.getElementById("test");
test.dataset.my;
test.getAttribute("data-name");
```
