<template>
  <div class="app-container book book-meta book-meta-form">
    <el-card data-role="header">
      <span class="el-card-header__title">{{ title }}</span>
    </el-card>
    <el-row :gutter="20">
      <el-col :span="18">
        <ContentFormVue ref="content-form" v-loading="form.loading" :data="form.data" @submit="handleFormSubmit" @cancel="handleFormCancel" @reprint="handleFormReprint" />
      </el-col>
      <el-col :span="6">
        <ContentTreeVue ref="content-tree" v-loading="tree.loading" :default-checked-keys="tree.defaultCheckedKeys" :data="tree.data" />
      </el-col>
    </el-row>
  </div>
</template>
<script>
import ContentFormVue from './components/ContentForm.vue'
import ContentTreeVue from '@/components/Content/ContentTree.vue'
import { insertBookContentItem, updateBookContentItem, selectBookContentItem, selectBookContentTree, selectBookMetaTree } from '@/api/book'
import { selectSpiderOrigin } from '@/api/spider'
export default {
  name: 'BookContentForm',
  components: {
    ContentFormVue,
    ContentTreeVue
  },
  data() {
    return {
      title: '',
      form: {
        loading: false,
        data: {},
        type: ''
      },
      tree: {
        loading: false,
        data: [],
        defaultCheckedKeys: [],
      },
    }
  },
  created() {
    console.log(this.$route)
    this.title = this.$route.meta.title
    if (this.$route.params.cid) {
      this.getContentItemData()
    }
    this.getMetaTreeData()
  },
  methods: {
    getData() { },
    getMetaTreeData() {
      this.tree.loading = true
      const { cid } = this.$route.params
      selectBookContentTree({ parent: cid }).then(res => {
        const { data } = res
        this.tree.data = data
      }).finally(() => {
        this.tree.loading = false
      })
    },
    getContentItemData() {
      const { cid } = this.$route.params
      if (!cid) return
      this.form.loading = true
      selectBookContentItem({ cid }).then(res => {
        const { data } = res
        this.form.data = data
        this.tree.defaultCheckedKeys = data.metas.filter(v => v.type == 'category').map(v => v.mid)
      }).finally(() => {
        this.form.loading = false
      })
    },
    handleFormSubmit(data) {
      const mids = this.$refs['meta-tree'].$refs.tree.getCheckedKeys()
      data = { ...data, mids }
      if (data.cid) {
        updateBookContentItem(data).then(res => {
          this.$message.success('修改成功')
          this.handleFormCancel()
        })
      } else {
        insertBookContentItem(data).then(res => {
          this.$message.success('新增成功')
          this.handleFormCancel()
        })
      }
    },
    handleFormCancel() {
      return this.$router.push('/book/content')
    },
    handleFormReprint(data = {}) {
      this.form.loading = true
      selectSpiderOrigin(data.reprint).then(res => {
        this.form.data = {
          ...data, ...{
            text: res.data.markdown,
            reprint: {
              url: res.data.url,
              title: res.data.title,
            }
          }
        }
      }).finally(() => {
        this.form.loading = false
      })
    }
  }
}
</script>

<style></style>
