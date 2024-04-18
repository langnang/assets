<template>
  <div>
    <v-chart
      class="chart"
      :option="option"
      ref="map"
      id="map"
      style="height:100vh;"
      autoresize
    />
  </div>
</template>

<script>
import { mapGetters } from "vuex";
import { registerMap, init } from "echarts/core";

export default {
  name: "ChinaMap",
  components: {},
  provide: {},
  data() {
    return {
      map: null
    };
  },
  computed: {
    ...mapGetters(["new_trend", "map_active", "map_china", "present_confirm"]),
    option() {
      if (!this.map_active || !this.present_confirm || !this.map_china) {
        return {};
      }
      return {
        textStyle: {
          fontFamily: 'Inter, "Helvetica Neue", Arial, sans-serif'
        },
        backgroundColor: "#404a59",
        geo: {
          map: this.map_active ? this.map_active.map : "",
          emphasis: {
            label: {
              show: false
            },
            itemStyle: {
              areaColor: "#2a333d"
            }
          },
          itemStyle: {
            areaColor: "#323c48",
            borderColor: "#111"
          }
        },
        series: [
          {
            name: "pm2.5",
            type: "scatter",
            coordinateSystem: "geo",
            data: this.map_china?.features.map(v => {
              return {
                name: v.properties.name,
                value: v.properties.cp
                  ? v.properties.cp.concat(
                      this.present_confirm.find(
                        item => v.properties.name.indexOf(item.name) == 0
                      )?.value
                    )
                  : []
              };
            }),
            symbolSize: 0,
            label: {
              formatter: "{b}\n{@[2]}",
              position: "top",
              show: true
            },
            itemStyle: {
              color: "#fff"
            }
          }
        ]
      };
    }
  },
  created() {
    this.initWorldMap();
    this.initChinaMap();
  },
  mounted() {
    const myChart = init(this.$refs["map"].$el);
    const map = this.$refs.map;
    map.dispatchAction({
      type: "geoSelect"
    });
    const _vm = this;
    myChart.on("click", function(params) {
      // 停止事件冒泡
      window.event.stopPropagation();
      if (!_vm.map_active || _vm.map_active.map !== "china") {
        return;
      }
      _vm.$store.dispatch("map/getChinaProvince", params.name).then(res => {
        registerMap(res.name, res.data);
        _vm.$store.commit("map/SET_ACTIVE", {
          name: params.name,
          map: res.name
        });
        _vm.$store.commit("map/SET_TABS", {
          name: params.name,
          map: res.name
        });
      });
    });
  },
  methods: {
    initWorldMap() {
      this.$store.dispatch("map/getWorld").then(res => {
        registerMap("world", res);
      });
    },
    initChinaMap() {
      this.$store.dispatch("map/getChina").then(res => {
        registerMap("china", res);
        this.$store.commit("map/SET_ACTIVE", { name: "全国", map: "china" });
        this.$store.commit("map/SET_TABS", { name: "全国", map: "china" });
      });
    }
  }
};
</script>

<style scoped></style>
