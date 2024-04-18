<template>
  <div class="app-container book book-content book-content-table">
    <el-card data-role="header">
      <span class="el-card-header__title">{{ title }}</span>
      <span class="el-card-header__operate">
        <el-button size="mini" circle type="default" icon="el-icon-search" @click="$refs.table.getTableData()"></el-button>
        <el-button size="mini" circle type="primary" icon="el-icon-plus" @click="handleCreate"></el-button>
        <el-button size="mini" circle type="warning" icon="el-icon-edit" @click="handleUpdate"></el-button>
        <el-button size="mini" circle type="danger" icon="el-icon-delete" @click="handleDelete"></el-button>
        <el-button size="mini" circle type="primary">
          <font-awesome-icon :icon="['fas', 'upload']" />
        </el-button>
        <el-button size="mini" circle type="primary">
          <font-awesome-icon :icon="['fas', 'download']" />
        </el-button>
      </span>
    </el-card>
    <section v-loading="table.loading">
      <el-card data-role="main">
        <el-table :data="table.data" size="small" border height="calc(100vh - 265px)" @selection-change="handleTableSelectionChange" @row-dblclick="handleTableRowDblClick">
          <el-table-column align="center" show-overflow-tooltip type="selection"></el-table-column>
          <el-table-column align="center" show-overflow-tooltip label="编号" prop="cid" width="120"></el-table-column>
          <el-table-column align="center" show-overflow-tooltip label="标题" prop="title"></el-table-column>
          <el-table-column align="center" show-overflow-tooltip label="标识" prop="slug"></el-table-column>
          <el-table-column align="center" show-overflow-tooltip label="类型" prop="type"></el-table-column>
          <el-table-column align="center" show-overflow-tooltip label="状态" prop="status"></el-table-column>
          <el-table-column align="center" show-overflow-tooltip label="创建时间" prop="created_at" width="133"></el-table-column>
          <el-table-column align="center" show-overflow-tooltip label="更新时间" prop="updated_at" width="133"></el-table-column>
        </el-table>
      </el-card>
      <el-card data-role="footer">
        <el-pagination background :page-sizes="[10, 15, 20, 50, 100]" :page-size="table.page_size" layout="total, sizes, prev, pager, next, jumper" :total="table.total" @size-change="handleTableSizeChange" @current-change="handleTableCurrentChange">
        </el-pagination>
      </el-card>
    </section>
  </div>
</template>

<script>
// import ContentTableVue from './components/ContentTable.vue'
import { deleteBookContentList, selectBookContentList } from '@/api/book'
export default {
  name: 'BookContentTable',
  components: {
    // ContentTableVue
  },
  data() {
    return {
      title: '',
      form: {
        loading: false,
        data: {
          parent: 0
        }
      },
      table: {
        loading: false,
        data: [],
        current_page: 1,
        total: 0,
        page_size: 15,
        selection: []
      },
      request: {
        select_list: selectBookContentList
      },
      requestParams: {
        type: '',
        parent: 0
      }
    }
  },
  created() {
    this.title = this.$route.meta.title.slice(0, 2) + '列表'
    this.requestParams.type = this.$route.meta.type
    this.handleSearch()
  },
  methods: {
    handleSearch() {
      this.table.current_page = 1
      this.handleTableDataSearch()
    },
    handleCreate() {
      return this.$router.push('/book/create-content')
    },
    handleDelete() {
      if (this.$refs.table.table.selection == 0) return this.$message.warning('请选择删除的数据')
      this.$confirm('此操作将永久删除所选数据, 是否继续?', '提示', {
        confirmButtonText: '确定',
        cancelButtonText: '取消',
        type: 'warning'
      }).then(() => {
        const cids = this.$refs.table.table.selection.map(v => v.cid)
        deleteBookContentList({ cids }).then(res => {
          this.$message.success('删除成功!')
          this.$refs.table.getTableData()
        })
      }).catch(() => {
        this.$message({
          type: 'info',
          message: '已取消删除'
        })
      })
    },
    handleUpdate() {
      const content = this.$refs.table.table.selection[0]
      if (!content) return this.$message.warning('请选择修改的数据')
      return this.$router.push('/book/update-content/' + content.cid)
    },
    handleTableDataSearch() {
      this.table.loading = true
      selectBookContentList({ ...this.form.data, page_size: this.table.page_size }, {
        page: this.table.current_page,
      }).then(res => {
        const { data, current_page, total, per_page } = res.data
        this.table.data = data
        this.table.current_page = current_page
        this.table.total = total
        this.table.page_size = per_page
      }).finally(() => {
        this.table.loading = false
      })
    },
    handleTableSizeChange(val) {
      this.table.page_size = val
      this.handleTableDataSearch()
    },
    handleTableCurrentChange(val) {
      this.table.current_page = val
      this.handleTableDataSearch()
    },
    handleTableSelectionChange(val) {
      this.table.selection = val
    },
    handleTableRowDblClick(row, column, event) {
      return this.$router.push('/book/update-content/' + row.cid)
    }
  }
}
</script>

<style></style>
