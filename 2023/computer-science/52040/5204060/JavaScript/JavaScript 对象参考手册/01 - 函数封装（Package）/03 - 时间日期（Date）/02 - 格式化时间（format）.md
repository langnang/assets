# 格式化时间（format）

```js
const format = (date, fm) => {
  fm = fm.replace("YYYY", date.getFullYear());
  fm = fm.replace(
    "MM",
    date.getMonth() + 1 < 10 ? "0" + (date.getMonth() + 1) : date.getMonth() + 1
  );
  fm = fm.replace("DD", date.getDate());
  fm = fm.replace(
    "hh:24",
    date.getHours() < 10 ? "0" + date.getHours() : date.getHours()
  );
  fm = fm.replace(
    "hh:12",
    date.getHours() < 10
      ? "0" + date.getHours()
      : date.getHours() < 11
      ? date.getHours()
      : date.getHours() - 12
  );
  fm = fm.replace(
    "mm",
    date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes()
  );
  fm = fm.replace(
    "ss",
    date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds()
  );

  return fm;
};
```

- [年](#年)
- [月](#月)
- [周](#周)
- [日](#日)
- [小时](#小时)
- [分钟](#分钟)
- [秒](#秒)
- [上午/下午](#上午下午)
- [时间戳](#时间戳)

## 年

## 月

## 周

## 日

## 小时

## 分钟

## 秒

## 上午/下午

## 时间戳
