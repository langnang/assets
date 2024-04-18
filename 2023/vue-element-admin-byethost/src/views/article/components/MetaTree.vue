<template>
  <section>
    <el-card data-role="section">
      <el-tree ref="tree" :data="data" default-expand-all :default-checked-keys="defaultCheckedKeys" node-key="mid" :props="tree.props" show-checkbox @check-change="handleTreeCheckChange">
      </el-tree>
    </el-card>
  </section>
</template>

<script>
export default {
  name: 'MetaTree',
  props: {
    data: {
      type: Array,
      default: () => []
    },
    defaultCheckedKeys: {
      type: Array,
      default: () => []
    },
    request: {
      type: Object,
      default: () => ({})
    },
    requestParams: {
      type: Object,
      default: () => ({})
    },
    showColumns: {
      type: Array,
      default: () => []
    },
    showPagination: {
      type: Boolean,
      default: true
    }
  },
  data() {
    return {
      loading: false,
      tree: {
        data: [],
        selection: [],
        props: {
          label: 'name',
          children: 'children',
        }
      },
    }
  },
  created() {
  },
  methods: {
    getTableData() {
      this.loading = true
      this.request.select_tree({ ...this.requestParams, }).then(res => {
        console.log('🚀 ~ file: MetaTable.vue:33 ~ this.request.select_meta_list ~ res:', res)
        const { data } = res
        this.tree.data = data
      }).finally(() => {
        this.loading = false
      })
    },
    handleTableSizeChange(val) {
      this.tree.page_size = val
      this.getTableData()
    },
    handleTableCurrentChange(val) {
      this.tree.current_page = val
      this.getTableData()
    },
    handleTreeCheckChange(data, checked, indeterminate) {
      // console.log("🚀 ~ file: MetaTree.vue:68 ~ handleTreeCheckChange ~ handleTreeCheckChange:", { data, checked, indeterminate });
      // this.tree.selection = val;
    },
  }
}
</script>

<style scoped></style>
