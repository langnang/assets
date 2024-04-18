<template>
  <section v-loading="loading">
    <el-card data-role="main">
      <el-table :data="table.data" size="small" border height="calc(100vh - 265px)" @selection-change="handleTableSelectionChange">
        <el-table-column align="center" show-overflow-tooltip type="selection"></el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="编号" prop="mid" width="120"></el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="名称" prop="name"></el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="标识" prop="slug"></el-table-column>
        <el-table-column v-if="showColumns.includes('type')" align="center" show-overflow-tooltip label="类型" prop="type"></el-table-column>
        <el-table-column v-if="showColumns.includes('description')" align="center" show-overflow-tooltip label="说明" prop="description"></el-table-column>
        <el-table-column v-if="showColumns.includes('status')" align="center" show-overflow-tooltip label="状态" prop="status"></el-table-column>
        <el-table-column v-if="showColumns.includes('order')" align="center" show-overflow-tooltip label="权重" prop="order"></el-table-column>
        <el-table-column v-if="showColumns.includes('count')" align="center" show-overflow-tooltip label="计数" prop="count"></el-table-column>
        <el-table-column v-if="showColumns.includes('parent')" align="center" show-overflow-tooltip label="父本" prop="parent"></el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="创建时间" prop="created_at" width="133"></el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="更新时间" prop="updated_at" width="133"></el-table-column> </el-table>
    </el-card>
    <el-card v-if="showPagination" data-role="footer">
      <el-pagination background :page-sizes="[10, 15, 20, 50, 100]" :page-size="table.page_size" layout="total, sizes, prev, pager, next, jumper" :total="table.total" @size-change="handleTableSizeChange" @current-change="handleTableCurrentChange">
      </el-pagination>
    </el-card>
  </section>
</template>

<script>
export default {
  name: 'MetaTable',
  props: {
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
      table: {
        data: [],
        current_page: 1,
        total: 0,
        page_size: 15,
        selection: []
      }
    }
  },
  created() {
    this.getTableData()
  },
  methods: {
    getTableData() {
      this.loading = true
      this.request.select_list({ ...this.requestParams, page_size: this.table.page_size }, {
        page: this.table.current_page,
      }).then(res => {
        console.log('🚀 ~ file: MetaTable.vue:33 ~ this.request.select_meta_list ~ res:', res)
        const { data, current_page, total, per_page } = res.data
        this.table.data = data
        this.table.current_page = current_page
        this.table.total = total
        this.table.page_size = per_page
      }).finally(() => {
        this.loading = false
      })
    },
    handleTableSizeChange(val) {
      this.table.page_size = val
      this.getTableData()
    },
    handleTableCurrentChange(val) {
      this.table.current_page = val
      this.getTableData()
    },
    handleTableSelectionChange(val) {
      this.table.selection = val
    }
  }
}
</script>

<style scoped></style>
