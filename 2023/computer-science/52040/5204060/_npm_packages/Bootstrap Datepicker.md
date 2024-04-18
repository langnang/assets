# Bootstrap Datepicker

> 基于 bootstrap 的日历选择器

- [实例](#实例)
	- [检测`isDatepicker`](#检测isdatepicker)
- [文档](#文档)
	- [Options](#options)
- [参考](#参考)

## 实例

### 检测`isDatepicker`

```js
const isDatepicker = el => {
	if (isString(el)) {
	}
	if (isObject(el)) {
	}
};
```

## 文档

<details>

### Options

```js
$("#example").datepicker({
	autoclose: false,
	assumeNearbyYear: false,
	beforeShowDay: () => {},
	beforeShowMonth: () => {},
	beforeShowYear: () => {},
	beforeShowDecade: () => {},
	beforeShowCentury: () => {},
	calendarWeeks: false,
	clearBtn: false,
	container: "body",
	datesDisabled: [],
	daysOfWeekDisabled: [],
	daysOfWeekHighlighted: [],
	defaultViewDate: "today",
	disableTouchKeyboard: false,
	enableOnReadonly: true,
	endDate: Infinity,
	forceParse: true,
	format: "mm/dd/yyyy",
	immediateUpdates: false,
	inputs: null,
	keepEmptyValues: false,
	keyboardNavigation: true,
	language: "en",
	maxViewMode: 4, // "centuries"
	minViewMode: 0, // "days"
	multidate: false,
	multidateSeparator: ",",
	orientation: "auto",
	showOnFocus: true,
	startDate: -Infinity,
	startView: 0, // "days" (current month)
	templates: null,
	title: "",
	todayBtn: false,
	todayHighlight: true,
	toggleActive: false,
	weekStart: 0, // (Sunday)
	zIndexOffset: 10
});
```

</details>

## 参考
