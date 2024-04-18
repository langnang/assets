# 检测数组（isArray）

```js
const isArray = object =>
  Object.prototype.toString.call(object) === "[object Array]";
```

- [`Object.prototype.toString`](#objectprototypetostring)
- [`typeof`](#typeof)
- [`instanceof`](#instanceof)

## `Object.prototype.toString`

```js
function isArray(object) {
  return Object.prototype.toString.call(object) === "[object Array]";
}
```

## `typeof`

```js
function(object){
    return typeof object==='array'
}
```

## `instanceof`

```js
function(object){
    return object instanceof Array;
}
```
