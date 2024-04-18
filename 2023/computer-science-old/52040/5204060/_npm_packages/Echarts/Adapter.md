# Adapter - Echarts

## Vue

```powershell
npm install --save vue-echarts
```

```js
import Vue from 'vue'
import ECharts from 'vue-echarts' 

// import ECharts modules manually to reduce bundle size
import 'echarts/lib/chart/line'
import 'echarts/lib/component/polar'

// register component to use
Vue.component('v-chart', ECharts)
```

```html
<template>
    <VueECharts :options="polar" />
</template>
<script>
import VueECharts from "vue-echarts";
import "echarts/lib/chart/line";
import "echarts/lib/component/polar";
export default {
    name: "ECharts",
    components: {
        VueECharts
    },
    data() {
        let data = [];

        for (let i = 0; i <= 360; i++) {
            let t = (i / 180) * Math.PI;
            let r = Math.sin(2 * t) * Math.cos(2 * t);
            data.push([r, i]);
        }

        return {
            polar: {
                title: {
                    text: "极坐标双数值轴"
                },
                legend: {
                    data: ["line"]
                },
                polar: {
                    center: ["50%", "54%"]
                },
                tooltip: {
                    trigger: "axis",
                    axisPointer: {
                        type: "cross"
                    }
                },
                angleAxis: {
                    type: "value",
                    startAngle: 0
                },
                radiusAxis: {
                    min: 0
                },
                series: [
                    {
                        coordinateSystem: "polar",
                        name: "line",
                        type: "line",
                        showSymbol: false,
                        data: data
                    }
                ],
                animationDuration: 2000
            }
        };
    }
};
</script>

<style>
.echarts {
    width: 100%;
    height: 300px;
}
</style>
```
