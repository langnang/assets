## [¶](https://element.eleme.cn/#/zh-CN/component/timeline#timeline-shi-jian-xian) Timeline 时间线

可视化地呈现时间流信息。

### [¶](https://element.eleme.cn/#/zh-CN/component/timeline#ji-chu-yong-fa) 基础用法

Timeline 可拆分成多个按照时间戳正序或倒序排列的 activity，时间戳是其区分于其他控件的重要特征，使⽤时注意与 Steps 步骤条等区分。

### [¶](https://element.eleme.cn/#/zh-CN/component/timeline#ding-yi-jie-dian-yang-shi) ⾃定义节点样式

可根据实际场景⾃定义节点尺⼨、颜⾊，或直接使⽤图标。

### [¶](https://element.eleme.cn/#/zh-CN/component/timeline#ding-yi-shi-jian-chuo) ⾃定义时间戳

当内容在垂直⽅向上过⾼时，可将时间戳置于内容之上。

-   2018/4/12
    
    #### 更新 Github 模板
    
    王小虎 提交于 2018/4/12 20:46
    
-   2018/4/3
    
    #### 更新 Github 模板
    
    王小虎 提交于 2018/4/3 20:46
    
-   2018/4/2
    
    #### 更新 Github 模板
    
    王小虎 提交于 2018/4/2 20:46
    

### [¶](https://element.eleme.cn/#/zh-CN/component/timeline#timeline-attributes) Timeline Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| reverse | 指定节点排序方向，默认为正序 | boolean | — | false |

### [¶](https://element.eleme.cn/#/zh-CN/component/timeline#timeline-item-attributes) Timeline-item Attributes

| 参数 | 说明 | 类型 | 可选值 | 默认值 |
| --- | --- | --- | --- | --- |
| timestamp | 时间戳 | string | \- | — |
| hide-timestamp | 是否隐藏时间戳 | boolean | — | false |
| placement | 时间戳位置 | string | top / bottom | bottom |
| type | 节点类型 | string | primary / success / warning / danger / info | \- |
| color | 节点颜色 | string | hsl / hsv / hex / rgb | \- |
| size | 节点尺寸 | string | normal / large | normal |
| icon | 节点图标 | string | — | \- |

### [¶](https://element.eleme.cn/#/zh-CN/component/timeline#timeline-item-slot) Timeline-Item Slot

| name | 说明 |
| --- | --- |
| — | Timeline-Item 的内容 |
| dot | 自定义节点 |