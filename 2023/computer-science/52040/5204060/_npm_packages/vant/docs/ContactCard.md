---
created: 2022-07-27T15:33:23 (UTC +08:00)
tags: []
source: https://vant-contrib.gitee.io/vant/#/zh-CN/button
author: 
---

# ContactCard 联系人卡片 - Vant 3

> ## Excerpt
> Mobile UI Components built on Vue

---
### 引入

通过以下方式来全局注册组件，更多注册方式请参考[组件注册](https://vant-contrib.gitee.io/vant/#/zh-CN/advanced-usage#zu-jian-zhu-ce)。

```
import { createApp } from 'vue';
import { ContactCard } from 'vant';

const app = createApp();
app.use(ContactCard);
```

## 代码演示

### 添加联系人

```
<van-contact-card type="add" @click="onAdd" />
```

```
import { Toast } from 'vant';

export default {
  setup() {
    const onAdd = () => Toast('新增');
    return {
      onAdd,
    };
  },
};
```

### 编辑联系人

```
<van-contact-card type="edit" :tel="tel" :name="name" @click="onEdit" />
```

```
import { ref } from 'vue';
import { Toast } from 'vant';

export default {
  setup() {
    const tel = ref('13000000000');
    const name = ref('张三');
    const onEdit = () => Toast('edit');
    return {
      tel,
      name,
      onEdit,
    };
  },
};
```

### 不可编辑

```
<van-contact-card type="edit" name="张三" tel="13000000000" :editable="false" />
```

## API

### Props

| 参数 | 说明 | 类型 | 默认值 |
| --- | --- | --- | --- |
| type | 卡片类型，可选值为 `edit` | _string_ | `add` |
| name | 联系人姓名 | _string_ | \- |
| tel | 联系人手机号 | _string_ | \- |
| add-text | 添加时的文案提示 | _string_ | `添加联系人` |
| editable | 是否可以编辑联系人 | _boolean_ | `true` |

### Events

| 事件名 | 说明 | 回调参数 |
| --- | --- | --- |
| click | 点击时触发 | _event: MouseEvent_ |

### 类型定义

组件导出以下类型定义：

```
import type { ContactCardType, ContactCardProps } from 'vant';
```

## 主题定制

### 样式变量

组件提供了下列 CSS 变量，可用于自定义样式，使用方法请参考 [ConfigProvider 组件](https://vant-contrib.gitee.io/vant/#/zh-CN/config-provider)。

| 名称 | 默认值 | 描述 |
| --- | --- | --- |
| \--van-contact-card-padding | _var(--van-padding-md)_ | \- |
| \--van-contact-card-add-icon-size | _40px_ | \- |
| \--van-contact-card-add-icon-color | _var(--van-primary-color)_ | \- |
| \--van-contact-card-value-line-height | _var(--van-line-height-md)_ | \- |
