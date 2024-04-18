<template>
  <el-row :gutter="10">
    <el-col :span="6">
      <el-card shadow="always">
        <p>现有确诊</p>
        {{
          present
            ? present.reduce((total, v) => total + v.total.nowConfirm, 0)
            : 0
        }}
      </el-card>
    </el-col>
    <el-col :span="6">
      <el-card shadow="always">
        <p>累计确诊</p>
        {{
          present ? present.reduce((total, v) => total + v.total.confirm, 0) : 0
        }}
      </el-card>
    </el-col>
    <el-col :span="6">
      <el-card shadow="always">
        <p>累计治愈</p>
        {{
          present ? present.reduce((total, v) => total + v.total.heal, 0) : 0
        }}
      </el-card>
    </el-col>
    <el-col :span="6">
      <el-card shadow="always">
        <p>累计死亡</p>
        {{
          present ? present.reduce((total, v) => total + v.total.dead, 0) : 0
        }}
      </el-card>
    </el-col>
    <el-col :span="24">
      <el-breadcrumb separator-class="el-icon-arrow-right">
        <el-breadcrumb-item v-for="(tab, index) in map_tabs" :key="tab.map">
          <el-button
            type="primary"
            :disabled="map_tabs.length - 1 == index"
            @click="toggleMap(tab.map)"
            size="mini"
          >
            {{ tab.name }}
          </el-button>
        </el-breadcrumb-item>
      </el-breadcrumb>
    </el-col>
  </el-row>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  name: "MainInfo",
  computed: {
    ...mapGetters(["map_tabs", "present"]),
    present_confirm() {
      return this.present?.reduce((total, v) => total + v.total.nowConfirm, 0);
    }
  },
  methods: {
    toggleMap(name) {
      if (name == "china") {
        this.$parent.$refs.map.initChinaMap();
      }
    }
  }
};
</script>
