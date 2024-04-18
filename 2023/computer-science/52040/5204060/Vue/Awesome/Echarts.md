# Echarts - Vue

```node
$ npm install echarts vue-echarts
```

```html
<template>
	<div class="echarts-container">
		<VueECharts :options="options"></VueECharts>
		<font-awesome-icon
			v-if="code"
			:icon="['fas','code']"
			@click="showCode"
		></font-awesome-icon>
	</div>
</template>
<script>
	import VueECharts from 'vue-echarts';
	import 'echarts/lib/chart/line';
	import 'echarts/lib/component/polar';

	let data = [];

	for (let i = 0; i <= 360; i++) {
		let t = (i / 180) * Math.PI;
		let r = Math.sin(2 * t) * Math.cos(2 * t);
		data.push([r, i]);
	}

	const defaultOptions = {
		title: {
			text: '极坐标双数值轴',
		},
		legend: {
			data: ['line'],
		},
		polar: {
			center: ['50%', '54%'],
		},
		tooltip: {
			trigger: 'axis',
			axisPointer: {
				type: 'cross',
			},
		},
		angleAxis: {
			type: 'value',
			startAngle: 0,
		},
		radiusAxis: {
			min: 0,
		},
		series: [
			{
				coordinateSystem: 'polar',
				name: 'line',
				type: 'line',
				showSymbol: false,
				data: data,
			},
		],
		animationDuration: 2000,
	};

	export default {
		name: 'ECharts',
		props: {
			code: {
				type: Boolean,
				default: false,
			},
			options: {
				type: Object,
				default() {
					return defaultOptions;
				},
			},
		},
		components: {
			VueECharts,
		},
		data() {
			return {};
		},
		methods: {
			showCode() {
				console.log('Show Code');
			},
		},
	};
</script>

<style lang="scss">
	.echarts-container {
		.echarts {
			width: 100%;
			height: 100vh;
		}
		.svg-inline--fa {
			display: none;
			position: absolute;
			right: 10px;
			top: 10px;
		}
		&:hover .svg-inline--fa {
			display: block;
		}
	}
</style>
```
