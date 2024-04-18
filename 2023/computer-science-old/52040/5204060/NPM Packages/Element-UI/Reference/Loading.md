## [¶](https://element.eleme.cn/#/zh-CN/component/loading#loading-jia-zai) Loading 加载

加载数据时显示动效。

### [¶](https://element.eleme.cn/#/zh-CN/component/loading#qu-yu-jia-zai) 区域加载

在表格等容器中加载数据时显示。

<table><colgroup><col name="el-table_24_column_99" width="180"><col name="el-table_24_column_100" width="180"><col name="el-table_24_column_101" width="460"></colgroup><tbody><tr><td rowspan="1" colspan="1"><p>2016-05-03</p></td><td rowspan="1" colspan="1"><p>王小虎</p></td><td rowspan="1" colspan="1"><p>上海市普陀区金沙江路 1518 弄</p></td></tr><tr><td rowspan="1" colspan="1"><p>2016-05-02</p></td><td rowspan="1" colspan="1"><p>王小虎</p></td><td rowspan="1" colspan="1"><p>上海市普陀区金沙江路 1518 弄</p></td></tr><tr><td rowspan="1" colspan="1"><p>2016-05-04</p></td><td rowspan="1" colspan="1"><p>王小虎</p></td><td rowspan="1" colspan="1"><p>上海市普陀区金沙江路 1518 弄</p></td></tr></tbody></table>

### [¶](https://element.eleme.cn/#/zh-CN/component/loading#zi-ding-yi) 自定义

可自定义加载文案、图标和背景色。

<table><colgroup><col name="el-table_25_column_102" width="180"><col name="el-table_25_column_103" width="180"><col name="el-table_25_column_104" width="460"></colgroup><tbody><tr><td rowspan="1" colspan="1"><p>2016-05-03</p></td><td rowspan="1" colspan="1"><p>王小虎</p></td><td rowspan="1" colspan="1"><p>上海市普陀区金沙江路 1518 弄</p></td></tr><tr><td rowspan="1" colspan="1"><p>2016-05-02</p></td><td rowspan="1" colspan="1"><p>王小虎</p></td><td rowspan="1" colspan="1"><p>上海市普陀区金沙江路 1518 弄</p></td></tr><tr><td rowspan="1" colspan="1"><p>2016-05-04</p></td><td rowspan="1" colspan="1"><p>王小虎</p></td><td rowspan="1" colspan="1"><p>上海市普陀区金沙江路 1518 弄</p></td></tr></tbody></table>

### [¶](https://element.eleme.cn/#/zh-CN/component/loading#zheng-ye-jia-zai) 整页加载

页面数据加载时显示。

### [¶](https://element.eleme.cn/#/zh-CN/component/loading#fu-wu) 服务

Loading 还可以以服务的方式调用。引入 Loading 服务：

```
import { Loading } from 'element-ui';
```

在需要调用时：

```
Loading.service(options);
```

其中 `options` 参数为 Loading 的配置项，具体见下表。`LoadingService` 会返回一个 Loading 实例，可通过调用该实例的 `close` 方法来关闭它：

```
let loadingInstance = Loading.service(options);
this.$nextTick(() => { // 以服务的方式调用的 Loading 需要异步关闭
  loadingInstance.close();
});
```

需要注意的是，以服务的方式调用的全屏 Loading 是单例的：若在前一个全屏 Loading 关闭前再次调用全屏 Loading，并不会创建一个新的 Loading 实例，而是返回现有全屏 Loading 的实例：

```
let loadingInstance1 = Loading.service({ fullscreen: true });
let loadingInstance2 = Loading.service({ fullscreen: true });
console.log(loadingInstance1 === loadingInstance2); // true
```

此时调用它们中任意一个的 `close` 方法都能关闭这个全屏 Loading。

如果完整引入了 Element，那么 Vue.prototype 上会有一个全局方法 `$loading`，它的调用方式为：`this.$loading(options)`，同样会返回一个 Loading 实例。

### [¶](https://element.eleme.cn/#/zh-CN/component/loading#options) Options

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| target | Loading 需要覆盖的 DOM 节点。可传入一个 DOM 对象或字符串；若传入字符串，则会将其作为参数传入 `document.querySelector`以获取到对应 DOM 节点 | object/string | — | document.body |
| body | 同 `v-loading` 指令中的 `body` 修饰符 | boolean | — | false |
| fullscreen | 同 `v-loading` 指令中的 `fullscreen` 修饰符 | boolean | — | true |
| lock | 同 `v-loading` 指令中的 `lock` 修饰符 | boolean | — | false |
| text | 显示在加载图标下方的加载文案 | string | — | — |
| spinner | 自定义加载图标类名 | string | — | — |
| background | 遮罩背景色 | string | — | — |
| customClass | Loading 的自定义类名 | string | — | — |