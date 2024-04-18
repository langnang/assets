<template>
  <div class="app-container book book-meta book-meta-form">
    <el-card data-role="header">
      <span class="el-card-header__title">{{ title }}</span>
    </el-card>
    <MetaFormVue v-loading="form.loading" :data="form.data" @submit="handleFormSubmit" @cancel="handleFormCancel" />
  </div>
</template>
<script>
import MetaFormVue from './components/MetaForm.vue'
import { insertBookMetaItem, updateBookMetaItem, selectBookMetaItem } from '@/api/book'
export default {
  name: 'BookMetaForm',
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
      selectBookMetaItem({ mid }).then(res => {
        const { data } = res
        this.form.data = data
      }).finally(() => {
        this.form.loading = false
      })
    },
    handleFormSubmit(data) {
      if (data.mid) {
        updateBookMetaItem(data).then(res => {
          this.$message.success('修改成功')
          this.handleFormCancel()
        })
      } else {
        insertBookMetaItem(data).then(res => {
          this.$message.success('新增成功')
          this.handleFormCancel()
        })
      }
    },
    handleFormCancel() {
      switch (this.$route.meta.type) {
        case 'category':
          return this.$router.push('/book/category')
        case 'tag':
          return this.$router.push('/book/tag')
        default: break
      }
    }
  }
}
</script>

<style></style>
