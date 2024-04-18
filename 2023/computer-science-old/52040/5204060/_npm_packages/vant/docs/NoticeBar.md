---
created: 2022-07-27T15:31:11 (UTC +08:00)
tags: []
source: https://vant-contrib.gitee.io/vant/#/zh-CN/button
author: 
---

# NoticeBar 通知栏 - Vant 3

> ## Excerpt
> Mobile UI Components built on Vue

---
### 引入

通过以下方式来全局注册组件，更多注册方式请参考[组件注册](https://vant-contrib.gitee.io/vant/#/zh-CN/advanced-usage#zu-jian-zhu-ce)。

```
import { createApp } from 'vue';
import { NoticeBar } from 'vant';

const app = createApp();
app.use(NoticeBar);
```

## 代码演示

### 基础用法

通过 `text` 属性设置通知栏的内容，通过 `left-icon` 属性设置通知栏左侧的图标。

```
<van-notice-bar
  left-icon="volume-o"
  text="无论我们能活多久，我们能够享受的只有无法分割的此刻，此外别无其他。"
/>
```

### 滚动播放

通知栏的内容长度溢出时会自动开启滚动播放，通过 `scrollable` 属性可以控制该行为。

```
<!-- 文字较短时，通过设置 scrollable 属性开启滚动播放 -->
<van-notice-bar scrollable text="米袋虽空——樱花开哉！" />

<!-- 文字较长时，通过禁用 scrollable 属性关闭滚动播放 -->
<van-notice-bar
  :scrollable="false"
  text="不会回头的东西有四件：说出口的话、离弦的箭、逝去的生活和失去的机会。"
/>
```

### 多行展示

文字较长时，可以通过设置 `wrapable` 属性来开启多行展示。

```
<van-notice-bar
  wrapable
  :scrollable="false"
  text="不会回头的东西有四件：说出口的话、离弦的箭、逝去的生活和失去的机会。"
/>
```

### 通知栏模式

通知栏支持 `closeable` 和 `link` 两种模式。

```
<!-- closeable 模式，在右侧显示关闭按钮 -->
<van-notice-bar mode="closeable">米袋虽空——樱花开哉！</van-notice-bar>

<!-- link 模式，在右侧显示链接箭头 -->
<van-notice-bar mode="link">米袋虽空——樱花开哉！</van-notice-bar>
```

### 自定义样式

通过 `color` 属性设置文本颜色，通过 `background` 属性设置背景色。

```
<van-notice-bar color="#1989fa" background="#ecf9ff" left-icon="info-o">
  米袋虽空——樱花开哉！
</van-notice-bar>
```

### 垂直滚动

搭配 NoticeBar 和 Swipe 组件，可以实现垂直滚动的效果。

```
<van-notice-bar left-icon="volume-o" :scrollable="false">
  <van-swipe
    vertical
    class="notice-swipe"
    :autoplay="3000"
    :show-indicators="false"
  >
    <van-swipe-item>明月直入，无心可猜。</van-swipe-item>
    <van-swipe-item>仙人抚我顶，结发受长生。</van-swipe-item>
    <van-swipe-item>今人不见古时月，今月曾经照古人。</van-swipe-item>
  </van-swipe>
</van-notice-bar>

<style>
  .notice-swipe {
    height: 40px;
    line-height: 40px;
  }
</style>
```

## API

### Props

| 参数 | 说明 | 类型 | 默认值 |
| --- | --- | --- | --- |
| mode | 通知栏模式，可选值为 `closeable` `link` | _string_ | `''` |
| text | 通知文本内容 | _string_ | `''` |
| color | 通知文本颜色 | _string_ | `#ed6a0c` |
| background | 滚动条背景 | _string_ | `#fffbe8` |
| left-icon | 左侧图标名称或图片链接，等同于 Icon 组件的 [name 属性](https://vant-contrib.gitee.io/vant/#/zh-CN/icon#props) | _string_ | \- |
| delay | 动画延迟时间 (s) | _number | string_ | `1` |
| speed | 滚动速率 (px/s) | _number | string_ | `60` |
| scrollable | 是否开启滚动播放，内容长度溢出时默认开启 | _boolean_ | \- |
| wrapable | 是否开启文本换行，只在禁用滚动时生效 | _boolean_ | `false` |

### Events

| 事件名 | 说明 | 回调参数 |
| --- | --- | --- |
| click | 点击通知栏时触发 | _event: MouseEvent_ |
| close | 关闭通知栏时触发 | _event: MouseEvent_ |
| replay | 每当滚动栏重新开始滚动时触发 | \- |

### 方法

通过 ref 可以获取到 NoticeBar 实例并调用实例方法，详见[组件实例方法](https://vant-contrib.gitee.io/vant/#/zh-CN/advanced-usage#zu-jian-shi-li-fang-fa)。

| 方法名 | 说明 | 参数 | 返回值 |
| --- | --- | --- | --- |
| reset `v3.1.1` | 重置通知栏到初始状态 | \- | \- |

### 类型定义

组件导出以下类型定义：

```
import type { NoticeBarMode, NoticeBarProps, NoticeBarInstance } from 'vant';
```

`NoticeBarInstance` 是组件实例的类型，用法如下：

```
import { ref } from 'vue';
import type { NoticeBarInstance } from 'vant';

const noticeBarRef = ref<NoticeBarInstance>();

noticeBarRef.value?.reset();
```

### Slots

| 名称 | 内容 |
| --- | --- |
| default | 通知文本内容 |
| left-icon | 自定义左侧图标 |
| right-icon | 自定义右侧图标 |

## 主题定制

### 样式变量

组件提供了下列 CSS 变量，可用于自定义样式，使用方法请参考 [ConfigProvider 组件](https://vant-contrib.gitee.io/vant/#/zh-CN/config-provider)。

| 名称 | 默认值 | 描述 |
| --- | --- | --- |
| \--van-notice-bar-height | _40px_ | \- |
| \--van-notice-bar-padding | _0 var(--van-padding-md)_ | \- |
| \--van-notice-bar-wrapable-padding | _var(--van-padding-xs) var(--van-padding-md)_ | \- |
| \--van-notice-bar-text-color | _var(--van-orange-dark)_ | \- |
| \--van-notice-bar-font-size | _var(--van-font-size-md)_ | \- |
| \--van-notice-bar-line-height | _24px_ | \- |
| \--van-notice-bar-background-color | _var(--van-orange-light)_ | \- |
| \--van-notice-bar-icon-size | _16px_ | \- |
| \--van-notice-bar-icon-min-width | _24px_ | \- |
