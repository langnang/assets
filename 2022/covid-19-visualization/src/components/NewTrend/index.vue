<template>
  <div>
    <v-chart class="chart" :option="option" style="height:25vh;" />
  </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  name: "NewTrend",
  components: {},
  provide: {},
  data() {
    return {};
  },
  computed: {
    ...mapGetters(["history_new", "map_active"]),
    option() {
      if (!this.history_new) {
        return {};
      }
      return {
        tooltip: {
          trigger: "axis"
        },
        grid: {
          left: "3%",
          right: "4%",
          bottom: "3%",
          containLabel: true
        },
        title: {
          text: this.map_active.name + "疫情新增趋势"
        },
        xAxis: {
          type: "category",
          data: this.history_new.slice(0, 30).map(item => item.date.substr(5))
        },
        yAxis: {
          type: "value"
        },
        series: [
          {
            smooth: true,
            data: this.history_new.slice(0, 30).map(item => item.today.input),
            type: "line",
            name: "新增"
          }
        ]
      };
    }
  },
  created() {},
  methods: {}
};
</script>

<style scoped></style>
