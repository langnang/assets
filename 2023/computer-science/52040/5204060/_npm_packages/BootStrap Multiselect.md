# Bootstrap Multiselect

> 基于 Bootstrap 的多选下拉框

## 实例

### 检测`isMultiselect`

### 多选限制`limit`

```js
const limit = (
  el,
  min,
  max,
  opts = {
    onChange: (option, checked) => {}
  }
) => {
  el.multiselect("setOptions", {
    onChange: function(option, checked) {
      // 鼠标选择的值
      const value = option[0].value;
      // el所有选中的值
      const valueOfSelect = el.val();

      const index = valueOfSelect.indexOf(value) + 1;

      // 选中&&结果长度大于最大值-->减少选中值以便于维持限制
      if (checked && valueOfSelect.length > max) {
        if (index >= valueOfSelect.length / 2) {
          el.multiselect("deselect", valueOfSelect.shift());
        } else {
          el.multiselect("deselect", valueOfSelect.pop());
        }
        // console.log(valueOfSelect);
        el.multiselect("updateButtonText");

        // 回调函数
        opts.onChange(option, checked);
      }
      // 取消选中&&结果长度等于最小值-->禁止取消选中以便于维持限制
      if (!checked && valueOfSelect.length < min) {
        el.multiselect("select", value);
        el.multiselect("updateButtonText");
      } else {
        opts.onChange(option, checked);
      }
    }
  });
};
```

### 二级联动`linkTwo`

### 三级联动`linkThree`

### 四级联动`linkFour`

### 多级联动`linkN`

## 文档

### Options

```js
$("#example").multiselect({
  buttonClass: "btn btn-link", //显示按钮style
  buttonWidth: "400px", //按钮宽度
  inheritClass: true, //继承原来select的button的class
  buttonContainer: '<div class="btn-group" />', //承载按钮和下拉框
  selectedClass: "multiselect-selected", //选中项样式
  optionClass: function(element) {
    var value = $(element).val();

    if (value % 2 == 0) {
      return "even";
    } else {
      return "odd";
    }
  },
  optionLabel: function(element) {
    return $(element).html() + "(" + $(element).val() + ")";
  },
  buttonWidth: "150px", //选中内容长度超过150显示4selected
  enableClickableOptGroups: true, //同时取组或者all
  enableCollapsibleOptGroups: true, //组可折叠
  enableFiltering: true, //过滤
  filterPlaceholder: "Search for something...",
  filterBehavior: "value", //根据value或者text过滤
  enableFullValueFiltering: true, //能否全字匹配
  enableCaseInsensitiveFiltering: true, //不区分大小写
  includeSelectAllOption: true, //全选
  selectAllText: "Check all!", //全选的checkbox名称
  selectAllNumber: false, //true显示allselect（6）,false显示allselect
  selectAllName: "select-all-name",
  selectAllValue: "select-all-value", //可以为strig或者数字
  selectAllJustVisible: false, //选择所有的。true为全选可见的
  onSelectAll: function() {
    alert("onSelectAll triggered.");
  },
  disableIfEmpty: true, //没有选项时readonly
  disabledText: "Disabled ...", //disabled时显示的文字说明
  //下拉选项摆放在右侧
  buttonWidth: "400px",
  dropRight: true,
  //下拉选项摆放在顶部
  maxHeight: 400,
  dropUp: true,
  //摆放在左侧默认为200
  maxHeight: 200,
  //见服务器端名称
  checkboxName: "multiselect[]",
  //初始化
  onInitialized: function(select, container) {
    alert("Initialized.");
  },
  onChange: function(option, checked) {
    //change事件改变
    console.log(
      option.length + " options " + (checked ? "selected" : "deselected")
    );
  },
  //下拉回调函数
  onDropdownShow: function(event) {
    alert("Dropdown shown.");
  },
  //下拉框关闭回调函数
  onDropdownHide: function(event) {
    alert("Dropdown closed.");
  },
  //点击select调用，然后显示出下拉框
  onDropdownHidden: function(event) {
    alert("Dropdown closed.");
  }
});
```

### Methods

## 参考

- http://davidstutz.de/bootstrap-multiselect/
