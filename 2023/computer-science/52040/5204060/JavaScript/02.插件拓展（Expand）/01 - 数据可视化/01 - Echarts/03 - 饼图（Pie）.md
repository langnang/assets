# 饼图（Pie）

- [实现](#%e5%ae%9e%e7%8e%b0)
  - [基本饼图 `basicPieChart()`](#%e5%9f%ba%e6%9c%ac%e9%a5%bc%e5%9b%be-basicpiechart)
- [配置项（Option）](#%e9%85%8d%e7%bd%ae%e9%a1%b9option)
- [官方实例](#%e5%ae%98%e6%96%b9%e5%ae%9e%e4%be%8b)
- [问题（Q&A）](#%e9%97%ae%e9%a2%98qa)
  - [扇区间间隔](#%e6%89%87%e5%8c%ba%e9%97%b4%e9%97%b4%e9%9a%94)

## 实现

### 基本饼图 `basicPieChart()`

```js
funciton(data,series){
    series=Object.assign({
        type:"pie",
        label:{
            normal:{
                show:false
            }
        }
    },series);
    data.forEach(v=>{

    })
}
```

## 配置项（Option）

<details>

```js
{
    type: 'pie',
    id: "",// 组件 ID。默认不指定。指定则可用于在 option 或者 API 中引用组件。
    name: "",// 系列名称，用于tooltip的显示，legend 的图例筛选，在 setOption 更新数据和配置项时用于指定对应的系列。
    legendHoverLink: true,// 是否启用图例 hover 时的联动高亮
    hoverAnimation: true,// 是否开启 hover 在扇区上的放大动画效果。
    hoverOffset: 10,// 高亮扇区的偏移距离
    selectedMode: false,// 选中模式，表示是否支持多个选中，默认关闭，支持布尔值和字符串，字符串取值可选'single'，'multiple'，分别表示单选还是多选。
    selectedOffset: 10,// 选中扇区的偏移距离。
    clockwise: true,// 饼图的扇区是否是顺时针排布
    startAngle: 90,// 起始角度，支持范围[0, 360]。
    minAngle: 0,// 最小的扇区角度（0 ~ 360），用于防止某个值过小导致扇区太小影响交互。
    minShowLabelAngle: 0,// 小于这个角度（0 ~ 360）的扇区，不显示标签（label 和 labelLine）。
    roseType: false,// 是否展示成南丁格尔图，通过半径区分数据大小
    avoidLabelOverlap: true,// 是否启用防止标签重叠策略，默认开启，在标签拥挤重叠的情况下会挪动各个标签的位置，防止标签间的重叠。
    stillShowZeroSum: true,// 是否在数据和为0（一般情况下所有数据为0） 的时候不显示扇区。
    cursor: 'pointer',// 鼠标悬浮时在图形元素上时鼠标的样式
    label: {},
    labelLine: {},
    itemStyle: {},
    emphasis: {},
    zlevel: 0,
    z: 2,
    center: ['50%', '50%'],
    radius: [0, '75%'],
    seriesLayoutBy: 'column',
    datasetIndex: 0,
    data: [{}],
    markPoint: {},
    markLine: {},
    markArea: {},
    silent: false,// 图形是否不响应和触发鼠标事件，默认为 false，即响应和触发鼠标事件。
    animationType: 'expansion',
    animationTypeUpdate: 'transition',
    animation: true,
    animationThreshold: 2000,
    animationDuration: 1000,
    animationEasing: cubicOut,
    animationDelay: 0,
    animationDurationUpdate: 300,
    animationEasingUpdate: cubicOut,
    animationDelayUpdate: 0,
    tooltip: {},
}
```

</details>

## 官方实例

<details>
    <div>
        <div style="width:25%;float:left;">
            <h4>Customized Pie</h4>
            <a href="https://www.echartsjs.com/examples/zh/editor.html?c=pie-custom">
                <img src="https://www.echartsjs.com/examples/data/thumb/pie-custom.jpg" />
            </a>
        </div>
        <div style="width:25%;float:left;">
            <h4>Doughnut Chart</h4>
            <a href="https://www.echartsjs.com/examples/zh/editor.html?c=pie-doughnut">
                <img src="https://www.echartsjs.com/examples/data/thumb/pie-doughnut.jpg" />
            </a>
        </div>
        <div style="width:25%;float:left;">
            <h4>Pie with Scrollable Legend</h4>
            <a href="https://www.echartsjs.com/examples/zh/editor.html?c=pie-legend">
                <img src="https://www.echartsjs.com/examples/data/thumb/pie-legend.jpg" />
            </a>
        </div>
        <div style="width:25%;float:left;">
            <h4>Nested Pies</h4>
            <a href="https://www.echartsjs.com/examples/zh/editor.html?c=pie-nest">
                <img src="https://www.echartsjs.com/examples/data/thumb/pie-nest.jpg" />
            </a>
        </div>
        <div style="width:25%;float:left;">
            <h4>Texture on Pie Chart</h4>
            <a href="https://www.echartsjs.com/examples/zh/editor.html?c=pie-pattern">
                <img src="https://www.echartsjs.com/examples/data/thumb/pie-pattern.jpg" />
            </a>
        </div>
        <div style="width:25%;float:left;">
            <h4>Pie Special Label</h4>
            <a href="https://www.echartsjs.com/examples/zh/editor.html?c=pie-rich-text">
                <img src="https://www.echartsjs.com/examples/data/thumb/pie-rich-text.jpg" />
            </a>
        </div>
        <div style="width:25%;float:left;">
            <h4>Nightingale's Rose Diagram</h4>
            <a href="https://www.echartsjs.com/examples/zh/editor.html?c=pie-roseType">
                <img src="https://www.echartsjs.com/examples/data/thumb/pie-roseType.jpg" />
            </a>
        </div>
        <div style="width:25%;float:left;">
            <h4>Referer of a website</h4>
            <a href="https://www.echartsjs.com/examples/zh/editor.html?c=pie-simple">
                <img src="https://www.echartsjs.com/examples/data/thumb/pie-simple.jpg" />
            </a>
        </div>
        <div style="width:25%;float:left;">
            <h4>Default arrangement</h4>
            <a href="https://www.echartsjs.com/examples/zh/editor.html?c=dataset-default">
                <img src="https://www.echartsjs.com/examples/data/thumb/dataset-default.jpg" />
            </a>
        </div>
        <div style="width:25%;float:left;">
            <h4>Calendar Pie</h4>
            <a href="https://www.echartsjs.com/examples/zh/editor.html?c=calendar-pie">
                <img src="https://www.echartsjs.com/examples/data/thumb/calendar-pie.jpg" />
            </a>
        </div>
        <div style="width:25%;float:left;">
            <h4>Share Dataset</h4>
            <a href="https://www.echartsjs.com/examples/zh/editor.html?c=dataset-link">
                <img src="https://www.echartsjs.com/examples/data/thumb/dataset-link.jpg" />
            </a>
        </div>
    </div>
</details>

## 问题（Q&A）

### 扇区间间隔

```js
{
	series: [
		{
			type: "pie",
			data: [
				{
					value: 0,
					name: "",
					itemStyle: {
						normal: {
							borderColor: "#FFFFFF",
							borderWidth: 5
						}
					}
				}
			]
		}
	];
}
```
