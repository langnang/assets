import Vue from "vue";
import ECharts from "vue-echarts";
import { use, registerTheme } from "echarts/core";

// import ECharts modules manually to reduce bundle size
import { CanvasRenderer } from "echarts/renderers";
import {
  BarChart,
  LineChart,
  ScatterChart,
  EffectScatterChart
} from "echarts/charts";
import {
  GridComponent,
  TooltipComponent,
  TitleComponent,
  LegendComponent,
  GeoComponent
} from "echarts/components";

use([
  CanvasRenderer,
  BarChart,
  LineChart,
  GridComponent,
  TitleComponent,
  TooltipComponent,
  LegendComponent,
  GeoComponent,
  ScatterChart,
  EffectScatterChart
]);

import theme from "./../styles/echarts-theme.json";
// registering custom theme
registerTheme("dark", theme);

// register globally (or you can do it locally)
Vue.component("v-chart", ECharts);
