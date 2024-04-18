<template>
  <div class="app-container article article-content article-content-table">
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
    <ContentTableVue ref="table" :request="request" />
  </div>
</template>

<script>
import ContentTableVue from './components/ContentTable.vue'
import { deleteArticleContentList, selectArticleContentList } from '@/api/article'
export default {
  name: 'ArticleContentTable',
  components: {
    ContentTableVue
  },
  data() {
    return {
      title: '',
      table: {
      },
      request: {
        select_list: selectArticleContentList
      },
      requestParams: {
        type: ''
      }
    }
  },
  created() {
    this.title = this.$route.meta.title.slice(2) + '列表'
    this.requestParams.type = this.$route.meta.type
  },
  methods: {
    handleCreate() {
      return this.$router.push('/article/create-content')
    },
    handleDelete() {
      if (this.$refs.table.table.selection == 0) return this.$message.warning('请选择删除的数据')
      this.$confirm('此操作将永久删除所选数据, 是否继续?', '提示', {
        confirmButtonText: '确定',
        cancelButtonText: '取消',
        type: 'warning'
      }).then(() => {
        const cids = this.$refs.table.table.selection.map(v => v.cid)
        deleteArticleContentList({ cids }).then(res => {
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
      return this.$router.push('/article/update-content/' + content.cid)
    }
  }
}
</script>

<style></style>
