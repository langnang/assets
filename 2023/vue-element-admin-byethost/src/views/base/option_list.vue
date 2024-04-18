<template>
  <div v-loading="category.loading" class="app-container webstack webstack-home">
    <el-row :gutter="20">
      <el-col v-for="item in query.$options" :key="item.value" :span="6">
        <el-card v-contextmenu:contextmenu shadow="hover" :disabled="item.disabled" :style="{ 'background-color': item.backgroundColor, 'text-align': 'center' }" @click.native="handleClick(item)">
          <h2> {{ item.label }}</h2>
        </el-card>
      </el-col>
      <!--      <el-col :span="6">-->
      <!--        <el-card shadow="hover" style="text-align: center;" @click="handleInsertBranch">-->
      <!--          <i class="el-icon-plus"></i>-->
      <!--        </el-card>-->
      <!--      </el-col>-->
    </el-row>
    <v-contextmenu ref="contextmenu">
      <v-contextmenu-item @click="handleInsertBranch">新建</v-contextmenu-item>
      <v-contextmenu-item @click="handleDeleteBranch">删除</v-contextmenu-item>
      <v-contextmenu-item @click="handleUpdateBranch">修改</v-contextmenu-item>
      <v-contextmenu-item @click="handleSelectBranch">详情</v-contextmenu-item>
    </v-contextmenu>
  </div>
</template>

<script>
export default {
  name: 'OptionList',
  components: {},
  props: {
    query: {
      type: Object,
      default: () => ({})
    },
    history: {
      type: Array,
      default: () => []
    },
  },
  data() {
    return {
      category: {
        loading: false,
      },
    }
  },
  methods: {
    handleInsertBranch() {
    },
    handleDeleteBranch() {
    },
    handleUpdateBranch() {
    },
    handleSelectBranch() {
    },
    handleClick(row) {
      this.$emit('change', { key: 'target', value: row.value })
      console.log('🚀 ~ file: option_list.vue:59 ~ handleClick ~ row:', row)
      this.$emit('toggle', { to: 'content-table', query: row })
    }
  }
}
</script>

<style lang="scss" scoped>
.el-card[disabled] {
  background-color: #fff !important;
  cursor: not-allowed;
  pointer-events: none;
  opacity: 0.7;
}
</style>
