<template>
  <div class="app-container article article-meta article-meta-table">
    <el-card data-role="header">
      <span class="el-card-header__title"> <i class="el-icon-back" @click="$emit('back')"></i> {{ title }}</span>
      <span class="el-card-header__operate">
        <el-button size="mini" circle type="default" icon="el-icon-search" @click="handleSelect"></el-button>
        <el-button size="mini" circle type="primary" icon="el-icon-plus" @click="handleInsert"></el-button>
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
    <MetaTableVue ref="table" :request="request" :request-params="requestParams" :show-columns="['type', 'children']" @click-children="handleSelectChildren" />
  </div>
</template>
<script>
import MetaTableVue from '@/components/Meta/MetaTable.vue'

export default {
  name: 'MetaTable',
  components: {
    MetaTableVue
  },
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
      title: '',
      table: {},
      request: {
        select_meta_list: () => {
        },
        delete_meta_list: () => {
        }
      },
      requestParams: {
        type: '',
        parent: 0,
      }
    }
  },
  watch: {
    query: {
      handler(newV) {
        this.requestParams.parent = newV.params.parent
        this.$nextTick(() => {
          this.handleSelect()
        })
      },
      immediate: true
    }
  },
  created() {
    this.title = this.query.name + ' ' + this.$route.meta.title.slice(0, 2) + '列表'
    this.requestParams.type = this.$route.meta.type
    this.request = { ...this.query.request }

    // console.log(this.$route.name.toLowerCase())
  },
  methods: {
    handleInsert() {
      this.$emit('toggle', { to: 'form', query: { ...this.query, meta: null }})
    },
    handleDelete() {
      if (this.$refs.table.table.selection === 0) return this.$message.warning('请选择需要删除的数据')
      this.$confirm('此操作将永久删除所选数据, 是否继续?', '提示', {
        confirmButtonText: '确定',
        cancelButtonText: '取消',
        type: 'warning'
      }).then(() => {
        const mids = this.$refs.table.table.selection.map(v => v.mid)
        this.request.delete_meta_list({ mids }).then(res => {
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
      if (!meta) return this.$message.warning('请选择需要修改的数据')
      this.$emit('toggle', { to: 'form', query: { ...this.query, meta, }, })
    },
    handleSelect() {
      this.$refs.table.getTableData()
    },
    handleBack() {
      this.$emit('toggle', { to: -1 })
    },
    handleSelectChildren({ row, $index }) {
      this.$emit('toggle', { to: 'table', query: { ...this.query, meta: row, params: { parent: row.mid }, }, })
    }
  }
}
</script>

<style></style>
