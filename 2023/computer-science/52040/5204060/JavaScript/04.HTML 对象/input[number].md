input:number 时文本框中任可会输入错误

- e
- 多个小数点

当输入错误时导致取值为空
为了避免该类错误
故

思路(保留两位小数的非负数)

- onkeypress 禁止 e 和负号输入，判断输入小数点
- oninput 检测为空以及小数点
- onbulr 裁剪多余小数位数

```html
<input
  type="number"
  min="0"
  oninput="this.value=setLimitNonNumberOnInput(this.value)"
  onkeypress="return setLimitNonNumber(event)"
  onblur="this.value=setLimitNonNumberOnBlur(this.value)"
/>
```

```js
function setLimitNonNumber(event) {
  // 判断是否非数字和小数点;
  // console.log(/[0-9.]/.test(String.fromCharCode(event.keyCode)));
  if (!/[0-9.]/.test(String.fromCharCode(event.keyCode))) {
    return false;
  }
  // 根据已有值判断
  // 判断是否有小数点
  // console.log(/[.]/.test($(event.path[0]).val()));
  if (
    /[.]/.test($(event.path[0]).val()) &&
    /[.]/.test(String.fromCharCode(event.keyCode))
  ) {
    return false;
  }
  // console.log(event);
  // console.log(event.path[0]);
  // console.log($(event.path[0]).val());

  return true;
}

function setLimitNonNumberOnInput(val) {
  console.log(val);
  // 判断是否为空-->为空
  if (val == "") {
    return "0.00";
  }
  // 判断是否有小数点-->没有
  if (!/[.]/.test(val)) {
    return val + ".00";
  }

  return val;
}

function setLimitNonNumberOnBlur(val) {
  console.log(val);
  // console.log(val.indexOf("."));
  // 有小数点-->留小数点后两位
  if (val.length < val.indexOf(".") + 3) {
    val += "0";
  }
  val = val.substring(0, val.indexOf(".") + 3);

  return val;
}
```
