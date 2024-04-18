# 随机数（random）

```js
const random = (
	len = 1,
	min = 0,
	max = 1,
	opts = {
		isInt: true
	}
) => {
	if (len <= 1) {
		return min + (max - min) * Math.random();
	}
	let array = [];
	for (let i = 0; i <= len - 1; i++) {
		array.push(min + (max - min) * Math.random());
	}
	return array;
};
```

```js
const random = max => Math.random() * max;
```

```js
const random = (min, max) => min + Math.random() * (max - min);
```

```js
const random = (min, max, opts = { isInt: true }) =>
	opts.isInt
		? parseInt(min + Math.random() * (max - min))
		: min + Math.random() * (max - min);
```
