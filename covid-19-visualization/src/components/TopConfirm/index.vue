<template>
  <div>
    <v-chart class="chart" :option="option" style="height:48vh;" />
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
    ...mapGetters(["present", "map_active"]),
    option() {
      if (!this.present) {
        return {};
      }
      const top10 = this.present
        .slice(0, this.present.left)
        .sort((a, b) => b.total.nowConfirm - a.total.nowConfirm)
        .slice(0, 10);
      return {
        title: {
          text: this.map_active.name + "前十确诊病例"
        },
        tooltip: {
          trigger: "axis",
          axisPointer: {
            type: "shadow"
          }
        },
        grid: {
          left: "3%",
          right: "4%",
          bottom: "3%",
          containLabel: true
        },
        xAxis: {
          type: "value",
          boundaryGap: [0, 0.01]
        },
        yAxis: {
          type: "category",
          data: top10.map(v => v.name).reverse()
        },
        series: [
          {
            type: "bar",
            data: top10.map(v => v.total.nowConfirm).reverse(),
            name: "确诊"
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
