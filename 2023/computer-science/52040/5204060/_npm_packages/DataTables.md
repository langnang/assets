# DataTables

> Datatables 是一款 jquery 表格插件。它是一个高度灵活的工具，可以将任何 HTML 表格添加高级的交互功能。

- [实例](#实例)
	- [自定义排序图标](#自定义排序图标)
- [文档](#文档)
	- [配置选项（Options）](#配置选项options)
		- [特性（Feature）](#特性feature)
	- [应用程序接口（API）](#应用程序接口api)
	- [事件（Events）](#事件events)
	- [按钮（）](#按钮)
	- [数据类型（）](#数据类型)
- [参考手册](#参考手册)
- [参考](#参考)

## 实例

### 自定义排序图标

1. 排序图标样式

```scss
table.dataTable {
  thead {
    .sorting {
      &:after {
        opacity: 0.3;
        content: "\f0dc";
        font-family: FontAwesome;
      }
      &_asc {
        &:after {
          content: "\f0de";
          font-family: FontAwesome;
          color: $color-active;
        }
      }

      &_desc {
        &:after {
          content: "\f0dd";
          content: none;
          font-family: FontAwesome;
          color: $color-active;
        }
      }
    }
  }
}
```

2. 自定义组合图标

```js
$("#example").dataTables({
  columns: [
    {
      title: `${title}<span class="caret-wrapper">
        <i class="fa fa-caret-up"></i>
        <i class="fa fa-caret-down"></i>
        </span>`
    }
  ]
});
```

## 文档

### 配置选项（Options）

DataTables 是一个可高度配置化的类库，可以在生成 HTML tables 过程中的所有方面实现定制。所有特性可以通过打开、关闭或者定制来满足你对表格所有的要求。 定制要先定义一个 `options`，然后传入`$().DataTable()`构造函数，通过定制 `options` 的内容来实现定制。

#### 特性（Feature）

```js
$("#example").dataTable({
  // 特性(Features)
  jqueryUI: false, // 控制是否使用jquerui的样式（需要引入jqueryui的css）
  autoWidth: true, // 控制Datatables是否自适应宽度
  info: true, // 控制是否显示表格左下角的信息
  lengthChange: true, // 是否允许用户改变表格每页显示的记录数
  ordering: true, // 是否允许Datatables开启排序
  paging: true, // 是否开启本地分页
  processing: false, //是否显示处理状态(排序的时候，数据很多耗费时间长的话，也会显示这个)
  scrollX: false, // 设置水平滚动
  scrollY: "...", // 设置垂直滚动
  searching: true, // 是否允许Datatables开启本地搜索
  serverSide: false, // 是否开启服务器模式
  stateSave: false, // 保存状态 - 在页面重新加载的时候恢复状态（页码等内容）
  deferRender: false, // 控制Datatables的延迟渲染，可以提高初始化的速度

  // 数据(Data)
  ajax: {
    // 从一个ajax数据源读取数据给表格内容
    data: [] // 增加或修改通过Ajax提交到服务端的请求数据
  },
  data: [], // 指定table显示的数据

  // 回调函数(Callbacks)

  // 配置(Options)
  deferLoading: null, // 延迟请求加载服务端的数据，直到表格第二次绘制
  destroy: null, // 销毁所有符合选择的table，并且用新的options重新创建表格
  displayStart: null, // 初始化显示的时候从第几条数据开始显示(一开始显示第几页)
  dom: null, // 定义DataTables的组件元素的显示和显示顺序
  lengthMenu: null, // 定义在每页显示记录数的select中显示的选项
  orderCellsTop: null, // 控制表头(colspan rowspan 表头)的哪一个单元格可以应用于该列的排序响应
  orderClasses: null, // 高亮显示表格中排序的列
  orderFixed: null, // 排序始终作用于表格
  orderMulti: null, // 多列排序控制
  order: null, // 表格在初始化的时候的排序
  pageLength: 10, // 改变初始化页长度（每页多少条数据）
  pagingType: null, // 分页按钮显示选项
  renderer: null, // 显示组件渲染器类型
  retrieve: null, // 检索已经存在的Datatables实例
  rowIdr: null, // 数据属性，Datatables在渲染的时候给 trTag设置的ID
  scrollCollapse: null, // 当显示更少的记录时，是否允许表格减少高度
  searchCols: null, // 给每一列定义一个初始的搜索条件
  searchDelay: null, // 设定搜索的间隔时间。
  search: {
    // 设置一个全局的过滤条件
    caseInsensitive: null, // 在搜索或者过滤时，是否大小写敏感
    regex: null, // 允许或者禁止对在搜索字符串中出现的正则表达式字符强制编码
    search: null, // 初始化时的表格的过滤（搜索）条件
    smart: null // 允许或者禁止DataTables的只能过滤（搜索）功能
  },
  stateDuration: null, // 状态保存有效期
  stripeClasses: null, // 设置斑马条（奇偶行）的css class
  tabIndex: null, // Tab键控制键盘导航
  // 列(Columns)
  columns: [
    // 设定列的所有初始属性
    {}
  ],
  columnDefs: [
    // 设置定义列的初始属性
    {
      target: [] // 为一个或多个列编制定义
    }
  ]
  // 国际化(Internationalisation)

  // 静态方法(Static)

  // 自动填充(AutoFill)

  // 按钮(Buttons)
});
```

数据(Data)
回调函数(Callbacks)
配置(Options)
列(Columns)
国际化(Internationalisation)
静态方法(Static)
自动填充(AutoFill)
按钮(Buttons)
拖动列(ColReorder)
编辑器(Editor)
固定列(FixedColumns)

### 应用程序接口（API）

```js
var table = $("#example").dataTable();
// 核心(Core)

// 单元格(Cells)

// 列(Columns)

// 行(Rows)

// 表格(Tables)

// 实用(Utility)

// 静态方法(Static)
```

### 事件（Events）

```js
```

### 按钮（）

### 数据类型（）

## 参考手册

## 参考

- [Datatables 中文网](http://www.datatables.club/)
