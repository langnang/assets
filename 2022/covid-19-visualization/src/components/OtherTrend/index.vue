<template>
  <div>
    <v-chart class="chart" :option="option" style="height:25vh;" />
  </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  name: "OtherTrend",
  components: {},
  provide: {},
  data() {
    return {};
  },
  computed: {
    ...mapGetters(["new_trend", "map_active"]),
    option() {
      if (!this.new_trend) {
        return {};
      }
      return {
        title: {
          text: this.map_active.name + "确诊、疑似、重症趋势"
        },
        tooltip: {
          trigger: "axis"
        },
        grid: {
          left: "3%",
          right: "4%",
          bottom: "3%",
          containLabel: true
        },
        xAxis: {
          type: "category",
          data: this.new_trend.slice(0, 30).map(item => item.date.substr(5))
        },
        yAxis: {
          type: "value"
        },
        series: [
          {
            smooth: true,
            data: this.new_trend.slice(0, 30).map(item => item.today.confirm),
            type: "line",
            name: "确诊"
          },
          {
            smooth: true,
            data: this.new_trend.slice(0, 30).map(item => item.today.suspect),
            type: "line",
            name: "疑似"
          },
          {
            smooth: true,
            data: this.new_trend
              .slice(0, 30)
              .map(item => item.today.storeConfirm),
            type: "line",
            name: "重症"
          }
        ]
      };
    }
  },
  created() {
    console.log(this.new_trend);
  },
  methods: {}
};
</script>

<style scoped></style>
