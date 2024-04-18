---
created: 2022-07-27T15:28:40 (UTC +08:00)
tags: []
source: https://vant-contrib.gitee.io/vant/#/zh-CN/button
author: 
---

# Radio 单选框 - Vant 3

> ## Excerpt
> Mobile UI Components built on Vue

---
### 引入

通过以下方式来全局注册组件，更多注册方式请参考[组件注册](https://vant-contrib.gitee.io/vant/#/zh-CN/advanced-usage#zu-jian-zhu-ce)。

```
import { createApp } from 'vue';
import { RadioGroup, Radio } from 'vant';

const app = createApp();
app.use(Radio);
app.use(RadioGroup);
```

## 代码演示

### 基础用法

通过 `v-model` 绑定值当前选中项的 name。

```
<van-radio-group v-model="checked">
  <van-radio name="1">单选框 1</van-radio>
  <van-radio name="2">单选框 2</van-radio>
</van-radio-group>
```

```
import { ref } from 'vue';

export default {
  setup() {
    const checked = ref('1');
    return { checked };
  },
};
```

### 水平排列

将 `direction` 属性设置为 `horizontal` 后，单选框组会变成水平排列。

```
<van-radio-group v-model="checked" direction="horizontal">
  <van-radio name="1">单选框 1</van-radio>
  <van-radio name="2">单选框 2</van-radio>
</van-radio-group>
```

### 禁用状态

通过 `disabled` 属性禁止选项切换，在 `Radio` 上设置 `disabled` 可以禁用单个选项。

```
<van-radio-group v-model="checked" disabled>
  <van-radio name="1">单选框 1</van-radio>
  <van-radio name="2">单选框 2</van-radio>
</van-radio-group>
```

### 自定义形状

将 `shape` 属性设置为 `square`，单选框的形状会变成方形。

```
<van-radio-group v-model="checked">
  <van-radio name="1" shape="square">单选框 1</van-radio>
  <van-radio name="2" shape="square">单选框 2</van-radio>
</van-radio-group>
```

### 自定义颜色

通过 `checked-color` 属性设置选中状态的图标颜色。

```
<van-radio-group v-model="checked">
  <van-radio name="1" checked-color="#ee0a24">单选框 1</van-radio>
  <van-radio name="2" checked-color="#ee0a24">单选框 2</van-radio>
</van-radio-group>
```

### 自定义大小

通过 `icon-size` 属性可以自定义图标的大小。

```
<van-radio-group v-model="checked">
  <van-radio name="1" icon-size="24px">单选框 1</van-radio>
  <van-radio name="2" icon-size="24px">单选框 2</van-radio>
</van-radio-group>
```

### 自定义图标

通过 `icon` 插槽自定义图标，并通过 `slotProps` 判断是否为选中状态。

```
<van-radio-group v-model="checked">
  <van-radio name="1">
    单选框 1
    <template #icon="props">
      <img class="img-icon" :src="props.checked ? activeIcon : inactiveIcon" />
    </template>
  </van-radio>
  <van-radio name="2">
    单选框 2
    <template #icon="props">
      <img class="img-icon" :src="props.checked ? activeIcon : inactiveIcon" />
    </template>
  </van-radio>
</van-radio-group>

<style>
  .img-icon {
    height: 20px;
  }
</style>
```

```
import { ref } from 'vue';

export default {
  setup() {
    const checked = ref('1');
    return {
      checked,
      activeIcon:
        'https://fastly.jsdelivr.net/npm/@vant/assets/user-active.png',
      inactiveIcon:
        'https://fastly.jsdelivr.net/npm/@vant/assets/user-inactive.png',
    };
  },
};
```

### 禁用文本点击

设置 `label-disabled` 属性后，点击图标以外的内容不会触发单选框切换。

```
<van-radio-group v-model="checked">
  <van-radio name="1" label-disabled>单选框 1</van-radio>
  <van-radio name="2" label-disabled>单选框 2</van-radio>
</van-radio-group>
```

### 搭配单元格组件使用

搭配单元格组件使用时，需要再引入 `Cell` 和 `CellGroup` 组件。

```
<van-radio-group v-model="checked">
  <van-cell-group inset>
    <van-cell title="单选框 1" clickable @click="checked = '1'">
      <template #right-icon>
        <van-radio name="1" />
      </template>
    </van-cell>
    <van-cell title="单选框 2" clickable @click="checked = '2'">
      <template #right-icon>
        <van-radio name="2" />
      </template>
    </van-cell>
  </van-cell-group>
</van-radio-group>
```

## API

### Radio Props

| 参数 | 说明 | 类型 | 默认值 |
| --- | --- | --- | --- |
| name | 标识符，通常为一个唯一的字符串或数字 | _any_ | \- |
| shape | 形状，可选值为 `square` | _string_ | `round` |
| disabled | 是否为禁用状态 | _boolean_ | `false` |
| label-disabled | 是否禁用文本内容点击 | _boolean_ | `false` |
| label-position | 文本位置，可选值为 `left` | _string_ | `right` |
| icon-size | 图标大小，默认单位为 `px` | _number | string_ | `20px` |
| checked-color | 选中状态颜色 | _string_ | `#1989fa` |

### RadioGroup Props

| 参数 | 说明 | 类型 | 默认值 |
| --- | --- | --- | --- |
| v-model | 当前选中项的标识符 | _any_ | \- |
| disabled | 是否禁用所有单选框 | _boolean_ | `false` |
| direction | 排列方向，可选值为 `horizontal` | _string_ | `vertical` |
| icon-size | 所有单选框的图标大小，默认单位为 `px` | _number | string_ | `20px` |
| checked-color | 所有单选框的选中状态颜色 | _string_ | `#1989fa` |

### Radio Events

| 事件名 | 说明 | 回调参数 |
| --- | --- | --- |
| click | 点击单选框时触发 | _event: MouseEvent_ |

### RadioGroup Events

| 事件名 | 说明 | 回调参数 |
| --- | --- | --- |
| change | 当绑定值变化时触发的事件 | _name: string_ |

### Radio Slots

| 名称 | 说明 | 参数 |
| --- | --- | --- |
| default | 自定义文本 | \- |
| icon | 自定义图标 | _{ checked: boolean, disabled: boolean }_ |

### 类型定义

组件导出以下类型定义：

```
import type {
  RadioProps,
  RadioShape,
  RadioGroupProps,
  RadioLabelPosition,
  RadioGroupDirection,
} from 'vant';
```

## 主题定制

### 样式变量

组件提供了下列 CSS 变量，可用于自定义样式，使用方法请参考 [ConfigProvider 组件](https://vant-contrib.gitee.io/vant/#/zh-CN/config-provider)。

| 名称 | 默认值 | 描述 |
| --- | --- | --- |
| \--van-radio-size | _20px_ | \- |
| \--van-radio-border-color | _var(--van-gray-5)_ | \- |
| \--van-radio-transition-duration | _var(--van-animation-duration-fast)_ | \- |
| \--van-radio-label-margin | _var(--van-padding-xs)_ | \- |
| \--van-radio-label-color | _var(--van-text-color)_ | \- |
| \--van-radio-checked-icon-color | _var(--van-primary-color)_ | \- |
| \--van-radio-disabled-icon-color | _var(--van-gray-5)_ | \- |
| \--van-radio-disabled-label-color | _var(--van-text-color-3)_ | \- |
| \--van-radio-disabled-background-color | _var(--van-border-color)_ | \- |
