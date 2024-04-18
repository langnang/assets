<template>
  <div>
    <v-chart class="chart" :option="option" style="height:25vh;" />
  </div>
</template>

<script>
import { mapGetters } from "vuex";
export default {
  name: "ComfirmRate",
  components: {},
  provide: {},
  data() {
    return {};
  },
  computed: {
    ...mapGetters(["new_trend", "present", "map_active"]),
    option() {
      if (!this.present) {
        return {};
      }
      return {
        title: {
          text: this.map_active.name + "疫情占比"
        },

        series: [
          {
            type: "pie",
            radius: ["40%", "70%"],
            data: [
              {
                value: this.present.reduce(
                  (total, v) => total + v.total.heal,
                  0
                ),
                name: "治愈"
              },
              {
                value: this.present.reduce(
                  (total, v) => total + v.total.dead,
                  0
                ),
                name: "死亡"
              }
            ],
            avoidLabelOverlap: false,
            itemStyle: {
              borderRadius: 4,
              borderColor: "#fff",
              borderWidth: 1
            },
            label: {
              show: false,
              position: "center"
            },
            emphasis: {
              label: {
                show: true,
                fontSize: "24"
              }
            },
            labelLine: {
              show: false
            }
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
