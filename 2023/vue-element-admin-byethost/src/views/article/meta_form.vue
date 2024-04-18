<template>
  <div class="app-container article article-meta article-meta-form">
    <el-card data-role="header">
      <span class="el-card-header__title">{{ title }}</span>
    </el-card>
    <MetaFormVue v-loading="form.loading" :data="form.data" @submit="handleFormSubmit" @cancel="handleFormCancel" />
  </div>
</template>
<script>
import MetaFormVue from './components/MetaForm.vue'
import { insertArticleMetaItem, updateArticleMetaItem, selectArticleMetaItem } from '@/api/article'
export default {
  name: 'ArticleMetaForm',
  components: {
    MetaFormVue
  },
  data() {
    return {
      title: '',
      form: {
        loading: false,
        data: {
        },
      },
    }
  },
  created() {
    this.title = this.$route.meta.title
    this.form.data = { type: this.$route.meta.type }
    if (this.$route.params.mid) {
      this.getMetaItemData()
    }
  },
  methods: {
    getMetaItemData() {
      const { mid } = this.$route.params
      if (!mid) return
      this.form.loading = true
      selectArticleMetaItem({ mid }).then(res => {
        const { data } = res
        this.form.data = data
      }).finally(() => {
        this.form.loading = false
      })
    },
    handleFormSubmit(data) {
      if (data.mid) {
        updateArticleMetaItem(data).then(res => {
          this.$message.success('修改成功')
          this.handleFormCancel()
        })
      } else {
        insertArticleMetaItem(data).then(res => {
          this.$message.success('新增成功')
          this.handleFormCancel()
        })
      }
    },
    handleFormCancel() {
      switch (this.$route.meta.type) {
        case 'category':
          return this.$router.push('/article/category')
        case 'tag':
          return this.$router.push('/article/tag')
        default: break
      }
    }
  }
}
</script>

<style></style>
