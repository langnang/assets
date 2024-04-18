<template>
  <div class="app-container spider spider-index">
    <el-card>
      <div slot="header">
        <span class="el-card-header__title">爬虫列表</span>
        <span class="el-card-header__operate">
          <el-button size="mini" circle type="default" icon="el-icon-search"></el-button>
          <el-button size="mini" circle type="primary" icon="el-icon-plus" @click="onCreate"></el-button>
          <el-button size="mini" circle type="warning" icon="el-icon-edit"></el-button>
          <el-button size="mini" circle type="danger" icon="el-icon-delete"></el-button>
          <el-button size="mini" circle type="primary">
            <font-awesome-icon :icon="['fas', 'upload']" />
          </el-button>
          <el-button size="mini" circle type="primary">
            <font-awesome-icon :icon="['fas', 'download']" />
          </el-button>
        </span>
      </div>
      <ContentTableVue />
    </el-card>
  </div>
</template>

<script>
import ContentTableVue from '@/components/Content/ContentTable.vue'
export default {
  name: 'SpiderIndex',
  components: {
    ContentTableVue
  },
  methods: {
    onCreate() {
      this.$router.push('/spider/create')
    }
  }
}
</script>

<style></style>
