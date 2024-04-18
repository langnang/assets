<template>
  <div class="app-container article article-meta article-meta-table">
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
    <MetaTableVue ref="table" :request="request" :request-params="requestParams" />
  </div>
</template>
<script>
import MetaTableVue from './components/MetaTable.vue'
import { deleteArticleMetaList, selectArticleMetaList } from '@/api/article'
export default {
  name: 'ArticleMetaTable',
  components: {
    MetaTableVue
  },
  data() {
    return {
      title: '',
      table: {
      },
      request: {
        select_list: selectArticleMetaList
      },
      requestParams: {
        type: ''
      }
    }
  },
  created() {
    this.title = this.$route.meta.title.slice(2) + '列表'
    this.requestParams.type = this.$route.meta.type
    // console.log(this.$route.name.toLowerCase())
  },
  methods: {
    handleCreate() {
      switch (this.$route.meta.type) {
        case 'category':
          return this.$router.push('/article/create-category')
        case 'tag':
          return this.$router.push('/article/create-tag')
        default: break
      }
    },
    handleDelete() {
      this.$confirm('此操作将永久删除所选数据, 是否继续?', '提示', {
        confirmButtonText: '确定',
        cancelButtonText: '取消',
        type: 'warning'
      }).then(() => {
        const mids = this.$refs.table.table.selection.map(v => v.mid)
        deleteArticleMetaList({ mids }).then(res => {
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
      const meta = this.$refs.table.table.selection[0]
      console.log('🚀 ~ file: meta_table.vue:59 ~ handleUpdate ~ meta:', meta)
      switch (this.$route.meta.type) {
        case 'category':
          return this.$router.push('/article/update-category/' + meta.mid)
        case 'tag':
          return this.$router.push('/article/update-tag/' + meta.mid)
        default: break
      }
    }
  }
}
</script>

<style></style>
